<?php
require_once PHP_ROOT . '/httc/Setup.php';
use httc\template\StaticPage;

$body = <<<HTML
<div class="section-title"><div class="container">Joining</div></div>
<div class="card fragmented">
	<div class="container">
		<p>Players are welcome to drop in and bring friends to play during all open hours. A valid husky
			card is required for membership, otherwise a per-session fee will apply.</p>
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
		<p class="spaced-top">Gym B is in the back-left side of the building (upon entering).</p>
	</div>
</div>
<div class="card fragmented">
	<div class="container">
		<div class="subsection-title">Hours<i class="fa fa-calendar"></i></div>
		<ul class="no-list">
			<li><span class="hours-dow">Monday</span>7pm-10pm</li>
			<li><span class="hours-dow">Thursday</span>7pm-10pm</li>
		</ul>
		<p class="spaced-top">All other times, the gym is open for badminton or basketball.</p>
	</div>
</div>
<div class="card fragmented">
	<div class="container">
		<div class="subsection-title">Price<i class="fa fa-usd"></i></div>
		<ul class="no-list">
			<li><span class="hours-dow">Per Session</span>$1/person</li>
			<li><span class="hours-dow">Per Quarter</span>$15/student</li>
			<li><span class="hours-dow"></span>$25/adult</li>
		</ul>
		<p class="spaced-top">As much as we love free stuff as well, the club purchases all the
			equipment (balls, tables, nets, etc) out of pocket, so these fees help offset that cost.</p>
	</div>
</div>
HTML;

StaticPage::createContent()
		->with(StaticPage::FIELD_TITLE, "Join")
		->with(StaticPage::FIELD_BODY, $body)
		->render();
