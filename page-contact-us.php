<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/breadcrumbs'); ?>
		<?php get_template_part('/inc/history-hero'); ?>
		<section id="contact">
			<?php get_template_part('/inc/contact'); ?>
		</section>
	</main>
</div>
<?php
get_footer();
