<?php
/**
 * Template Name: Gallery Page Template.
 *
 * Gallery Page Template.
 *
 * @package custom-bootstrap
 */

get_header();

?>

<article id="gallery-page">

  <?php while ( have_posts() ) : the_post(); ?>

    <div class="gallery-page">
      <h2>Gallery</h2>
      <?php echo do_shortcode('[foogallery id="59"]'); ?>
    </div>

  <?php endwhile; // end of the loop. ?>


  <footer class="entry-footer">

    <?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

  </footer><!-- .entry-footer -->

</article>


<?php get_footer(); ?>
