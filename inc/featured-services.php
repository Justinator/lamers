<section id="featuredServices">
  <div class="pageWidth">
    <div class="flexWrap">
      <h4 class="largeHeading"><?php the_field('featured_services_block_title'); ?></h4>
      <a href="/services/" id="arrowWrap" class="plainLink"><h5 id="viewAll">View All</h5>
        <svg class="smallIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <defs>
            <symbol id="icon-arrow-right2" viewBox="0 0 32 32">
              <title>arrow-right2</title>
              <path d="M19.414 27.414l10-10c0.781-0.781 0.781-2.047 0-2.828l-10-10c-0.781-0.781-2.047-0.781-2.828 0s-0.781 2.047 0 2.828l6.586 6.586h-19.172c-1.105 0-2 0.895-2 2s0.895 2 2 2h19.172l-6.586 6.586c-0.39 0.39-0.586 0.902-0.586 1.414s0.195 1.024 0.586 1.414c0.781 0.781 2.047 0.781 2.828 0z"></path>
            </symbol>
          </defs>
        </svg>
        <svg id="redArrow" class="redIcon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg>
      </a>
    </div>
  </div>
  <?php get_template_part('/inc/slider'); ?>
</section>
