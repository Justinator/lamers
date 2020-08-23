<?php
/**
 * InsightCustom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package InsightCustom
 */

if ( ! function_exists( 'insightcustom_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function insightcustom_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on InsightCustom, use a find and replace
		 * to change 'insightcustom' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'insightcustom', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in multiple locations.
		register_nav_menus( array(
			'PrimaryMenu' => esc_html__( 'PrimaryMenu', 'insightCustom' ),
			'SecondaryMenu' => esc_html__( 'SecondaryMenu', 'insightCustom' ),
			'FooterMenu' => esc_html__( 'FooterMenu', 'insightCustom' ),
			'ServiceMenu' => esc_html__( 'ServiceMenu', 'insightCustom' ),
			'FleetMenu' => esc_html__( 'FleetMenu', 'insightCustom' ),
			'ConnectMenu' => esc_html__( 'ConnectMenu', 'insightCustom' ),
			'ExpressMenu' => esc_html__( 'ExpressMenu', 'insightCustom' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'insightcustom_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'insightcustom_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function insightcustom_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'insightcustom_content_width', 640 );
}
add_action( 'after_setup_theme', 'insightcustom_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function insightcustom_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'insightcustom' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'insightcustom' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'insightcustom_widgets_init' );
/*********************************************************
Add custom admin login screen styles
*********************************************************/
function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
/*
* Add a custom excerpt length
*/
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Advanced Custom Fields Customizations
require_once( 'inc/acf.php' );
// Remove WordPress Emojis
require_once( 'inc/remove-emoji.php' );
// Create custom image sizes
add_image_size('blog-image', 1000, 500, true);
add_image_size('hero-image', 1200, 850, true);
// Turn off the default WordPress smart redirects
remove_action('template_redirect','redirect_canonical');
/**
 * Enqueue styles.
 */
function insightcustom_styles() {
	wp_enqueue_style( 'insightcustom-style', get_stylesheet_uri() );
	wp_enqueue_style( 'insightcustom-style-min', get_stylesheet_directory_uri() . '/resources/css/style.min.css' );
	wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', false );
	wp_enqueue_style( 'typekit-font', 'https://use.typekit.net/mkv6ofm.css', false );
	wp_enqueue_style('slick-css', get_stylesheet_directory_uri() . '/css/slick.css');
	wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/css/slick-theme.css');
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'insightcustom_styles' );
/**
 * Enqueue scripts
 */
function insightcustom_scripts() {
	wp_enqueue_script('custom', get_template_directory_uri() . '/resources/js/custom.min.js', ['jquery'], '1.0.0', false);
	wp_enqueue_script('slick-init', get_template_directory_uri() . '/resources/js/slick-init.js', ['jquery'], '1.0.0', true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'insightcustom_scripts' );
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
