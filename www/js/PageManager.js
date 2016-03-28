/**
 * PageManager.js
 *
 * PageManager handles all transitions between pages and defines animations that static elements
 * may do.
 */

//noinspection ThisExpressionReferencesGlobalObjectJS
(function(window, document, undefined) {
	window.PageManager = {
		/**
		 * Sets the navigation bar to an open state.
		 *
		 * @param {!string} navBarText
		 * @param {!Element} navMobileTitleEl
		 * @param {!Element} navBarEl
		 */
		openNav: function (navBarText, navMobileTitleEl, navBarEl) {
			navMobileTitleEl.innerHTML = navBarText;
			if (navBarEl.classList.contains('closed')) {
				navBarEl.classList.remove('closed');
			}
		},

		/**
		 * Sets the navigation bar to a closed state.
		 *
		 * @param {!Element} navBarEl
		 */
		closeNav: function (navBarEl) {
			navBarEl.classList.add('closed');
		},

		clearCurrentContent: function (contentEl) {
			while (!!contentEl.children.length) {
				contentEl.removeChild(contentEl.firstChild);
			}
		},

		/**
		 * Opens the specified page url and animates it into the dom
		 *
		 * @param {!string} contentPageUrl
		 * @param {!Element} errorEl
		 * @param {!Element} contentEl
		 * @param {?function} completedCallback
		 */
		openPage: function ( contentPageUrl, errorEl, contentEl, completedCallback) {
			var didAnimationComplete = false;
			var didAjaxLoadComplete = false;
			var newContentEl = errorEl;

			function completeAnimationIn() {
				if (!didAnimationComplete || !didAjaxLoadComplete) {
					return;
				}

				newContentEl.classList.add('initial-frame');
				contentEl.appendChild(newContentEl);
				// Flush styles before applying new frame
				//noinspection BadExpressionStatementJS
				getComputedStyle(newContentEl).opacity;

				newContentEl.classList.remove('initial-frame');

				if (!!completedCallback) {
					completedCallback();
				}
			}

			// Start ajax
			$.ajax(contentPageUrl, {
				data: {
					'fmt': 'json'
				},
				dataType: 'json',
				success: function (data) {
					newContentEl = document.createElement('div');
					newContentEl.innerHTML = data.body;
				},
				complete: function () {
					didAjaxLoadComplete = true;
					completeAnimationIn();
				}
			});

			// Start animations
			this.clearCurrentContent(contentEl);
			didAnimationComplete = true;
			completeAnimationIn();
		},

		/**
		 * Binds relevant links to a handling onclick function that loads and animates between pages
		 * internal to the site.
		 *
		 * @param {!Element} navMobileTitleEl
		 * @param {!Element} navBarEl
		 * @param {!Element} navBarSpacerEl
		 * @param {!number} navBarHeightPx
		 * @param {!number} navBarBorderHeightPx
		 * @param {!Element} errorEl
		 * @param {!Element} contentEl
		 * @param {?function} completedCallback
		 */
		bindLinksOnPage: function (
				navMobileTitleEl, navBarEl, navBarSpacerEl, navBarHeightPx, navBarBorderHeightPx,
				errorEl, contentEl, completedCallback) {
			var self = this;

			var aOnClickFn = function(e) {
				// Ignore external links or links that open new tabs
				if (this.pathname.substr(0, 1) != '/' || this.target == '_blank') {
					return;
				}

				e.preventDefault();

				// Index page doesn't have nav
				if (this.pathname == '/') {
					self.closeNav(navBarEl);
				} else {
					var pageTitle = this.dataset.title;
					self.openNav(pageTitle, navMobileTitleEl, navBarEl);
				}

				self.openPage(this.href, errorEl, contentEl, completedCallback);

				return false;
			};

			var aEls = document.getElementsByTagName('a');
			for (var i = 0; i < aEls.length; i++) {
				aEls[i].onclick = aOnClickFn;
			}
		}
	};
} (this, document));
