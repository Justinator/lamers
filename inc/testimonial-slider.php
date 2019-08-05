<div id="testimonialWrapper" class="pageWidth">
  <section class="center slider">
    <div class="slideWrap">
      <?php
        $image = get_field('testimonial_image', 'options');
        $imageID = $image['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'lazyload', 'data-sizes' => 'auto' ) );
      ?>
      <div class="testimonial">
        <p class="whiteText noMargin"><?php the_field('testimonial_1', 'options'); ?></p>
        <div class="nameWrapper">
          <h6 class="whiteText smallHeading"><?php the_field('testimonial_name', 'options'); ?><br><?php the_field('testimonial_location', 'options'); ?></h6>
        </div>
      </div>
    </div>
    <div>
      <?php
        $image = get_field('testimonial_2_image', 'options');
        $imageID = $image['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'lazyload', 'data-sizes' => 'auto' ) );
      ?>
      <div class="testimonial">
        <p class="whiteText noMargin"><?php the_field('testimonial_2', 'options'); ?></p>
        <div class="nameWrapper">
          <h6 class="whiteText smallHeading"><?php the_field('testimonial_2_name', 'options'); ?><br><?php the_field('testimonial_2_location', 'options'); ?></h6>
        </div>
      </div>
    </div>
    <div>
      <?php
        $image = get_field('testimonial_3_image', 'options');
        $imageID = $image['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'lazyload', 'data-sizes' => 'auto' ) );
      ?>
      <div class="testimonial">
        <p class="whiteText noMargin"><?php the_field('testimonial_3', 'options'); ?></p>
        <div class="nameWrapper">
          <h6 class="whiteText smallHeading"><?php the_field('testimonial_3_name', 'options'); ?><br><?php the_field('testimonial_3_location', 'options'); ?></h6>
        </div>
      </div>
    </div>
  </section>
</div>
