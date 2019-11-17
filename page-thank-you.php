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
			<div class="paddedSection">
				<?php get_template_part('/inc/components/featured-services'); ?>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
