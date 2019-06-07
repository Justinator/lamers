<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part('/inc/breadcrumbs'); ?>
		<?php get_template_part('/inc/history-hero'); ?>
		<section id="pageContent">
			<section class="busDetails greyBlock paddedSection">
				<div class="pageWidth limitWidth">
					<?php the_field('history_page_content'); ?>
				</div>
			</section>
		</section>
	</main>
</div>
<?php
get_footer();
