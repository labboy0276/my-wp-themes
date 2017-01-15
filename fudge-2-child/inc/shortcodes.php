<?php

/**
 * Shortcodes.
 *
 * @package fudge-2-child
 */

/**
 * Add shortcode for committee member post type.
 */
function display_committee_members_type(){
  $args = array(
    'post_type' => 'committee_members',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC',
  );

  $string = '';
  $query = new WP_Query( $args );
  if( $query->have_posts() ){
    $string .= '<div class="speakers__layout members-top">';
    while( $query->have_posts() ){
      $query->the_post();
      $string .= '<div class="speakers__item members">';
      $string .= '<div class="speakers__person">';
      $string .= '<h3 class="speakers__name">' . get_the_title() . '</h3>';
      $string .= '<span class="speakers__post">' . get_the_content() . '</span>';
      $string .= '</div>';
      $string .= '</div>';
    }
    $string .= '</div>';
  }
  wp_reset_postdata();
  return $string;
}
add_shortcode( 'committee_members', 'display_committee_members_type' );

/**
 * Add shortcode for board member post type.
 */
function display_board_members_type(){
  $args = array(
    'post_type' => 'board_members',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC',
  );

  $string = '';
  $query = new WP_Query( $args );
  if( $query->have_posts() ){
    $string .= '<div class="speakers__layout members-top">';
    while( $query->have_posts() ){
      $query->the_post();
      $string .= '<div class="speakers__item members">';
      $string .= '<div class="speakers__person">';
      $string .= '<h3 class="speakers__name">' . get_the_title() . '</h3>';
      $string .= '<span class="speakers__post">' . get_the_content() . '</span>';
      $string .= '</div>';
      $string .= '</div>';
    }
    $string .= '</div>';
  }
  wp_reset_postdata();
  return $string;
}
add_shortcode( 'board_members', 'display_board_members_type' );
