<div class="socialWrapper">
  <nav role="navigation" aria-label="social navigation">
    <?php if(get_theme_mod('facebook')) { ?>
      <a href="<?php echo get_theme_mod('facebook'); ?>" target="_blank" role="link" aria-hidden="true" rel="noreferrer">
        <div class="socialPadding">
          <img src="/wp-content/uploads/2019/05/f_logo_RGB-White_58_2.png" class="image socialIcon">
        </div>
      </a>
    <?php
    }
    ?>
    <?php if(get_theme_mod('twitter')) { ?>
      <a href="<?php echo get_theme_mod('twitter'); ?>" target="_blank" role="link" aria-hidden="true" rel="noreferrer">
        <div class="socialPadding">
          <?php get_template_part("/inc/svg-icons/twitter"); ?>
        </div>
      </a>
    <?php
    }
    ?>
    <?php if(get_theme_mod('instagram')) { ?>
      <a href="<?php echo get_theme_mod('instagram'); ?>" target="_blank" role="link" aria-hidden="true" rel="noreferrer">
        <div class="socialPadding">
          <?php get_template_part("/inc/svg-icons/instagram"); ?>
        </div>
      </a>
    <?php
    }
    ?>
    <?php if(get_theme_mod('linkedin')) { ?>
      <a href="<?php echo get_theme_mod('linkedin'); ?>" target="_blank" role="link" aria-hidden="true" rel="noreferrer">
        <div class="socialPadding">
        <?php get_template_part( '/inc/svg-icons/linkedin' ); ?>
        </div>
      </a>
    <?php
    }
    ?>
    <?php if(get_theme_mod('youtube')) { ?>
      <a href="<?php echo get_theme_mod('youtube'); ?>" target="_blank" role="link" aria-hidden="true" rel="noreferrer">
        <div class="socialPadding">
        <?php get_template_part( '/inc/svg-icons/youtube' ); ?>
        </div>
      </a>
    <?php
    }
    ?>
  </nav>
</div>