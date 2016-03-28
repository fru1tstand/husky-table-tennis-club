//noinspection ThisExpressionReferencesGlobalObjectJS
(function(window, document, undefined) {
	// These variables should be kept up to date with the CSS values in _variables.scss
	var navBarHeightPx = 60;
	var navBarBorderWidthPx = 6;

	// Static page references that don't change from page to page
	// Elements viewable from the StaticPage template
	var staticDom = {
		navBar: document.getElementById('global-nav'),
		navBarSpacer: document.getElementById('global-nav-push'),
		navTitle: document.getElementById('nav-title'),
		error: document.getElementById('global-error'),
		content: document.getElementById('global-content')
	};

	function callBindLinksOnPage() {
		PageManager.bindLinksOnPage(
				staticDom.navTitle,
				staticDom.navBar,
				staticDom.navBarSpacer,
				navBarHeightPx,
				navBarBorderWidthPx,
				staticDom.error,
				staticDom.content,
				callBindLinksOnPage);
	}
	callBindLinksOnPage();

	// History
	window.onpopstate = function(e) {
		PageManager.historyPopState(e.state.title, e.state.content, staticDom.content, staticDom.navBar, staticDom.navTitle);
		callBindLinksOnPage();
	};
	PageManager.historyPushState(staticDom.navTitle.text, staticDom.content.innerHTML, window.location);

	//noinspection JSUnresolvedVariable
	if (!!window.indexFirstLoad) {
		PageManager.closeNav(staticDom.navBar);
	}

} (this, document));
