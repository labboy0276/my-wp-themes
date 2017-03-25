<?php

/**
 * Styles and Scripts for this theme.
 *
 * @package caldera-child
 */

/**
 * Load CSS / JS into theme.
 */
function caldera_child_theme_scripts() {
  // Enqueue Styles
  if ( is_child_theme() ) {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'generate-child', get_stylesheet_uri(), TRUE, filemtime( get_stylesheet_directory() . '/style.css' ), 'all' );
  }
}
add_action( 'wp_enqueue_scripts', 'caldera_child_theme_scripts', 999 );
