<?php
require_once PHP_ROOT . '/httc/Setup.php';
use httc\template\StaticPage;

$body = <<<HTML
<div class="section-title"><div class="container">Our Team</div></div>
<div class="card spaced-top fenced-top">
	<div class="container">
		<div class="subsection-title">2015 - 2016</div>
		<ul class="no-list two-column">
			<li>Cecilia Chung</li>
			<li>Elliot Kao</li>
			<li>Emily Ye</li>
			<li>Louis Gong</li>
			<li>Sherry Han</li>
			<li>Soubin Shin</li>
			<li>Utako Kase</li>
			<li>Wesley Wei</li>
		</ul>
	</div>
</div>
<div class="slideshow fenced-bottom">
	<div class="padding"></div>
	<iframe width="320" height="180" src="https://www.youtube.com/embed/83JrzHu4ufQ?rel=0" frameborder="0" allowfullscreen></iframe>
	<iframe width="320" height="180" src="https://www.youtube.com/embed/3kKgjCmzqTQ?rel=0" frameborder="0" allowfullscreen></iframe>
	<iframe width="320" height="180" src="https://www.youtube.com/embed/kA5WosbAQ8g?rel=0" frameborder="0" allowfullscreen></iframe>
	<div class="padding"></div>
</div>
HTML;

StaticPage::createContent()
		->with(StaticPage::FIELD_TITLE, "Team")
		->with(StaticPage::FIELD_BODY, $body)
		->render();
