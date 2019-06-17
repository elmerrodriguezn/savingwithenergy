<?php

function savingwithenergy_files() {
    wp_enqueue_script('jquery','//code.jquery.com/jquery-3.3.1.slim.min.js', NULL, microtime(), true);
    wp_enqueue_script('bootstrap-js','//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', NULL, microtime(), true);
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    wp_enqueue_script('savingwithenergy-js', get_theme_file_uri('/js/scripts.js'), NULL, microtime(), true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Poppins:400,500i,600,800,900');
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.4.1/css/all.css');
    wp_enqueue_style('savingwithenergy_main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'savingwithenergy_files');

function savingwithenergy_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'savingwithenergy_features');

function slider_widgets_init() {
    register_sidebar(array(
        'name' => 'Slider Home Page',
        'id' => 'slider_home_page1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}
add_action('widgets_init', 'slider_widgets_init');

function contact_widgets_init() {
    register_sidebar(array(
        'name' => 'Contact Form',
        'id' => 'contact_form',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}
add_action('widgets_init', 'contact_widgets_init');