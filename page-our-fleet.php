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
		<section id="pageContent" class="fleetWrapper">
			<div class="navWidth flex-container">
				<div class="stickyOuterWrapper paddedSection">
					<div class="stickyMenuContainer">
					  <div class="stickyMenu">
					    <div class="navWidth stickyMenuWrapper">
								<h2 class="smallHeading whiteText stickyTitle">Transportation Services</h2>
					      <?php wp_nav_menu( array( 'theme_location' => 'FleetMenu', 'menu_id' => 'FleetMenu' ) ); ?>
					    </div>
					  </div>
					</div>
				</div>
				<div class="contentWrapper">
					<?php if( have_rows('fleet_list') ): ?>
							<?php while( have_rows('fleet_list') ): the_row();
								// vars
								$fleetImage = get_sub_field('fleet_image');
								$fleetHeadline = get_sub_field('fleet_headline');
								$fleetDesc = get_sub_field('fleet_description');
								$fleetButtonText = get_sub_field('fleet_button_text');
								$fleetLink = get_sub_field('fleet_button_link');

								?>
								<div class="flex-container centerAlignedContainer paddedSection greyBorder">
							    <div class="col50 centerTextBlock">
							      <div class="textWrap textBlock">
							        <h2><?php echo $fleetHeadline; ?></h2>
							        <p><?php echo $fleetDesc; ?></p>
											<a href="<?php echo $fleetLink; ?>" class="redButton"><?php echo $fleetButtonText; ?></a>
							      </div>
							    </div>
							    <div class="col50">
							      <?php
							        $imageID = $fleetImage['ID'];
							        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
							      ?>
							    </div>
							  </div>
							<?php endwhile; ?>
						<?php endif; ?>
				</div>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
