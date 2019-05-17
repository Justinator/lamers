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

	<link href="/wp-content/uploads/2019/03/favicon.png" rel="shortcut icon">

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<a class="screenReaderSkipToContent" href="#primary" tabindex="0">Skip to main content</a>

<nav role="navigation" aria-label="mobile navigation">

	<div class = "mobile-menu">

		<?php wp_nav_menu( array( 'theme_location' => 'mobileNav', 'menu_id' => 'mobile-menu' ) ); ?>

	</div>

</nav>

<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">

		<nav role="navigation" aria-label="desktop sub navigation">

			<div class="secondaryNavigation">

				<div class="navWidth secondaryMenuWrap">

					<div id="emailLink" class="secondaryLinkWrapper">

						<svg class="smallIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

							<defs>

								<symbol id="icon-envelope" viewBox="0 0 28 28">

									<title>envelope</title>

									<path d="M28 11.094v12.406c0 1.375-1.125 2.5-2.5 2.5h-23c-1.375 0-2.5-1.125-2.5-2.5v-12.406c0.469 0.516 1 0.969 1.578 1.359 2.594 1.766 5.219 3.531 7.766 5.391 1.313 0.969 2.938 2.156 4.641 2.156h0.031c1.703 0 3.328-1.188 4.641-2.156 2.547-1.844 5.172-3.625 7.781-5.391 0.562-0.391 1.094-0.844 1.563-1.359zM28 6.5c0 1.75-1.297 3.328-2.672 4.281-2.438 1.687-4.891 3.375-7.313 5.078-1.016 0.703-2.734 2.141-4 2.141h-0.031c-1.266 0-2.984-1.437-4-2.141-2.422-1.703-4.875-3.391-7.297-5.078-1.109-0.75-2.688-2.516-2.688-3.938 0-1.531 0.828-2.844 2.5-2.844h23c1.359 0 2.5 1.125 2.5 2.5z"></path>

								</symbol>

							</defs>

						</svg>

						<svg class="blackIcon icon-envelope"><use xlink:href="#icon-envelope"></use></svg>

						<a class="secondaryLink" href="mailto:info@foxstructures.com" tabindex="-1">info@foxstructures.com</a>

					</div>

					<div class="secondaryLinkWrapper">

						<svg class="smallIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

							<defs>

								<symbol id="icon-phone" viewBox="0 0 32 32">

									<title>phone</title>

									<path d="M22 20c-2 2-2 4-4 4s-4-2-6-4-4-4-4-6 2-2 4-4-4-8-6-8-6 6-6 6c0 4 4.109 12.109 8 16s12 8 16 8c0 0 6-4 6-6s-6-8-8-6z"></path>

								</symbol>

							</defs>

						</svg>

						<svg class="blackIcon icon-phone"><use xlink:href="#icon-phone"></use></svg>

						<a class="secondaryLink" href="tel:(920)766-9305" tabindex="-1">(920) 766-9305</a>

					</div>

				</div>

			</div>

		</nav>

		<div id="site-navigation" class="main-navigation">

			<nav role="navigation" aria-label="primary navigation">

				<div class="navWidth menuLinkWrap">

						<a href="https://foxstructures.com">

							<img src="/wp-content/uploads/2019/01/FoxStructuresLogo-REV.png" class="siteLogo" alt="Fox Structures Logo"><span class="screen-reader-text">Go back to the homepage</span>

						</a>

						<?php wp_nav_menu( array( 'theme_location' => 'Primary', 'menu_id' => 'primary-menu' ) ); ?>

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

		</div><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
