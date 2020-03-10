'use strict';

// Global components list
let components = window.components = {};

components.pageReveal = {
	selector: '.page',
	init: function( nodes ) {
		window.addEventListener( 'components:ready', function () {
			window.dispatchEvent( new Event( 'resize' ) );
			document.documentElement.classList.add( 'components-ready' );

			//{DEL DIST BUILDER}
			console.log( `%c[components]: ready`, 'color: orange; font-weight: 900;' );
			//{DEL}

			nodes.forEach( function( node ) {
				setTimeout( function() {
					node.classList.add( 'page-revealed' );
				}, 500 );
			});
		}, { once: true } );

		window.addEventListener( 'components:stylesReady', function () {
			//{DEL DIST BUILDER}
			console.log( `%c[components]: stylesReady`, 'color: orange; font-weight: 900;' );
			//{DEL}
		}, { once: true } );
	}
};

components.grid = {
	selector: '.container, .container-fluid, .row, [class*="col-"]',
	styles: './components/grid/grid.css'
};

components.section = {
	selector: 'section',
	styles: './components/section/section.css'
};

components.button = {
	selector: '.btn',
	styles: './components/button/button.css'
};

components.link = {
	selector: '.link',
	styles: './components/link/link.css'
};

components.currentDevice = {
	selector: 'html',
	script: './components/current-device/current-device.min.js'
};

components.header = {
	selector: '.header',
	styles: './components/header/header.css',
	script: './components/header/scroll-rate.js',
	init: function ( nodes ) {
		nodes.forEach( function ( node ) {
			let
				rateHandler = new ScrollRate({
					root: node,
					nodes: node.querySelectorAll( '.header-inner' ),
					offset: 0,
					cb: function ( node ) {
						node.style.fontSize = ( 56 - ( 56 - 24 ) * this.progressRate ) + 'px';
						node.style.height = ( 256 - this.progress ) + 'px';
					}
				}),
				resizeHandler = function () {
					if ( window.innerWidth >= 1400 ) {
						if ( !rateHandler.state ) rateHandler.start();
					} else {
						if ( rateHandler.state ) {
							rateHandler.stop();
							rateHandler.nodes.forEach( function ( node ) {
								node.style.fontSize = null;
								node.style.height = null;
							});
						}
					}
				};

			resizeHandler();
			window.addEventListener( 'resize', resizeHandler );
		});
	}
};

components.zemezNavbar = {
	selector: '.zemez-navbar',
	styles: [
		'./components/font-awesome/font-awesome.css',
		'./components/zemez-navbar/zemez-navbar.css'
	],
	script: [
		'./components/jquery/jquery-3.4.1.min.js',
		'./components/current-device/current-device.min.js',
		'./components/zemez-navbar/zemez-navbar.js'
	],
	init: function ( nodes ) {
		nodes.forEach( function ( node ) {
			new ZemezNavbar( node, {
				stickUpClone: false,
				anchorNav: false,
				anchorNavEasing: 'linear',
				autoHeight: false,
				responsive: {
					0: {
						layout: 'zemez-navbar-fixed',
						deviceLayout: 'zemez-navbar-fixed',
						focusOnHover: false,
						stickUp: false
					},
					992: {
						layout: 'zemez-navbar-fixed',
						deviceLayout: 'zemez-navbar-fixed',
						focusOnHover: false,
						stickUp: false
					}
				}
			});
		})
	}
};

components.multiswitch = {
	selector: '[data-multi-switch]',
	styles: './components/multiswitch/multiswitch.css',
	script: [
		'./components/current-device/current-device.min.js',
		'./components/multiswitch/multiswitch.js'
	],
	dependencies: 'zemezNavbar',
	init: function ( nodes ) {
		let click = device.ios() ? 'touchstart' : 'click';

		nodes.forEach( function ( node ) {
			if ( node.tagName === 'A' ) {
				node.addEventListener( click, function ( event ) {
					event.preventDefault();
				});
			}

			MultiSwitch( Object.assign( {
				node: node,
				event: click,
			}, parseJSON( node.getAttribute( 'data-multi-switch' ) ) ) );
		});
	}
};

components.navbarSwitch = {
	selector: '[data-navbar-switch]',
	script: './components/multiswitch/multiswitch.js',
	dependencies: 'currentDevice',
	init: function ( nodes ) {
		nodes.forEach( function ( node ) {
			let
				click = device.ios() ? 'touchstart' : 'click',
				resizeHandler = function () {
					if ( window.matchMedia( '(max-width: 767px)' ).matches ) {
						this.removeHandlers();
						this.scope = document.querySelectorAll( '.zemez-navbar' );
						this.assignHandlers();
						this.changeState( false );
					} else {
						this.removeHandlers();
						this.scope = null;
						this.assignHandlers();
						this.changeState( true );
					}
				},
				mSwitch = MultiSwitch({
					node: node,
					event: click,
					targets: 'html',
					class:   'zemez-navbar-active'
				});

			resizeHandler.call( mSwitch );
			window.addEventListener( 'resize', resizeHandler.bind( mSwitch ) );
		});
	}
};

