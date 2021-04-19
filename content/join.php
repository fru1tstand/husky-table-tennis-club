<?php
require_once PHP_ROOT . '/httc/Setup.php';
use httc\template\StaticPage;

$body = <<<HTML
<div class="section-title"><div class="container">Joining</div></div>
<div class="card fragmented">
	<div class="container">
		<p>Players are welcome to drop in and bring friends to play during all open hours. A valid husky
			card is required for membership, otherwise a per-session fee will apply.</p>
		<br />
		<p>Before arriving, please fill out
		    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfrHtqkHdI0sH3BIV5_elf0uzat1Df90UzuszkAdgfiazfaUQ/viewform" target="_blank" class="link">this interest form</a>
		    <b>AND</b>
		    <a href="https://reg.recreation.uw.edu/Program/GetProgramDetails?courseId=5aadc2ad-34da-4b62-b725-f3ea15f74a5d&semesterId=fc4d5b28-d83f-424d-9a2b-d447bb7e8a0f" target="_blank" class="link">this club participation waiver</a>.</p>
	</div>
</div>

<div class="card fragmented">
	<div class="container">
		<div class="subsection-title">Location<i class="fa fa-map"></i></div>
		<a href="http://maps.google.com/?q=3924+Montlake+Blvd+NE+Seattle+WA" target="_blank" class="link">
			<ul class="no-list">
				<li>IMA - Gym B</li>
				<li>3924 Montlake Blvd NE</li>
				<li>Seattle, WA 98195</li>
			</ul>
		</a>
		<br />
		<p class="spaced-top">Gym B is in the back-left side of the building (upon entering).</p>
	</div>
</div>
<div class="card fragmented">
	<div class="container">
		<div class="subsection-title">Hours<i class="fa fa-calendar"></i></div>
		<ul class="no-list">
			<li><span class="hours-dow">Monday</span>4pm-7pm</li>
			<li><span class="hours-dow">Thursday</span>4pm-7pm</li>
		</ul>
		<br />
		<p class="spaced-top">All other times, the gym is open for badminton or basketball.</p>
	</div>
</div>
<div class="card fragmented">
	<div class="container">
		<div class="subsection-title">Price<i class="fa fa-usd"></i></div>
		<ul class="no-list">
			<li><span class="hours-dow">First Time</span>FREE</li>
			<li><span class="hours-dow">Per Quarter</span>$25</li>
			<li><span class="hours-dow">Per Year</span>$60</li>
		</ul>
		<br />
		<p class="spaced-top">As much as we love free stuff as well, the club purchases all the
			equipment (balls, tables, nets, etc) out of pocket, so these fees help offset that cost.</p>
	</div>
</div>
HTML;

StaticPage::createContent()
		->with(StaticPage::FIELD_TITLE, "Join")
		->with(StaticPage::FIELD_BODY, $body)
		->render();
