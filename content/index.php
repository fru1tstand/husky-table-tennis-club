<?php
require_once PHP_ROOT . '/httc/Setup.php';
use httc\template\EmptyStaticPage;

$body = <<<HTML
<section class="index-title">
	<div class="title">Husky Table Tennis Club</div>
	<div class="title-underline"></div>
</section>
<section class="index-links">
	<ul class="index-menu">
		<li><a href="/about">
			<span class="title">About the Club</span>
			<span class="hr"></span>
			<span class="descr">Find out where we are and what we do</span>
		</a></li>
		<li><a href="/rules">
			<span class="title">Rules</span>
			<span class="hr"></span>
			<span class="descr">How <span class="i">do</span> you play table tennis?</span>
		</a></li>
		<li><a href="/signin">
			<span class="title">Sign In</span>
			<span class="hr"></span>
			<span class="descr">Welcome! Sign in to get started playing.</span>
		</a></li>
	</ul>
</section>
HTML;

EmptyStaticPage::createContent()
		->with(EmptyStaticPage::FIELD_TITLE, "Home")
		->with(EmptyStaticPage::FIELD_BODY, $body)
		->render();
