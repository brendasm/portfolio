<!DOCTYPE html>
<html lang="en">
<head>
	<title>Brenda Lau | Easy Streak Project </title>
	<?php include 'include/header.php'; // includes all header content ?>
</head>

<body id="home">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	<?php include 'include/about.php'; // include about me section ?>

	<section id="hero-image" class="election">
		<div class="hero-filter">
			<?php include 'include/nav.php'; // include nav ?>
		</div> <!-- end hero filter	 -->	
	</section> <!-- end hero image -->

	<main id="content">
		<div class="showcase-wrapper">

		<h2 class="title">Easy Streak</h2>
			<ul class="skills">
				<li>User Experience Design</li>
				<li>UI Design</li>
				<li>Sitemap</li>
				<li>User Research and Personas</li>
				<li>Wireframes</li>
				<li>Prototyping</li>
			</ul>
		<div class="skills-wrapper">
		</div> <!-- end skills wrapper -->

		<div class="description">
			<p>Easy streak is a gaming app that offers sports fans a platform to compete in daily sport contests/pools where they are able to select the winning teams of NBA, NHL, MLB, NFL and MLS games to win cash prizes. The platform allows users to select teams in a “pick’em” format instead of selecting against a spread or betting on the money line. For more information, visit the <a href="http://www.easystreak.com/" title="Easy Streak Website" target="_blank">Easy Streak</a> website. </p>

			<p><span class="bold">Project Scope &amp; Goals</span>&nbsp;I was connected with the founder of Easy Streak to redesign the user interface, visual design and improve the overall user experience of the gaming app. The app redesign aims to achieve two main goals: increase the user adoption rate and provide a trustworthy and valuable experience for users. </p>
		</div> <!-- end description -->

		<div class="border"></div>

		<div class="description">
			<p><span class="bold">Research</span>&nbsp;In order to tackle this project, I had to first research and figure out the answers to the following questions: </p>

			<ul class="list">
				<li>Who are the users and what are their priorities when using this product?</li>
				<li>What are the use cases of this product?</li>
				<li>What are the opportunities for design enhancements related to product desirability (utility, usability, and delight)?</li>
			</ul>

			<p>I worked closely with the founder and stakeholders to understand their goals and directions and also conducted phone interviews with real users that are currently using the app.</p>

			<p>15 participants were interviewed to yield the following information: </p>

			<ul class="bullet-list">
				<li>The average age of users are 20-37 years old.</li>
				<li>Users are sports fans and have participated in or have knowledge of fantasy sports. However, these users have moved away from fantasy sports because it takes too much time and commitment and may not be able to have any winnings.</li>
				<li>On average, users prefer to use a platform that is easy to navigate without any complexities and enjoys the overall scope of choosing teams instead of players. </li>
				<li>Users are motivated to use the app to win cash prizes, enhanced game experience, and to test whether they know which team will win</li>
				<li>Would like to see more transparency between the scores (ie show tie breaker score) and also have updated scores in real time instead of just the final scores after all games have finished. </li>
				<li>Users spend approximately 10-20 minutes to research sport teams and current news</li>
				<li>On average, users may use app twice a day to find out scores and select teams in contests.</li>
				<li>Users enjoy interacting with a simple interface that can display more games and a more streamline process when selecting teams.</li>
				<li>More gaming options (instead of just picking teams) may increase engagement rate of using app.</li>
			</ul>

			<p>Note: Selected participants are a mix of try-outs (free), semi-pro and premium subscribers. </p>
		</div> <!-- end description -->

		<div class="description">
			<p><span class="bold">UX Strategy</span>Based on research findings and from user interviews, the UI redesign includes the following elements:</p>
			<ul class="bullet-list">
				<li>Simplifying the interface and improve navigation</li>
				<li>Streamlining the process to enter a contest</li>
				<li>Make call to actions (CTAs) more prominent</li>
				<li>Incorporate consistent and easy to understand logos</li>
				<li>Consistent visual design throughout the app</li>
			</ul>
		</div> <!-- end description -->

		<div class="photo-wrapper">
			<div class="photo-reg">
				<a href="/projects/es-sitemap.pdf" title="View Sitemap" target="_blank"><img src="images/project/easystreak/es-sitemap.png" alt="Easy Streak Sitemap" title="Easy Streak Sitemap"></a>
			</div>		
		</div> <!-- end photo wrapper -->

		<div class="description">
			<p>User Flow Task: Join a free contest and select teams</p>
		</div>

		<div class="photo-wrapper">
			<div class="photo-reg">
				<img src="images/project/easystreak/es-userflow.png" alt="Easy Streak User flow" title="Easy Streak User flow">
			</div>
			<div class="photo">
				<img src="images/project/easystreak/es-wireframe-1.JPG" alt="Easy Streak Wireframe" title="Easy Streak Wireframe">
			</div>
			<div class="photo">
				<img src="images/project/easystreak/es-wireframe-2.JPG" alt="Easy Streak Wireframe" title="Easy Streak Wireframe">
			</div>		
		</div> <!-- end photo wrapper -->



		</div> <!-- end showcase wrapper -->
	</main>

	<?php include 'include/footer.php'; // include footer ?>

	<script src="scripts/jquery-3.2.1.min.js"></script>
	<script src="scripts/scripts.js"></script>	

</body>
</html>
