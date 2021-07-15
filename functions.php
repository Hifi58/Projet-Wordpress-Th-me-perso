<?php

//Ceci ajoute la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

//Ceci ajout automatiquement le titre du site dans l'en-tête

add_theme_support( 'title-tag' );

//Ceci définit l'emplacement du menu de navigation

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );