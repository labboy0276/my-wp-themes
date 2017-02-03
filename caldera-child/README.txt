I had to edit the Cherry Projects plugins a little because add_filters was just not complying.

I also changed the version # (it was 1.2.1 to begin with).

This is what I changed:

wp-content/plugins/cherry-projects/public/includes/class-cherry-projects-template-callbacks.php line 852 down:

  /**
   * Get term name
   *
   * I EDITED THIS PLUGIN
   *
   * @since 1.0.0
   */
  public function get_term_name( $attr = array() ) {
    $default_attr = array( 'number_of_words' => 10 );

    $attr = wp_parse_args( $attr, $default_attr );

    // Grabbing the last part of the array to set as an anchor.
    // This is gross and I don;t care anymore.
    $get = cherry_projects()->projects_data->cherry_utility->attributes->get_title(array(), 'term', $this->term_data->term_id);
    preg_match_all('~<a href="([^"]+)"(.*?)>~', $get, $matches);
    if (isset($matches[1][0])) {
      $anchor = explode('/', $matches[1][0]);
      $anchor = array_filter($anchor);
      $anchor = end($anchor);
      $html = '<h5 %1$s><a href="/services#' . $anchor . '" %3$s>%4$s</a></h5>';
    }
    else {
      $html = '<h5 %1$s><a href="%2$s" %3$s>%4$s</a></h5>';
    }

    $html = cherry_projects()->projects_data->cherry_utility->attributes->get_title(
      array(
        'html'   => $html,
        'length' => $attr['number_of_words'],
      ),
      'term',
      $this->term_data->term_id
    );
    return $html;
  }

  /**
   * Get term permalink
   *
   * @since 1.0.0
   */
  public function get_term_permalink( $attr = array() ) {
    $default_attr = array(
      'text_visible' => false
    );

    $attr = wp_parse_args( $attr, $default_attr );

    // Change the permalink.
    $permalink = cherry_projects()->projects_data->cherry_utility->attributes->get_term_permalink( $this->term_data->term_id );
    $anchor = explode('/', $permalink);
    $anchor = array_filter($anchor);
    $anchor = end($anchor);
    $link = '/services#' . $anchor;
    /**
     * Filter permalink text.
     *
     * @since 1.0.0
     * @var array
     */
    $permalink_text = apply_filters( 'cherry-projects-terms-permalink-text', esc_html__( 'More', 'cherry-projects' ) );

    $icon_content = ( filter_var( $attr['text_visible'], FILTER_VALIDATE_BOOLEAN ) ) ? '<span>' . $permalink_text . '</span>' : '<span class="dashicons"></span>';

    $html = sprintf( '<a class="term-permalink simple-icon" href="%1$s">%2$s</a>',
      $link,
      $icon_content
    );

    return $html;
  }
