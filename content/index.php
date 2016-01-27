<?php
require_once PHP_ROOT . '/httc/Setup.php';
use httc\template\EmptyStaticPage;

$body = <<<HTML
<section class="front-page-banner">
	<div>
		Husky Table Tennis Club
	</div>
</section>
<section class="front-tri">
	<div class="col-4">
		<div class="title">About</div>
		<div class="body">
			Hi!<br />
			We're the Husky Table Tennis Club. We host open-table style playing (which just
			means you're free to do whatever you want), and cater to players of all skill groups
			(even those who have never picked up a paddle before). We provide equipment for free,
			so come meet some awesome people or bring a group of friends for an entertaining night
			out!
		</div>
	</div>

	<div class="col-4">
		<div class="title">Meet Times</div>
		<div class="body">
			<span class="block-time">Monday</span> 7-10pm<br />
			<span class="block-time">Thursday</span> 7-10pm<br />
			<span class="block-time">Saturday</span> 10-1pm<br />
		</div>
	</div>

	<div class="col-4">
		<div class="title">Location</div>
		<div class="body">
			You can find us at the
			<a href="https://www.google.com/maps/place/University+of+Washington+Intramural+Activities+Bldg,+3924+Montlake+Blvd+NE,+Seattle,+WA+98195/@47.6533996,-122.3035942,15.89z"
			   target="_blank">IMA</a> in gym B (back left).
		</div>
	</div>

</section>
asdfasdf
HTML;

EmptyStaticPage::createContent()
		->with(EmptyStaticPage::FIELD_TITLE, "Home")
		->with(EmptyStaticPage::FIELD_BODY, $body)
		->render();
