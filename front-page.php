<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">

	<main id="main" class="site-main">

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

								<div class="whiteText">
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

			<section id ="whyLamers" class="paddedSection">

				<div class="fullWidth">

					<?php the_field('why_lamers_heading'); ?>

					<div class="pageWidth flex-container">

						<div class="col30">

							<div class="blockText">

								<h3 class="redText"><?php the_field('reason_1'); ?></h3>

								<p><?php the_field('reason_1_description'); ?></p>

							</div>

						</div>

						<div class="col30">

							<div class="blockText">

								<h3 class="redText"><?php the_field('reason_2'); ?></h3>

								<p><?php the_field('reason_2_description'); ?></p>

							</div>

						</div>

						<div class="col30">

							<div class="blockText">

								<h3 class="redText"><?php the_field('reason_3'); ?></h3>

								<p><?php the_field('reason_3_description'); ?></p>

							</div>

						</div>

					</div>

					<div class="pageWidth centerButton">

						<a class="redButton" href="/about"><?php the_field('why_lamers_button_text'); ?></a>

					</div>

				</div>

			</section>

			<!-- ********** Why Lamers Section End ********** -->

			<!-- ********** Featured Services Section Start ********** -->
			<section id="featuredServices">

				<div class="pageWidth">

					<div class="flexWrap">

						<h4 class="largeHeading"><?php the_field('featured_services_block_title'); ?></h4>

						<a href="/services/" id="arrowWrap" class="plainLink"><h5 id="viewAll">View All</h5>
							<svg class="smallIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<defs>
									<symbol id="icon-arrow-right2" viewBox="0 0 32 32">
										<title>arrow-right2</title>
										<path d="M19.414 27.414l10-10c0.781-0.781 0.781-2.047 0-2.828l-10-10c-0.781-0.781-2.047-0.781-2.828 0s-0.781 2.047 0 2.828l6.586 6.586h-19.172c-1.105 0-2 0.895-2 2s0.895 2 2 2h19.172l-6.586 6.586c-0.39 0.39-0.586 0.902-0.586 1.414s0.195 1.024 0.586 1.414c0.781 0.781 2.047 0.781 2.828 0z"></path>
									</symbol>
								</defs>
							</svg>
							<svg id="redArrow" class="redIcon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg>
						</a>

					</div>

				</div>

				<?php get_template_part('/inc/slider'); ?>

			</section>

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

								<p class="whiteText"><?php the_field('lamers_connect_description'); ?></p>

								<div class="btnContainer">
									<a class="whiteButton" href="<?php the_field('lamers_connect_button_1_link'); ?>"><?php the_field('lamers_connect_button_1_text'); ?></a>
									<a class="whiteButton btn2" href="<?php the_field('lamers_connect_button_2_link'); ?>"><?php the_field('lamers_connect_button_2_text'); ?></a>
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

								<p class="whiteText"><?php the_field('lamers_tour_description'); ?></p>

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

					<div class="col50">

						<div class="blockText">

							<h6 class="largeHeading"><span class="underline"><?php the_field('now_hiring'); ?></span></h6>

							<p><?php the_field('now_hiring_description'); ?></p>

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
