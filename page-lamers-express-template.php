<?php
/**
 * @package InsightCustom
 * Template Name: Lamers Express Gameday
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/components/breadcrumbs'); ?>
		<?php get_template_part('/inc/hero/hero'); ?>
		<section id="pageContent" class="gamedayWrapper">
			<section class="routeSchedule greyBlock">
				<div class="pageWidth paddedSection flex-container">
					<div class="col50">
						<div class="textWrap textBlock">
							<?php the_field('intro_description_body'); ?>
						</div>
					</div>
					<div class="col50">
						<div class="textWrap textBlock">
							<div class="assistanceCTA">
								<?php the_field('game_day_assistance_cta', 'option'); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section>
				<?php if( have_rows('game_day_schedule_tables') ): ?>
				  	<?php while( have_rows('game_day_schedule_tables') ): the_row();
							$scheduleHeader = get_sub_field( 'schedule_heading' );
							$info = get_sub_field('additional_schedule_info');
				  		?>
							<div class="pageWidth centerText paddingTop">
								<h3><?php echo $scheduleHeader ?></h3>
								<div class="scrollWrap">
									<p class="noMargin">Scroll to view full schedule</p>
									<?php get_template_part("/inc/svg-icons/scroll-arrow"); ?>
								</div>
							</div>
							<div class="navWidth scheduleTable">
								<?php $table = get_sub_field( 'schedule_table' );
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
									                        echo '<td style="width:200px !important">';
									                            echo $td['c'];
									                        echo '</td>';
									                    }
									                echo '</tr>';
									            }
									        echo '</tbody>';
									    echo '</table>';
									} ?>
									</div>
									<div class="limitWidth pageWidth">
										<?php echo $info; ?>
									</div>
					  	<?php endwhile; ?>
				  <?php endif; ?>
			</section>
			<?php get_template_part('/inc/components/express-cta'); ?>
		</section>
	</main>
</div>
<?php
get_footer();
