<section>
  <div class="ctaWrapper fullWidth fullOverlay" style="background: url('<?php $image = get_field('fleet_cta_background_image' , 'option'); $size = 'full'; if( $image ) {echo $image['url'];}?>') no-repeat; background-size: cover; background-position:center;">
    <div class="ctaBody pageWidth limitWidth">
      <div class="centerText">
        <h6 class="largeHeading whiteText">Request a <?php echo get_the_title(); ?> quote</h6>
        <p class="whiteText"><?php the_field('fleet_cta_body' , 'option'); ?></p>
        <?php 
          $fleetCTAButton = get_field( 'fleet_cta_button', 'option' );
        ?>
        <a href="<?php echo $fleetCTAButton['url'] ?>" class="redButton" target="<?php echo $fleetCTAButton['target'] ?>"><?php echo $fleetCTAButton['title'] ?></a>
      </div>
    </div>
  </div>
</section>
