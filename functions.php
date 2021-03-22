<?php
function twpp_enqueue_styles() {
  if(is_front_page() || is_category()) {
    wp_enqueue_style('reset-style-sheet', get_template_directory_uri() . '/css/reset.css');
    wp_enqueue_style('main-style-sheet', get_template_directory_uri() . '/style.css');
  } else {
    wp_enqueue_style('reset-style-sheet', get_template_directory_uri() . '/css/reset.css');
    wp_enqueue_style('single-style-sheet', get_template_directory_uri() . '/css/single.css');
  }
}

add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

add_theme_support('post-thumbnails');


