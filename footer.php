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
	 <?php 
		if( get_theme_mod( 'footer_scripts' ) ):
			$footerScripts = get_theme_mod( 'footer_scripts' );
			echo $footerScripts;
		endif;
	?>
	</footer><!-- #colophon -->
	<script src="/wp-content/themes/insightCustom/resources/js/accordion.js"></script>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
<?php
	if( get_theme_mod( 'disable_notification_bar' ) == false ):
		?>
		<div class="notification-bar-spacer">
			<div class="notification-bar">
				<div class="notification-bar-inner">
					<p><?php echo get_theme_mod( 'notification_bar_content' ); ?> </p>
					<?php if( get_theme_mod( 'disable_button' ) == false ):
					$notificationURL = get_theme_mod( 'notification_bar_button_url' ); ?>
					<a href="<?php echo $notificationURL; ?>" class="notification-bar-button">
						<?php echo get_theme_mod( 'notification_bar_button_text' ); ?>
					</a>
					<?php endif; ?>
				</div>
				<div class="notification-close">
					<?php get_template_part( '/inc/svg-icons/close' ); ?>
				</div>
			</div>
		</div>
		<?php
	endif;
?>
</html>
