var Util = new Object();

Util.over = function(element) {
	if(!element.img) {
		element.img = element.firstChild;

		if(element.img.src.match(/out/g)) {
			element.onmouseout = function() {
				this.img.src = this.img.src.replace(/over/g, "out");
			}
		}
	}
	element.img.src = element.img.src.replace(/out/g, "over");
}

Util.otliam = function(name, domain){
	document.write('<a href="mailto:'+name+'@'+domain+'">'+name+'@'+domain+'</a>');
}