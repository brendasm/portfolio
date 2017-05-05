<!DOCTYPE html>
<html lang="en">
<head>
	<title>Brenda Lau | Jquery Project
	</title>
	<?php include 'include/header.php'; // includes all header content ?>
</head>

<body id="home">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	<?php include 'include/about.php'; // include about me section ?>

	<section id="hero-image" class="jquery">
		<div class="hero-filter">
			<?php include 'include/nav.php'; // include nav ?>
		</div> <!-- end hero filter	 -->		
	</section> <!-- end hero image -->

	<main id="content">
		<div class="showcase-wrapper">

			<section id="showcase">

				<h2 class="title">Jquery Tutorial</h2>

				<div class="skills-wrapper">
					<ul class="skills">
						<li>Visual Design</li>
						<li>HTML</li>
						<li>CSS</li>
						<li>Javascript / jQuery</li>
					</ul>
				</div>

				<div class="description">
					<p>The goal of this project was to create a site to showcase the use of javascript / jQuery in three tutorials. The tutorials are focused on an imagery theme with step-by-step instructions to incorporate jQuery image effects on any site. The project is designed to be clean, concise and easy for users to follow through each tutorial.</p>

					<p>Since this is an earlier project, responsive design is not implemented. Project is best viewed on browsers with screen sizes 1100px and up.</p>
				</div> <!-- end description -->

				<a href="/projects/jquery-tutorial/" class="btn-project-pg" title="View Project" target="_blank">View Live</a>

				<div class="border"></div>

				<div class="description">
					<p>The first tutorial showcases an image slider, the second one an image zoom effect. Both tutorials are to be used in conjunction with embedded code snippets and a plugin. Documentation is provided for the plugins to allow for easy implementation. Finally, the last tutorial is also an image slider which shows line by line the written script required to function. The site also includes a sticky navbar to allow easy navigation between tutorials. 
					</p>
					<p>Since the step-by-step documentation is text heavy, I used accordion tabs to hide/show information as required. </p>
				</div> <!-- end description -->

				<div class="swatch">
					<div class="swatch-single jquery1"><p>#FFEFD5</p></div>
					<div class="swatch-single jquery2"><p>#ADD8E6</p></div>
					<div class="swatch-single jquery3"><p>#A9A9A9</p></div>
				</div> <!-- end swatch -->

				<div class="description">
					<p>I incorporated three light and warm colors to bring out a tropical theme for the site. </p>
				</div>

				<div class="photo-wrapper">
					<div class="photo">
						<img src="images/project/tutorial-1.png" alt="jquery tutorial screenshot" title="jquery tutorial screenshot">
					</div>
					<div class="photo">
						<img src="images/project/tutorial-2.png" alt="jquery tutorial screenshot" title="jquery tutorial screenshot">				
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
