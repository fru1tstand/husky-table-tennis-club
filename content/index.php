<?php
require_once PHP_ROOT . '/httc/Setup.php';
use httc\template\EmptyStaticPage;

$body = <<<HTML
<section class="front-page-banner">
	<div>Husky Table Tennis Club</div>
</section>
<section class="front-tri">
	<fieldset class="col-4">
		<legend>About</legend>
		<p>Welcome to the University of Washington's Husky Table Tennis Club. Connect with us on
		<a href="https://www.facebook.com/groups/905310902883752/" target="_blank">Facebook</a> and
		check us out on the <a href="https://www.youtube.com/channel/UCkTNmEuEjjfCAkJsrKQaGlg" target="_blank">YouTubes</a></p>
	</fieldset>

	<fieldset class="col-4">
		<legend>Location</legend>
		<p>Find us at <a href="https://www.google.com/maps/place/University+of+Washington+Intramural+Activities+Bldg,+3924+Montlake+Blvd+NE,+Seattle,+WA+98195/@47.6533996,-122.3035942,15.89z" target="_blank">IMA Gym B</a></p>
		<div>&nbsp;</div>
		<p>
			3924 Montlake Blvd NE<br />
			Seattle, WA 98195
		</p>
	</fieldset>

	<fieldset class="col-4">
		<legend>Hours</legend>
		hi how are you
	</fieldset>

</section>
asdfasdf
HTML;

EmptyStaticPage::createContent()
		->with(EmptyStaticPage::FIELD_TITLE, "Home")
		->with(EmptyStaticPage::FIELD_BODY, $body)
		->render();
