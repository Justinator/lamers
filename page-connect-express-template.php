<?php
/**
 * @package InsightCustom
 * Template Name: Lamers Connect Express
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/breadcrumbs'); ?>
		<?php get_template_part('/inc/hero'); ?>
		<section id="pageContent" class="serviceWrapper">
			<section class="routeSchedule greyBlock">
				<div class="pageWidth paddedSection flex-container">
					<div class="col50">
						<div class="textWrap textBlock">
							<?php the_field('intro_description_body'); ?>
						</div>
					</div>
					<div class="col50">
						<div class="textWrap textBlock">
							<div class="assistanceCTA">
								<?php the_field('assistance_cta', 'option'); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="stopDetails">
				<div class="pageWidth wrappedFlexContainer">
					<?php if( have_rows('bus_stop_details') ): ?>
				  	<?php while( have_rows('bus_stop_details') ): the_row();
				  		// vars
				  		$schedule = get_sub_field('route_schedule');
				  		?>
							<div class="col50 textBlock paddedSection">
								<div class="textWrap">
									<h3 class="largeHeading"><span class="underline"><?php the_field('section_header'); ?></span></h3>
									<div class="fullWidth stopDetailsWrap">
						          <?php echo $schedule; ?>
						  		</div>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</section>
			<?php get_template_part('/inc/connect-cta'); ?>
		</section>
	</main>
</div>
<?php
get_footer();
