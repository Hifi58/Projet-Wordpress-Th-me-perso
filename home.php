<?php get_header(); ?>
<?php 
    if ( is_category() ) {
        $title = "Catégorie : " . single_tag_title( '', false );
    }
    elseif ( is_tag() ) {
        $title = "Étiquette : " . single_tag_title( '', false );
    }
    elseif ( is_search() ) {
        $title = "Vous avez recherché : " . get_search_query();
    }
    else {
        $title = 'Le Blog 72';
    }
?>
<h1><?php echo $title; ?></h1>

<h3>Derniers articles</h3>
<ul class="article">
<?php
$args = array( 'numberposts' => 9, 'order'=> 'DESC', 'orderby' => 'date' );
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); ?> 
<div class="card_article">
    <li style="list-style-type: none;" class="li_article"><?php the_post_thumbnail(); ?></li>
    <li style="list-style-type: none;" class="li_article"><?php the_title(); ?></li>
    <li style="list-style-type: none;" class="li_article"><?php the_excerpt(); ?></li>
    <li style="list-style-type: none;" ><a class="a_echo" href="<?php the_permalink() ?>" rel="bookmark"><?php echo "Lire l'article" ?></a></li>
    <li style="list-style-type: none;" class="li_article"><?php the_date(); ?></li>
    <li style="list-style-type: none;" class="li_article"><?php the_category(); ?></li>
</div>
<?php endforeach; ?>
</ul>
    <?php get_template_part( 'archive' ); ?>
<?php get_footer(); ?>
