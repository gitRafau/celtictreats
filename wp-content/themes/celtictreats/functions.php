<?php

function petFiles() {
    wp_enqueue_style('petbs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
   wp_enqueue_style('petstyle', get_stylesheet_directory_uri() . '/css/style.css', array(), '4.9.8', 'all');
       
    wp_enqueue_script('petjs', get_theme_file_uri('/js/pet.js'), NULL, true);
}

add_action('wp_enqueue_scripts', 'petFiles');

function petFeatures() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'petFeatures');

