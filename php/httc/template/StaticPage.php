<?php
namespace httc\template;
require_once PHP_ROOT . '/httc/Setup.php';
use common\template\component\TemplateField;
use common\template\Content;
/**
 * CSGO Derank template
 */
class StaticPage extends Content {
	const FIELD_BODY = "body";
	const FIELD_TITLE = "title";

	public static function getTemplateRenderContents(array $fields): string {
		return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Derank.Us {$fields[self::FIELD_TITLE]}</title>
	<meta charset="UTF-8" />
	<!--<link rel="shortcut icon" href="https://s3.amazonaws.com/ks_web/fru1t.me/favicon.ico" />-->
	<!--<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway:400,600'>-->
	<link rel="stylesheet" href="/styles/cache/raleway.css" />
	<link rel="stylesheet" href="/styles/global.css" />
</head>
<body>
	<div id="content-wrapper">
		<nav>
		</nav>
		<div id="global-content">{$fields[self::FIELD_BODY]}</div>
		<div id="content-push"></div>
	</div>
	<footer>
		<div class="right">Made with love, By Kodlee Yin.</div>
	</footer>

	<!--<script src="/.site/js/analytics.js"></script>-->
</body>
</html>
HTML;
	}

	public static function getTemplateFields_Internal(): array {
		return [
				TemplateField::newBuilder()->called(self::FIELD_BODY)->asRequired()->build(),
				TemplateField::newBuilder()->called(self::FIELD_TITLE)->asRequired()->build()
		];
	}
}
