<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/components/breadcrumbs'); ?>
		<?php get_template_part('/inc/hero/hero'); ?>
		<section id="pageContent">
			<?php get_template_part('/inc/components/mission'); ?>
			<?php get_template_part('/inc/components/customer-satisfaction'); ?>
			<section id="testimonialSlider" class="paddedSection">
				<?php get_template_part('/inc/components/testimonial-slider'); ?>
			</section>
			<?php get_template_part('/inc/components/safety'); ?>
			<!-- ********** Featured Services Section Start ********** -->
			<div class="paddedSection">
				<?php get_template_part('/inc/components/featured-services'); ?>
			</div>
			<!-- ********** Featured Services Section End ********** -->
			<?php get_template_part('/inc/components/contact'); ?>
		</section>
	</main>
</div>
<?php
get_footer();
