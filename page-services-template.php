<?php
/**
 * @package InsightCustom
 *	Template Name: Service Pages
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/breadcrumbs'); ?>
		<?php get_template_part('/inc/hero'); ?>
		<section id="pageContent" class="serviceWrapper serviceBody greyBlock paddedSection">
			<div class="navWidth flex-container">
				<div class="stickyOuterWrapper">
					<div class="stickyMenuContainer">
					  <div class="stickyMenu">
					    <div class="navWidth stickyMenuWrapper">
								<h2 class="smallHeading whiteText stickyTitle">Transportation Services</h2>
					      <?php wp_nav_menu( array( 'theme_location' => 'ServiceMenu', 'menu_id' => 'ServiceMenu' ) ); ?>
					    </div>
					  </div>
					</div>
				</div>
				<div class="contentWrapper limitWidth">
					<?php the_field('main_body_copy'); ?>
				</div>
			</div>
		</section>
		<?php get_template_part('/inc/fleet-cta'); ?>
		<section class="paddedSection">
			<div class="centerText">
				<h6 class="largeHeading">Recommended Vehicle Types</h6>
			</div>
			<?php get_template_part('/inc/recommended-vehicles'); ?>
		</section>
	</main>
</div>
<?php
get_footer();
