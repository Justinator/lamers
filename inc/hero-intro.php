<section class="heroIntro">
  <div class="fullWidth flex-container centerAlignedContainer">
    <div class="col50">
      <?php
        $image = get_field('intro_image');
        $imageID = $image['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </div>
    <div class="col50 centerTextBlock">
      <div class="textWrap textBlock">
        <h1><span class="underline"><?php the_field('intro_headline'); ?></span></h1>
        <p><?php the_field('intro_copy'); ?></p>
        <div class="btnContainer">
          <a class="redButton" href="<?php the_field('intro_button_1_link'); ?>"><?php the_field('intro_button_1'); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>
