<?php
/**
 * Template for displaying job listing archives
 *
 * This template can be overridden by copying it to currenttheme/wp-job-openings/archive-job.php
 *
 * @package wp-job-openings
 * @version 1.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

/**
 * before_awsm_jobs_main_content hook
 *
 * @since 1.1
 */
do_action( 'before_awsm_jobs_main_content' );

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/breadcrumbs'); ?>
		<section id="pageContent">
			<section id="careersList" class="paddedSection">
				<div class="pageWidth">
					<div class="limitWidth">
						<h1><span class="underline">Careers</span></h1>
						<p>Lamers Bus Lines is a family-focused company that takes pride in being a part of the community. Lamers was founded in 1944 and offers employees longevity and stability. Together we work together to make sure our passengers enjoy safe and worry-free transportation every time they step on board one of our buses. Lamers Bus Lines is an EOE/AA employer.</p>
					</div>
					<div class="jobWrapper">
						<h2>Job Openings</h2>
						<?php echo do_shortcode('[awsmjobs listings="9" filters="yes" loadmore="yes"]'); ?>
					</div>
				</div>
			</section>
			<?php get_template_part('/inc/about-intro'); ?>
			<?php get_template_part('/inc/mission'); ?>
			<?php get_template_part('/inc/customer-satisfaction'); ?>
			<?php get_template_part('/inc/safety'); ?>
		</section>
	</main>
</div>
<?php
get_footer();
