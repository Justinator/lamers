<form class="searchForm" action="/" method="get">
    <label for="search">Search in <?php echo home_url( '/' ); ?></label>
    <input class="searchField" placeholder="Search..." type="search" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
    <!--<input type="submit" class="search-submit" value="Search">-->
</form>
