<?php
/**
 * InsightCustom Theme Customizer
 *
 * @package InsightCustom
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function insightcustom_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'insightcustom_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'insightcustom_customize_partial_blogdescription',
		) );
	}
	// Add site info options to the customizer
	require get_template_directory() . ( '/inc/customizer/site-info.php' );
	// Add header options to the customizer
	require get_template_directory() . ( '/inc/customizer/header.php' );
	// Add Footer Section
	require get_template_directory() . ( '/inc/customizer/footer.php' );
	// Add Social Media Customization Controls Section
	require get_template_directory() . ( '/inc/customizer/social-media.php' );
	// Easily Insert Header and Footer Code
	require get_template_directory() . ( '/inc/customizer/scripts.php' );
	// Notification bar editor
	require get_template_directory() . ( '/inc/customizer/notification-bar.php' );
}
add_action( 'customize_register', 'insightcustom_customize_register' );
// Add our css styles
add_action( 'wp_head', 'insight_customizer_css');
function insight_customizer_css()
	{
	  ?>
	  <style type="text/css">
			 <?php if (get_theme_mod('notification_bar_color')): ?>
				 .notification-bar { background: <?php echo get_theme_mod('notification_bar_color'); ?>; }
			 <?php
		 		endif;
			 ?>
			 <?php if (get_theme_mod('notification_text_color')): ?>
				 .notification-bar, .notification-bar-button, .notification-close svg { color: <?php echo get_theme_mod('notification_text_color'); ?>; fill: <?php echo get_theme_mod('notification_text_color'); ?>; }
			 <?php
		 		endif;
			 ?>
			 <?php if (get_theme_mod('notification_button_color')): ?>
				 .notification-bar-button { background: <?php echo get_theme_mod('notification_button_color'); ?>; }
			 <?php
		 		endif;
			 ?>
		</style>
	  <?php
	}
/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function insightcustom_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function insightcustom_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function insightcustom_customize_preview_js() {
	wp_enqueue_script( 'insightcustom-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'insightcustom_customize_preview_js' );
