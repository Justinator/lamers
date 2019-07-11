<?php
/**
 * @package InsightCustom
 * Template Name: Locations
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/breadcrumbs'); ?>
		<?php get_template_part('/inc/location-hero'); ?>
		<section id="pageContent">
			<section class="fullWidth paddedSection">
				<div class="limitWidth">
					<h2 class="largeHeading">FIND OUT HOW WE CAN HELP WITH GROUP TRAVEL IN AND AROUND GREEN BAY</h2>
					<div>
						<a href="">Corporate Travel</a>
						<a href="">Sports Events</a>
						<a href="">Weddings</a>
						<a href="">Charter Buses</a>
					</div>
				</div>
			</section>
			<section class="paddedSection greyBlock">
				<div class="pageWidth limitWidth">
					<?php the_field('location_desc'); ?>
					<a href="tel:<?php the_field('location_local_phone'); ?>" class="redButton">Call <?php the_field('location_local_phone'); ?> for transportation services in <?php the_field('location_city'); ?></a>
				</div>
			</section>
			<section class="paddedSection">
				<div class="centerText">
		      <h6 class="largeHeading">VEHICLE TYPES AVAILABLE AT THIS LOCATION</h6>
		    </div>
				<?php get_template_part('/inc/vehicle-types'); ?>
			</section>
		</section>
	</main>
</div>
<?php
get_footer();
