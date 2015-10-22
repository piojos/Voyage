<?php $image = get_sub_field('img'); ?>

		<div class="wrap">
			<div>
				<h2 class="Decima"><?php the_sub_field('kicker'); ?></h2>
				<h1 class="Leitura"><?php the_sub_field('content'); ?></h1>
			</div>
		</div>

		<div class="section_bottom_margins">
			<picture>
				<img class="full_width_image"
					 src="<?php echo $image['sizes']['huge']; ?>"
					 <?php echo tevkori_get_srcset_string( $image['ID'], 'largest' ); ?>
					 alt="<?php echo $image['alt']; ?>" />
			</picture>
		</div>
