<?php
/**
 * @package InsightCustom
 **/
?>
</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footerContent navWidth">
			<div id="copyright">
				<?php get_template_part("/inc/svg-icons/copyright"); ?>
				<p>&nbsp;<script>document.write(new Date().getFullYear());</script> Lamers Bus Lines, Inc.</p>
			</div>
			<div id="footerLinks">
				<div class="footerLinkWrap">
					<?php
					wp_nav_menu( array( 'theme_location' => 'FooterMenu', 'menu_id' => 'FooterMenu' ) );
					get_search_form();
					?>
				</div>
			</div>
			<?php get_template_part("/inc/components/socialNav"); ?>
	 </div>
	 <script type="text/javascript" src="/wp-content/themes/insightCustom/resources/js/slick-init.js"></script>
	 <script src="/wp-content/themes/insightCustom/resources/js/accordion.js"></script>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
