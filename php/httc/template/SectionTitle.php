<?php
namespace httc\template;
require_once PHP_ROOT . '/httc/Setup.php';
use common\template\component\ContentField;
use common\template\component\TemplateField;
use common\template\Content;

/**
 * Class SectionTitle
 */
class SectionTitle extends Content {
	const FIELD_TITLE = "title";

	/**
	 * Returns SectionTitle HTML for the given title string
	 *
	 * @param string $title
	 * @return string
	 * @throws \common\template\component\TemplateException
	 */
	public static function create(string $title): string {
		return self::createContent()->with(self::FIELD_TITLE, $title)->getRenderContents();
	}

	/**
	 * Produces the complete HTML string for this content page given content fields for this page.
	 *
	 * @param ContentField[] $fields An associative array mapping fields to ContentField objects.
	 * @return string
	 */
	public static function getTemplateRenderContents(array $fields): string {
		return <<<HTML
<div class="title-container">
	<div class="hr hr-left"></div>
	<div class="title">{$fields[self::FIELD_TITLE]}</div>
	<div class="hr hr-right"></div>
</div>
HTML;
	}

	/**
	 * <p>Use [TemplateName]::getTemplateFields. This is an internal method.
	 * <p>Returns the TemplateField objects associated to this content page. These are the fields
	 * that are used within the template rendering method. This method is wrapped around
	 * Content::getTemplateFields for memoization.
	 *
	 * @return TemplateField[]
	 * @internal
	 */
	static function getTemplateFields_Internal(): array {
		return [
			TemplateField::newBuilder()->called(self::FIELD_TITLE)->asRequired()->build()
		];
	}
}
