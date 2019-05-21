<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">

	<main id="main" class="site-main">

		<section id="homeHero">

			<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id(10), 'full' );?>

			<div class="mediumHero" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position:center;">

				<div class="fullWidth heroHeadingContainer">

					<div class="heroHeadingWrapper">

						<div class="col50"></div>

						<div class="col50">

							<div class="heroHeading">

								<?php the_field('hero_heading'); ?>

								<div class="whiteText">
									<?php the_field('hero_buttons'); ?>
								</div>

							</div>

						</div>

					</div>

				</div>


			</div>

		</section>

		<section id="pageContent">

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

						<?php the_field('button'); ?>

					</div>

				</div>

			</section>

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

				<div class="pageWidth">

					<section class="regular slider">
						<div class="centerText">
							<a href="<?php the_field('slide_1_link'); ?>" class="plainLink centerText">
								<?php
								$image = get_field('slide_1_image');
								?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<h6 class="whiteText sliderTitle centerText"><?php the_field('slide_1_title'); ?></h6>
							</a>
						</div>
						<div>
							<?php
							$image = get_field('slide_2_image');
							?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<h6 class="whiteText sliderTitle centerText"><?php the_field('slide_2_title'); ?></h6>
						</div>
						<div>
							<?php
							$image = get_field('slide_3_image');
							?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<h6 class="whiteText sliderTitle centerText"><?php the_field('slide_3_title'); ?></h6>
						</div>
						<div>
							<img src="http://placehold.it/350x300?text=4">
						</div>
						<div>
							<img src="http://placehold.it/350x300?text=5">
						</div>
						<div>
							<img src="http://placehold.it/350x300?text=6">
						</div>
					</section>

				</div>

			</section>

		</section>

	</main>

</div>

<?php

get_footer();
