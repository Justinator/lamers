<?php
/**
 * For displaying job application form
 *
 * Override this by copying it to currenttheme/wp-job-openings/single-job/form.php
 *
 * @package wp-job-openings
 * @version 1.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="awsm-job-form-inner">

	<?php
		/**
		 * before_awsm_application_form hook
		 *
		 * @since 1.0
		 */
		do_action( 'before_awsm_application_form' );
	?>

	<h2><?php echo esc_html( apply_filters( 'awsm_application_form_title', __( 'Apply for this position', 'wp-job-openings' ) ) ); ?></h2>

	<?php
		/**
		 * awsm_application_form_description hook
		 *
		 * @since 1.3
		 */
		do_action( 'awsm_application_form_description' );
	?>


	<script src ="https://form.jotform.com/static/feedback2.js" type="text/javascript"></script><script type="text/javascript">
			var JFL_200493979459068 = new JotformFeedback({
				formId: '200493979459068',
				base: 'https://form.jotform.com/',
				windowTitle: 'Lamers Bus Lines Short Application',
				background: '#FFA500',
				fontColor: '#FFFFFF',
				type: 'false',
				height: 500,
				width: 700,
				openOnLoad: false
			});
	</script>
	<a class="redButton lightbox-200493979459068" style="margin-top: 16px">
    Apply Now
  </a>


	<div class="awsm-application-message" style="display: none;"></div>

	<?php
		/**
		 * after_awsm_application_form hook
		 *
		 * @since 1.0
		 */
		do_action( 'after_awsm_application_form' );
	?>

</div><!-- .awsm-job-form-inner -->
