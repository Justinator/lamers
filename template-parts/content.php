<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */

?>
<div class="articleWrapper">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="flex-container-reverse paddedSection greyBorder">
			<div>
				<div class="textWrap">
					<div class="thumbnailWrapper">
						<?php insightCustom_post_thumbnail(); ?>
					</div>
					<header class="entry-header">
						<?php
						if ( is_singular() ) :
							the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title mediumHeading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;
						if ( 'post' === get_post_type() ) :
							?>
							<div class="entry-meta">
								<p>
									<?php insightCustom_posted_by(); ?><br>
									in
										<?php
										$categories = get_the_category();
											if ( ! empty( $categories ) ) {
											    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
											}
										?>
								</p>
								<?php the_excerpt(); ?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->
					<div class="continue-reading">
						<?php
						$read_more_link = sprintf(
							/* translators: %s: Name of current post. */
							wp_kses( __( 'Continue Reading %s', 'insightCustom' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						);
						?>
						<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark" class="redButton"><?php echo $read_more_link; ?></a>
					</div>
				</div>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
