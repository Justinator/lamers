<?php
/**
 * @package InsightCustom
 * Template Name: Fleet Page
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/components/breadcrumbs'); ?>
		<?php get_template_part('/inc/hero/fleet-hero'); ?>
		<div class="fullWidth stickyMenuContainer">
		  <div class="stickyMenu">
		    <div class="navWidth stickyMenuWrapper">
		      <?php wp_nav_menu( array( 'theme_location' => 'FleetMenu', 'menu_id' => 'FleetMenu' ) ); ?>
		    </div>
		  </div>
		</div>
		<section id="pageContent" class="paddedSection">
		  <div class="pageWidth flex-container centerAlignedContainer">
		    <div class="col50 centerTextBlock">
		      <div class="textWrap textBlock">
		        <h2><span class="underline"><?php the_field('fleet_1_headline'); ?></span></h2>
		        <p><?php the_field('fleet_1_description'); ?></p>
						<a href="<?php the_field('fleet_1_button_link'); ?>" class="redButton"><?php the_field('fleet_1_button_text'); ?></a>
		      </div>
		    </div>
		    <div class="col50">
		      <?php
		        $image = get_field('fleet_1_image');
		        $imageID = $image['ID'];
		        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
		      ?>
		    </div>
		  </div>
			<div class="pageWidth flex-container centerAlignedContainer paddedSection">
				<div class="col50 centerTextBlock">
					<?php
						$image = get_field('fleet_2_image');
						$imageID = $image['ID'];
						echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
					?>
				</div>
				<div class="col50">
					<div class="textWrap textBlock">
						<h3 class="mediumHeading"><span class="underline"><?php the_field('fleet_2_headline'); ?></span></h3>
						<p><?php the_field('fleet_2_description'); ?></p>
						<a href="<?php the_field('fleet_2_button_link'); ?>" class="redButton"><?php the_field('fleet_2_button_text'); ?></a>
					</div>
				</div>
			</div>
			<div class="pageWidth flex-container centerAlignedContainer">
		    <div class="col50 centerTextBlock">
		      <div class="textWrap textBlock">
		        <h4 class="mediumHeading"><span class="underline"><?php the_field('fleet_3_headline'); ?></span></h4>
		        <p><?php the_field('fleet_3_description'); ?></p>
						<a href="<?php the_field('fleet_3_button_link'); ?>" class="redButton"><?php the_field('fleet_3_button_text'); ?></a>
		      </div>
		    </div>
		    <div class="col50">
		      <?php
		        $image = get_field('fleet_3_image');
		        $imageID = $image['ID'];
		        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
		      ?>
		    </div>
		  </div>
			<div class="pageWidth flex-container centerAlignedContainer paddedSection">
				<div class="col50 centerTextBlock">
					<?php
						$image = get_field('fleet_4_image');
						$imageID = $image['ID'];
						echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
					?>
				</div>
				<div class="col50">
					<div class="textWrap textBlock">
						<h5 class="mediumHeading"><span class="underline"><?php the_field('fleet_4_headline'); ?></span></h5>
						<p><?php the_field('fleet_4_description'); ?></p>
						<a href="<?php the_field('fleet_4_button_link'); ?>" class="redButton"><?php the_field('fleet_4_button_text'); ?></a>
					</div>
				</div>
			</div>
			<div class="pageWidth flex-container centerAlignedContainer">
		    <div class="col50 centerTextBlock">
		      <div class="textWrap textBlock">
		        <h6 class="mediumHeading"><span class="underline"><?php the_field('fleet_5_headline'); ?></span></h6>
		        <p><?php the_field('fleet_5_description'); ?></p>
						<a href="<?php the_field('fleet_5_button_link'); ?>" class="redButton"><?php the_field('fleet_5_button_text'); ?></a>
		      </div>
		    </div>
		    <div class="col50">
		      <?php
		        $image = get_field('fleet_5_image');
		        $imageID = $image['ID'];
		        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
		      ?>
		    </div>
		  </div>
			<div class="pageWidth flex-container centerAlignedContainer paddedSection">
				<div class="col50 centerTextBlock">
					<?php
						$image = get_field('fleet_6_image');
						$imageID = $image['ID'];
						echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
					?>
				</div>
				<div class="col50">
					<div class="textWrap textBlock">
						<h6 class="mediumHeading"><span class="underline"><?php the_field('fleet_6_headline'); ?></span></h6>
						<p><?php the_field('fleet_6_description'); ?></p>
						<a href="<?php the_field('fleet_6_button_link'); ?>" class="redButton"><?php the_field('fleet_6_button_text'); ?></a>
					</div>
				</div>
			</div>
			<div class="pageWidth flex-container centerAlignedContainer">
		    <div class="col50 centerTextBlock">
		      <div class="textWrap textBlock">
		        <h6 class="mediumHeading"><span class="underline"><?php the_field('fleet_7_headline'); ?></span></h6>
		        <p><?php the_field('fleet_7_description'); ?></p>
						<a href="<?php the_field('fleet_7_button_link'); ?>" class="redButton"><?php the_field('fleet_7_button_text'); ?></a>
		      </div>
		    </div>
		    <div class="col50">
		      <?php
		        $image = get_field('fleet_7_image');
		        $imageID = $image['ID'];
		        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
		      ?>
		    </div>
		  </div>
			<div class="pageWidth flex-container centerAlignedContainer paddedSection">
				<div class="col50 centerTextBlock">
					<?php
						$image = get_field('fleet_8_image');
						$imageID = $image['ID'];
						echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
					?>
				</div>
				<div class="col50">
					<div class="textWrap textBlock">
						<h6 class="mediumHeading"><span class="underline"><?php the_field('fleet_8_headline'); ?></span></h6>
						<p><?php the_field('fleet_8_description'); ?></p>
						<a href="<?php the_field('fleet_8_button_link'); ?>" class="redButton"><?php the_field('fleet_8_button_text'); ?></a>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
