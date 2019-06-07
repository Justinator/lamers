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
		<section id="pageContent">
			<section class="busIntro paddedSection">
				<div class="fullWidth flex-container">
					<div class="col50 centerTextBlock">
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
			<section class="busDetails greyBlock paddedSection">
				<div class="pageWidth limitWidth">
					<?php the_field('main_body_copy'); ?>
				</div>
			</section>
			<?php get_template_part('/inc/fleet-cta'); ?>
			<?php get_template_part('/inc/need-more-fleet'); ?>
		</section>
	</main>
</div>
<?php
get_footer();
