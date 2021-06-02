( function () {
	/**
	 * @desc Предварительная обработка навигации, добавляет циклические ссылки и типы элементов навигации
	 * @param {object} item - элемент навигации
	 * @param {string} [item.type] - тип элемента
	 * @param {string} [item.title] - заголовок элемента
	 * @param {string} [item.child] - потомок элемента
	 * @param {object} [parent] - родительский элемент для добавления ссылки
	 * @return {object} - оработанный обьект навигации
	 */
	function procNavigation ( item, parent ) {
		if ( item instanceof Array ) throw new Error( 'navigation element can not be an Array' );
		if ( parent ) item.parent = parent;

		switch ( item.type ) {
			case 'root':
			case 'dropdown':
				if ( !item.child ) {
					throw new Error( '"child" is required parameter for a navigation elements of type: root, dropdown, megamenu, column, block' );
				}

				item.child.forEach( function ( child ) {
					procNavigation( child, item );
				});

				break;

			case undefined:
				if ( !item.title ) {
					throw new Error( '"title" is required parameter for a navigation element of type "item"' );
				}

				if ( item.child ) {
					if ( item.child instanceof Array ) {
						throw new Error( 'navigation element of type "item" can not contain Array as child' );
					} else {
						procNavigation( item.child, item );
					}
				}

				switch( item.parent.type ) {
					case 'root':
						item.type = 'root-item';
						break;
					case 'dropdown':
						item.type = 'dropdown-item';
						break;
					default:
						item.type = 'item';
						break;
				}

				break;
		}

		return item;
	}

	/**
	 * Генерация html разметки навигации из обьекта
	 * @param {object} obj - обработанный элемент навигации
	 * @return {string} - строка html разметки
	 */
	function generateNavigationMarkup ( obj ) {
		let markup = '';

		( function gen ( item ) {
			switch( item.type ) {
				case 'root':
					markup += '<ul class="navbar-navigation zemez-navbar-nav">';
					if ( item.child ) item.child.forEach( gen );
					markup += '</ul>';
					break;

				case 'dropdown':
					markup += '<ul class="navbar-navigation-dropdown zemez-navbar-dropdown">';
					if ( item.child ) item.child.forEach( gen );
					markup += '</ul>';
					break;

				case 'root-item':
				case 'dropdown-item':
					markup += '<li class="navbar-navigation-item" data-href="'+ item.link +'">';
					markup += '<a class="navbar-navigation-link" href="'+ item.link +'">'+ item.title  + ( item.badge ? ' '+ item.badge : '' ) +'</a>';
					if ( item.child ) gen( item.child );
					markup += '</li>';
					break;
			}
		})( obj );

		return markup;
	}

	/**
	 * Создание навигации
	 * @param {Element} node - элемент который будет заменен новым
	 * @param {object} obj - обьект навигации
	 * @return {Promise} - промис с выполнением генерации
	 */
	function createNavigation ( node, obj ) {
		procNavigation( obj );
		node.innerHTML = generateNavigationMarkup( obj );
		let newNode = node.children[0];
		node.parentNode.replaceChild( newNode, node );
		return newNode;
	}

	if ( !window.createNavigation ) {
		window.createNavigation = createNavigation;
	} else {
		throw new Error( 'createNavigation variable is already occupied' );
	}
})();
