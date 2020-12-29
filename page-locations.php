<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/components/breadcrumbs'); ?>
		<section id="pageContent" class="serviceWrapper">
			<div class="pageWidth paddedSection">
				<?php the_content(); ?>
			</div>
			<div class="paddedSection fullWidth greyBlock">
				<div class="navWidth">
					<h2 class="largeHeading centerText"><?php the_field('location_list_header'); ?></h2>
					<div class="wrappedFlexContainer">
					<?php if( have_rows('locations__by_list') ): ?>
							<?php while( have_rows('locations__by_list') ): the_row();
								// vars
								$title = get_sub_field('location_title');
								$city = get_sub_field('location_city');
								$address = get_sub_field('location_address');
								$zip = get_sub_field('location_zip');
								$phone = get_sub_field('location_phone_number');
								$map = get_sub_field('map_link');
								$pageLink = get_sub_field('location_page_link');
								?>
								<div class="col20 locationWrap">
									<div class="textWrap textBlock">
										<p><span class="cityTitle"><?php echo $title; ?></span><br>
										<?php echo $address; ?><br>
										<?php echo ($city." ".$zip); ?><br>
										<?php if( $phone ): ?>
											<a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a><br>
										<?php endif; ?>
										<?php if( $map ): ?>
											<a href="<?php echo $map; ?>" target="_blank">View on map</a><br><br>
										<?php endif; ?>
										<?php if( $pageLink ): ?>
											<a href="<?php echo $pageLink; ?>" class="redButton">View more</a><br></p>
										<?php endif; ?>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php get_template_part('/inc/components/contact'); ?>
		</section>
	</main>
</div>
<?php
get_footer();
