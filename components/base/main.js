( function () {
	/**
	 * Определение тега объекта
	 * @param {*} data - любой тип данных
	 * @returns {string} - тэг
	 */
	function objectTag ( data ) {
		return Object.prototype.toString.call( data ).slice( 8, -1 );
	}

	/**
	 * Слияние обьектов
	 * @param {Object} source - исходный обьект
	 * @param {Object} merged - слияемый обьект
	 * @return {Object} - конечный обьект
	 */
	function merge( source, merged ) {
		for ( let key in merged ) {
			if ( objectTag( merged[ key ] ) === 'Object' ) {
				if ( typeof( source[ key ] ) !== 'object' ) source[ key ] = {};
				source[ key ] = merge( source[ key ], merged[ key ] );
			} else {
				source[ key ] = merged[ key ];
			}
		}

		return source;
	}

	function path () {
		return Array.from( arguments ).join( '/' );
	}

	/**
	 * Главный управляющий класс
	 * @param {object} opts - параметры
	 * @param {string} opts.root - имя корневой папки с содержимым
	 * @param {string} opts.defaultLang - язык по умолчанию
	 * @param {string} opts.startSection - имя файла начальной секции
	 * @param {boolean} opts.logs - вывод логов в консоль
	 * @param {object} opts.converter - параметры markdown конвертера
	 * @constructor
	 */
	function Main ( opts ) {
		// Проверка экземпляра opts.node, должен быть элементом
		if ( !( opts.node instanceof Element ) ) {
			throw new Error( 'Main.node must be an instance of Element' );
		}

		// Слияние экземпляра со значениями по умолчанию и входными параметрами
		merge( this, Main.defaults );
		merge( this, opts );

		// Создание приватных свойств
		Object.defineProperties( this, {
			'_hash': { writable: true, enumerable: false },
			'_converter': { writable: true, enumerable: false },
			'_lang': { writable: true, enumerable: false },
			'_navigation': { writable: true, enumerable: false },
			'_startSection': { writable: true, enumerable: false },
			'_section': { writable: true, enumerable: false },
			'_anchor': { writable: true, enumerable: false },
		});

		// Получение локализации и дальнейшая работа
		this.promise = this._loadFile( path( this.root, 'lang.json' ) ).then( ( str ) => {
			let tmp = JSON.parse( str );

			// Проверка lang в локальном хранилище и его установка
			this._lang = localStorage.getItem( 'lang' );

			if ( !this._lang ) {
				this._lang = tmp.default;
				localStorage.setItem( 'lang', tmp.default );
			}

			document.documentElement.setAttribute( 'lang', this._lang );
			this._startSection = tmp.lang[ this._lang ].startSection;
			return this._loadFile( path( this.root, this._lang, 'navigation.json' ) );
		}).then( ( str ) => {
			this._navigation = JSON.parse( str );

			// Создание markdown конвертера с применением полученных параметров this.converter
			this._converter = new showdown.Converter( this.converter );
			this._converter.setFlavor( 'github' );

			// Обработка первой загрузки
			this.hashHandler();
			if ( !this._hash ) {
				this.updSection( this._startSection, () => {
					this.hashWrite( { section: this._section }, true );
					this.initHashAnchors();
				});
			}

			// Добавление обработчика события hashchange
			window.addEventListener( 'hashchange', this.hashHandler.bind( this ) );
			return Promise.resolve();
		});
	}

	// Параметры по умолчанию
	Main.defaults = {
		root: 'content',
		logs: false,
		converter: {}
	};

	/**
	 * Загрузка файла по заданному пути и обработка его содержимого с помощью функции обратного вызова.
	 * @param {string} file - путь к файлу
	 * @param {function} [cb] - функция обратного вызова, которая получает строку содержимого файла
	 */
	Main.prototype._loadFile = function ( file, cb ) {
		return new Promise ( function ( resolve ) {
			let request = new XMLHttpRequest();
			request.open( 'GET', file, true );
			request.send( null );
			request.onreadystatechange = () => {
				if ( request.readyState === 4 && request.status === 200 ) {
					if ( cb instanceof Function ) cb( request.responseText );
					resolve( request.responseText );
				}
			};
		});
	};

	/**
	 * Parse URL Hash parameters. Write result object into _hash
	 */
	Main.prototype.hashParse = function () {
		let params = location.hash.substring( 1 );

		try {
			this._hash = JSON.parse(
				'{"' + decodeURI( params )
				.replace( /"/g, '\\"' )
				.replace( /&/g, '","' )
				.replace( /=/g,'":"' ) + '"}'
			);
		} catch ( error ) {}
	};

	/**
	 * Write URL Hash parameters
	 * @param {object} obj
	 * @param {boolean} silent
	 */
	Main.prototype.hashWrite = function ( obj, silent ) {
		let hash = '#' + Object.keys( obj ).map( ( key ) => {
			return key +'='+ encodeURIComponent( obj[ key ].toString() );
		}).join( '&' );

		if ( silent ) {
			window.history.replaceState( '', document.title, window.location.href.replace( location.hash, '' ) + hash );
			window.dispatchEvent( new Event( 'silenthashchange' ) );
		} else {
			location.hash = hash;
		}
	};


	/**
	 * Download file by section name, perform content conversion and initialize components
	 * @param {string} [section] - section name (optional, because the section name can be obtained earlier using the 'hashParse' method)
	 * @param {Function} [cb]- callback function that is called when the section file is loaded
	 */
	Main.prototype.updSection = function ( section, cb ) {
		section = typeof( section ) === 'string' ? section : this._hash.section;

		if ( section ) {
			this._section = section;
			this._loadFile( path( this.root, this._lang, this._section + '.md' ), ( text ) => {
				this.node.innerHTML = this._converter.makeHtml( text );
				this.hashWrite( { section: this._section }, true );
				core.initComponents( this.node, () => {
					if ( cb instanceof Function ) cb.call( this );
				});
			});
		}
	};

	/**
	 * Update anchor variable and scroll to anchor node
	 * @param {string} [anchor] - anchor name (optional, because the anchor name can be obtained earlier using the 'hashParse' method)
	 * @param {Function} [cb]- callback function that is called when the scrolling is end
	 */
	Main.prototype.updAnchor = function ( anchor, cb ) {
		anchor = typeof( anchor ) === 'string' ? anchor : this._hash.anchor;

		if ( anchor ) {
			this._anchor = anchor;
			let node = this.node.querySelector( '#'+ this._anchor );
			this.hashWrite( { section: this._section, anchor: this._anchor }, true );

			if ( this.node ) {
				this.scrollTo( node, cb );
			} else {
				this.scrollTo( this.node, cb );
			}
		}
	};

	/**
	 * Check the hash and update the page if it is not empty
	 */
	Main.prototype.hashHandler = function () {
		this.hashParse();
		if ( this._hash ) {
			if ( this._section !== this._hash.section ) {
				this.updSection( null, () => {
					this.initHashAnchors();

					if ( this._hash.anchor && this._anchor !== this._hash.anchor ) {
						this.updAnchor();
					}
				});
			} else if ( this._anchor !== this._hash.anchor ) {
				this.updAnchor();
			}
		}
	};

	Main.prototype.initHashAnchors = function () {
		let anchors = this.node.querySelectorAll( '[id]' );

		if ( anchors.length ) {
			anchors.forEach( ( node ) => {
				new ScrollRate({
					root: node,
					offset: .15,
					onProgressEnter: () => {
						this._anchor = node.id;
						this.hashWrite( { section: this._section, anchor: this._anchor }, true );
					}
				});
			});
		}
	};

	Main.prototype.scrollTo = function ( node, cb ) {
		if ( node ) {
			let
				rect = node.getBoundingClientRect(),
				dest = window.scrollY + rect.top - 80;

			$( 'html, body' ).stop().animate( { scrollTop: dest }, 500, 'swing', cb );
		}
	};


	if ( typeof ( window.$ ) === 'undefined' ) {
		throw new Error( 'jQuery is required for Main' );
	}

	if ( typeof ( window.ZemezCore ) === 'undefined' ) {
		throw new Error( 'ZemezCore is required for Main' );
	}

	if ( typeof ( window.ScrollRate ) === 'undefined' ) {
		throw new Error( 'ScrollRate is required for Main' );
	}

	if ( typeof ( window.showdown ) === 'undefined' ) {
		throw new Error( 'showdown is required for Main (https://github.com/showdownjs/showdown)' );
	}

	if ( typeof ( window.Main ) === 'undefined' ) {
		window.Main = Main;
	} else {
		throw new Error( 'window.Main is already occupied' );
	}
})();
