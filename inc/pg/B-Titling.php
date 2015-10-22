<?php

if(get_sub_field('bg-img')) {
	$img = get_sub_field('bg-img');
	$bgClr = get_sub_field('bg-color');

	$img_med = wp_get_attachment_image_src($img, 'medium');
	$img_large = wp_get_attachment_image_src($img, 'large');
	$img_larger = wp_get_attachment_image_src($img, 'larger');
	$img_largest = wp_get_attachment_image_src($img, 'largest');
	$img_huge = wp_get_attachment_image_src($img, 'full-size');

	if($img){
		echo '<style> #bg-'.$A.' {background-image: url(' . $img_med[0] . ');';
		if($bgClr) {
			echo '} #bg-'.$A.':before {background-color:'.$bgClr;
		}
		echo '}';
		if($img_med) { echo ' @media (min-width: 600px) { #bg-'.$A.' {background-image: url(' . $img_large[0] . ');} }'; }
		if($img_large) { echo ' @media (min-width: 1024px) { #bg-'.$A.' {background-image: url(' . $img_larger[0] . ');} }'; }
		if($img_larger) { echo ' @media (min-width: 1400px) { #bg-'.$A.' {background-image: url(' . $img_largest[0] . ');} }'; }
		if($img_largest) { echo ' @media (min-width: 1800px) { #bg-'.$A.' {background-image: url(' . $img_huge[0] . ');} }'; }
		echo '</style>';
	}
	echo '<div id="bg-'. $A++ .'" class="back_img_quote">';
} ?>
<div class="wrap">
	<div>
		<div class="blue Decima"><?php the_sub_field('title'); ?></div>
		<div class="Leitura medium_title"><?php the_sub_field('content'); ?></div>
	</div>
</div><?php
// if(get_sub_field('bg-img')) {
// 	echo '</div>';
// } ?>
