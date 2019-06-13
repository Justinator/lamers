<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/breadcrumbs'); ?>
		<?php get_template_part('/inc/simple-hero'); ?>
		<section id="pageContent">
			<section class="busDetails greyBlock paddedSection">
				<div class="pageWidth limitWidth">
					<?php the_field('travel_policy_body'); ?>
				</div>
			</section>
		</section>
	</main>
</div>
<?php
get_footer();
