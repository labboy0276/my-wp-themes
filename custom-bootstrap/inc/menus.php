<?php

/**
 * Menus for this theme.
 *
 * @package custom-boostrap
 */

/**
 * Register Header Menu.
 */
function register_my_menu() {
  register_nav_menu( 'header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/**
 * Hide the toolbar from logged out users.
 */
function hide_admin_bar_from_visitor() {
    if ( !is_user_logged_in() ){
      return false;
    }
    return true;
}
add_filter( 'show_admin_bar', 'hide_admin_bar_from_visitor', 9999 );
