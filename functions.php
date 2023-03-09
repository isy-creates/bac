<?php
/* Enqueue Styles */
if ( ! function_exists('thr_enqueue_styles') ) {
    function thr_enqueue_styles() {
        wp_enqueue_style( 'twenty-twenty-three-style', get_template_directory_uri() .'/style.css' );
    }
    add_action('wp_enqueue_scripts', 'thr_enqueue_styles');
}

// load css compiled by wp-scss
function bac_enqueue_style() {
    wp_enqueue_style( 'bac-style', get_stylesheet_directory_uri() . '/assets/styling/custom-css/main.css', false, '1.0', 'all' );
  }

 add_action( 'wp_head', 'bac_enqueue_style' );