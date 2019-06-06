<section id="aboutIntro">
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
          <h1><span class="smallHeading">Features of the</span><br><?php the_field('title'); ?></h1>
        </div>
        <div class="fleetDescWrap">
          <p><?php the_field('bus_short_description'); ?></p>
          <div class="btnContainer">
            <a class="redButton" href="<?php the_field('cta_button_link'); ?>"><?php the_field('cta_button_text'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