components.icon = {
	selector: '.icon',
	styles: './components/icon/icon.css'
};

components.logo = {
	selector: '.logo',
	styles: './components/logo/logo.css'
};

components.badge = {
	selector: '.badge',
	styles: './components/badge/badge.css'
};

components.rights = {
	selector: '.rights',
	styles: './components/rights/rights.css'
};

components.list = {
	selector: '.list',
	styles: './components/list/list.css'
};

components.alert = {
	selector: '.alert',
	styles: './components/alert/alert.css'
};

components.toTop = {
	selector: 'html',
	styles: [
		'./components/to-top/to-top.css',
		'./components/font-awesome/font-awesome.css'
	],
	script: './components/jquery/jquery-3.4.1.min.js',
	init: function () {
		let node = document.createElement( 'div' );
		node.className = 'to-top fa-arrow-up';
		document.body.appendChild( node );

		node.addEventListener( 'mousedown', function () {
			this.classList.add( 'active' );

			$( 'html, body' ).stop().animate( { scrollTop:0 }, 500, 'swing', (function () {
				this.classList.remove( 'active' );
			}).bind( this ));
		});

		document.addEventListener( 'scroll', function () {
			if ( window.scrollY > window.innerHeight ) node.classList.add( 'show' );
			else node.classList.remove( 'show' );
		});
	}
};

components.anchorLink = {
	selector: '[data-anchor-link]',
	script: './components/jquery/jquery-3.4.1.min.js',
	init: function ( nodes ) {
		nodes.forEach( function ( node ) {
			let
				anchor = document.querySelector( node.getAttribute( 'href' ) ),
				offset = 50;

			node.addEventListener( 'click', ( event ) => {
				event.preventDefault();
				let top = $(anchor).offset().top - offset;
				$( 'html, body' ).stop().animate( { scrollTop: top }, 500, 'swing' );
			});
		});
	}
};

components.fonts = {
	selector: 'html',
	styles: 'https://fonts.googleapis.com/css?family=Oswald:300,400,700%7CRoboto+Mono%7CRoboto:300,400,500,700'
};

components.fontAwesome = {
	selector: '[class*="fa-"]',
	styles: './components/font-awesome/font-awesome.css'
};

components.mdi = {
	selector: '[class*="mdi-"]',
	styles: './components/mdi/mdi.css'
};

// TODO Scroll after md loaded
// components.linkAnchor = {
// 	selector: '[data-anchor]',
// 	init: function ( nodes ) {
// 		let observer = new IntersectionObserver( function ( entries ) {
// 			entries.forEach( function ( entry ) {
// 				if ( entry.isIntersecting ) {
// 					entry.target.anchorLink.classList.add( 'active' );
// 				} else {
// 					entry.target.anchorLink.classList.remove( 'active' );
// 				}
// 			});
// 		}, {
// 			rootMargin: '-200px 0px'
// 		});
//
// 		nodes.forEach( function ( node ) {
// 			let
// 				selector = node.getAttribute( 'href' ).replace( /^.+#/, '' ),
// 				target = document.querySelector( '#'+ selector );
//
// 			if ( target ) {
// 				target.anchorLink = node;
//
// 				node.addEventListener( 'click', function ( event ) {
// 					let
// 						currHref = window.location.href.replace( /#.+$/, '' ),
// 						linkHref = event.target.href.replace( /#.+$/, '' );
//
// 					if ( ( new RegExp( linkHref ) ).test( currHref ) ) {
// 						event.preventDefault();
// 						history.replaceState({}, '', event.target.href);
// 						window.dispatchEvent( new Event( 'hashchange' ) );
// 					}
// 				});
//
// 				observer.observe( target );
// 			}
// 		});
// 	}
// };

// components.scrollToAnchor = {
// 	selector: 'html',
// 	script: './components/jquery/jquery-3.4.1.min.js',
// 	init: function () {
// 		let hashHandler = function () {
// 			if ( window.location.hash ) {
// 				let node = document.querySelector( window.location.hash );
//
// 				if ( node ) {
// 					let
// 						rect = node.getBoundingClientRect(),
// 						dest = window.scrollY + rect.top - 80;
//
// 					$( 'html, body' ).stop().animate( { scrollTop: dest }, 500, 'swing' );
// 				}
// 			}
// 		};
//
// 		window.addEventListener( 'components:ready', hashHandler );
// 		window.addEventListener( 'hashchange', hashHandler );
// 	}
// };

