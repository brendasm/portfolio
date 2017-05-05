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
				<p>The objective of this project was to create a one-page responsive site that is compatible across all devices – desktop, tablet and mobile. This project ties together two things I am passionate about: good food &amp responsive design. I designed this project with flexbox to create a masonry grid layout (inspired by pinterest) which is based on columns that don’t have fixed height rows. I used a lightbox to showcase the images. With a responsive design approach, I disabled the lightbox on specific screen sizes and switched in a responsive navigation bar to bring together a functional user experience.</p>
				</div> <!-- end description -->

				<a href="/projects/responsive/" class="btn-project-pg" title="View Project" target="_blank">View Live</a>

				<div class="border"></div>

				<div class="description">
					<p>I incorporated colorful food imagery to bring out the vibrant theme of this project. I also used a hover effect on the images so that users would be inclined to click on the photos to enable the lightbox. </p>
					<p>A black, white and gray color swatch was chosen for this project to keep the design minimalistic against the vibrant colors of the images.</p>	
				</div> <!-- end description -->

				<div class="swatch">
					<div class="swatch-single responsive1"><p>#000000</p></div>
					<div class="swatch-single responsive2"><p>#F5F5F5</p></div>
					<div class="swatch-single responsive3"><p>#2E2D2D</p></div>
				</div> <!-- end swatch -->		

				<div class="photo-wrapper">

					<div class="photo-reg">
						<img src="images/project/responsive/responsive-1.png" alt="bonappetit ipad screenshot" title="bonappetit ipad screenshot">
					</div>
					<div class="photo-reg">
						<img src="images/project/responsive/responsive-2.png" alt="bonappetit ipad screenshot" title="bonappetit ipad screenshot">
					</div>				
					<div class="photo-reg">
						<img src="images/project/responsive/responsive-3.jpg" alt="bonappetit iphone screenshot" title="bonappetit iphone screenshot">
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
