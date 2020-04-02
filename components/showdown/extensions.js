( function ( extension ) {
	if ( typeof showdown !== 'undefined' ) {
		// global (browser or nodejs global)
		extension( showdown );
	} else if ( typeof define === 'function' && define.amd ) {
		// AMD
		define( [ 'showdown' ], extension );
	} else if ( typeof exports === 'object' ) {
		// Node, CommonJS-like
		module.exports = extension( require( 'showdown' ) );
	} else {
		// showdown was not found so we throw
		throw Error( 'Could not find showdown library' );
	}
}( function ( showdown ) {
	// loading extension into showdown
	showdown.extension( 'zemez-doc-extension', function () {
		var notifications = {
			type: 'lang',
			filter: function ( text, converter ) {
				return text.replace( /^\s*\{\{alert-(.*)\}\} (.*)$/gm, function ( match, p1, p2 ) {
					return `<div class='alert alert-${p1}'>${converter.makeHtml( p2)}</div>`;
				});
			}
		};

		var fontAwesome = {
			type: 'lang',
			regex: /@fa-([\w\d]*)/g,
			replace: '<span class="fa-$1"></span>'
		};

		var highlight = {
			type: 'output',
			filter: function ( text ) {
				return text.replace( /<pre><code\b([^>]*)>((.|\s)+?)?<\/pre>/g, function ( match, p1, p2 ) {
					var lang = ( p1.match( /class=\"([^ \"]+)/ ) || [] )[1];
					return '<pre data-highlight="'+ lang +'">'+ p2 +'</pre>';
				});
			}
		};

		return [ notifications, fontAwesome, highlight ];
	});
}));
