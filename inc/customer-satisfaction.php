<section class="paddingBottom">
  <div class="fullWidth flex-container centerAlignedContainer">
    <div class="col50 centerTextBlock">
      <div class="textWrap textBlock">
        <?php the_field('headline', 'option'); ?>
        <?php the_field('copy', 'option'); ?>
      </div>
    </div>
    <div class="col50">
      <?php
        $image = get_field('image', 'option');
        $imageID = $image['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </div>
  </div>
</section>
