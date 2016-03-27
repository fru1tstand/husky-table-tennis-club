<?php
require_once PHP_ROOT . '/httc/Setup.php';
use httc\template\StaticPage;

$body = <<<HTML

<div id="index-nav">
	<a href="/about">
		<i class="fa fa-info"></i>
		<div class="sub">About</div>
	</a>
	<a href="/join">
		<i class="fa fa-user-plus"></i>
		<div class="sub">Join</div>
	</a>
	<a href="/rules">
		<i class="fa fa-tasks"></i>
		<div class="sub">Rules</div>
	</a>
	<a href="/team">
		<i class="fa fa-users"></i>
		<div class="sub">Our Team</div>
	</a>
	<a href="/sign-in">
		<i class="fa fa-sign-in"></i>
		<div class="sub">Sign In</div>
	</a>
	
</div>

HTML;

StaticPage::createContent()
		->with(StaticPage::FIELD_TITLE, "Home")
		->with(StaticPage::FIELD_BODY, $body)
		->render();
