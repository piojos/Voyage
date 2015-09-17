<?php

/*
Page Template
Neue Raidho Website					:	25%
									//	– Lazy Load
*/

$bclass = "page";
include "templates/header.php";




// 	1· 	Intro 						: 	75%
									//	– Falta RICG ?>

	<div class="wrap">
		<div>
			<h2 class="Decima">About our Studio</h2>
			<h1 class="Leitura"><span class="red">Raidho</span> is the name of an r-rune, describing the concepts of "<em>ride, or journey</em>". That’s the simple idea upon which our studio was founded back in 2012.</h1>
		</div>
	</div>

	<img class="full_width_image" src="http://lorempixel.com/1280/740/technics"><?php




// 	2·	Titling						:	0%




// 	3·	Ordered List				:	0%




//	4·	Contact Form				:	0%




//	5·	Slider						:	0%
/*
	<section>
		<div class="wrap">
			<h2>What we stand for</h2>
			<div class="raidho_slider">
				<div class="raidho_slider_slide">
					<div style="background-image: url('http://lorempixel.com/600/600/technics')">
					</div>
					<div>
						<h2>Simplicity: Good Design always KISS</h2>
						<p>
						While Tools & Technology continue to advance, simplicity and clarity remain fundamental in our practice. We use Design as a means to define experiences that shape our present and our future.<br>
						<span class="gray_light">← DAT-1 Chair, by Charles Eames.</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
*/




// 	6·	Big Image					:	0%




// 	7·	From Log					:	0%




// 	8· 	Two Columns 				:	90%
									//	– h4 Falta un pading-right responsivo ?>

<div class="wrap">
	<div class="Decima about_intro">
		<div>
			<img src="http://lorempixel.com/540/540/technics">
			<h4>We work for a wide range of national and international clients, from Government Nanotechnology Clusters to Non-for-profit innovative organizations.</h4>
		</div>
		<div>
			<h4>We also involve frequently with technology and design startups, getting to know them well and helping them improve the value of their products and services through rich media design and effective communication.</h4>
			<img src="http://lorempixel.com/540/540/technics">
		</div>
	</div>
</div><?php




//	9·	Team						:	75%
									//	– founder defined on "li"
									//	– Bio's
									//	– Animations ?>

	<div class="wrap">
		<h2>People at Raidho</h2>

		<div class="people">
			<div class="founder">
				<img src="http://lorempixel.com/600/600/technics">
				<h4>David Quiroga</h4>
				<p class="Decima">
				Founder & Art Director<br>
				<a href="mailto:quiroga@raidho.mx">quiroga@raidho.mx</a>
				</p>
			</div>
			<div class="founder">
				<img src="http://lorempixel.com/600/600/technics">
				<h4>Francisco Martínez</h4>
				<p class="Decima">
				Founder & Lead Interaction Designer<br>
				<a href="mailto:martinez@raidho.mx">martinez@raidho.mx</a>
				</p>
			</div>
			<div>
				<img src="http://lorempixel.com/600/600/technics">
				<p>Miguel Balandrano</p>
				<p class="Decima">
				Designer<br>
				<a href="mailto:acider@raidho.mx">acider@raidho.mx</a>
				</p>
			</div>
			<div>
				<img src="http://lorempixel.com/600/600/technics">
				<p>Linda Castillo</p>
				<p class="Decima">
				Designer & Coder<br>
				<a href="mailto:linda@raidho.mx">linda@raidho.mx</a>
				</p>
			</div>
			<div>
				<img src="http://lorempixel.com/600/600/technics">
				<p>Rocko Raidho</p>
				<p class="Decima">
				PR Strategist<br>
				<a href="mailto:rocko@raidho.mx">rocko@raidho.mx</a>
				</p>
			</div>
		</div>
	</div><?php




//	10·	More of this				:	0% ?>



<?php include "templates/extended_nav.php"; ?>

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
