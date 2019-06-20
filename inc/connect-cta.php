<section class="mainCTA">
  <div class="ctaWrapper fullWidth fullOverlay" style="background: url('<?php $image = get_field('cta_background_image', 'option'); $size = 'full'; if( $image ) {echo $image['url'];}?>') no-repeat; background-size: cover; background-position:center;">
    <div class="ctaBody pageWidth limitWidth">
      <div class="centerText">
        <h6 class="largeHeading whiteText"><?php the_field('cta_headline', 'option'); ?></h6>
        <p class="whiteText"><?php the_field('cta_body', 'option'); ?></p>
        <a href="<?php the_field('cta_link', 'option'); ?>" class="redButton" target="_blank"><?php the_field('cta_button', 'option'); ?></a>
      </div>
    </div>
  </div>
</section>
