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
		<section id="pageContent" class="serviceWrapper">
			<div class="navWidth flex-container">
				<div class="stickyOuterWrapper paddedSection">
					<div class="stickyMenuContainer">
					  <div class="stickyMenu">
					    <div class="navWidth stickyMenuWrapper">
								<h2 class="smallHeading whiteText stickyTitle">Lamers Connect</h2>
					      <?php wp_nav_menu( array( 'theme_location' => 'ConnectMenu', 'menu_id' => 'ConnectMenu' ) ); ?>
					    </div>
					  </div>
					</div>
				</div>
				<div class="contentWrapper">
					<?php if( have_rows('connect_route') ): ?>
					  	<?php while( have_rows('connect_route') ): the_row();
					  		// vars
					  		$desc = get_sub_field('route_description');
					  		$img = get_sub_field('route_supporting_image');
					  		?>
					  		<div class="flex-container-reverse centerAlignedContainer paddedSection greyBorder">
									<div class="col50 centerTextBlock">
										<div class="textWrap textBlock">
											<?php echo $desc; ?>
										</div>
									</div>
									<div class="col50">
										<?php
							        $imageID = $img['ID'];
							        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
							      ?>
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
