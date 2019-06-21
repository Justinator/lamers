<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/breadcrumbs'); ?>
		<?php get_template_part('/inc/hero-intro'); ?>
		<section id="pageContent" class="serviceWrapper">
			<div class="pageWidth flex-container">
				<div class="col80">
					<?php echo do_shortcode('[WP_TRAVEL_ITINERARIES]'); ?>
				</div>
				<div class="col20">
					<?php echo do_shortcode('[wp_travel_trip_filters]'); ?>
				</div>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
