function ScrollRate ( opts ) {
	window.tmp = opts;
	this.root = opts.root;
	this.nodes = opts.nodes;
	this.offset = typeof( opts.offset ) === 'number' ? opts.offset : .5;
	this.cb = opts.cb;

	this.rect = null;
	this.progress = null;
	this.distance = null;
	this.progressRate = null;
	this.distanceRate = null;
	this.state = null;
	this.root.scrollRate = this;
	this.handler = this.update.bind( this );

	this.observer = new IntersectionObserver( ( entries ) => {
		entries.forEach( ( entry ) => {
			this.handler();

			if ( entry.isIntersecting ) {
				document.addEventListener( 'scroll', this.handler );
				window.addEventListener( 'resize', this.handler );
			} else {
				document.removeEventListener( 'scroll', this.handler );
				window.removeEventListener( 'resize', this.handler );
			}
		});
	});

	this.start();
}

ScrollRate.prototype.start = function () {
	this.observer.observe( this.root );
	this.state = true;
};

ScrollRate.prototype.stop = function () {
	this.observer.unobserve( this.root );
	document.removeEventListener( 'scroll', this.handler );
	window.removeEventListener( 'resize', this.handler );
	this.state = false;
};

ScrollRate.prototype.update = function () {
	this.rect = this.root.getBoundingClientRect();

	if ( this.rect.top > window.innerHeight * this.offset ) {
		this.progress = 0;
	} else if ( this.rect.top <= window.innerHeight * this.offset && this.rect.bottom >= window.innerHeight * this.offset ) {
		this.progress = Math.abs( this.rect.top - window.innerHeight * this.offset );
	} else {
		this.progress = this.rect.height;
	}

	this.distance = window.innerHeight * this.offset - ( this.rect.top + this.rect.height/2 );
	this.progressRate = this.progress / this.rect.height;
	this.distanceRate = this.distance / window.innerHeight;

	this.nodes.forEach( ( node ) => {
		this.cb.call( this, node );
	});
};
