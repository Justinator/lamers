<?php
/**
 * @package InsightCustom
 *	Template Name: Service Pages
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/breadcrumbs'); ?>
		<?php get_template_part('/inc/hero-intro'); ?>
		<section id="pageContent">
			<section class="busDetails greyBlock paddedSection">
				<div class="pageWidth limitWidth">
					<?php the_field('main_body_copy'); ?>
				</div>
			</section>
			<?php get_template_part('/inc/fleet-cta'); ?>
			<section class="paddedSection">
				<div class="centerText">
		      <h6 class="largeHeading">Recommended Vehicle Types</h6>
		    </div>
				<?php get_template_part('/inc/recommended-vehicles'); ?>
			</section>
		</section>
	</main>
</div>
<?php
get_footer();
