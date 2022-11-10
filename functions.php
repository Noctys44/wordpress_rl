<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function additional_custom_styles() {

    /*Enqueue The Styles*/
    wp_enqueue_style( 'uniquestylesheetid', get_template_directory_uri() . './css/custom.css' ); 
}
add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );

function capitaine_remove_menu_pages() {
	remove_menu_page( 'tools.php' );
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'capitaine_remove_menu_pages' );

function capitaine_register_assets() {
    
    // Déclarer jQuery
    wp_enqueue_script('jquery' );
    
    // Déclarer le JS
	wp_enqueue_script( 
        'capitaine', 
        get_template_directory_uri() . '/js/script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );
    
    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style( 
        'capitaine',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
  	
    // Déclarer le fichier CSS à un autre emplacement
    wp_enqueue_style( 
        'capitaine', 
        get_template_directory_uri() . '/css/main.css',
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'capitaine_register_assets' );

// Déclarer un autre fichier JS
wp_enqueue_script( 
    'diaporama', 
    get_template_directory_uri() . '/js/diaporama.js', 
    array( 'jquery' ), 
    '1.0', 
    true
);

function capitaine_child_register_assets() {
  
    // Chargement de la feuille du style du theme parent
 	wp_enqueue_style( 'capitaine-theme', get_template_directory_uri() . '/style.css' );

    // Chargement de la feuille de style complémentaire du thème enfant
 	wp_enqueue_style( 'capitaine-child-theme', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'capitaine_child_register_assets' );