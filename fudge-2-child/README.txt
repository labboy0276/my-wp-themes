IMPORTANT

We used them fudge theme to do this and some caveats:

SPEAKERS = AREAS
 - Title = Towns
 - Throw any pertinent info in the body.






***************************
*** Edits to main theme ***
***************************

I changed the theme version due to edits I made to the main theme.

** Manually update should onlu happen if need be. **

I also edited these files in the main theme

themes/fudge-2/event-framework/components/shortcodes/shortcode-speakers.php

I added in:
** on the first line under the fucntion open**
$atts['show_pagination'] = FALSE;

** replaced the query with this. **
$speakers = new WP_Query(array(
    'post_type' => 'speaker',
    'paged' => $paged,
    'orderby' => 'title',
    'order' => 'ASC',
    'posts_per_page' => -1,
    'post__in' => explode(',', $entities)
));


themes/fudge-2/event-framework/components/shortcodes/shortcode-map.php

** replaced the query with this. **
        $pois_db    = get_posts(
                array(
                    'post_type'        => 'poi',
                    'posts_per_page'   => -1,
                    'suppress_filters' => true,
                    'post__in'         => explode(',', $pois_slice),
                    'order'            => 'menu_order',
                    'orderby'          => 'post__in',
                    'meta_query'       => array(
