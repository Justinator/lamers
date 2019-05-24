<div class="pageWidth">
  <section class="regular slider">
    <a href="<?php the_field('slide_1_link'); ?>" class="plainLink centerText">
      <div class="sliderOverlay">
          <?php
            $image = get_field('slide_1_image');
            $imageID = $image['ID'];
            echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'lazyload', 'data-sizes' => 'auto' ) );
          ?>
          <h6 class="whiteText sliderTitle centerText"><?php the_field('slide_1_title'); ?></h6>
      </div>
    </a>
    <a href="<?php the_field('slide_2_link'); ?>" class="plainLink centerText">
      <div class="sliderOverlay">
        <?php
          $image = get_field('slide_2_image');
          $imageID = $image['ID'];
          echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'lazyload', 'data-sizes' => 'auto' ) );
        ?>
        <h6 class="whiteText sliderTitle centerText"><?php the_field('slide_2_title'); ?></h6>
      </div>
    </a>
    <a href="<?php the_field('slide_3_link'); ?>" class="plainLink centerText">
      <div class="sliderOverlay">
        <?php
          $image = get_field('slide_3_image');
          $imageID = $image['ID'];
          echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'lazyload', 'data-sizes' => 'auto' ) );
        ?>
        <h6 class="whiteText sliderTitle centerText"><?php the_field('slide_3_title'); ?></h6>
      </div>
    </a>
    <a href="<?php the_field('slide_4_link'); ?>" class="plainLink centerText">
      <div class="sliderOverlay">
        <?php
          $image = get_field('slide_4_image');
          $imageID = $image['ID'];
          echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'lazyload', 'data-sizes' => 'auto' ) );
        ?>
        <h6 class="whiteText sliderTitle centerText"><?php the_field('slide_4_title'); ?></h6>
      </div>
    </a>
    <a href="<?php the_field('slide_5_link'); ?>" class="plainLink centerText">
      <div class="sliderOverlay">
        <?php
          $image = get_field('slide_5_image');
          $imageID = $image['ID'];
          echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'lazyload', 'data-sizes' => 'auto' ) );
        ?>
        <h6 class="whiteText sliderTitle centerText"><?php the_field('slide_5_title'); ?></h6>
      </div>
    </a>
    <a href="<?php the_field('slide_6_link'); ?>" class="plainLink centerText">
      <div class="sliderOverlay">
        <?php
          $image = get_field('slide_6_image');
          $imageID = $image['ID'];
          echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'lazyload', 'data-sizes' => 'auto' ) );
        ?>
        <h6 class="whiteText sliderTitle centerText"><?php the_field('slide_6_title'); ?></h6>
      </div>
    </a>
  </section>
</div>
