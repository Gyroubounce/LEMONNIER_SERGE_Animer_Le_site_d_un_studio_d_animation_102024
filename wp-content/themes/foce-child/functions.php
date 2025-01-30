<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

     // Enqueue the compiled SASS style (make sure the path is correct)
     wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/sass/style.css', array('parent-style') );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

// intégration des fichiers
function custom_child_theme_scripts() {

    // Enqueue the Swiper script fichier dans le thème enfant
    wp_enqueue_script('custom-swiper-script', get_stylesheet_directory_uri() . '/javascript/swiper-bundle.min.js', array(), null, true);
    
    // Enqueue the Swiper CSS
    wp_enqueue_style('swiper-style', get_stylesheet_directory_uri() . '/swiper/swiper-bundle.min.css', array(), null, 'all');

    // Enqueue header script
    wp_enqueue_script('custom-header-script', get_stylesheet_directory_uri() . '/javascript/header.js', array(), null, true);

    // Enqueue header animation script
    wp_enqueue_script('custom-header-animation-script', get_stylesheet_directory_uri() . '/javascript/header-animation.js', array(), null, true);

    // Enqueue the fading script des sections
    wp_enqueue_script('custom-fade-script', get_stylesheet_directory_uri() . '/javascript/fading.js', array(), null, true);

    // Enqueue animation des titres du menu toggle
    wp_enqueue_script('custom-menu-href-script', get_stylesheet_directory_uri() . '/javascript/menu-href.js', array(), null, true);

     // Enqueue parallaxe du logo 
     wp_enqueue_script('custom-parallaxe-script', get_stylesheet_directory_uri() . '/javascript/parallaxe.js', array(), null, true);
    
    // Enqueue the slide-up script
    wp_enqueue_script('custom-slide-up-script', get_stylesheet_directory_uri() . '/javascript/slide-up.js', array(), null, true);
    
    // Enqueue your custom Swiper initialization script
    wp_enqueue_script('custom-swiper-init', get_stylesheet_directory_uri() . '/javascript/swiper.js', array('custom-swiper-script'), null, true);

    // Enqueue clouds script
    wp_enqueue_script('custom-clouds-script', get_stylesheet_directory_uri() . '/javascript/clouds.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'custom_child_theme_scripts');