// components/markdown/documentation.md

components.main = {
	selector: '#main',
	script: [
		'./components/jquery/jquery-3.4.1.min.js',
		'./components/showdown/showdown.min.js',
		'./components/showdown/extensions.js'
	],
	styles: './components/showdown/showdown.css',
	init: function ( nodes ) {
		nodes.forEach( function ( node ) {
			let
				converter = new showdown.Converter({
					extensions: [ 'zemez-doc-extension' ]
				}),
				config = window.pageConfig = {
					section: null,
					anchor: null
				};

			function scrollToElememt( node ) {
				if ( node ) {
					let
						rect = node.getBoundingClientRect(),
						dest = window.scrollY + rect.top - 80;

					$( 'html, body' ).stop().animate( { scrollTop: dest }, 500, 'swing' );
				}
			}

			function updPage ( config ) {
				if ( config.section !== window.pageConfig.section ) {
					window.pageConfig.section = config.section;
					loadMarkdown( `components/markdown/${window.pageConfig.section}.md`, function ( text ) {
						node.innerHTML = converter.makeHtml( text );

						if ( config.anchor !== window.pageConfig.anchor ) {
							window.pageConfig.anchor = config.anchor;

							if ( window.pageConfig.anchor ) {
								window.scrollTo( 0, node.querySelector( '#'+ window.pageConfig.anchor ).getBoundingClientRect().top - 80 );
							} else {
								window.scrollTo( 0, 0 );
							}
						}
					});
				} else {
					if ( config.anchor !== window.pageConfig.anchor ) {
						window.pageConfig.anchor = config.anchor;

						if ( window.pageConfig.anchor ) {
							scrollToElememt( node.querySelector( '#'+ window.pageConfig.anchor ) );
						} else {
							scrollToElememt( node );
						}
					}
				}
			}

			function onHashchange () {
				let hash = location.hash.substring( 1 );

				if ( hash.length ) {
					let config = parseJSON('{"' + decodeURI( hash ).replace(/"/g, '\\"').replace(/&/g, '","').replace(/=/g,'":"') + '"}');
					updPage( config );
				}
			}

			function loadMarkdown ( file, cb ) {
				let request = new XMLHttpRequest();
				request.open( 'GET', file, true );
				request.send( null );
				request.onreadystatechange = function () {
					if ( request.readyState === 4 && request.status === 200 ) {
						cb( request.responseText );
					}
				};
			}

			converter.setFlavor( 'github' );

			if ( location.hash ) {
				onHashchange();
			} else {
				updPage({ section: 'preparation' });
			}

			window.addEventListener( 'hashchange', onHashchange );
		});
	}
};

/**
 * Wrapper to eliminate json errors
 * @param {string} str - JSON string
 * @returns {object} - parsed or empty object
 */
function parseJSON ( str ) {
	try {
		if ( str )  return JSON.parse( str );
		else return {};
	} catch ( error ) {
		//{DEL DIST BUILDER}
		console.warn( error );
		//{DEL}
		return {};
	}
}

/**
 * Returns version of IE or false, if browser is not Internet Explorer
 * @see {@link https://gist.github.com/gaboratorium/25f08b76eb82b1e7b91b01a0448f8b1d}
 * @returns {number|boolean}
 */
function detectIE () {
	let
		ua = window.navigator.userAgent,
		msie = ua.indexOf( 'MSIE ' ),
		trident = ua.indexOf( 'Trident/' ),
		edge = ua.indexOf( 'Edge/' );

	if ( msie > 0 ) {
		return parseInt( ua.substring( msie + 5, ua.indexOf( '.', msie ) ), 10 );
	}

	if ( trident > 0 ) {
		let rv = ua.indexOf( 'rv:' );
		return parseInt( ua.substring( rv + 3, ua.indexOf( '.', rv ) ), 10 );
	}

	if ( edge > 0 ) {
		return parseInt( ua.substring( edge + 5, ua.indexOf( '.', edge ) ), 10 );
	}

	return false;
}

// Main
window.addEventListener( 'DOMContentLoaded', function () {
	new ZemezCore({
		components,
		onError: function ( error ) {
			if ( detectIE() < 12 ) {
				let
					script = document.createElement( 'script' );
					script.src = './components/base/support.js';

				document.querySelector( 'head' ).appendChild( script );
			}

			throw new Error( error );
		}
	});
});
