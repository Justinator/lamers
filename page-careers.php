<?php
/**
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section id="pageContent">
			<section id="careersList" class="paddedSection">
				<div class="pageWidth limitWidth">
					<h1><span class="underline"><?php the_field('careers_headline'); ?></span></h1>
					<p><?php the_field('careers_copy'); ?></p>
					<?php wp_list_pages(array('sort_column' => 'post_title', 'child_of' => '19', 'title_li' => ' ', 'depth' => 0)); ?>
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
