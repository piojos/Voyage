<?php

/*
Header Template
Neue Raidho Website
*/

global $bclass;

?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content=" ">
	<meta name="author" content=" ">

	<title><?php wp_title(); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsivemenu.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/leitura/MyFontsWebfontsKit.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/decima/MyFontsWebfontsKit.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<script src="<?php bloginfo('template_url'); ?>/js/masonry.pkgd.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/imagesloaded.pkgd.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>

</head>

<body <?php body_class($bclass); ?> >

	<header>

		<div class="wrap">
			<h3 id="nav_logo">RAIDHO</h3>

			<ul id="nav" class="Decima">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="work.php">Work</a></li>
				<li><a href="services.php">Services</a></li>
				<!-- <li><a href="recent.php">Recent</a></li> -->
				<!-- <li><a href="contact.php">Contact</a></li> -->
			</ul>
			<ul id="dev_nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="work.php">Work</a></li>
				<li><a href="work-single.php">S-Project</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="services.php">S-Blog</a></li>
			</ul>

		</div>
	<?php wp_head(); ?>
	</header>
