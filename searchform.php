<form class="searchform" action="<?php echo home_url( '/' ); ?>" method="get">
    <input class="text" type="text" name="s" placeholder="rechercher" id="search" value="<?php the_search_query(); ?>" />
    <input class="button" type="submit" alt="Search" value="Valider" />
</form>