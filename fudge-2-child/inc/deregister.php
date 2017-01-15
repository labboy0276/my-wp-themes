<?php

/**
 * Removes things and stuff from main theme.
 *
 * @package fudge-2-child
 */

/**
 * Remove Fudge Custom posts we are not using.
 */
function delete_post_type(){
    unregister_post_type( 'exhibitor' );
    unregister_post_type( 'sponsor' );
}
add_action('init','delete_post_type', 999);
