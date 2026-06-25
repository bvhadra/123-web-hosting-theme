<?php
/**
 * Theme functions for 123 Web Hosting.
 */

if (!defined('ABSPATH')) {
    exit; // Stops direct access to this file.
}

/**
 * Sets up basic WordPress theme features.
 */
function wh123_theme_setup() {

    // Lets WordPress manage the page title.
    add_theme_support('title-tag');

    // Enables featured images.
    add_theme_support('post-thumbnails');

    // Enables custom logo support.
    add_theme_support('custom-logo');

    // Enables modern HTML5 markup.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Registers menu locations.
    register_nav_menus(array(
        'primary' => __('Primary Menu', '123-web-hosting'),
        'footer'  => __('Footer Menu', '123-web-hosting'),
    ));
}
add_action('after_setup_theme', 'wh123_theme_setup');

/**
 * Loads CSS and JavaScript files.
 */
function wh123_enqueue_assets() {

    // Loads main CSS.
    wp_enqueue_style(
        '123-web-hosting-main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0.0'
    );

    // Loads main JavaScript.
    wp_enqueue_script(
        '123-web-hosting-main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'wh123_enqueue_assets');