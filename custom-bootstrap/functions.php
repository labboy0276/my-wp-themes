<?php
/**
 * Custom Bootstrap functions and definitions
 *
 * @package custom-bootstrap
 */

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Menus and nav items.
 */
require get_template_directory() . '/inc/menus.php';

/**
 * Widgets.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Custom Functions.
 */
require get_template_directory() . '/inc/custom-functions.php';

