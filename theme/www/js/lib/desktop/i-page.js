u.bug_console_only = true;

Util.Modules["page"] = new function() {
	this.init = function(page) {

		// show parentnode comment in console
		u.bug_force = true;
		u.bug("This site is built using the combined powers of body, mind and spirit. Well, and also Manipulator, Janitor and Detector");
		u.bug("We're a good karma web agency - Let's work together to create a better future. Visit https://parentnode.dk for more information");
		u.bug_force = false;


		// header reference
		page.hN = u.qs("#header");
		page.hN.service = u.qs(".servicenavigation", page.hN);

		// content reference
		page.cN = u.qs("#content", page);

		// navigation reference
		page.nN = u.qs("#navigation", page);
		page.nN.list = u.qs("ul", page.nN);
//		page.nN = page.insertBefore(page.nN, page.cN);
		page.nN = u.ie(page.cN, page.nN);

		// footer reference
		page.fN = u.qs("#footer");



		// global resize handler 
		page.resized = function() {

			this.calc_width = u.browserW();
			if(this.calc_width > 960) {
				u.ac(this, "fixed");
			}
			else {
				u.rc(this, "fixed");
			}

			// forward resize event to current scene
			if(this.cN && this.cN.scene) {

				if(typeof(this.cN.scene.resized) == "function") {
					this.cN.scene.resized();
				}

			}

		}

		// global scroll handler 
		page.scrolled = function() {

			// forward scroll event to current scene
			if(this.cN && this.cN.scene && typeof(this.cN.scene.scrolled) == "function") {
				this.cN.scene.scrolled();
			}

		}



		// Page is ready - called from several places, evaluates when page is ready to be shown
		page.ready = function() {
//				u.bug("page ready")

			// page is ready to be shown - only initalize if not already shown
			if(!u.hc(this, "ready")) {

				// page is ready
				u.addClass(this, "ready");

				// set resize handler
				u.e.addWindowEvent(this, "resize", this.resized);
				// set scroll handler
				u.e.addWindowEvent(this, "scroll", this.scrolled);

				this.resized();

			}
		}


		// ready to start page builing process
		page.ready();
	}
}

u.e.addDOMReadyEvent(u.init);

