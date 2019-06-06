<?php
/**
 * @package InsightCustom
 *	Template Name: Fleet
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/breadcrumbs'); ?>
		<?php get_template_part('/inc/fleet-hero'); ?>
		<div class="fullWidth stickyMenuContainer">
		  <div class="stickyMenu">
		    <div class="navWidth">
		      <?php wp_nav_menu( array( 'theme_location' => 'FleetMenu', 'menu_id' => 'FleetMenu' ) ); ?>
		    </div>
		  </div>
		</div>
		<section id="pageContent" class="paddedSection">
			<section class="busIntro">
				<div class="fullWidth flex-container">
					<div class="col50">
						<div class="textWrap textBlock">
							<?php the_field('bus_intro_copy'); ?>
						</div>
					</div>
					<div class="col50">
						<div class="busSmallGallery">
							<?php
				        $image = get_field('image_1');
				        $imageID = $image['ID'];
				        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
				      ?>
							<?php
				        $image = get_field('image_2');
				        $imageID = $image['ID'];
				        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
				      ?>
							<?php
				        $image = get_field('image_3');
				        $imageID = $image['ID'];
				        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
				      ?>
							<?php
				        $image = get_field('image_4');
				        $imageID = $image['ID'];
				        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
				      ?>
						</div>
					</div>
				</div>
			</section>
			<section class="busDetails greyBack paddedSection">
				<div class="pageWidth limitWidth">
					<?php the_field('main_body_copy'); ?>
				</div>
			</section>
		</section>
	</main>
</div>
<?php
get_footer();
