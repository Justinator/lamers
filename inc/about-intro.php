<section id="aboutIntro">
  <div class="fullWidth flex-container centerAlignedContainer">
    <div class="col50">
      <?php
        $image = get_field('intro_image', 'option');
        $imageID = $image['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </div>
    <div class="col50 centerTextBlock">
      <div class="textWrap textBlock">
        <?php the_field('intro_headline', 'option'); ?>
        <p><?php the_field('intro_copy', 'option'); ?></p>
        <div class="btnContainer">
          <a class="redButton" href="<?php the_field('intro_button_1_link', 'option'); ?>"><?php the_field('intro_button_1', 'option'); ?></a>
          <a class="redButton btn2" href="<?php the_field('intro_button_2_link', 'option'); ?>"><?php the_field('intro_button_2', 'option'); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>
