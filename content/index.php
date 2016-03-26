<?php
require_once PHP_ROOT . '/httc/Setup.php';
use httc\template\StaticPage;

$body = <<<HTML
<nav class="global-navigation">
	<div id="nav-collapsed">
		<label id="nav-collapsed-closed" for="nav-collapsed-controller">
				<i class="fa fa-bars"></i>Husky Table Tennis Club</label>
		<input type="checkbox" id="nav-collapsed-controller" class="controller" />
		<div id="nav-collapsed-open">
			<a href="#about">About</a>
			<a href="#join">Join Us</a>
			<a href="#rules">Rules</a>
		</div>
	</div>
	<div id="nav-expanded">
		
	</div>
</nav>
<div class="section-anchor" id="top"></div>
<div class="index-logo">
	<img src="/styles/cache/web-logo.gif" />
	<div>Husky Table Tennis Club</div>
</div>

<div class="section-anchor" id="about"></div>
<div class="section-title">About</div>
<div class="card spaced-top">
	<p>The Husky Table Tennis club (httc) serves the University of Washington community with a friendly
		atmosphere to train or just have fun. With skill levels ranging from having never picked
		up a paddle, to tournament participating individuals, the club caters and welcomes all, to
		enjoy the sport.</p>
	<div class="social-media">
		<a href="https://www.facebook.com/groups/905310902883752/" target="_blank"><i class="fa fa-facebook-official"></i></a>
		<a href="https://www.youtube.com/channel/UCkTNmEuEjjfCAkJsrKQaGlg" target="_blank"><i class="fa fa-youtube-square"></i></a>
	</div>
</div>
	
<div id="index-slideshow">
	<div class="padding"></div>
	<img src="/styles/cache/bg.jpg" />
	<img src="/styles/cache/bg.jpg" />
	<img src="/styles/cache/bg.jpg" />
	<div class="padding"></div>
</div>

<div class="section-anchor" id="join"></div>
<div class="section-title">Joining</div>
<div class="card fragmented">
	<div class="subsection-title">Location<i class="fa fa-map"></i></div>
	<ul class="no-list">
		<li>IMA - Gym B</li>
		<li>3924 Montlake Blvd NE</li>
		<li>Seattle, WA 98195</li>
	</ul>
	<p class="spaced-top">Gym B is in the back-left side of the building.</p>
</div>
<div class="card fragmented">
	<div class="subsection-title">Hours<i class="fa fa-calendar"></i></div>
	<ul class="no-list">
		<li><span class="hours-dow">Monday</span>7pm-10pm</li>
		<li><span class="hours-dow">Thursday</span>7pm-10pm</li>
		<li><span class="hours-dow">Saturday</span>10am-1pm</li>
	</ul>
	<p class="spaced-top">Walk in during these hours, sign in, and start playing! All other times,
		the gym is open for badminton or basketball.</p>
</div>
<div class="card fragmented">
	<div class="subsection-title">Price<i class="fa fa-usd"></i></div>
	<ul class="no-list">
		<li><span class="hours-dow">Per Session</span>$1/person</li>
		<li><span class="hours-dow">Per Quarter</span>$10/student</li>
		<li><span class="hours-dow"></span>$25/adult</li>
	</ul>
	<p class="spaced-top">As much as we love free stuff as well, the club purchases all the
		equipment (balls, tables, nets, etc) out of pocket, so these fees help offset that cost.</p>
</div>

<div class="section-anchor" id="rules"></div>
<div class="section-title">Rules</div>
<div class="card fragmented">
	<div class="subsection-title">Club Rules</div>
	<ul class="no-list">
		<li>Be kind to others</li>
		<li>Be kind to our equipment</li>
		<li>So long as you follow the above two rules, you may play whatever kind of games you wish</li>
	</ul>
</div>
<div class="card fragmented">
	<div class="subsection-title">Tournament Match</div>
	<ul class="no-list">
		<li>A match (set) is played best of 2 of 3 games (or Bo5, Bo7, etc)</li>
		<li>A game is to 11 points, but requires a 2 point lead</li>
		<li>Faults count toward the opponent's score (eg. no "re-do" serves)</li>
		<li>Upon serving, the ball must be thrown upward at least 6 inches before being struck</li>
		<li>Part</li>
	</ul>
</div>


<div class="nav-push" id="top"></div>
HTML;

StaticPage::createContent()
		->with(StaticPage::FIELD_TITLE, "Home")
		->with(StaticPage::FIELD_BODY, $body)
		->render();
