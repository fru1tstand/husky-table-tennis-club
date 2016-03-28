<?php
require_once PHP_ROOT . '/httc/Setup.php';
use httc\template\StaticPage;

$body = <<<HTML
<div class="section-title"><div class="container">Sign In</div></div>
<div class="card fragmented" id="sign-in-form">
	<div class="container">
		<form action="#" method="post">
			<input type="text" placeholder="Student ID" />
			<button type="submit"><i class="fa fa-arrow-right"></i></button>
		</form>
	</div>
</div>
HTML;

StaticPage::createContent()
		->with(StaticPage::FIELD_TITLE, "Sign In")
		->with(StaticPage::FIELD_BODY, $body)
		->render();
