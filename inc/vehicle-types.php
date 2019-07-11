<div class="navWidth">
  <div class="flex-container flex-center wrappedFlexContainer">
    <?php if( have_rows('available_vehicles') ): ?>
      <?php while( have_rows('available_vehicles') ): the_row();
        // vars
        $title = get_sub_field('vehicle_title');
        $link = get_sub_field('vehicle_page_link');
        ?>
        <div class="col30 textBlock centerText linkWrapper">
          <a href="<?php echo $link; ?>" class="noDecoration">
            <div class="imageWrapper">
              <?php
                $image = get_sub_field('vehicle_image');
                $imageID = $image['ID'];
                echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image imageOverlay', 'data-sizes' => 'auto' ) );
              ?>
            </div>
            <h6 class="mediumHeading redText"><?php echo $title; ?></h6>
          </a>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <div class="centerText">
    <a href="/our-fleet/" class="redButton">View Our Fleet</a>
  </div>
</div>
