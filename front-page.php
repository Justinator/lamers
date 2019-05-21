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
									<p><?php the_field('hero_buttons'); ?></p>
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

					<h2 class="noMargin centerText"><?php the_field('why_lamers_heading'); ?></h2>

				</div>

			</section>

			<?php get_template_part("/inc/services-overview"); ?>

			<?php get_template_part("/inc/featuredHomepageProjects"); ?>

			<section class="navWidth">

				<?php get_template_part('inc/CTA')?>

			</section>

			<section class="paddedSection">

				<div class="fullWidth flex-container-reverse centerAlignedContainerTop">

					<div class="col50">

						<div class="blockText">

							<h2 class="noMargin">Experts at Building Success</h2>

							<div class="underline"></div>

							<p>Since 1982 Fox Structures has focused on two things: listening to customers
								and delivering what we promise. That’s a pretty simple business plan for a
								design/build contractor. But it’s one that works. From planning and design,
								through construction to your final walk-through, you’ll have our dedicated
								attention every step of the way.
							</p>

							<button class="mouse-cursor-gradient-tracking"><span>Hover me</span></button>

						</div>

					</div>

					<div class="col50">

						<img src="/wp-content/uploads/2019/02/CalfSourceBldg11.jpg" class="image"
						alt="Fox Structures working on a custom railing on a calf source agricultural building">

					</div>

				</div>

			</section>

		</section>

	</main>

</div>

<?php

get_footer();
