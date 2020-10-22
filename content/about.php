<?php
require_once PHP_ROOT . '/httc/Setup.php';
use httc\template\StaticPage;

$images = [
    'https://fm-httc.s3-us-west-1.amazonaws.com/about/uw-tourny-2019-w-coach.jpg',
    'https://fm-httc.s3-us-west-1.amazonaws.com/about/uw-tourny-2019.jpg',
    'https://s3-us-west-1.amazonaws.com/fm-httc/about/oregon-doubles-serve.jpg',
    'https://s3-us-west-1.amazonaws.com/fm-httc/about/oregon-everybody.jpg',
    'https://s3-us-west-1.amazonaws.com/fm-httc/about/oregon-game1.jpg',
    'https://s3-us-west-1.amazonaws.com/fm-httc/about/oregon-game2.jpg',
    'https://s3-us-west-1.amazonaws.com/fm-httc/about/oregon-game6.jpg',
    'https://s3-us-west-1.amazonaws.com/fm-httc/about/seattle-everybody.jpg',
    'https://s3-us-west-1.amazonaws.com/fm-httc/about/seattle-uw.jpg',
    'https://s3-us-west-1.amazonaws.com/fm-httc/about/uw-game-2.jpg',
    'https://s3-us-west-1.amazonaws.com/fm-httc/about/uw-game1.jpg',
];

$imgHtml = "";
foreach ($images as $image) {
	$imgHtml .= "<img src='$image' alt='UW Table Tennis' />";
}
$body = <<<HTML
<div class="section-title">
	<div class="container">
		About
	</div>
</div>
<div class="card fragmented">
	<div class="container">
		<p>The Husky Table Tennis club (httc) serves the University of Washington community with a friendly
			atmosphere to train or just have fun. With skill levels ranging from having never picked
			up a paddle, to tournament participating individuals, the club caters and welcomes all, to
			enjoy the sport. <a href="/join" class="link" data-title="Join">Click here</a> to join.</p>
	</div>
</div>
<div class="card fragmented">
	<div class="container">
		<p>Keep up to date with all our shenanigans on Facebook, or see how our team is doing on YouTube.</p>
		<div class="social-media">
			<a href="https://www.facebook.com/groups/905310902883752/" target="_blank"><i class="fa fa-facebook-official"></i></a>
			<a href="https://www.youtube.com/channel/UCkTNmEuEjjfCAkJsrKQaGlg" target="_blank"><i class="fa fa-youtube-square"></i></a>
		</div>
	</div>
</div>
<div class="slideshow fragmented">
	<div class="padding"></div>
	$imgHtml
	<div class="padding"></div>
</div>
HTML;

StaticPage::createContent()
		->with(StaticPage::FIELD_TITLE, "About")
		->with(StaticPage::FIELD_BODY, $body)
		->render();
