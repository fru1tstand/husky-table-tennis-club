<?php
require_once PHP_ROOT . '/httc/Setup.php';

/**
 * about.php
 */
\httc\template\StaticPage::createContent()
	->with(\httc\template\StaticPage::FIELD_TITLE, "About")
	->with(\httc\template\StaticPage::FIELD_BODY, "asdf")
	->render();
