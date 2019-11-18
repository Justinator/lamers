<section id ="whyLamers" class="paddedSection">
  <div class="fullWidth">
    <?php the_field('why_lamers_heading', 'options'); ?>
    <div class="pageWidth flex-container">
      <div class="col30">
        <div class="blockText">
          <h3 class="redText smallMargin mediumHeading"><?php the_field('reason_1', 'options'); ?></h3>
          <p><?php the_field('reason_1_description', 'options'); ?></p>
        </div>
      </div>
      <div class="col30">
        <div class="blockText">
          <h3 class="redText smallMargin mediumHeading"><?php the_field('reason_2', 'options'); ?></h3>
          <p><?php the_field('reason_2_description', 'options'); ?></p>
        </div>
      </div>
      <div class="col30">
        <div class="blockText">
          <h3 class="redText smallMargin mediumHeading"><?php the_field('reason_3', 'options'); ?></h3>
          <p><?php the_field('reason_3_description', 'options'); ?></p>
        </div>
      </div>
    </div>
    <div class="pageWidth centerButton">
      <a class="redButton" href="/about"><?php the_field('why_lamers_button_text', 'options'); ?></a>
    </div>
  </div>
</section>
