<?php
	get_header();

	while(have_posts()) : the_post();

		if(is_singular('portfolio')) :
			get_template_part('inc/single', 'work');
		elseif(is_singular('blog')) :
			get_template_part('inc/single', 'blog');
		else :
			echo 'No template for this';
		endif;

	endwhile;
	get_footer(); ?>
