<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/components/breadcrumbs'); ?>
		<?php get_template_part('/inc/components/contact'); ?>
		<div class="fullWidth paddedSection greyBlock">
			<div class="pageWidth centerText">
				<h2 class="largeHeading">Looking for a lamers location?</h2>
				<a href="/locations/" class="redButton">Find a Location</a>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
