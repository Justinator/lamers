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
				<div class="col20">
					<?php echo do_shortcode('[tourmaster_tour_search fields="keywords, tour_category, departure-location, min-price, max-price" style="column" with-frame="disable"]'); ?>
				</div>
				<div class="col80">
					<?php echo do_shortcode('[tourmaster_tour category="" num-fetch="12" pagination="page" tour-style="grid" column-size="3" thumbnail-size="full" tour-info="duration-text, availability" excerpt-number="20" tour-rating="enable", orderby="date", order="asc" ]'); ?>
				</div>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
