<section id="featuredServices">
  <div class="pageWidth">
    <div class="flexWrap">
      <h4 class="largeHeading"><?php the_field('featured_services_block_title', 'option'); ?></h4>
      <a href="/services/" id="arrowWrap" class="plainLink"><h5 id="viewAll">View All</h5>
        <?php get_template_part("/inc/svg-icons/arrow-right"); ?>
      </a>
    </div>
  </div>
  <?php get_template_part('/inc/components/slider'); ?>
</section>
