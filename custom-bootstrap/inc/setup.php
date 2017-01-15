<?php
/**
 * Theme basic setup.
 *
 * @package custom-bootstrap
 */


/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function custom_bootstrap_setup() {

  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

  // Set up the WordPress core custom background feature.
  add_theme_support( 'custom-background', apply_filters( 'custom_bootstrap_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
  ) ) );

  // Set up the Wordpress Theme logo feature.
  add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'custom_bootstrap_setup' );
