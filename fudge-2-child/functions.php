<?php
/**
 * Fudge 2 Child Theme functions and definitions
 *
 * @package fudge-2-child
 */

/**
 * Enqueue scripts and styles.
 */
require get_stylesheet_directory() . '/inc/enqueue.php';

/**
 * Enqueue scripts and styles.
 */
require get_stylesheet_directory() . '/inc/deregister.php';

/**
 * Custom Post Types.
 */
require get_stylesheet_directory() . '/inc/shortcodes.php';
