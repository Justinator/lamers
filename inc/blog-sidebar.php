<div class="blogSideBar paddedSection">
  <div class="searchWrapper">
    <div class="innerWrap">
      <h3 class="centerText whiteText">Search the blog</h3>
      <?php get_search_form(); ?>
    </div>
  </div>
  <div class="categoryWrapper">
    <div class="innerWrap">
      <h4 class="centerText">Categories</h4>
        <div class="innerWrap">
        <?php
          $categories = get_categories( array(
              'orderby' => 'name',
              'order'   => 'ASC'
          ) );
          foreach( $categories as $category ) {
              $category_link = sprintf(
                  '<a href="%1$s" alt="%2$s">%3$s</a>',
                  esc_url( get_category_link( $category->term_id ) ),
                  esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                  esc_html( $category->name )
              );
              echo '<p>' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . sprintf( esc_html__( ': %s', 'textdomain' ), $category->count ) . '</p> ';
          }
        ?>
      </div>
    </div>
  </div>
  <div class="socialOutterWrapper">
    <div class="innerWrap">
      <h5 class="whiteText centerText">Follow Us</h5>
      <?php get_template_part("/inc/socialNav"); ?>
    </div>
  </div>
</div>
