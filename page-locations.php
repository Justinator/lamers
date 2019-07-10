<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/breadcrumbs'); ?>
		<section id="pageContent" class="serviceWrapper">
			<div class="pageWidth">
				<?php the_content(); ?>
				<h2 class="largeHeading centerText"><?php the_field('location_list_header'); ?></h2>
				<div class="paddedSection">
					<div class="wrappedFlexContainer">
					<?php if( have_rows('locations__by_list') ): ?>
					  	<?php while( have_rows('locations__by_list') ): the_row();
					  		// vars
								$title = get_sub_field('location_title');
					  		$city = get_sub_field('location_city');
					  		$address = get_sub_field('location_address');
								$zip = get_sub_field('location_zip');
								$phone = get_sub_field('location_phone_number');
					  		$email = get_sub_field('location_email');
								$hours = get_sub_field('location_hours');
								$map = get_sub_field('map_link');
								$pageLink = get_sub_field('location_page_link');
					  		?>
								<div class="col20">
									<div class="textWrap textBlock">
						        <p><span class="cityTitle"><?php echo $title; ?></span><br>
										<?php echo $address; ?><br>
										<?php echo ($city." ".$zip); ?><br>
										<?php echo $phone; ?><br>
										<?php echo $email; ?><br>
										<?php if( $hours ): ?>
											<?php echo $hours; ?><br>
										<?php endif; ?>
										<?php if( $map ): ?>
											<a href="<?php echo $map; ?>" target="_blank">View on map</a><br><br>
										<?php endif; ?>
										<?php if( $pageLink ): ?>
											<a href="<?php echo $pageLink; ?>" class="redButton">View location info</a><br></p>
										<?php endif; ?>
									</div>
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
