<section>
  <div class="ctaWrapper fullWidth fullOverlay" style="background: url('<?php $image = get_field('fleet_cta_background_image' , 'option'); $size = 'full'; if( $image ) {echo $image['url'];}?>') no-repeat; background-size: cover; background-position:center;">
    <div class="ctaBody pageWidth limitWidth">
      <div class="centerText">
        <h6 class="largeHeading whiteText">Request a <?php echo get_the_title(); ?> quote</h6>
        <p class="whiteText"><?php the_field('fleet_cta_body' , 'option'); ?></p>
        <a href="<?php the_field('fleet_cta_link' , 'option'); ?>" class="redButton"><?php the_field('fleet_cta_button' , 'option'); ?></a>
      </div>
    </div>
  </div>
</section>
