<?php

/*
Home Template
Neue Raidho Website
*/

include "templates/header.php";

?>

<section id="services">

	<div class="wrap">
		<div>
			<h2 class="Decima">Services</h2>
			<h1 class="Leitura"><span class="red">Good Design is Good Business</span>. We make this happen through a Design Driven Approach to Technology and Communication.</h1>
		</div>
	</div>

	<div class="section_bottom_margins">
		<img class="full_width_image" src="http://lorempixel.com/1280/740/technics">
	</div>

	<div class="wrap">
	    <div>
            <p class="blue Decima">Value Proposition <span class="replica">→</span></p>
            <p class="Leitura medium_title">Our work connects brands and people through engaging digital narratives, products and services — we’ll make your business thrive in the digital economy</p>
        </div>
	</div> <!-- Wrap -->

	<div class="border_section"> <!-- Digital Business -->
	<div class="wrap">
        <h2 class="red Decima">1. Digital Business</h2>
		<div class="basic_grid two_col_grid">
			<div>
				<p class="Leitura medium_title">We focus on creating highly intuitive, usable and impactful digital products and services.</p>
			</div>
			<div>
				<h4 class="Decima">Digital Business services:</h4>
				<ul class="small_title Decima bullet_list">
					<li>Responsive Web Design</li>
					<li>Web Applications</li>
					<li>E-Commerce</li>
					<li>Mobile & Multiplatform Apps</li>
				</ul>
			</div>
		</div>
		<div class="bl-party-two-w-captions">
			<ul>
				<li>
					<a href="#">
						<img src="http://lorempixel.com/380/380/technics">
						<p>Penguin Books. <span class="Leitura">An Expanding Universe Keynote.</span></p>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="http://lorempixel.com/380/380/technics">
						<p>Comunidad VIVEX. <span class="Leitura">Re-defining the News in Mexico.</span></p>
					</a>
				</li>
			<ul>
		</div>
    </div>
	</div> <!-- Digital Business -->

	<div class="border_section"> <!-- Brand Development -->
	<div class="wrap">
        <h2 class="red Decima">2. Brand Development</h2>
		<div class="basic_grid two_col_grid">
			<div>
				<p class="Leitura medium_title">We deliver clear and actionable direction for how a Brand should behave in digital and traditional forms.</p>
			</div>
			<div>
				<h4 class="Decima">Brand Dev main services:</h4>
				<ul class="small_title Decima bullet_list">
					<li>Identity Systems</li>
					<li>Content Strategy</li>
					<li>Digital Design</li>
					<li>Naming</li>
				</ul>
			</div>
		</div>
		<div class="bl-party-two-w-captions">
			<ul>
				<li>
					<a href="#">
						<img src="http://lorempixel.com/380/380/technics">
						<p>Penguin Books. <span class="Leitura">An Expanding Universe Keynote.</span></p>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="http://lorempixel.com/380/380/technics">
						<p>Comunidad VIVEX. <span class="Leitura">Re-defining the News in Mexico.</span></p>
					</a>
				</li>
			<ul>
		</div>
    </div>
	</div> <!-- Brand Development -->

	<div class="back_img_quote" style="background-image: url(img/home_cover_back.jpg)">
		<div class="wrap">
		    <div>
	            <p class="blue Decima">Business Relationship <span class="replica">→</span></p>
	            <p class="Leitura medium_title">We aim to build long lasting partnerships with our customers — jointly developing strategies to capture new opportunities for their brands, business, communication and culture.</p>
	        </div>
		</div> <!-- Wrap -->
	</div>

	<?php // Contact complex ?>
	<?php include "templates/contact_complex.php"; ?>

	<div class="wrap">
	    <div class="section_pad">
            <p class="blue Decima">Process / how we make things happen <span class="replica">→</span></p>
            <p class="Leitura medium_title">Our process is a journey of self discovery — we guide our clients through every step from the smallest strategic details to design and development.</p>
        </div>
	</div> <!-- Wrap -->

	<div class="gray_light_bg section_pad"> <!-- Process Slider -->
		<div class="wrap">
			<div>
				<h3 class="Decima">Our process, step by step</h3>
				<p class="Leitura medium_title">Process Slider goes Here.</p>
			</div>
		</div> <!-- Wrap -->
	</div>

	<img class="full_width_image" src="http://lorempixel.com/1280/740/technics">

	<?php include "templates/contact_lean.php"; ?>

</section>

	<?php include "templates/extended_nav_minus.php"; ?>

	<section class="feat_project">
		<div class="wrap">
			<div class="feat_project_info">
				<h2><span class="white">Featured Project:</span> Brand Redesign for Major Hospital ABC.</h2>
				<p class="Decima">After more than 25 years without a major brand redesign, we had the opportunity to completely revamp the brand and visual identity for this 120 years old hospital.</p>
				<p class="Decima white"><a href="#">Read the full story →</a></p>
			</div>
		</div>
		<div class="transp_back_image" style="background-image: url(img/featured_single.jpg)"></div>
	</section>

<?php include "templates/footer.php"; ?>
