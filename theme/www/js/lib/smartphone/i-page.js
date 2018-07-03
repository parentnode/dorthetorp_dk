u.bug_force = true;
u.bug_console_only = true;

Util.Objects["page"] = new function() {
	this.init = function(page) {

		// header reference
		page.hN = u.qs("#header");
		page.hN.service = u.qs(".servicenavigation", page.hN);
		u.e.drag(page.hN, page.hN);

		// add logo to navigation
		page.logo = u.ie(page.hN, "a", {"class":"logo", "html":"Circle of life"});
		page.logo.url = '/';

		// content reference
		page.cN = u.qs("#content", page);

		// navigation reference
		page.nN = u.qs("#navigation", page);
		page.nN.list = u.qs("ul", page.nN);
		page.nN = u.ie(page.hN, page.nN);

		// footer reference
		page.fN = u.qs("#footer");
		// move li to #header .servicenavigation
		page.fN.service = u.qs(".servicenavigation", page.fN);



		// global resize handler 
		page.resized = function() {

			// forward resize event to current scene
			if(page.cN && page.cN.scene && typeof(page.cN.scene.resized) == "function") {
				page.cN.scene.resized();
			}

		}

		// global scroll handler 
		page.scrolled = function() {

			// forward scroll event to current scene
			if(page.cN && page.cN.scene && typeof(page.cN.scene.scrolled) == "function") {
				page.cN.scene.scrolled();
			}

		}

		page.orientationchanged = function() {
			if(u.hc(page.bn_nav, "open")) {
				u.as(page.hN, "height", window.innerHeight + "px");
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
				u.e.addEvent(window, "resize", page.resized);
				// set scroll handler
				u.e.addEvent(window, "scroll", page.scrolled);
				// set orientation change handler
				u.e.addEvent(window, "orientationchange", page.orientationchanged);

				this.initNavigation();

				this.resized();

			}
		}


		// initialize navigation elements
		page.initNavigation = function() {

			this.bn_nav = u.qs(".servicenavigation li.navigation", this.hN);
			u.ae(this.bn_nav, "div");
			u.ae(this.bn_nav, "div");
			u.ae(this.bn_nav, "div");

			u.ce(this.bn_nav);
			this.bn_nav.clicked = function(event) {
				if(u.hc(this, "open")) {
					u.rc(this, "open");
					u.as(page.hN, "height", "60px");
					u.as(page.nN, "display", "none");
				}
				else {
					u.ac(this, "open");
					u.as(page.hN, "height", window.innerHeight + "px");
					u.as(page.nN, "display", "block");

					page.nN.start_drag_y = (window.innerHeight - 100) - page.nN.offsetHeight;
					page.nN.end_drag_y = page.nN.offsetHeight;
				}
			}

			u.e.drag(this.nN, [0, (window.innerHeight - 100) - this.nN.offsetHeight, this.hN.offsetWidth, this.nN.offsetHeight], {"strict":false, "elastica":200, "vertical_lock":true});


			var i, node;
			// enable submenus where relevant
			this.hN.nodes = u.qsa("#navigation li,a.logo", page.hN);
			for(i = 0; node = this.hN.nodes[i]; i++) {

				// build first living proof model of CEL clickableElementLink
				u.ce(node, {"type":"link"});


			}

		}


		// ready to start page builing process
		page.ready();

	}
}

u.e.addDOMReadyEvent(u.init);

