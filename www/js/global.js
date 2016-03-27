//noinspection ThisExpressionReferencesGlobalObjectJS
(function(window, document, undefined) {
	if (window.location.pathname == '/' || window.location.pathname == '/index') {
		document.getElementById('global-nav').style.top = '-54px';
		document.getElementById('global-nav-push').style.height = '6px';
	}
} (this, document));
