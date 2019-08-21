<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/breadcrumbs'); ?>
		<?php get_template_part('/inc/hero'); ?>
		<section class="paddedSection">
			<div class="pageWidth limitWidth">
				<?php if( have_rows('bus_stop_list') ): ?>
						<?php while( have_rows('bus_stop_list') ): the_row();
							// vars
							$stopTitle = get_sub_field('bus_stop_title');
							$stopAddress = get_sub_field('bus_stop_address');
							$stopPhone = get_sub_field('bus_stop_phone');
							$stopMapURL = get_sub_field('bus_stop_map_link');

							?>
								<p><span class="mediumHeading"><?php echo $stopTitle; ?></span><br>
									<?php echo $stopAddress; ?><br>
									<?php echo $stopPhone; ?><br>
									<a href="<?php echo $stopMapURL; ?>" target="_blank">View on Map</a>
								</p>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php the_field('bus_stop_additional_info'); ?>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
