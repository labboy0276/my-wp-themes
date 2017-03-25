<?php

/**
 * Styles and Scripts for this theme.
 *
 * @package the-landscaper-child
 */

/**
 * Load CSS / JS into theme.
 */
function landscaper_child_theme_scripts() {
  // Enqueue Styles
  if ( is_child_theme() ) {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'generate-child', get_stylesheet_uri(), TRUE, filemtime( get_stylesheet_directory() . '/style.css' ), 'all' );
  }
}
add_action( 'wp_enqueue_scripts', 'landscaper_child_theme_scripts', 999 );

/**
 * Remove duplicate CSS files.
 * @return [type] [description]
 */
function landscaper_child_remove_theme_scripts() {
  wp_dequeue_style( 'thelandscaper-main' );
  wp_deregister_style( 'thelandscaper-main' );
}
add_action( 'wp_enqueue_scripts', 'landscaper_child_remove_theme_scripts', 20 );
