<section id="affiliations" class="paddedSection">
  <div id="affiliateTitleWrap" class="pageWidth">
    <h6 id="affiliationsTitle" class="largeHeading centerText">Affiliations</h6>
  </div>
  <div class="pageWidth">
    <div id="affiliateWrapper">
      <?php
      $image = get_field('affiliations_logo_1', 'option');
      $imageID = $image['ID'];
      if(get_field('affiliations_logo_link_1', 'option')){
        echo '<a href="' . get_field('affiliations_logo_link_1', 'option') . '" target="_blank" rel="noreferrer">';
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'affiliateLogo', 'data-sizes' => 'auto' ) );
        echo '</a>';
      } else {
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'affiliateLogo', 'data-sizes' => 'auto' ) );
      }
      ?>
      <?php
      $image = get_field('affiliations_logo_2', 'option');
      $imageID = $image['ID'];
      if(get_field('affiliations_logo_link_2', 'option')){
        echo '<a href="' . get_field('affiliations_logo_link_2', 'option') . '" target="_blank" rel="noreferrer">';
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'affiliateLogo', 'data-sizes' => 'auto' ) );
        echo '</a>';
      } else {
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'affiliateLogo', 'data-sizes' => 'auto' ) );
      }
      ?>
      <?php
      $image = get_field('affiliations_logo_3', 'option');
      $imageID = $image['ID'];
      if(get_field('affiliations_logo_link_3', 'option')){
        echo '<a href="' . get_field('affiliations_logo_link_3', 'option') . '" target="_blank" rel="noreferrer">';
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'affiliateLogo', 'data-sizes' => 'auto' ) );
        echo '</a>';
      } else {
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'affiliateLogo', 'data-sizes' => 'auto' ) );
      }
      ?>
      <?php
      $image = get_field('affiliations_logo_4', 'option');
      $imageID = $image['ID'];
      if(get_field('affiliations_logo_link_4', 'option')){
        echo '<a href="' . get_field('affiliations_logo_link_4', 'option') . '" target="_blank" rel="noreferrer">';
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'affiliateLogo', 'data-sizes' => 'auto' ) );
        echo '</a>';
      } else {
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'affiliateLogo', 'data-sizes' => 'auto' ) );
      }
      ?>
      <?php
      $image = get_field('affiliations_logo_5', 'option');
      $imageID = $image['ID'];
      if(get_field('affiliations_logo_link_5', 'option')){
        echo '<a href="' . get_field('affiliations_logo_link_5', 'option') . '" target="_blank" rel="noreferrer">';
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'affiliateLogo', 'data-sizes' => 'auto' ) );
        echo '</a>';
      } else {
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'affiliateLogo', 'data-sizes' => 'auto' ) );
      }
      ?>
      <?php
      $image = get_field('affiliations_logo_6', 'option');
      $imageID = $image['ID'];
      if(get_field('affiliations_logo_link_6', 'option')){
        echo '<a href="' . get_field('affiliations_logo_link_6', 'option') . '" target="_blank" rel="noreferrer">';
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'affiliateLogo', 'data-sizes' => 'auto' ) );
        echo '</a>';
      } else {
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'affiliateLogo', 'data-sizes' => 'auto' ) );
      }
      ?>
    </div>
  </div>
</section>
