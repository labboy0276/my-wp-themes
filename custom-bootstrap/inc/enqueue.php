<?php

/**
 * Styles and Scripts for this theme.
 *
 * @package custom-boostrap
 */

/**
 * Load CSS / JS into theme.
 */
function custom_bootstrap_theme_scripts() {
  // Google Font args.
  $query_args = array(
    'family' => 'Lato:300,400,700,300italic,400italic,700italic',
    'subset' => 'latin,latin-ext',
  );

  // Register custom css.
  wp_register_style( 'google_fonts', add_query_arg($query_args, "//fonts.googleapis.com/css" ));
  wp_register_style( 'bootstrap_css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
  wp_register_style( 'font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
  wp_register_style( 'theme', get_template_directory_uri() . '/dist/css/built.min.css', array(), rand(111,9999), 'all' );

  // Register JS.
  wp_register_script( 'bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array( 'jquery' ) , '3.3.7' , true);

  // Enqueue these styles.
  wp_enqueue_style( 'google_fonts' );
  wp_enqueue_style( 'font_awesome' );
  wp_enqueue_style( 'bootstrap_css' );
  wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'theme' );

  // Enqueue JS
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'bootstrap_js' );
}
add_action( 'wp_enqueue_scripts', 'custom_bootstrap_theme_scripts' );
