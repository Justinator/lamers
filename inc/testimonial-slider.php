<div id="testimonialWrapper" class="pageWidth">
  <section class="center slider">
    <div class="slideWrap">
      <?php
        $image = get_field('testimonial_image');
        $imageID = $image['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'lazyload', 'data-sizes' => 'auto' ) );
      ?>
      <div class="testimonial">
        <p class="whiteText noMargin"><?php the_field('testimonial_1'); ?></p>
        <div class="nameWrapper">
          <h6 class="whiteText"><?php the_field('testimonial_name'); ?><br><?php the_field('testimonial_location'); ?></h6>
        </div>
      </div>
    </div>
    <div>
      <?php
        $image = get_field('testimonial_image');
        $imageID = $image['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'lazyload', 'data-sizes' => 'auto' ) );
      ?>
      <div class="testimonial">
        <p class="whiteText noMargin"><?php the_field('testimonial_2'); ?></p>
        <div class="nameWrapper">
          <h6 class="whiteText"><?php the_field('testimonial_2_name'); ?><br><?php the_field('testimonial_2_location'); ?></h6>
        </div>
      </div>
    </div>
    <div>
      <?php
        $image = get_field('testimonial_image');
        $imageID = $image['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'lazyload', 'data-sizes' => 'auto' ) );
      ?>
      <div class="testimonial">
        <p class="whiteText noMargin"><?php the_field('testimonial_3'); ?></p>
        <div class="nameWrapper">
          <h6 class="whiteText"><?php the_field('testimonial_3_name'); ?><br><?php the_field('testimonial_3_location'); ?></h6>
        </div>
      </div>
    </div>
  </section>
</div>
