<section>
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
        <div class="fleetTitleWrap">
          <h1 class="noMargin"><?php the_field('intro_headline'); ?></h1>
        </div>
        <div class="fleetDescWrap">
          <p><?php the_field('intro_copy'); ?></p>
          <div class="btnContainer">
            <a class="redButton" href="/contact/">Contact Location</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
