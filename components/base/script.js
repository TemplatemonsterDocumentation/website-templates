'use strict';

// Global components list
let components = window.components = {};

components.pageReveal = {
	selector: '.page',
	init: function( nodes ) {
		window.addEventListener( 'components:ready', function () {
			window.dispatchEvent( new Event( 'resize' ) );
			document.documentElement.classList.add( 'components-ready' );

			nodes.forEach( function( node ) {
				node.classList.add( 'page-revealed' );
			});
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

components.header = {
	selector: '.header',
	styles: './components/header/header.css',
	script: './components/scroll-rate/scroll-rate.min.js',
	init: function ( nodes ) {
		nodes.forEach( function ( node ) {
			let
				rateHandler = new ScrollRate({
					root: node,
					nodes: node.querySelectorAll( '.header-inner' ),
					offset: 0,
					nodesCb: function ( node ) {
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
		'./components/zemez-navbar/zemez-navbar.js',
		'./components/zemez-navbar/navigation.js'
	],
	dependencies: 'main',
	init: function ( nodes ) {
		nodes.forEach( function ( node ) {
			let nav = node.querySelector( '.navbar-navigation' );
			nav = createNavigation( nav, window.main._navigation );

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

			function hashHandler () {
				let
					oldItems = nav.querySelectorAll( `.navbar-navigation-item.active` ),
					newSections = nav.querySelectorAll( `.navbar-navigation-item[data-href="#section=${window.main._section}"]` ),
					newAnchors = nav.querySelectorAll( `.navbar-navigation-item[data-href*="section=${window.main._section}"][data-href*="anchor=${window.main._anchor}"]` );

				oldItems.forEach( function ( node ) {
					node.classList.remove( 'active', 'opened' );
				});

				newSections.forEach( function ( node ) {
					node.classList.add( 'active', 'opened' );
				});

				newAnchors.forEach( function ( node ) {
					node.classList.add( 'active' );
				});
			}

			window.addEventListener( 'hashchange', hashHandler );
			window.addEventListener( 'silenthashchange', hashHandler );
		});
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

components.highlight = {
	selector: '[data-highlight]',
	styles: './components/highlight/highlight.css',
	script: './components/highlight/highlight.pack.js',
	init: function ( nodes ) {
		nodes.forEach( function ( node ) {
			let lang = node.getAttribute( 'data-highlight' );
			node.innerHTML = hljs.highlight( lang, node.innerText ).value;
		});
	}
};

components.main = {
	selector: '#main',
	script: [
		'./components/jquery/jquery-3.4.1.min.js',
		'./components/showdown/showdown.min.js',
		'./components/showdown/extensions.js',
		'./components/scroll-rate/scroll-rate.min.js',
		'./components/base/main.js'
	],
	styles: './components/showdown/showdown.css',
	init: function ( nodes ) {
		window.main = new Main({
			node: nodes[0],
			converter: {
				extensions: [ 'zemez-doc-extension' ]
			}
		});

		return window.main.promise;
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


// Main
window.addEventListener( 'DOMContentLoaded', function () {
	window.core = new ZemezCore({
		debug: true,
		components: components,
		observeDOM: false
	});
});
