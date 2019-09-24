<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package InsightCustom
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section class="error-404 not-found pageWidth flex-container">
			<div class="col70">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'insightcustom' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Take a look at some of the links below or try a search to find what you are looking for? Contact us if the issue persists and you cannot find what you\'re looking for.', 'insightcustom' ); ?></p>
					<ul>
						<li><a href="/tour-vacations/">Tour Vacations</a></li>
						<li><a href="/lamers-connect/">Lamers Connect</a></li>
						<li><a href="/services/">Services</a></li>
						<li><a href="/about-us/">About Us</a></li>
						<li><a href="/locations/">Locations</a></li>
						<li><a href="/sitemap/">Sitemap</a></li>
						<li><a href="/contact-us/">Contact Us</a></li>
					</ul>
					<?php
					the_widget( 'WP_Widget_Recent_Posts' );
					?>
				</div><!-- .page-content -->
			</div>
			<div class="col30">
					<?php get_sidebar(); ?>
					<?php get_template_part('/inc/blog-sidebar'); ?>
			</div>
		</section><!-- .error-404 -->
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
