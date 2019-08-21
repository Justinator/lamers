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
								<h2 class="smallHeading whiteText stickyTitle">Lamers Express Game Day</h2>
					      <?php wp_nav_menu( array( 'theme_location' => 'ExpressMenu', 'menu_id' => 'ExpressMenu' ) ); ?>
					    </div>
					  </div>
					</div>
				</div>
				<div class="contentWrapper">
					<?php if( have_rows('express_route') ): ?>
					  	<?php while( have_rows('express_route') ): the_row();
					  		// vars
					  		$headline = get_sub_field('route_headline');
					  		$desc = get_sub_field('route_description');
								$btnCopy = get_sub_field('route_button_copy');
								$btnLink = get_sub_field('route_button_link');
					  		$img = get_sub_field('route_supporting_image');

					  		?>
					  		<div class="flex-container-reverse centerAlignedContainer paddedSection greyBorder">
									<div class="col50 centerTextBlock">
										<div class="textWrap textBlock">
							        <h3 class="largeHeading"><?php echo $headline; ?></h1>
											<p><?php echo $desc; ?></p>
											<div class="buttonWrap">
												<?php if( $btnLink ): ?>
													<a href="<?php echo $btnLink; ?>" class="redButton"><?php echo $btnCopy; ?></a>
												<?php endif; ?>
											</div>
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
