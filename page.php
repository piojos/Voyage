<?php

/*
Page Template
Neue Raidho Website					:	25%
									//	– Lazy Load
*/

$bclass = "page";
get_header();

global $post;
$post_slug=$post->post_name; ?>


<section id="<?php echo $post_slug; ?>"><?php

while ( have_rows('blocks') ) : the_row();


	if( get_row_layout() == 'intro' ):

		get_template_part('inc/pg/A', 'Intro');


	elseif( get_row_layout() == 'titling' ):

		get_template_part('inc/pg/B', 'Titling');


	elseif( get_row_layout() == 'list' ) :

		get_template_part('inc/pg/C', 'List');


	elseif( get_row_layout() == 'form' ):

		get_template_part('inc/pg/D', 'Form');


	elseif( get_row_layout() == 'slider' ):

		get_template_part('inc/pg/E', 'Slider');


	elseif( get_row_layout() == 'big-image' ):

		get_template_part('inc/pg/F', 'BigImage');


	elseif( get_row_layout() == 'from-log' ):

		get_template_part('inc/pg/G', 'FromLog');


	elseif( get_row_layout() == 'two-cols' ):

		get_template_part('inc/pg/H', 'TwoCols');


	elseif( get_row_layout() == 'members' ):

		get_template_part('inc/pg/I', 'Members');


	elseif( get_row_layout() == 'more' ):

		get_template_part('inc/pg/J', 'More');


	endif;
endwhile; ?>

</section>

<?php /* get_template_part('templates/extended_nav'); ?>

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

<?php */

get_footer(); ?>
