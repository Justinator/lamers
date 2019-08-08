<div class="breadcrumbs">
  <div class="navWidth">
    <?php
      if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('
        <p id="breadcrumbs" class="noMargin">','</p>');
      }
    ?>

    <p class="noMargin">
      <a href="/category/travel-alerts/" id="travelAlerts" class="centerAlignedContainer">
        <svg class="smallIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <defs>
            <symbol id="icon-exclamation-circle" viewBox="0 0 24 28">
              <title>exclamation-circle</title>
              <path d="M12 2c6.625 0 12 5.375 12 12s-5.375 12-12 12-12-5.375-12-12 5.375-12 12-12zM14 21.484v-2.969c0-0.281-0.219-0.516-0.484-0.516h-3c-0.281 0-0.516 0.234-0.516 0.516v2.969c0 0.281 0.234 0.516 0.516 0.516h3c0.266 0 0.484-0.234 0.484-0.516zM13.969 16.109l0.281-9.703c0-0.109-0.047-0.219-0.156-0.281-0.094-0.078-0.234-0.125-0.375-0.125h-3.437c-0.141 0-0.281 0.047-0.375 0.125-0.109 0.063-0.156 0.172-0.156 0.281l0.266 9.703c0 0.219 0.234 0.391 0.531 0.391h2.891c0.281 0 0.516-0.172 0.531-0.391z"></path>
            </symbol>
          </defs>
        </svg>
      <svg class="mediumIcon icon-exclamation-circle"><use xlink:href="#icon-exclamation-circle"></use></svg>
        <?php
        $cat_count = get_category( '76' );
        if ($cat_count > 0) {
          echo 'Travel Alerts ';
          echo $cat_count->count;
        }
        ?>
      </a>
    </p>
  </div>
</div>
