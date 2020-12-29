<section>
  <div class="ctaWrapper fullWidth" style="background: url('<?php $image = get_field('cta_background_image', 'option'); $size = 'full'; if( $image ) {echo $image['url'];}?>') no-repeat; background-size: cover; background-position:center;">
    <div class="ctaBody pageWidth limitWidth">
      <div class="centerText">
        <h6 class="largeHeading whiteText"><?php the_field('cta_headline', 'option'); ?></h6>
        <p class="whiteText"><?php the_field('cta_body', 'option'); ?></p>
        <?php 
          $ctaButton = get_field( 'cta_button', 'option' );
        ?>
        <a href="<?php echo $ctaButton['url'] ?>" class="redButton" target="<?php echo $ctaButton['target'] ?>"><?php echo $ctaButton['title'] ?></a>
      </div>
    </div>
  </div>
</section>
