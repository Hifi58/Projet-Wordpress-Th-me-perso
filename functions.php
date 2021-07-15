<?php

// Ceci ajoute la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ceci définie la taille des images mises en avant
set_post_thumbnail_size( 300, 300, true );

// Ceci ajout automatiquement le titre du site dans l'en-tête

add_theme_support( 'title-tag' );

// Ceci lie le fichier style.css
wp_enqueue_style( 
    'First Step',
    get_stylesheet_uri(), 
    array(), 
    '0.5'
);

// Ceci définit l'emplacement du menu de navigation

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

// création du type de post apprenants

function firststep_register_post_types() {
	
    $labels = array(
        'name' => 'Apprenant',
        'all_items' => 'Tous les apprenants',  // affiché dans le sous menu
        'singular_name' => 'Apprenant',
        'add_new_item' => 'Ajouter un apprenant',
        'edit_item' => 'Modifier l\'apprenant',
        'menu_name' => 'Apprenant'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
	);

	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'firststep_register_post_types' ); // Le hook init lance la fonction