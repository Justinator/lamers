<section id ="mission" class="paddedSection">
  <div id="missionWrapper" class="fullWidth fullOverlay" style="background: url('<?php $image = get_field('our_mission_background_image'); $size = 'full'; if( $image ) {echo $image['url'];}?>') no-repeat; background-size: cover; background-position:center;">
    <div id="missionBody" class="pageWidth limitWidth">
      <div class="centerText">
        <?php the_field('our_mission_headline'); ?>
        <h3 class="whiteText"><?php the_field('our_mission_body'); ?></h3>
      </div>
    </div>
  </div>
</section>
