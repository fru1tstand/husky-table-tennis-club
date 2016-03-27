<?php
namespace httc\template;
require_once PHP_ROOT . '/httc/Setup.php';
use common\template\component\TemplateField;
use common\template\Content;


/**
 * Class EmptyStaticPage
 */
class StaticPage extends Content{
	const FIELD_BODY = "body";
	const FIELD_TITLE = "title";

	public static function getTemplateRenderContents(array $fields): string {
		return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
	<title>HTTC {$fields[self::FIELD_TITLE]}</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>-->
	<!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />-->
	<!--<link rel="shortcut icon" href="https://s3.amazonaws.com/ks_web/fru1t.me/favicon.ico" />-->
	<!--<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway:400,600'>-->
	<link rel="stylesheet" href="/styles/cache/raleway.css" />
	<link rel="stylesheet" href="/styles/cache/fa/font-awesome.css" />
	<link rel="stylesheet" href="/styles/global.css" />
</head>
<body>

<!--<noscript> &lt;!&ndash; I mean seriously? &ndash;&gt;-->
<nav id="global-nav">
	<div id="nav-mobile">
		<a href="/" id="nav-mobile-collapsed-title">
				<i class="fa fa-chevron-left"></i>{$fields[self::FIELD_TITLE]}</a>
	</div>
	<div id="nav-desktop">
		
	</div>
</nav>
<div id="global-nav-push"></div>
<!--</noscript>-->

<div id="static-logo">
	<img src="/styles/cache/web-logo.gif" />
	<div class="name">Husky Table Tennis Club</div>
</div>

	{$fields[self::FIELD_BODY]}
	
	<script src="/js/global.js"></script>
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
