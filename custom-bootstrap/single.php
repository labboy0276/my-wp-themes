<?php
/**
 * The template for displaying all single posts
 *
 * @package custom-bootstrap
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

      <?php /* The loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'loop-templates/content', get_post_format() ); ?>

      <?php endwhile; ?>

    </div><!-- #content -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
