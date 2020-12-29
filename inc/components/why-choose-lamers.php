<section id ="whyLamers" class="paddedSection">
  <div class="fullWidth">
    <?php the_field('why_lamers_heading', 'options'); ?>
    <div class="pageWidth flex-container">
      <div class="col30">
        <div class="blockText">
          <h3 class="redText smallMargin mediumHeading noMargin"><?php the_field('reason_1', 'options'); ?></h3>
          <p><?php the_field('reason_1_description', 'options'); ?></p>
        </div>
      </div>
      <div class="col30">
        <div class="blockText">
          <h3 class="redText smallMargin mediumHeading noMargin"><?php the_field('reason_2', 'options'); ?></h3>
          <p><?php the_field('reason_2_description', 'options'); ?></p>
        </div>
      </div>
      <div class="col30">
        <div class="blockText">
          <h3 class="redText smallMargin mediumHeading noMargin"><?php the_field('reason_3', 'options'); ?></h3>
          <p><?php the_field('reason_3_description', 'options'); ?></p>
        </div>
      </div>
    </div>
    <div class="pageWidth centerButton">
      <?php 
        $lamersButton = get_field( 'why_lamers_button', 'options' );
      ?>
      <a class="redButton" href="<?php echo $lamersButton['url']?>"><?php echo $lamersButton['title'] ?></a>
    </div>
  </div>
</section>
