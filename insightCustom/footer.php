<?php
/**
 * The template for displaying the footer
 *
 * @package InsightCustom
 */
?>

</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="site-info navWidth">

			<div class="col20">

				<a href="#"><img src="/wp-content/uploads/2019/01/FoxStructuresLogo-REV.png" class="footerLogo" alt="Fox Structures Logo"><span class="screen-reader-text">Go back to the homepage</span></a>

			</div>

			<div class="col80">

				<?php wp_nav_menu( array( 'theme_location' => 'footerNav', 'menu_id' => 'footer-menu' ) ); ?>

			</div>

		</div><!-- .site-info -->

		<div class="footerContact navWidth flex-container whiteText">

			<div id="contactInfo">

				<a href="https://www.google.com/maps/dir//Fox+Structures+Inc,+2201+E+Line+Rd,+Kaukauna,+WI+54130/@44.30059,-88.256114,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8803aeafeea6c15d:0x14c92b8c9918bf5!2m2!1d-88.2561139!2d44.3005903?hl=en-US">
				<h6>2201 Eastline Rd <br>
				Kaukauna, WI 54130</h6></a>

				<p class="noMargin">Local: <a href="tel:(920)766-9305">920-766-9305</a></p>

				<p class="noMargin">Phone: <a href="tel:(800)-236-1369">800-236-1369</a></p>

				<p class="noMargin">Fax: 920-766-9354</p>

			</div>

		</div>

			<div id="copyright">

				<div class="copyrightContentWrap navWidth">

					<div id="copyrightWrap">

						<div id="copyrightContent">

							<svg class="smallIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

								<defs>

									<symbol id="icon-copyright" viewBox="0 0 24 28">

										<title>copyright</title>

										<path d="M17.969 16.781v1.703c0 2.203-3.516 3.016-5.719 3.016-4.281 0-7.5-3.266-7.5-7.578 0-4.234 3.187-7.422 7.422-7.422 1.547 0 5.594 0.547 5.594 3.031v1.703c0 0.141-0.109 0.25-0.25 0.25h-1.844c-0.141 0-0.25-0.109-0.25-0.25v-1.094c0-0.984-1.891-1.437-3.172-1.437-2.922 0-4.953 2.109-4.953 5.141 0 3.141 2.125 5.437 5.078 5.437 1.125 0 3.25-0.422 3.25-1.406v-1.094c0-0.141 0.109-0.25 0.234-0.25h1.859c0.125 0 0.25 0.109 0.25 0.25zM12 4c-5.516 0-10 4.484-10 10s4.484 10 10 10 10-4.484 10-10-4.484-10-10-10zM24 14c0 6.625-5.375 12-12 12s-12-5.375-12-12 5.375-12 12-12v0c6.625 0 12 5.375 12 12z"></path>

									</symbol>

								</defs>

							</svg>

							<svg class="icon icon-copyright"><use xlink:href="#icon-copyright"></use></svg>

							<p>&nbsp;<script>document.write(new Date().getFullYear());</script> Fox Structures</p>

						</div>

						<div id="closingLinks">

							<nav role="navigation" aria-label="Sub Footer Links">

								<a href="/privacy-policy/" class="borderRight">Privacy Policy</a> |

								<a href="/sitemap/" class="borderRight">Sitemap</a> |

								<a href="/contact/" class="borderRight">Contact Us</a>

							</nav>

						</div>

					</div>

					<?php get_template_part("/inc/socialNav"); ?>

				</div>

			</div>
			<!-- Google Tag Manager (noscript)
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPJZV49"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			 End Google Tag Manager (noscript) -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
