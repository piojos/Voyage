<script type="text/javascript">
	$(function () {
		$(".tabbed-slider").responsiveSlides({
			pager: false,
			auto: false,
			prevText: "-",
			nextText: "-",
			nav: true,
			manualControls: '.tabs-pager'
		});
	});
</script>

<section class="main_banner gray_light_bg">

	<ul class="tabs-pager"><?php
		$tabN = 1;
		while(have_rows('tabs')) {
			the_row();
			echo '<li><a href="#tab'.$tabN++.'"><p>'.get_sub_field('title').'</p></a></li>';
		} ?>
	</ul>

	<!-- slides container -->
	<div class="wrap">
		<ul class="tabbed-slider"><?php
			$eleN = 1;
			while (have_rows('tabs')) {
				the_row(); ?>
				<li>
					<div class="image" style="background-image: url(img/feat_banner_back_a.jpg)"></div>
					<div class="txt white_bg">
						<div>
							<h2><span class="red"><?php the_sub_field('title'); ?>:</span> <?php the_sub_field('heading'); ?></h2>
							<p class="Decima"><?php the_sub_field('content'); ?></p><?php
							// if is post object:
							// <p><span class="Decima gray">Read the full story</span></p> ?>
						</div>
					</div>
				</li><?php
			} ?>
		</ul>

	</div>
</section>
