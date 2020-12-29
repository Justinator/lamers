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
        <div class="btnContainer">
        <?php 
          $button1 = get_field( 'intro_button_1', 'option');
          $button2 = get_field( 'intro_button_2', 'option' );
        ?>
          <a class="redButton" href="<?php echo $button1['url'] ?>" target="<?php echo $button1['target'] ?>"><?php echo $button1['title'] ?></a>
          <a class="redButton btn2" href="<?php echo $button2['url'] ?>" target="<?php echo $button2['target'] ?>"><?php echo $button2['title'] ?></a>
        </div>
      </div>
    </div>
  </div>
</section>
