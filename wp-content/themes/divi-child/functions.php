<?php

add_action('wp_enqueue_scripts','my_theme_enqueue_styles');


function my_theme_enqueue_styles() {
    wp_enqueue_style('root-style', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/css/custom.css' );
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/script.js', array(), '1.0.0', true);
    wp_enqueue_style( 'load-font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

 
}


?>
