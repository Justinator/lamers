<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foxStructuresResponsive
 */
get_header();

?>

<div id="primary" class="content-area">

	<main id="main" class="site-main">

		<section id="homeHero">

			<div class="hero homeHero">

				<div class="fullWidth heroHeadingContainer">

					<div class="heroHeadingWrapper">

						<div class="heroHeading">

							<h1 class="noMargin">Fox Structures Offers Premier Design, Welding and Construction Services</h1>

						</div>

					</div>

					<div id="heroSwooshWrapper" class="fullWidth">

						<img src="/wp-content/uploads/2019/02/bottomSmallCurve2-1.png" class="image">

					</div>

					<div class="heroCTA fullWidth">

						<div class="heroCTAContent pageWidth">

							<h3 class="noMargin"><a href="/contact/" class="heroCTAButton"><span>Contact Us</span></a>
								to Discuss Your Project</h3>

						</div>

					</div>

				</div>


			</div>

		</section>

		<section id="pageContent">

			<section id ="foxStructuresIntro" class="paddedSection">

				<div class="fullWidth flex-container centerAlignedContainerTop">

					<div id="introCopy" class="col50">

						<div class="blockText">

							<h2 class="noMargin">Our Building Success Starts with You.</h2>

							<div class="underline"></div>

							<p>Fox Structures is known throughout northeast Wisconsin as a premier
								design/build agricultural and commercial construction company. For over
								30 years our design savvy, construction expertise and commitment to
								quality have been matched only by our high level of customer satisfaction.
								That’s why we are so proud that 80% of our business comes from satisfied
								repeat clients.
							</p>

							<p>
								Browse some of the unique <a href="/services/agricultural/" class="primaryLink">agricultural</a>
								and <a href="/services/commercial/" class="primaryLink">commercial</a> construction
								projects we’ve built in the past. Then <a href="/contact/" class="primaryLink">contact us</a>
								and see how <em><strong>we build with you in mind</strong></em> !
							</p>

						</div>

					</div>

					<div id="introImage" class="col50">

						<img src="/wp-content/uploads/2019/02/foxStructuresCustomBuild.jpg" class="image"
						alt="A Custom built garage by Fox Structures">

					</div>

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

							<a href="/about-us/" class="primaryButton">About the company</a>

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
