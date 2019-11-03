<section class="fleetHero">
  <div class="fullWidth flex-container centerAlignedContainer">
    <div class="col50">
      <?php
        $image = get_field('interior_fleet_page_hero_section_image');
        $imageID = $image['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </div>
    <div class="col50 centerTextBlock">
      <div class="textWrap textBlock">
        <div class="fleetTitleWrap">
          <h1 class="noMargin"><span class="smallHeading">Features of the</span><br><?php echo get_the_title(); ?></h1>
        </div>
        <div class="fleetDescWrap">
          <?php the_field('bus_short_description'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
