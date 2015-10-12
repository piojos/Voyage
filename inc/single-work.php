<?php

/*
Single Work Template
Neue Raidho Website					:	50%
Missing:
- Slider template (Linda)
*/

$bclass = "page";
$A = 'A';
?>

    <?php /* LINDA: añadir funcionalidad de slider más adelante */ ?>
	<div class="section_bottom_margins"><?php

		$images = get_field('cover-slider');
		$imgCount = count( $images );

		if($imgCount == 1) {

			if( $images ):
				foreach( $images as $image ): ?>
					<picture>
						<img class="full_width_image"
							 src="<?php echo $image['sizes']['larger']; ?>"
							 <?php echo tevkori_get_srcset_string( $image['ID'], 'huge' ); ?>
							 alt="<?php echo $image['alt']; ?>" />
					</picture><?php
				endforeach;
			endif;

		} else {	/* ?>

			<div id="slider" class="flexslider">
				<?php foreach( $images as $image ): ?>
					<div class="slide">
						<picture>
							<img class="full_width_image"
								 src="<?php echo $image['sizes']['larger']; ?>"
								 <?php echo tevkori_get_srcset_string( $image['ID'], 'huge' ); ?>
								 alt="<?php echo $image['alt']; ?>" />
						</picture>
					</div>
				<?php endforeach; ?>
			</div><?php */

		} ?>
	</div>

	<div class="wrap">
		<div>
			<h1><?php the_title(); ?></h1>
			<h2 class="Leitura"><?php the_field('subtitle'); ?></h2>
			<h2 class="Leitura"><?php the_field('excerpt'); ?></h2>
		</div>
	</div><?php




// Loop for Modules

	while ( have_rows('blocks') ) : the_row();

// Imagenes
		if( get_row_layout() == 'imagenes' ) :


			if (get_sub_field('choose') == 'one') :
				echo 'one: images';
				$images = get_sub_field('gallery');
				if($images) : ?>
					<div class="bl-party-one-no-captions"><?php
						foreach( $images as $image ): ?>
							<div>
								<picture>
									<img class="full_width_image"
										 src="<?php echo $image['sizes']['larger']; ?>"
										 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
										 alt="<?php echo $image['alt']; ?>" />
								</picture>
							</div><?php
						endforeach;
						if(get_sub_field('caption')){ ?>
							<div class="caption decima"><?php the_sub_field('caption') ?></div><?php
						} ?>
					</div><?php
				endif;

			elseif (get_sub_field('choose') == 'two') :
				// echo 'two: images';
				$images = get_sub_field('gallery');
				if($images) : ?>
					<div class="bl-party-two-no-captions"><?php
						foreach( $images as $image ): ?>
							<div>
								<picture>
									<img
										 src="<?php echo $image['sizes']['larger']; ?>"
										 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
										 alt="<?php echo $image['alt']; ?>" />
								</picture>
							</div><?php
						endforeach;
						if(get_sub_field('caption')){ ?>
							<div class="caption decima"><?php the_sub_field('caption') ?></div><?php
						} ?>
					</div><?php
				endif;


			elseif (get_sub_field('choose') == 'one-half') :
				// echo 'one-half: 1 vertical image, 2 Images half the height';
				$images = get_sub_field('gallery');
				if($images) : ?>
					<div class="bl-party-three-one-caption"><?php
						foreach( $images as $image ): ?>
							<div>
								<picture>
									<img src="<?php echo $image['sizes']['larger']; ?>"
										 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
										 alt="<?php echo $image['alt']; ?>" />
								</picture>
							</div><?php
						endforeach;
						if(get_sub_field('caption')){ ?>
							<div class="caption decima"><?php the_sub_field('caption') ?></div><?php
						} ?>
					</div><?php
				endif;


			elseif (get_sub_field('choose') == 'thirds') :
				// echo 'thirds: 3 images, no cap';
				$images = get_sub_field('gallery');
				if($images) : ?>
					<div class="bl-party-three-no-captions"><?php
						foreach( $images as $image ): ?>
							<div>
								<picture>
									<img src="<?php echo $image['sizes']['larger']; ?>"
										 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
										 alt="<?php echo $image['alt']; ?>" />
								</picture>
							</div><?php
						endforeach;
						if(get_sub_field('caption')){ ?>
							<div class="caption decima"><?php the_sub_field('caption') ?></div><?php
						} ?>
					</div><?php
				endif;


			elseif (get_sub_field('choose') == 'thirds-cap') :
				// echo 'thirds-cap: images';
				$images = get_sub_field('gallery');
				if($images) : ?>
					<div class="wrap bl-party-three-w-captions">
						<ul><?php
							foreach( $images as $image ): ?>
								<li>
									<picture>
										<img src="<?php echo $image['sizes']['larger']; ?>"
											 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
											 alt="<?php echo $image['alt']; ?>" />
									</picture><?php
									if($image['caption']){
										echo '<p class="small_paragraph Decima">'. $image['caption'] .'</p>';
									} ?>
								</li><?php
							endforeach;	?>
						<ul>
					</div><?php
				endif;

			elseif (get_sub_field('choose') == 'slider') :
				echo 'slider: images<br> @Linda, onstáh esto?';


			elseif (get_sub_field('choose') == 'mayhem') :
				echo 'mayhem: images';
