<?php

function petFiles() {
    wp_enqueue_style('petbs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('petstyle', get_stylesheet_directory_uri() . '/css/style.css'); 
    wp_enqueue_style('owlstyle', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css'); 
   	wp_enqueue_style('owlstyle', get_stylesheet_directory_uri() . '/css/owl.theme.default.min.css');            
    wp_enqueue_script('petjs', get_theme_file_uri('/js/pet.js'), array( 'jquery' ), false, true );
    wp_enqueue_script('ownsliderjs', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js' ,array( 'jquery' ), false, true );
}

add_action('wp_enqueue_scripts', 'petFiles');

function petFeatures() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'petFeatures');

add_action( 'wp_default_scripts', function( $scripts ) {
    if ( ! empty( $scripts->registered['jquery'] ) ) {
        $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
    }
} );

