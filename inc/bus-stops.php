<?php if( have_rows('bus_stop_details') ): ?>
  	<?php while( have_rows('bus_stop_details') ): the_row();
  		// vars
  		$city = get_sub_field('bus_stop_city');
  		$address = get_sub_field('bus_stop_address');
  		$link = get_sub_field('bus_stop_map_link');

  		?>
  		<div class="detailsWrapper">
        <p>
          <strong><?php echo $city; ?></strong><br>
          <?php echo $address; ?>
        </p>
  			<?php if( $link ): ?>
  				<a href="<?php echo $link; ?>" target="_blank">View on Map</a>
  			<?php endif; ?>
  		</div>
  	<?php endwhile; ?>
  <?php endif; ?>
  <p>
    * Location does not sell bus tickets. Printed online tickets or cash sales to driver accepted. Exact change only.
  </p>
