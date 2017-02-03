<?php

/**
 * Modifications to the Parent theme functionality.
 *
 * @package caldera-child
 */


/**
 * Load parent theme mods.
 *
 * @see https://core.trac.wordpress.org/ticket/27177#comment:14
 */
function caldera_switch_theme_update_mods() {
  if ( is_child_theme() && get_theme_mods() === false ) {
    $mods = get_option( 'theme_mods_' . get_option( 'template' ) );
    if ( $mods !== false ) {
      foreach ( (array) $mods as $mod => $value ) {
        set_theme_mod( $mod, $value );
      }
    }
  }
}
add_action( 'after_switch_theme', 'caldera_switch_theme_update_mods' );
