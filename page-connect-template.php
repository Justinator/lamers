<?php
/**
 * @package InsightCustom
 * Template Name: Lamers Connect
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/breadcrumbs'); ?>
		<?php get_template_part('/inc/connect-hero'); ?>
		<section id="pageContent" class="serviceWrapper">
			<section class="routeSchedule greyBlock">
				<div class="pageWidth paddedSection flex-container">
					<div class="col50">
						<div class="textWrap textBlock">
							<?php the_field('intro_description_body'); ?>
						</div>
						<div class="textWrap textBlock">
							<div class="assistanceCTA">
								<?php the_field('assistance_cta', 'option'); ?>
							</div>
						</div>
					</div>
					<div class="col50">
						<h3 class="largeHeading"><span class="underline">Schedule</span></h3>
						<div class="destinationTab">
							<div>
								<div class="gc">
									<div class="menu">
										<div class="active"><span class="light"></span><span><?php the_field('departure_1_destination'); ?></span></div>
										<div><span class="light"></span><span><?php the_field('departure_2_destination'); ?></span></div>
									</div>
								</div>
							</div>
							<div class="routeWrapper">
								<div class="gc">
									<ul class="nacc">
										<li class="active">
											<div>
												<?php
												// check if the repeater field has rows of data
												if( have_rows('departure_1') ):
														while ( have_rows('departure_1') ) : the_row(); ?>
																<p>
												        <?php the_sub_field('departure_location_and_time');
												    endwhile; ?>
														</p>
												<?php else :
												    // no rows found
												endif;
												?>
											</div>
										</li>
										<li>
											<div>
												<?php
												// check if the repeater field has rows of data
												if( have_rows('departure_2') ):
														while ( have_rows('departure_2') ) : the_row(); ?>
																<p>
												        <?php the_sub_field('departure_2_location_and_time');
												    endwhile; ?>
														</p>
												<?php else :
												    // no rows found
												endif;
												?>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div>
							<p>Approximate total time: <strong><?php the_field('total_trip_time'); ?></strong></p>
							<a href="<?php the_field('connect_brochure_link'); ?>" target="_blank"><?php the_field('connect_brochure_text'); ?></a>
						</div>
					</div>
				</div>
			</section>
			<section class="routeRates paddedSection">
				<div class="pageWidth centerText">
					<h4 class="largeHeading"><?php the_field('fares_title'); ?></h4>
				</div>
				<div class="navWidth faresTable">
					<?php $table = get_field( 'fares_table' );
						if ( ! empty ( $table ) ) {
						    echo '<table border="0">';
						        if ( ! empty( $table['caption'] ) ) {
						            echo '<caption>' . $table['caption'] . '</caption>';
						        }
						        if ( ! empty( $table['header'] ) ) {
						            echo '<thead>';
						                echo '<tr>';
						                    foreach ( $table['header'] as $th ) {
						                        echo '<th>';
						                            echo $th['c'];
						                        echo '</th>';
						                    }
						                echo '</tr>';
						            echo '</thead>';
						        }
						        echo '<tbody>';
						            foreach ( $table['body'] as $tr ) {
						                echo '<tr>';
						                    foreach ( $tr as $td ) {
						                        echo '<td>';
						                            echo $td['c'];
						                        echo '</td>';
						                    }
						                echo '</tr>';
						            }
						        echo '</tbody>';
						    echo '</table>';
						} ?>
						<div class="centerText">
							<a href="<?php the_field('connect_fares_price_sheet_link'); ?>" target="_blank"><?php the_field('connect_fares_price_sheet_text'); ?></a>
						</div>
				</div>
			</section>
			<section class="stopDetails">
				<div class="pageWidth flex-container">
					<div class="col50 faresTable discountTable">
						<?php
			        $image = get_field('route_map');
			        $imageID = $image['ID'];
			        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
			      ?>
						<div class="smallPaddedSection">
							<?php $table = get_field( 'discount_table' );
								if ( ! empty ( $table ) ) {
								    echo '<table border="0">';
								        if ( ! empty( $table['caption'] ) ) {
								            echo '<caption>' . $table['caption'] . '</caption>';
								        }
								        if ( ! empty( $table['header'] ) ) {
								            echo '<thead>';
								                echo '<tr>';
								                    foreach ( $table['header'] as $th ) {
								                        echo '<th>';
								                            echo $th['c'];
								                        echo '</th>';
								                    }
								                echo '</tr>';
								            echo '</thead>';
								        }
								        echo '<tbody>';
								            foreach ( $table['body'] as $tr ) {
								                echo '<tr>';
								                    foreach ( $tr as $td ) {
								                        echo '<td>';
								                            echo $td['c'];
								                        echo '</td>';
								                    }
								                echo '</tr>';
								            }
								        echo '</tbody>';
								    echo '</table>';
								} ?>
						</div>
					</div>
					<div class="col50 textBlock">
						<div class="textWrap">
							<h3 class="largeHeading"><span class="underline"><?php the_field('section_header'); ?></span></h3>
							<div class="fullWidth stopDetailsWrap">
								<?php get_template_part('/inc/bus-stops'); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php get_template_part('/inc/travel-policy-accordion'); ?>
			<?php get_template_part('/inc/connect-cta'); ?>
		</section>
	</main>
</div>
<script src="/wp-content/themes/insightCustom/js/accordion.js"></script>
<?php
get_footer();
