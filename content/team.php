<?php
require_once PHP_ROOT . '/httc/Setup.php';
use httc\template\StaticPage;

$body = <<<HTML
<div class="section-title"><div class="container">Our Team</div></div>
<div class="card fragmented">
	<div class="container">
        <div class="subsection-title">2019 ~ 2020</div>
        <div class="sub-subsection-title">Team A</div>
        <ul class="no-list two-column">
            <li>Emma Liao</li>
            <li>Jimmy Guo</li>
            <li>Sherman Chen</li>
            <li>Sijia Zhang</li>
            <li>Reda Ali</li>
            <li>Philip Wen</li>
        </ul>

        <div class="sub-subsection-title spaced-top">Team B</div>
        <ul class="no-list two-column">
            <li>Justin Lok</li>
            <li>Nathan Luo</li>
            <li>Parsons Choi</li>
            <li>Kedar Mokate</li>
            <li>Dirk Komarnitsky</li>
        </ul>

        <div class="sub-subsection-title spaced-top">Team W</div>
        <ul class="no-list two-column">
            <li>Emma Liao</li>
            <li>Reda Ali</li>
            <li>Cathy Chen</li>
            <li>Utako Kase</li>
            <li>Tejasvini Sareen</li>
        </ul>
    </div>
</div>

<div class="card fragmented">
	<div class="container">
        <div class="subsection-title">2018 ~ 2019</div>
        <div class="sub-subsection-title">Team A</div>
        <ul class="no-list two-column">
            <li>Billy Ding</li>
            <li>Sherman Chen</li>
            <li>Akshit Arora</li>
            <li>Sijia Zhang</li>
            <li>Justin Lok</li>
        </ul>

        <div class="sub-subsection-title spaced-top">Team B</div>
        <ul class="no-list two-column">
            <li>Parsons Choi</li>
            <li>Thor Dodson</li>
            <li>Dirk Komarnitsky</li>
            <li>Jackson Kettel</li>
            <li>Joonyong Choi</li>
            <li>Alex Chang</li>
        </ul>

        <div class="sub-subsection-title spaced-top">Team W</div>
        <ul class="no-list two-column">
            <li>Reda Ali</li>
            <li>Sherry Han</li>
            <li>Utako Kase</li>
            <li>Cathy Chen</li>
            <li>Joanne Wong</li>
        </ul>
    </div>
</div>

<div class="card fragmented">
	<div class="container">
        <div class="subsection-title">2017 ~ 2018</div>
        <div class="sub-subsection-title">Team A</div>
        <ul class="no-list two-column">
            <li>Billy Ding</li>
            <li>Akshit Arora</li>
            <li>Sherman Chen</li>
            <li>Eric Pattison</li>
            <li>Abhishek Bajaj</li>
        </ul>

        <div class="sub-subsection-title spaced-top">Team B</div>
        <ul class="no-list two-column">
            <li>Utako Kase</li>
            <li>Parsons Choi</li>
            <li>Justin Lok</li>
            <li>Ankit Sharma</li>
            <li>Alex Chang</li>
        </ul>

        <div class="sub-subsection-title spaced-top">Team W</div>
        <ul class="no-list two-column">
            <li>Sherry Han</li>
            <li>Tejasvini Sareen</li>
            <li>Reda Ali</li>
            <li>Emma Liao</li>
            <li>Cathy Chen</li>
        </ul>
    </div>
</div>

<div class="card fragmented">
	<div class="container">
        <div class="subsection-title">2016 ~ 2017</div>
        <div class="sub-subsection-title">Team A</div>
        <ul class="no-list two-column">
            <li>Wesley Wei</li>
            <li>Fumiaki Nakamura</li>
            <li>Sherman Chen</li>
            <li>Parsons Choi</li>
            <li>Kodlee Yin</li>
        </ul>

        <div class="sub-subsection-title spaced-top">Team B</div>
        <ul class="no-list two-column">
            <li>Justin Lok</li>
            <li>Alex Chang</li>
            <li>Brian Park</li>
            <li>Philip Wen</li>
            <li>Sherlock Yan</li>
        </ul>

        <div class="sub-subsection-title spaced-top">Team W</div>
        <ul class="no-list two-column">
            <li>Emma Liao</li>
            <li>Sherry Han</li>
            <li>Utako Kase</li>
            <li>Tejasvini Sareen</li>
            <li>Xun Sun</li>
        </ul>
    </div>
</div>

<div class="card fragmented">
	<div class="container">
		<div class="subsection-title">2015 ~ 2016</div>
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
	<iframe width="320" height="180" src="https://www.youtube.com/embed/ef44RBu3LQw?rel=0" frameborder="0" allowfullscreen></iframe>
	<iframe width="320" height="180" src="https://www.youtube.com/embed/kA5WosbAQ8g?rel=0" frameborder="0" allowfullscreen></iframe>
	<iframe width="320" height="180" src="https://www.youtube.com/embed/videoseries?list=PLTuE3A9GfzUimcaKQDXs985fM63mBBaP5" frameborder="0" allowfullscreen></iframe>
	<div class="padding"></div>
</div>
HTML;

StaticPage::createContent()
		->with(StaticPage::FIELD_TITLE, "Team")
		->with(StaticPage::FIELD_BODY, $body)
		->render();
