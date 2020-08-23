<?php
  $image1 = get_field('testimonial_image', 'options');
  $image2 = get_field('testimonial_2_image', 'options');
  $image3 = get_field('testimonial_3_image', 'options');
?>
<div id="testimonialWrapper" class="pageWidth">
  <section class="center slider">
    <div class="slideWrap" style="background-image: url('<?php echo $image1; ?>'); background-repeat: no-repeat; background-size: cover; background-position:center;">
      <div class="testimonial">
        <div class="testimonial-inner">
          <p class="whiteText noMargin"><?php the_field('testimonial_1', 'options'); ?></p>
          <div class="nameWrapper">
            <h6 class="whiteText smallHeading"><?php the_field('testimonial_name', 'options'); ?><br><?php the_field('testimonial_location', 'options'); ?></h6>
          </div>
        </div>
      </div>
    </div>
    <div class="slideWrap" style="background-image: url('<?php echo $image2; ?>'); background-repeat: no-repeat; background-size: cover; background-position:center;">
      <div class="testimonial">
        <div class="testimonial-inner">
          <p class="whiteText noMargin"><?php the_field('testimonial_2', 'options'); ?></p>
          <div class="nameWrapper">
            <h6 class="whiteText smallHeading"><?php the_field('testimonial_2_name', 'options'); ?><br><?php the_field('testimonial_2_location', 'options'); ?></h6>
          </div>
        </div>
      </div>
    </div>
    <div class="slideWrap" style="background-image: url('<?php echo $image3; ?>'); background-repeat: no-repeat; background-size: cover; background-position:center;">
      <div class="testimonial">
        <div class="testimonial-inner">
          <p class="whiteText noMargin"><?php the_field('testimonial_3', 'options'); ?></p>
          <div class="nameWrapper">
            <h6 class="whiteText smallHeading"><?php the_field('testimonial_3_name', 'options'); ?><br><?php the_field('testimonial_3_location', 'options'); ?></h6>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
