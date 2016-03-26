<?php
require_once PHP_ROOT . '/httc/Setup.php';

/**
 * about.php
 */

$body = <<<HTML
<h1>Husky</h1>
<p>Table Tennis Club</p>
HTML;

\httc\template\StaticPage::createContent()
	->with(\httc\template\StaticPageWithTitleBar::FIELD_TITLE, "About")
	->with(\httc\template\StaticPageWithTitleBar::FIELD_BODY, $body)
	->render();
