<div class="pageWidth">
  <section class="regular slider">
    <a href="<?php the_field('slide_1_link', 'option'); ?>" class="plainLink centerText">
      <div class="sliderOverlay">
          <?php
            $image = get_field('slide_1_image', 'option');
            $imageID = $image['ID'];
            echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'lazyload', 'data-sizes' => 'auto' ) );
          ?>
          <h6 class="whiteText sliderTitle centerText smallHeading"><?php the_field('slide_1_title', 'option'); ?></h6>
      </div>
    </a>
    <a href="<?php the_field('slide_2_link', 'option'); ?>" class="plainLink centerText">
      <div class="sliderOverlay">
        <?php
          $image = get_field('slide_2_image', 'option');
          $imageID = $image['ID'];
          echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'lazyload', 'data-sizes' => 'auto' ) );
        ?>
        <h6 class="whiteText sliderTitle centerText smallHeading"><?php the_field('slide_2_title', 'option'); ?></h6>
      </div>
    </a>
    <a href="<?php the_field('slide_3_link', 'option'); ?>" class="plainLink centerText">
      <div class="sliderOverlay">
        <?php
          $image = get_field('slide_3_image', 'option');
          $imageID = $image['ID'];
          echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'lazyload', 'data-sizes' => 'auto' ) );
        ?>
        <h6 class="whiteText sliderTitle centerText smallHeading"><?php the_field('slide_3_title', 'option'); ?></h6>
      </div>
    </a>
    <a href="<?php the_field('slide_4_link', 'option'); ?>" class="plainLink centerText">
      <div class="sliderOverlay">
        <?php
          $image = get_field('slide_4_image', 'option');
          $imageID = $image['ID'];
          echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'lazyload', 'data-sizes' => 'auto' ) );
        ?>
        <h6 class="whiteText sliderTitle centerText smallHeading"><?php the_field('slide_4_title', 'option'); ?></h6>
      </div>
    </a>
    <a href="<?php the_field('slide_5_link', 'option'); ?>" class="plainLink centerText">
      <div class="sliderOverlay">
        <?php
          $image = get_field('slide_5_image', 'option');
          $imageID = $image['ID'];
          echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'lazyload', 'data-sizes' => 'auto' ) );
        ?>
        <h6 class="whiteText sliderTitle centerText smallHeading"><?php the_field('slide_5_title', 'option'); ?></h6>
      </div>
    </a>
    <a href="<?php the_field('slide_6_link', 'option'); ?>" class="plainLink centerText">
      <div class="sliderOverlay">
        <?php
          $image = get_field('slide_6_image', 'option');
          $imageID = $image['ID'];
          echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'lazyload', 'data-sizes' => 'auto' ) );
        ?>
        <h6 class="whiteText sliderTitle centerText smallHeading"><?php the_field('slide_6_title', 'option'); ?></h6>
      </div>
    </a>
  </section>
</div>
