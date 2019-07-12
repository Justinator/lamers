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
<div class="pageWidth">
  <div class="backToWrap">
    <svg class="smallIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <defs>
        <symbol id="icon-angle-double-left" viewBox="0 0 17 28">
          <title>angle-double-left</title>
          <path d="M9.797 21.5c0 0.125-0.063 0.266-0.156 0.359l-0.781 0.781c-0.094 0.094-0.234 0.156-0.359 0.156s-0.266-0.063-0.359-0.156l-7.281-7.281c-0.094-0.094-0.156-0.234-0.156-0.359s0.063-0.266 0.156-0.359l7.281-7.281c0.094-0.094 0.234-0.156 0.359-0.156s0.266 0.063 0.359 0.156l0.781 0.781c0.094 0.094 0.156 0.234 0.156 0.359s-0.063 0.266-0.156 0.359l-6.141 6.141 6.141 6.141c0.094 0.094 0.156 0.234 0.156 0.359zM15.797 21.5c0 0.125-0.063 0.266-0.156 0.359l-0.781 0.781c-0.094 0.094-0.234 0.156-0.359 0.156s-0.266-0.063-0.359-0.156l-7.281-7.281c-0.094-0.094-0.156-0.234-0.156-0.359s0.063-0.266 0.156-0.359l7.281-7.281c0.094-0.094 0.234-0.156 0.359-0.156s0.266 0.063 0.359 0.156l0.781 0.781c0.094 0.094 0.156 0.234 0.156 0.359s-0.063 0.266-0.156 0.359l-6.141 6.141 6.141 6.141c0.094 0.094 0.156 0.234 0.156 0.359z"></path>
        </symbol>
      </defs>
    </svg>
    <svg class="redIcon icon-angle-double-left"><use xlink:href="#icon-angle-double-left"></use></svg>
    <a href="/locations/">Back to all locations</a>
  </div>
</div>
