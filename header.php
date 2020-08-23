<?php
/**
 * The header for our theme
 * @package InsightCustom
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
	<script src="/wp-content/themes/insightCustom/resources/js/slick.js"></script>
	<!-- Preconnect to Google Services -->
	<link rel="dns-prefetch" href="https://google-analytics.com">
	<link rel="dns-prefetch" href="https://www.google-analytics.com">
	<link rel="dns-prefetch" href="https://www.googletagmanager.com">
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link rel="dns-prefetch" href="https://use.typekit.net/mkv6ofm.css">
	<link href="https://www.google-analytics.com" rel="preconnect" crossorigin>
	<link href="https://google-analytics.com" rel="preconnect" crossorigin>
	<link href="https://www.googletagmanager.com" rel="preconnect" crossorigin>
	<link href="https://www.fonts.gstatic.com" rel="preconnect" crossorigin>
	
	<?php 
		if(get_theme_mod( 'header_scripts' )):
			$headerScripts = get_theme_mod( 'header_scripts' );
			echo $headerScripts;
		endif;
	?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="screenReaderSkipToContent" href="#primary" tabindex="0">Skip to main content</a>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<nav role="navigation" aria-label="desktop sub navigation" class="secondaryNavigation">
			<div class="fullWidth secondaryMenuWrap">
				<?php wp_nav_menu( array( 'theme_location' => 'SecondaryMenu', 'menu_id' => 'SecondaryMenu' ) );
				get_search_form();
				?>
			</div>
		</nav>
		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="primary navigation">
			<div class="navWidth menuLinkWrap">
					<a href="<?=site_url()?>">
						<img src="/wp-content/uploads/2019/05/Lamers-Bus-Lines-Logo-RGB.jpg" class="siteLogo" alt="Lamer's Bus Lines Logo">
					</a>
					<?php wp_nav_menu( array( 'theme_location' => 'PrimaryMenu', 'menu_id' => 'PrimaryMenu' ) ); ?>
					<div class = "menuButtonWrap" aria-label="mobile menu toggle button" tabindex="0">
						<div class = "menuTextWrap">
							<span class = "menuText">MENU</span>
							<button class="hamburger hamburger--collapse" type="button" aria-label="Mobile menu button" aria-expanded="false">
							  <span class="hamburger-box">
							    <span class="hamburger-inner"></span>
							  </span>
							</button>
						</div>
					</div>
			</div>
		</nav>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
