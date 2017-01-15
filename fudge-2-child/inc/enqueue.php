<?php

/**
 * Styles and Scripts for this theme.
 *
 * @package fudge-2-child
 */

/**
 * Load CSS / JS into theme.
 */
function fudge_2_child_theme_scripts() {
  // Enqueue Styles
  if ( is_child_theme() ) {
    wp_enqueue_style( 'generate-child', get_stylesheet_uri(), TRUE, filemtime( get_stylesheet_directory() . '/style.css' ), 'all' );
  }
}
add_action( 'wp_enqueue_scripts', 'fudge_2_child_theme_scripts', 999 );

/**
 * So We can load our child css last
 * @see  https://generatepress.com/forums/topic/load-child-theme-css-before-parent-stylesheet/
 */
function generate_remove_scripts() {
    wp_dequeue_style( 'generate-child' );
}
add_action( 'wp_enqueue_scripts', 'generate_remove_scripts' );
