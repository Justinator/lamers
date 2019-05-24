<section id="safety">
  <div class="pageWidth">
    <?php the_field('safety_headline'); ?>
  </div>
  <div class="pageWidth flex-container">
    <div class="col50 textWrap">
      <?php the_field('list_1'); ?>
    </div>
    <div id="list2" class="col50 textWrap">
      <?php the_field('list_2'); ?>
    </div>
  </div>
  <div class="smallPaddedSection pageWidth centerButton">
    <a class="redButton" href="<?php the_field('safety_button_link'); ?>"><?php the_field('safety_button'); ?></a>
  </div>
</section>
