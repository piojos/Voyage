<li class="<?php
	$postType = get_post_type( $post->ID );
	foreach(get_the_category() as $category) {
		$catSlug = $category->slug;
		echo $catSlug.' ';
	}
	echo get_post_type( $post->ID ).' '; ?>masonry_item"><?php


	if($catSlug == 'twitter'){
		/* Strip tweet
		$string = get_the_title();
		$patterns = array ('/#trvl/', '/#crft/', '/#rcko/', '/#mtng/', '/#quot/', '/#bike/',
		'/#food/', '/#riot/', '/raaidho: /', '/irpiojos: /', '/rottensk: /', '/ornitoringostar: /',
		'/#rdhlog /', '/#rdhlg /');
		$replace = array (' /#/ ', ' /#/ ', ' /#/ ', ' /#/ ', ' /#/ ', ' /#/ ',
		' /#/ ', ' /#/ ', ' ', ' ', ' ', ' ',
		' ', ' ');
		$newTweet = preg_replace($patterns, $replace, $string); */
		$user = get_the_author_meta('user_login'); ?>

		<div class="red_bg white">
			<blockquote class="small_title"><?php the_title(); ?></blockquote>
			<p><a href="<?php echo esc_url(home_url('/author/')); ?>">
				Twitted by <?php the_author(); ?>
			</a></p>
		</div><?php

	} else {
		$image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');
		$imgArray = get_the_image( array( 'image_scan' => true, 'format' => 'array' ) );

		if($image) { ?>
			<a href="<?php the_permalink(); ?>">
				<img src="<?php echo $image[0]; ?>" />
			</a><?php

		} elseif($imgArray){ ?>
			<a href="<?php the_permalink(); ?>"> <?php
				get_the_image( array( 'size' => 'thumbnail', 'image_scan' => true, 'link_to_post' => false ) ); ?>
			</a><?php
		}


		if($postType == 'work') {
			echo '<p class="small_title"><a href="'.get_the_permalink().'"><span class="red">New Project:</span> '.get_the_title().'</a></p>';
		} elseif($postType == 'blog') {
			echo '<p><a href="'.get_the_permalink().'">'.get_the_title().'</a></p>';
		} else {
			echo '<p>'.get_the_title().'</p>';
		}
	} ?>
</li> <?php /*

<a href="<?php


?>" data-lightbox="lb_img" target="_blank"><?php get_the_image( array( 'meta_key' => array( 'Thumbnail', 'thumbnail' ), 'size' => 'thumbnail', 'image_scan' => true, 'link_to_post' => false ) ); ?></a>



<li class="dribble masonry_item">
	<a href="#"><img src="http://lorempixel.com/400/300/technics"></a>
	<p>Logo Nocturno</p>
</li>
<li class="instagram masonry_item">
	<a href="#"><img src="http://lorempixel.com/400/400/technics"></a>
	<p>Good Times; almost 2 years [Nov 2012] photo by @ Rotten</p>
</li>
<li class="share masonry_item">
	<a href="#"><img src="http://lorempixel.com/400/200/technics"></a>
	<p>Dâ Wearhouse’s new collection: Partners in Crime is now online</p>
</li>
<li class="twitter masonry_item">
	<div class="red_bg white">
		<blockquote class="small_title">Charles Eames said: “Eventually everything connects – People, Ideas, Objects. The quality of the connections is the key to quality per se.”</blockquote>
	<p><a href="#">Twitted by Quiroga</a></p>
	</div>
</li>
<li class="work masonry_item">
	<a href="#"><img src="http://lorempixel.com/400/400/technics"></a>
	<p class="small_title"><a href="#"><span class="red">New Project:</span> Explainer video for Colombian Tech Bootcamp Make it Real.</a></p>
</li>
<li class="blog masonry_item">
	<a href="#"><img src="http://lorempixel.com/400/400/technics"></a>
	<p>Residente: El Potencial de Fundidora</p>
</li>
<li class="instagram masonry_item">
	<a href="#"><img src="http://lorempixel.com/400/400/technics"></a>
	<p>#Linda #Dinosaurios #coder</p>
</li>
<li class="dribble masonry_item">
	<a href="#"><img src="http://lorempixel.com/400/300/technics"></a>
	<p>New Homepage Quick Test</p>
</li>
<li class="share masonry_item">
	<a href="#"><img src="http://lorempixel.com/400/300/technics"></a>
	<p>Rides for cash: ¿When will my bike pay for itself?</p>
</li>

*/ ?>
