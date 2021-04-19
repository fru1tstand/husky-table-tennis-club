<?php
require_once PHP_ROOT . '/httc/Setup.php';
use httc\template\StaticPage;

$body = <<<HTML
<div class="section-title"><div class="container">Rules</div></div>
<div class="card fragmented">
	<div class="container">
		<div class="subsection-title">Club Rules</div>
		<ul class="no-list spaced">
			<li>Be kind to others</li>
			<li>Don't abuse our equipment</li>
			<li>So long as you follow the above two rules, you may play whatever kind of games you wish</li>
		</ul>
		<br />
		<div class="subsection-title">TEMPORARY COVID RULES</div>
		<!--<ul class="no-list spaced">-->
		<ul class="no-list spaced">
		    <li>Consecutive playing time on the same table with the same opponent is limited to 1 hour to ensure others get time to play. You may sign up for other tables if available but please give others a chance to play too!</li>
            <li>A face mask is required when inside the gym at ALL TIMES.</li>
            <li>Physical distance is maintained (length of the table 9ft). </li>
            <li>Tables will be cleaned before any new player uses a table.</li>
            <li>No side changes allowed between games.</li>
            <li>No doubles play allowed.</li>
            <li>No multi-ball play allowed.</li>
            <li>No wiping of hands allowed on tables during matches.</li>
            <li>No cleaning of paddles by breathing on them allowed.</li>
            <li>No sharing of equipment. E.g. paddle, shoes, etc. (If you do not have any equipment, please contact an officer and we can reserve one for you, please do not share with anyone)</li>
            <li>The club will not provide drinking water. Please bring your own.</li>
		</ul>
	</div>
</div>
<div class="desktop-break"></div>

<div class="card fragmented">
	<div class="container">
		<div class="subsection-title">
			Tournament Singles
			<p class="hint">2 players</p>
		</div>
		<ul class="no-list spaced">
			<li>A match (set) is played best of 2 of 3 games (or Bo5, Bo7, etc)</li>
			<li>A game is to 11 points, but requires a 2 point lead</li>
			<li>Faults count toward the opponent's score (eg. no "re-do" serves)</li>
			<li>Upon serving, the ball must be thrown upward at least 6 inches before being struck</li>
		</ul>
	</div>
</div>
<div class="card fragmented">
	<div class="container">
		<div class="subsection-title">
			Tournament Doubles
			<p class="hint">4 players</p>
		</div>
		<ul class="no-list spaced">
			<li>All tournament singles rules apply</li>
			<li>Players must alternate hits</li>
			<li>Serves must be cross court from right to left </li>
		</ul>
	</div>
</div>
<div class="card fragmented">
	<div class="container">
		<div class="subsection-title">
			King of the Court
			<p class="hint">3+ players</p>
		</div>
		
		<ul class="no-list spaced">
			<li>A single King or Queen exists on the court to defend their position</li>
			<li>A challenger serves and must win two points to defeat the King or Queen</li>
			<li>The defender need only win a single point to defeat the challenger</li>
		</ul>
	</div>
</div>
<div class="card fragmented">
	<div class="container">
		<div class="subsection-title">
			Round Robin
			<p class="hint">3+ players</p>
		</div>
		<ul class="no-list spaced">
			<li>Tournament singles rules apply</li>
			<li>All contestants play one full set with all other players</li>
		</ul>
	</div>
</div>
HTML;

StaticPage::createContent()
		->with(StaticPage::FIELD_TITLE, "Rules")
		->with(StaticPage::FIELD_BODY, $body)
		->render();
