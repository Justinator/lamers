<section id="safety">
  <div class="pageWidth">
    <?php the_field('safety_headline', 'option'); ?>
  </div>
  <div class="pageWidth flex-container">
    <div class="col50">
      <?php the_field('list_1', 'option'); ?>
    </div>
    <div id="list2" class="col50">
      <?php the_field('list_2', 'option'); ?>
    </div>
  </div>
  <div class="smallPaddedSection pageWidth centerButton">
    <a class="redButton" href="<?php the_field('safety_button_link', 'option'); ?>"><?php the_field('safety_button', 'option'); ?></a>
  </div>
</section>
