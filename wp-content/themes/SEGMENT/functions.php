<?php

wp_deregister_script( 'jquery' );

function load_styles_and_scripts() {
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/App.js', [], '1.0', true);
    wp_enqueue_script('quiz', get_template_directory_uri() . '/js/QuizForm.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function remove_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
}

add_action( 'wp_enqueue_scripts', 'remove_block_library_css' );

function my_deregister_scripts(){
  wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );