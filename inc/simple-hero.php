<section class="simpleHero">
  <div class="fullWidth flex-container centerAlignedContainer removeBottomMargin">
    <div class="col50">
      <?php
        $image = get_field('intro_image');
        $imageID = $image['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </div>
    <div class="col50 centerTextBlock">
      <div class="textWrap textBlock">
        <h1><span class="underline"><?php the_field('intro_headline'); ?></span></h1>
      </div>
    </div>
  </div>
</section>