/*
				$images = get_sub_field('gallery');
				if($images) : ?>
					<div class="wrap bl-party-random-grid section_pad">
						<?php
							$mhmNo = 1;
							foreach( $images as $image ): ?>
								<?php
									if($mhmNo == 1) { ?>
									<div class="rand-grid-a left">
										<div class="rand-grid-a-top">
											<picture>
												<img class="rand-grid-img-<?php echo $nhmNo; ?>"
													 src="<?php echo $image['sizes']['larger']; ?>"
													 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
													 alt="<?php echo $image['alt']; ?>" />
											</picture>
										</div><?php


									} elseif ($mhmNo == 2) { ?>
										<div class="rand-grid-a-bottom">
											<div>
												<picture>
													<img class="rand-grid-img-<?php echo $nhmNo; ?>"
														 src="<?php echo $image['sizes']['larger']; ?>"
														 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
														 alt="<?php echo $image['alt']; ?>" />
												</picture><?php


									} elseif ($mhmNo == 3) { ?>
												<picture>
													<img class="rand-grid-img-<?php echo $nhmNo; ?>"
														 src="<?php echo $image['sizes']['larger']; ?>"
														 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
														 alt="<?php echo $image['alt']; ?>" />
												</picture>
											</div><?php


									} elseif ($mhmNo == 4) {  ?>
											<div>
												<picture>
													<img class="rand-grid-img-<?php echo $nhmNo; ?>"
														 src="<?php echo $image['sizes']['larger']; ?>"
														 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
														 alt="<?php echo $image['alt']; ?>" />
												</picture>
											</div>
										</div>
									</div><?php


									} elseif ($mhmNo == 5) {  ?>
									<div class="rand-grid-c right">
										<picture>
											<img class="rand-grid-img-<?php echo $nhmNo; ?>"
												 src="<?php echo $image['sizes']['larger']; ?>"
												 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
												 alt="<?php echo $image['alt']; ?>" />
										</picture><?php


									} elseif ($mhmNo <= 6) { ?>
										<picture>
											<img class="rand-grid-img-<?php echo $nhmNo; ?>"
												 src="<?php echo $image['sizes']['larger']; ?>"
												 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
												 alt="<?php echo $image['alt']; ?>" />
										</picture>
									</div><?php


									} elseif ($mhmNo == 8) { ?>
										<picture>
											<img class="rand-grid-img-<?php echo $nhmNo; ?>"
												 src="<?php echo $image['sizes']['larger']; ?>"
												 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
												 alt="<?php echo $image['alt']; ?>" />
										</picture>
									</div><?php
									}
									$mhmNo++;

							endforeach;	?>
					</div><?php
				endif; */


			endif;




// Titles
		elseif( get_row_layout() == 'titling' ) :

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
						<p class="blue Decima"><?php the_sub_field('title'); ?></p>
						<p class="Leitura medium_title"><?php the_sub_field('content'); ?></p>
					</div>
				</div><?php
			if(get_sub_field('bg-img')) {
				echo '</div>';
			}


		endif;
	endwhile; ?>


    <?php /*





<?php get_template_part('inc/contact_share'); ?>

<?php // more projects ?>
<section class="gray_light_bg">
    <div class="wrap bl-party-three-w-captions">
        <h2 class="Decima">Explore More Projects</h2>
        <ul>
            <li>
                <img src="http://lorempixel.com/380/380/technics">
                <p>Penguin Books. <span class="Leitura">An Expanding Universe Keynote.</span></p>
            </li>
            <li>
                <img src="http://lorempixel.com/380/380/technics">
                <p>Comunidad VIVEX. <span class="Leitura">Re-defining the News in Mexico.</span></p>
            </li>
            <li>
                <img src="http://lorempixel.com/380/380/technics">
                <p>Knock your Wear. <span class="Leitura">Professional Image Consulting.</span></p>
            </li>
        <ul>
    </div>
</section> */ ?>
