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
          <h1 class="noMargin"><?php echo get_the_title(); ?></h1>
        </div>
        <div class="fleetDescWrap">
          <?php the_field('intro_copy'); ?>
          <div class="btnContainer">
            <a class="redButton" href="/contact-us/">Contact Location</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="pageWidth">
  <div class="backToWrap">
    <?php get_template_part("/inc/svg-icons/double-arrow-left"); ?>
    <a href="/locations/">Back to all locations</a>
  </div>
</div>
