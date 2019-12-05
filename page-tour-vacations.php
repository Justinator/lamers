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
		<section class="paddedContainer">
			<div class="pageWidth">
				<div class="limitWidth">
					<?php the_field('tour_and_travel_content'); ?>
				</div>
				<?php echo do_shortcode('[tourmaster_tour_category filter-type="tour_category" num-fetch="2" style="grid" column-size="2" thumbnail-size="full" orderby="name" order="desc"]'); ?>
			</div>
		</section>
		<section id="tours-list">
			<div class="pageWidth flex-container">
				<div class="col20">
					<?php echo do_shortcode('[tourmaster_tour_search fields="keywords, tour_category, destination, departure-location, date, min-price, max-price" style="column" with-frame="disable"]'); ?>
				</div>
				<div class="col80">
					<?php echo do_shortcode('[tourmaster_tour category="" num-fetch="12" pagination="page" tour-style="grid" column-size="3" thumbnail-size="full" tour-info="duration-text, availability" excerpt-number="20" tour-rating="enable" orderby="date" order="asc" hide-not-avail="enable"]'); ?>
				</div>
			</div>
		</section>
		<section class="paddedSection greyBlock">
			<div class="pageWidth limitWidth">
				<?php the_field('custom_tours'); ?>
			</div>
		</section>
		<section class="paddedSection">
			<div class="pageWidth flex-container">
				<div class="col50">
					<div>
						<?php the_field('mail_a_month'); ?>
					</div>
				</div>
				<div class="col50">
					<h6 class="mediumHeading"><?php the_field('office_list_heading'); ?></h6>
					<div id="officeList">
						<?php if( have_rows('lamers_tour_and_travel_office_list') ): ?>
						  	<?php while( have_rows('lamers_tour_and_travel_office_list') ): the_row();
						  		// vars
						  		$officeLocation = get_sub_field('office_location');
						  		$streetAddress = get_sub_field('office_street_address');
						  		$officeCity = get_sub_field('city');
									$officeZip = get_sub_field('zip');
									$mapLink = get_sub_field('map_link_url');
									$localPhone = get_sub_field('local_phone');
									$otherPhone = get_sub_field('other_phone');
									$hours = get_sub_field('hours');
									$notes = get_sub_field('special_notes');
						  		?>
						      <div class="textWrap textBlock">
						        <strong><?php echo $officeLocation; ?></strong>
						        <p>
											<?php echo $streetAddress; ?><br>
											<?php echo $officeCity; ?>
											<?php echo $officeZip; ?><br>
											<?php if( $localPhone ): ?>
							        	<a href="tel:<?php echo $localPhone; ?>"><?php the_sub_field('local_phone'); ?></a>
												<?php echo "<br>" ?>
							        <?php endif; ?>
											<?php if( $otherPhone ): ?>
							        	<a href="tel:<?php echo $otherPhone; ?>"><?php the_sub_field('other_phone'); ?></a>
												<?php echo "<br>" ?>
							        <?php endif; ?>
											<?php if( $hours ): ?>
							        	<?php the_sub_field('hours'); ?>
												<?php echo "<br>" ?>
							        <?php endif; ?>
											<?php if( $notes ): ?>
							        	<?php the_sub_field('special_notes'); ?>
												<?php echo "<br>" ?>
							        <?php endif; ?>
											<?php if( $mapLink ): ?>
							        	<a href="<?php echo $mapLink; ?>" target="_blank">View on Map</a>
							        <?php endif; ?>
										</p>
						      </div>
						  	<?php endwhile; ?>
						  <?php endif; ?>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
