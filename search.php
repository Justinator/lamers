<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package InsightCustom
 */

get_header();
?>
<div class="pageWidth paddedSection">
	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="flex-container-reverse">
				<div id="search" class="col70">
					<?php if ( have_posts() ) : ?>
						<header class="page-header greyBorder">
							<h1 class="page-title">
								<?php
								$allsearch = new WP_Query("s=$s&showposts=0");
								echo $allsearch ->found_posts.' results found';
								/* translators: %s: search query. */
								printf( esc_html__( ' for: %s', 'insightcustom' ), '<span>' . get_search_query() . '</span>' );
								?>
							</h1>
						</header><!-- .page-header -->
						<div class="paddedSection wrappedFlexContainer">
							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );
							endwhile;
							the_posts_navigation();
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>
					</div>
				</div>
				<div class="col30">
					<div class="paddedSection">
						<?php get_sidebar(); ?>
						<?php get_template_part('/inc/blog-sidebar'); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->
</div>
<?php
get_footer();
