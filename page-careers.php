<?php
/**
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/breadcrumbs'); ?>
		<section id="pageContent">
			<section id="careersList" class="paddedSection">
				<div class="pageWidth">
					<div class="limitWidth">
						<h1><span class="underline"><?php the_field('careers_headline'); ?></span></h1>
						<p><?php the_field('careers_copy'); ?></p>
					</div>
					<div class="jobWrapper">
						<?php echo do_shortcode('[awsmjobs listings="9" filters="yes" loadmore="yes"]'); ?>
					</div>
				</div>
			</section>
			<?php get_template_part('/inc/about-hero'); ?>
			<?php get_template_part('/inc/mission'); ?>
			<?php get_template_part('/inc/customer-satisfaction'); ?>
			<?php get_template_part('/inc/safety'); ?>
		</section>
	</main>
</div>
<?php
get_footer();
