<!DOCTYPE html>
<html lang="en">
<head>
	<title>Brenda Lau | Election Site Strategy Project </title>
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

			<section id="showcase">

				<h2 class="title">Election Website Redesign</h2>

				<div class="skills-wrapper">
					<ul class="skills">
						<li>User Experience Design</li>
						<li>Information Architecture</li>
						<li>User Personas</li>
						<li>Competitive Gap Analysis</li>
						<li>Content Audit</li>
						<li>Wireframes</li>
						<li>Prototyping</li>
					</ul>
				</div> <!-- skills wrapper -->

				<div class="description">
					<p>The scope of this UX project was to create a content strategy proposal to redesign the ‘Elections Canada’ website. The redesign aims to deliver an organized site architecture that simplifies the process of voting and improves the current user experience from beginning to end. The design incorporates a clean and effective layout that is easy for all types of users to navigate for information. </p>
					<p>The project was separated in two parts – Content Strategy and Prototype.  The content strategy was developed in a collaborative effort of five team members. The individual component consisted of creating a functioning coded prototype, style guide and style tile. View the below pdf strategy for more details.</p>	
				</div> <!-- end description -->

				<a href="/projects/elections-canada-ux-project.pdf" class="btn-project-pg" title="View Strategy" target="_blank">View Strategy</a>

				<div class="border"></div>

				<div class="description">
					<p><span class="bold">Content Strategy</span> &nbsp; For the strategy, we first began with a design sprint to generate as many ideas as possible in order to understand, define and decide on the direction of our design. From there, we established user and steakholder goals, target audiences and interviewed users to develop fact based personas and empathy maps. We interviewed a total of 25 users for this case study. </p>

					<p> The strategy also includes an information architecture and competitive gap analysis where the voting websites of four countries were compared against ‘Elections Canada’. The countries that were chosen for the analysis have diverse demographics and well established voting systems in place that reflect similarities to that of Canada's system. </p>	
					
					<p><span class="bold">Proposal</span> &nbsp; The proposal brings together key elements to redesign the current Elections Canada website with a focus on the “How to Vote” section. The proposed redesign would focus on a clean, modern approach and would include the change of fonts, colors and layout of the overall site. In addition, the use of more images will provide a better visual reference and appeal to more users visiting the site.  </p>
				</div>

				<div class="photo-wrapper">
					<div class="photo-reg">
						<img src="images/project/ux-project/ux-project-3.jpg" alt="Elections Canada Screenshot" title="Elections Canada Screenshot">
					</div>			
					<div class="photo">
						<img src="images/project/ux-project/ux-project-1.jpg" alt="Elections Canada Style Guide" title="Elections Canada Style Guide">
					</div>
					<div class="photo">
						<img src="images/project/ux-project/ux-project-2.jpg" alt="Elections Canada Style Tile" title="Elections Canada Style Tile">
					</div>						
				</div> <!-- end photo wrapper -->

				<div class="description">
					<p><span class="bold">Style Guide and Tile</span> The style tile and guide brings together a visual reference to the design language of the site and also includes the voice and tone the site should convey. </p>
				</div>

			</section> <!-- end section showcase -->

		</div> <!-- end showcase-wrapper -->
	</main>

	<a href="#" class="go-top">Top</a>	

	<?php include 'include/footer.php'; // include footer ?>

	<script src="scripts/jquery-3.2.1.min.js"></script>
	<script src="scripts/scripts.js"></script>
	<script src="scripts/backtotop.js"></script>

</body>
</html>
