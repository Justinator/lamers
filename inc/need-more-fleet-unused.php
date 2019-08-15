<section class="moreFleet paddedSection">
  <div class="navWidth">
    <div class="centerText">
      <h6 class="largeHeading">View Our Other Vehicle Types</h6>
    </div>
    <div class="flex-container flex-center">
      <div class="col30 textBlock centerText linkWrapper">
        <a href="<?php the_field( 'fleet_link_1' ); ?>" class="noDecoration">
          <div class="imageWrapper">
            <?php
              $image = get_field('fleet_1_image');
              $imageID = $image['ID'];
              echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image imageOverlay', 'data-sizes' => 'auto' ) );
            ?>
          </div>
          <h6 class="mediumHeading redText"><?php the_field('fleet_1_title'); ?></h6>
        </a>
      </div>
      <div class="col30 textBlock centerText linkWrapper">
        <a href="<?php the_field( 'fleet_link_2' ); ?>" class="noDecoration">
          <div class="imageWrapper">
            <?php
              $image = get_field('fleet_2_image');
              $imageID = $image['ID'];
              echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image imageOverlay', 'data-sizes' => 'auto' ) );
            ?>
          </div>
          <h6 class="mediumHeading redText"><?php the_field('fleet_2_title'); ?></h6>
        </a>
      </div>
      <div class="col30 textBlock centerText linkWrapper">
        <a href="<?php the_field( 'fleet_link_3' ); ?>" class="noDecoration">
          <div class="imageWrapper">
            <?php
              $image = get_field('fleet_3_image');
              $imageID = $image['ID'];
              echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image imageOverlay', 'data-sizes' => 'auto' ) );
            ?>
          </div>
          <h6 class="mediumHeading redText"><?php the_field('fleet_3_title'); ?></h6>
        </a>
      </div>
    </div>
    <div class="centerText">
      <a href="/our-fleet/" class="redButton">View Our Fleet</a>
    </div>
  </div>
</section>
