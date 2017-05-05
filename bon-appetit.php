<!DOCTYPE html>
<html lang="en">
<head>
<title>Brenda Lau | Bon Appetit Project </title>
	<?php include 'include/header.php'; // includes all header content ?>
</head>

<body id="home">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	<?php include 'include/about.php'; // include about me section ?>

		<section id="hero-image" class="bonapp">
		<div class="hero-filter">
			<?php include 'include/nav.php'; // include nav ?>		
			</div> <!-- end hero filter -->		
		</section> <!-- end hero image -->

	<main id="content">
		<div class="showcase-wrapper">

		<section id="showcase">

		<h2 class="title">Bon App&Eacute;tit</h2>

		<div class="skills-wrapper">
		<ul class="skills">
			<li>User Experience Design</li>
			<li>Responsive Design</li>
			<li>Mobile First Design</li>
			<li>HTML</li>
			<li>CSS</li>
			<li>jQuery</li>
		</ul>
		</div> <!-- skills wrapper -->

		<div class="description">
		<p>The objective of this project was to create a one-page responsive site that is compatible across all devices – desktop, tablet and mobile. This project ties together two things I am passionate about: good food & responsive design. I designed this project with flexbox to create a masonry grid layout (inspired by pinterest) which is based on columns that don’t have fixed height rows. I used a lightbox to showcase the images. With a responsive design approach, I disabled the lightbox on specific screen sizes and switched in a responsive navigation bar to bring together a functional user experience.</p>
		</div> <!-- end description -->

		<a href="/projects/responsive/" class="btn-project-pg" title="View Project" target="_blank">View Live</a>

		<div class="border"></div>

		<div class="description">
		<p>I incorporated colorful food imagery to bring out the vibrant theme of this project. I also used a hover effect on the images so that users would be inclined to click on the photos. </p>	
		</div> <!-- end description -->

		<div class="photo-wrapper">

			<div class="photo">
				<img src="images/project/responsive-2.jpg" alt="" title="">
			</div>

		</div> <!-- end photo wrapper -->


			
		</section> <!-- end section showcase -->

		</div> <!-- end showcase wrapper -->
	</main>	


	<?php include 'include/footer.php'; // include footer ?>

	<script src="scripts/jquery-2.2.4.min.js"></script>
	<script src="scripts/scripts.js"></script>

</body>
</html>
