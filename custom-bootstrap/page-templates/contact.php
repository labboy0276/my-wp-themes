<?php
/**
 * Template Name: Contact Page Template.
 *
 * Contact Page Template.
 *
 * @package custom-bootstrap
 */

get_header();

?>

<article id="contact-page">

  <?php while ( have_posts() ) : the_post(); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Contact Us</h2>
          <?php echo do_shortcode('[ninja_form id=1]'); ?>
        </div>
      </div>
    </div>

  <?php endwhile; // end of the loop. ?>


  <footer class="entry-footer">

    <?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

  </footer><!-- .entry-footer -->

</article>


<?php get_footer(); ?>
