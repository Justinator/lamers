<section id="contact">
  <div class="pageWidth flex-container">
    <div class="col50">
      <div>
        <h6><span class="underline">Contact</span> Us</h6>
        <?php the_field('contact_intro', 'option'); ?>
        <h6 class="noMargin smallHeading"><?php the_field('corporate_office_title', 'option'); ?></h6>
        <?php the_field('corporate_address', 'option'); ?>
        <h6 class="noMargin smallHeading">Location Hours</h6>
        <p>
          <?php the_field('corporate_hours', 'option'); ?>
        </p>
        <h6 class="noMargin smallHeading">Phone</h6>
        <p>
          <?php if( have_rows('lamers_phone_numbers', 'option') ): ?>
    		  	<?php while( have_rows('lamers_phone_numbers', 'option') ): the_row();
    		  		// vars
    		  		$locationTitle = get_sub_field('location_title', 'option');
    		  		$locationPhone = get_sub_field('location_phone_number', 'option');
    		  		?>
                <?php echo $locationTitle; ?><br>
                <a class="plainLink" href="tel:<?php echo $locationPhone; ?>"><strong><?php echo $locationPhone; ?></strong></a><br>
    		  	<?php endwhile; ?>
    		  <?php endif; ?>
          TVI Bus Sales<br>
          <strong>1-800-236-1240 Ext. 10190</strong><br>
        </p>
      </div>
    </div>
    <div class="col50">
      <?php echo do_shortcode('[caldera_form id="CF5ce5ba5c3f551"]'); ?>
    </div>
  </div>
</section>
