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
		<section id="pageContent" class="serviceWrapper">
			<div class="navWidth flex-container">
				<div class="stickyOuterWrapper paddedSection">
					<div class="stickyMenuContainer">
					  <div class="stickyMenu">
					    <div class="navWidth stickyMenuWrapper">
								<h2 class="smallHeading whiteText stickyTitle">Transportation Services</h2>
					      <?php wp_nav_menu( array( 'theme_location' => 'ServiceMenu', 'menu_id' => 'ServiceMenu' ) ); ?>
					    </div>
					  </div>
					</div>
				</div>
				<div class="contentWrapper">
					<?php if( have_rows('services_list') ): ?>
					  	<?php while( have_rows('services_list') ): the_row();
					  		// vars
					  		$serviceImage = get_sub_field('service_image');
					  		$serviceDesc = get_sub_field('service_description');
					  		?>
								<div class="flex-container-reverse centerAlignedContainer paddedSection greyBorder">
							    <div class="col50 centerTextBlock">
							      <div class="textWrap textBlock">
							        <?php echo $serviceDesc; ?>
										</div>
							    </div>
							    <div class="col50">
							      <?php
							        $imageID = $serviceImage['ID'];
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
