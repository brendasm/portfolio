<!DOCTYPE html>
<html lang="en">
<head>
	<title>Brenda Lau | My Developing Child Project </title>
	<?php include 'include/header.php'; // includes all header content ?>
</head>

<body id="home">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	<?php include 'include/about.php'; // include about me section ?>

	<section id="hero-image" class="mdc">
		<div class="hero-filter">
			<?php include 'include/nav.php'; // include nav ?>
		</div> <!-- end hero filter -->	
	</section> <!-- end hero image -->


	<main id="content">
		<div class="showcase-wrapper">	

			<section id="showcase">

				<h2 class="title">My Developing Child</h2>

				<div class="skills-wrapper">
					<ul class="skills">
						<li>UX Design</li>
						<li>UI Design</li>
						<li>WordPress Custom Theme</li>
						<li>Information Architecture</li>
						<li>Branding</li>
						<li>Responsive Design</li>
						<li>PHP</li>
						<li>Sass</li>
						<li>Git</li>
						<li>User Testing</li>
					</ul>
				</div> <!-- end skills	 -->

				<div class="description">
					<p>My Developing Child is an educational website for a biotech company’s non-profit sector. The website focuses on bringing awareness to autism and provides information from screening, signs, diagnosis, management and advocacy support groups.</p>
					<p><span class="bold">Project Goals</span>The goal of this project aims to achieve two goals: to educate users/parents on the genetic cause of autism and to increase the number of sign ups.</p>
					<p>The design and development of this project provides a clean, easy to navigate, and family friendly site that is accessible by all devices. The overall project was completed in a tight span of five weeks and was a collaborative effort with two other awesome team members. We worked closely with our client, based in Utah, to establish the development of the site.</p>
				</div> <!-- end description -->

				<a href="http://mydevelopingchild.org/" class="btn-project-pg" title="View Project" target="_blank">View Live</a>

				<div class="border"></div>

				<div class="description">
					<p><span class="bold">Initial Meeting</span> &nbsp; We had an in-person discovery meeting with the client to understand the purpose, target audience, design features, colors etc. for the development of the site. </p>
					<p><span class="bold">Process</span> &nbsp; From the details uncovered in the discovery meeting, we then created the information architecture and wireframes. </p>
				</div> <!-- end description -->

				<div class="photo-wrapper">
					<div class="photo-reg">
						<img src="images/project/mdc/mdc-1.jpg" alt="My Developing Child IA" title="My Developing Child IA">
					</div>
					<div class="photo-reg">
						<img src="images/project/mdc/mdc-2.jpg" alt="My Developing Child wireframes" title="My Developing Child wireframes">
					</div>
				</div> <!-- photo wrapper	 -->

				<div class="swatch">
					<div class="swatch-single mdc1"><p>#01667D</p></div>
					<div class="swatch-single mdc2"><p>#0099B5</p></div>
					<div class="swatch-single mdc3"><p>#0CA2C7</p></div>
					<div class="swatch-single mdc4"><p>#7A93A0</p></div>
					<div class="swatch-single mdc5"><p>#4C4C4C</p></div>			
				</div> <!-- end swatch -->	

				<div class="description">
					<p> <span class="bold">Color Swatch </span> &nbsp; We decided on the following colors to establish a family-friendly tone. </p>
				</div>

				<div class="description">
					<p><span class="bold">Development</span> &nbsp; The site was built on a custom WordPress theme. Each page was coded separately since the structural content of each page was different.  With a user centered approach, we incorporated various dynamic elements to enhance the overall usability of the site with specific functions enabled/disabled across various devices. </p>
					<p>We also implemented a progress bar at the bottom of each page so that users can navigate through the informational ‘steps’ of autism from screening to support. </p>
				</div>

				<div class="description">
					<p><span class="bold">User Testing</span> &nbsp; For the final portion of the project, we conducted a site testing to determine the usability and efficiency of the site. The site testing allowed us to observe a user’s interaction with the interface, layout and content and to validate specific features that were incorporated into the site. For more detailed information, please view the pdf site testing report below. </p>	
				</div>

				<a href="/projects/mdc-site-testing-report.pdf" class="btn-project-pg" title="View Report" target="_blank">Site Testing Report</a>


				<div class="border"></div>


				<div class="photo-wrapper">
					<div class="photo-reg">
						<img src="images/project/mdc/mdc-3.jpg" alt="My Developing Child iphone" title="My Developing Child iphone">
					</div>
					<div class="photo">
						<img src="images/project/mdc/mdc-4.png" alt="My Developing Child Screenshot" title="My Developing Child Screenshot">
					</div>
				</div> <!-- photo wrapper	 -->


			</section> <!-- end section showcase-->

		</div> <!-- end showcase wrapper -->
	</main>	

	<a href="#" class="go-top">Top</a>

	<?php include 'include/footer.php'; // include footer ?>

	<script src="scripts/jquery-3.2.1.min.js"></script>
	<script src="scripts/scripts.js"></script>
	<script src="scripts/backtotop.js"></script>

</body>
</html>
