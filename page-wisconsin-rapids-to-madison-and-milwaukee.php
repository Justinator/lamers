<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/breadcrumbs'); ?>
		<?php get_template_part('/inc/hero-intro'); ?>
		<section id="pageContent" class="serviceWrapper">
			<div class="navWidth paddedSection flex-container">
				<div class="col50">
					<div class="textWrap textBlock">
						<?php the_field('intro_description_body'); ?>
					</div>
				</div>
				<div class="col50">
					<div class="destinationTab">
						<div>
							<div class="gc">
								<div class="menu">
									<div class="active"><span class="light"></span><span>To Milwaukee</span></div>
									<div><span class="light"></span><span>To Wausau</span></div>
								</div>
							</div>
						</div>
						<div class="routeWrapper">
							<div class="gc">
								<ul class="nacc">
									<li class="active">
										<div>
											<?php if( get_field('departure_time_1') ): ?><p><?php the_field('departure_time_1'); ?></p><?php endif; ?>
											<?php if( get_field('departure_time_2') ): ?><p><?php the_field('departure_time_2'); ?></p><?php endif; ?>
											<?php if( get_field('departure_time_3') ): ?><p><?php the_field('departure_time_3'); ?></p><?php endif; ?>
											<?php if( get_field('departure_time_4') ): ?><p><?php the_field('departure_time_4'); ?></p><?php endif; ?>
											<?php if( get_field('departure_time_5') ): ?><p><?php the_field('departure_time_5'); ?></p><?php endif; ?>
											<?php if( get_field('departure_time_6') ): ?><p><?php the_field('departure_time_6'); ?></p><?php endif; ?>
											<?php if( get_field('departure_time_7') ): ?><p><?php the_field('departure_time_7'); ?></p><?php endif; ?>
											<?php if( get_field('departure_time_8') ): ?><p><?php the_field('departure_time_8'); ?></p><?php endif; ?>
											<?php if( get_field('departure_time_9') ): ?><p><?php the_field('departure_time_9'); ?></p><?php endif; ?>
											<?php if( get_field('departure_time_10') ): ?><p><?php the_field('departure_time_10'); ?></p><?php endif; ?>
											<?php if( get_field('departure_time_11') ): ?><p><?php the_field('departure_time_11'); ?></p><?php endif; ?>
											<?php if( get_field('departure_time_12') ): ?><p><?php the_field('departure_time_12'); ?></p><?php endif; ?>
										</div>
									</li>
									<li>
										<div>
											<?php if( get_field('return_time_1') ): ?><p><?php the_field('return_time_1'); ?></p><?php endif; ?>
											<?php if( get_field('return_time_2') ): ?><p><?php the_field('return_time_2'); ?></p><?php endif; ?>
											<?php if( get_field('return_time_3') ): ?><p><?php the_field('return_time_3'); ?></p><?php endif; ?>
											<?php if( get_field('return_time_4') ): ?><p><?php the_field('return_time_4'); ?></p><?php endif; ?>
											<?php if( get_field('return_time_5') ): ?><p><?php the_field('return_time_5'); ?></p><?php endif; ?>
											<?php if( get_field('return_time_6') ): ?><p><?php the_field('return_time_6'); ?></p><?php endif; ?>
											<?php if( get_field('return_time_7') ): ?><p><?php the_field('return_time_7'); ?></p><?php endif; ?>
											<?php if( get_field('return_time_8') ): ?><p><?php the_field('return_time_8'); ?></p><?php endif; ?>
											<?php if( get_field('return_time_9') ): ?><p><?php the_field('return_time_9'); ?></p><?php endif; ?>
											<?php if( get_field('return_time_10') ): ?><p><?php the_field('return_time_10'); ?></p><?php endif; ?>
											<?php if( get_field('return_time_11') ): ?><p><?php the_field('return_time_11'); ?></p><?php endif; ?>
											<?php if( get_field('return_time_12') ): ?><p><?php the_field('return_time_12'); ?></p><?php endif; ?>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div>
						<p>Approximate total time: <strong>5 hours 15 minutes</strong></p>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
