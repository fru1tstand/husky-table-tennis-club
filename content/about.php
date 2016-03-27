<?php
require_once PHP_ROOT . '/httc/Setup.php';
use httc\template\StaticPage;

$body = <<<HTML
<div class="section-title">About</div>
<div class="card fragmented">
	<p>The Husky Table Tennis club (httc) serves the University of Washington community with a friendly
		atmosphere to train or just have fun. With skill levels ranging from having never picked
		up a paddle, to tournament participating individuals, the club caters and welcomes all, to
		enjoy the sport. <a href="/join" class="link">Click here</a> to join.</p>
</div>
<div class="card fragmented">
	<p>Keep up to date with all our shenanigans on Facebook, or see how our team is doing on YouTube.</p>
	<div class="social-media">
		<a href="https://www.facebook.com/groups/905310902883752/" target="_blank"><i class="fa fa-facebook-official"></i></a>
		<a href="https://www.youtube.com/channel/UCkTNmEuEjjfCAkJsrKQaGlg" target="_blank"><i class="fa fa-youtube-square"></i></a>
	</div>
</div>
<div class="slideshow fragmented">
	<div class="padding"></div>
	<img src="/styles/cache/bg.jpg" />
	<img src="/styles/cache/bg.jpg" />
	<img src="/styles/cache/bg.jpg" />
	<div class="padding"></div>
</div>
HTML;

StaticPage::createContent()
		->with(StaticPage::FIELD_TITLE, "About")
		->with(StaticPage::FIELD_BODY, $body)
		->render();
