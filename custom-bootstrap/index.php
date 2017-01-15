<?php
/**
 * The main template file.
 *
 * @package custom-bootsrap
 */

get_header(); ?>

<div class="container-fluid">

    <?php if ( have_posts() ) : ?>

      <?php /* The loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'loop-templates/content', get_post_format() ); ?>
      <?php endwhile; ?>

    <?php else : ?>
      <?php get_template_part( 'loop-templates/content', 'none' ); ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
