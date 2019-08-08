<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="home" class="site-main">
		<?php get_template_part('/inc/breadcrumbs'); ?>
		<!-- ********** Homepage Hero Section Start ********** -->
		<section id="homeHero">
			<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id(10), 'full' );?>
			<div class="mediumHero" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position:center;">
				<div class="fullWidth heroHeadingContainer">
					<div class="heroHeadingWrapper flex-container">
						<div class="col50"></div>
						<div class="col50">
							<div class="heroHeading">
								<?php the_field('hero_heading'); ?>
								<div class="whiteText textBlock">
									<?php the_field('hero_description'); ?>
								</div>
								<div class="btnContainer">
									<a class="whiteButton" href="<?php the_field('hero_button_1_link'); ?>"><?php the_field('hero_button_1_text'); ?></a>
									<a id="btn2" class="whiteButton btn2" href="<?php the_field('hero_button_2_link'); ?>"><?php the_field('hero_button_2_text'); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ********** Homepage Hero Section End ********** -->
		<section id="pageContent">
			<!-- ********** Why Lamers Section Start ********** -->
			<?php get_template_part('/inc/why-choose-lamers'); ?>
			<!-- ********** Why Lamers Section End ********** -->
			<!-- ********** Featured Services Section Start ********** -->
			<?php get_template_part('/inc/featured-services'); ?>
			<!-- ********** Featured Services Section End ********** -->
			<!-- ********** Lamers Connect Section Start ********** -->
			<section id="lamersConnect" class="paddedSection">
				<div id="connectBack" class="fullWidth" style="background: url('<?php $image = get_field('lamers_connect_background'); $size = 'full'; if( $image ) {echo $image['url'];}?>') no-repeat; background-size: cover; background-position:center;">
					<div class="fullWidth leftGradientOverlay">
						<div class="pageWidth flex-container centerAlignedContainer">
							<div class="col50">
								<?php
					        $image = get_field('lamers_connect_logo');
					        $imageID = $image['ID'];
					        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image logo', 'data-sizes' => 'auto' ) );
					      ?>
								<p class="whiteText textBlock"><?php the_field('lamers_connect_description'); ?></p>
								<div class="btnContainer">
									<a class="whiteButton" href="<?php the_field('lamers_connect_button_1_link'); ?>"><?php the_field('lamers_connect_button_1_text'); ?></a>
									<a class="whiteButton btn2" href="<?php the_field('lamers_connect_button_2_link'); ?>" target="_blank"><?php the_field('lamers_connect_button_2_text'); ?></a>
								</div>
							</div>
							<div class="col50"></div>
						</div>
					</div>
				</div>
			</section>
			<!-- ********** Lamers Connect Section End ********** -->
			<!-- ********** Lamers Tours Section Start ********** -->
			<section id="lamersTours">
				<div id="toursBack" class="fullWidth" style="background: url('<?php $image = get_field('lamers_tours_background'); $size = 'full'; if( $image ) {echo $image['url'];}?>') no-repeat; background-size: cover; background-position:center;">
					<div class="fullWidth rightGradientOverlay">
						<div class="pageWidth flex-container-reverse centerAlignedContainer">
							<div class="col50"></div>
							<div class="col50">
								<?php
					        $image = get_field('lamers_tours_logo');
					        $imageID = $image['ID'];
					        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image logo', 'data-sizes' => 'auto' ) );
					      ?>
								<p class="whiteText textBlock"><?php the_field('lamers_tour_description'); ?></p>
								<div class="btnContainer">
									<a class="whiteButton" href="<?php the_field('lamers_tours_button_link'); ?>"><?php the_field('lamers_tours_button_text'); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ********** Lamers Tours Section End ********** -->
			<!-- ********** Hiring Section Start ********** -->
			<section id="careers" class="paddedSection">
				<div class="fullWidth flex-container centerAlignedContainer">
					<div class="col50 centerTextBlock">
						<div class="textWrap">
							<h6 class="largeHeading"><span class="underline"><?php the_field('now_hiring'); ?></span></h6>
							<p class="textBlock"><?php the_field('now_hiring_description'); ?></p>
							<a href="<?php the_field('now_hiring_button_link'); ?>" class="redButton"><?php the_field('now_hiring_button'); ?></a>
						</div>
					</div>
					<div class="col50">
						<?php
							$image = get_field('now_hiring_image');
							$imageID = $image['ID'];
							echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
						?>
					</div>
				</div>
			</section>
			<!-- ********** Hiring Section End ********** -->
			<!-- ********** Testimonial Slider Section Start ********** -->
			<section id="testimonialSlider">
				<?php get_template_part('/inc/testimonial-slider'); ?>
			</section>
			<!-- ********** Testimonial Slider Section End ********** -->
			<?php get_template_part('/inc/affiliations'); ?>
			<?php get_template_part('/inc/contact'); ?>
		</section>
	</main>
</div>
<?php
get_footer();
