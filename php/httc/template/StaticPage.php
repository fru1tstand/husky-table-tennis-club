<?php
namespace httc\template;
require_once PHP_ROOT . '/httc/Setup.php';
use common\template\component\TemplateField;
use common\template\Content;
/**
 * A static page with default banners and navigation links
 */
class StaticPage extends Content {
	const FIELD_BODY = "body";
	const FIELD_TITLE = "title";

	public static function getTemplateRenderContents(array $fields): string {
		$fields[self::FIELD_BODY] = <<<HTML
	<header>
	
	</header>
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
HTML;

		return EmptyStaticPage::getTemplateRenderContents($fields);
	}

	public static function getTemplateFields_Internal(): array {
		return [
				TemplateField::newBuilder()->called(self::FIELD_BODY)->asRequired()->build(),
				TemplateField::newBuilder()->called(self::FIELD_TITLE)->asRequired()->build()
		];
	}
}
