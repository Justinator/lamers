<?php
/**
 * @package InsightCustom
 * Template Name: Locations
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/components/breadcrumbs'); ?>
		<?php get_template_part('/inc/hero/location-hero'); ?>
		<section id="pageContent">
			<?php get_template_part('/inc/components/why-choose-lamers'); ?>
			<section class="paddedSection greyBlock">
				<div class="pageWidth flex-container">
					<div class="col60">
						<div class="locationContent">
							<?php the_field('location_desc'); ?>
							<?php the_field('about_lamers', 'option'); ?>
							<div id="transportBtn" class="buttonWrap">
								<a href="tel:<?php the_field('location_local_phone'); ?>" class="redButton callButton">Call <?php the_field('location_local_phone'); ?> for transportation services in <?php the_field('location_city'); ?></a>
							</div>
						</div>
					</div>
					<div class="col40">
						<h2 class="largeHeading noMargin">School Districts Served</h2>
						<?php if( get_field('school_districts_served') ): ?>
		        	<?php the_field('school_districts_served'); ?>
		        <?php endif; ?>
						<h3 class="largeHeading noMargin">Local Links</h3>
							<?php if( get_field('local_links') ): ?>
			        	<?php the_field('local_links'); ?>
			        <?php endif; ?>
					</div>
				</div>
			</section>
			<section class="fullWidth paddedSection">
				<?php get_template_part('/inc/components/featured-services'); ?>
			</section>
			<section class="paddedSection">
				<div class="centerText">
		      <h6 class="largeHeading">View Our Fleet</h6>
		    </div>
				<?php get_template_part('/inc/components/vehicle-types'); ?>
			</section>
		</section>
	</main>
</div>
<?php
get_footer();
