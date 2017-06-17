<!DOCTYPE html>
<html lang="en">
<head>
<title>Brenda Lau | UX Designer | Web Developer</title>
	<?php include 'include/header.php'; // includes all header content ?>
</head>

<body id="home">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	<?php include 'include/about.php'; // include about me section ?>

	<div class="bg">
		<?php include 'include/nav.php'; // include nav ?>

		<section id="branding">

			<div class="header-logo">
				<img src="images/logo/diamond.svg" class="rotateshape" alt="Brenda Lau logo">
			</div> <!-- end header logo -->

			<header class="header-info">
				<h1>Hello</h1>
				<h2 class="typewrite"></h2> 
			</header> <!-- end header info -->

		</section> <!-- end branding -->
	</div> <!-- end back bg to cover nav and header -->

	<main id="content">
		<div class="wrapper">

			<section id="intro">

				<div class="divider div-transparent div-arrow-down"></div>

				<h2 class="title">Things I Love</h2>

				<div class="title-p">
					<p>I love designing cohesive web and mobile interfaces that bring together simplicity, functionality and engaging user experiences. </p>
				</div> <!-- end title p -->

				<div class="process-wrapper">

					<div class="group">
						<figure class="icon">
							<img src="images/icons/identify.svg" title="UX Process-Identify" alt="Identify Icon">
						</figure>
						<h4>Identify Problem</h4>
					</div>


					<div class="group">
						<figure class="icon">
							<img src="images/icons/research.svg" title="UX Process-Research" alt="Research Icon"> 
						</figure>
						<h4>Research</h4>
					</div>


					<div class="group">
						<figure class="icon">
							<img src="images/icons/design.svg" title="UX Process-Design" alt="Design Icon">
						</figure>
						<h4>Design</h4>
					</div>	

					<div class="group">
						<figure class="icon">
							<img src="images/icons/prototype.svg" title="UX Process-Prototype" alt="Prototype Icon">
						</figure>
						<h4>Prototype</h4>
					</div>	

					<div class="group">
						<figure class="icon">
							<img src="images/icons/testing.svg" title="UX Process-Testing" alt="User Testing Icon">
						</figure>
						<h4>User Testing</h4>
					</div>

					<div class="group">
						<figure class="icon">
							<img src="images/icons/iterate.svg" title="UX Process-Iterate" alt="Iterate Icon">
						</figure>
						<h4>Iterate In-Between</h4>
					</div>	

				</div> <!-- end my process wrapper -->

			</section> <!-- end section intro -->


			<section id="portfolio">

				<div class="border"></div> 

				<h2 class="title">Current Projects</h2>

				<div class="project-wrapper">

					<article class="project">
						<div class="project-info">
							<a href="easystreak.php">
								<img src="images/project/easystreak-0.jpg" alt="Easy Streak Redesign" title="Easy Streak Redesign" />
							</a>
						</div> <!-- end project info -->
						<a class="btn-project" href="easystreak.php"><span class="screen-reader-text">View Project</span><h3>Easy Streak</h3></a> 
					</article> <!-- end project -->				

					<article class="project">
						<div class="project-info">
							<a href="mydevelopingchild.php">
								<img src="images/project/mydevelopingchild-0.jpg" alt="My Developing Child Project" title="My Developing Child Site Project" />
							</a>
						</div> <!-- end project info -->
						<a class="btn-project" href="mydevelopingchild.php"><span class="screen-reader-text">View Project</span><h3>My Developing Child</h3></a> 
					</article> <!-- end project -->

					<article class="project">
						<div class="project-info">
							<a href="election-site-strategy.php">
								<img src="images/project/ux-project-0.jpg" alt="Election Site Strategy Project" title="Election Site Strategy Project" />
							</a>
						</div> <!-- end project info -->
						<a class="btn-project" href="election-site-strategy.php"><span class="screen-reader-text">View Project</span><h3>Election Website</h3></a>
					</article> <!-- end project -->

					<article class="project">
						<div class="project-info">
							<a href="bon-appetit.php">
								<img src="images/project/bon-appetit-0.jpg" alt="Bon Appetit Project" title="Bon Appetit Project" />
							</a>
						</div> <!-- end project info -->
						<a class="btn-project" href="bon-appetit.php"><span class="screen-reader-text">View Project</span><h3>Bon App&eacute;tit</h3></a>
					</article> <!-- end project -->

					<article class="project">
						<div class="project-info">
							<a href="jquery-tutorial.php">
								<img src="images/project/jquery-tutorial-0.jpg" alt="Jquery Tutorial Project" title="Jquery Tutorial Project" />
							</a>
						</div> <!-- end project info -->
						<a class="btn-project" href="jquery-tutorial.php"><span class="screen-reader-text">View Project</span><h3>Jquery Tutorial</h3></a>
					</article> <!-- end project -->

				</div> <!-- end project wrapper -->

			</section> <!-- end portfolio -->


		</div> <!-- end wrapper -->
	</main>

	<?php include 'include/footer.php'; // include footer ?>

	<script src="scripts/jquery-3.2.1.min.js"></script>
	<script src="scripts/scripts.js"></script>
	<script src="scripts/typed.min.js"></script>

</body>
</html>


