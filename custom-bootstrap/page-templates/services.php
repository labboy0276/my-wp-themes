<?php
/**
 * Template Name: Services Page Template.
 *
 * Services Page Template.
 *
 * @package custom-bootstrap
 */

get_header();

?>

<article id="services-page">

  <?php while ( have_posts() ) : the_post(); ?>

    <?php if ( get_field('service_1_headline') ): ?>
      <div class="content-section-a section-1">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-6">
              <div class="clearfix"></div>
              <h2 class="section-heading"><?php the_field('service_1_headline'); ?></h2>
            </div>
            <div class="col-lg-6 col-lg-offset-2 col-sm-6">
              <?php $fielda = get_field('service_1_body');
                    $fielda = strip_tags($fielda); ?>
              <p class="lead"><?php echo $fielda; ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ( get_field('service_2_headline') ): ?>
      <div class="content-section-a section-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-6">
              <div class="clearfix"></div>
              <h2 class="section-heading"><?php the_field('service_2_headline'); ?></h2>
            </div>
            <div class="col-lg-6 col-lg-offset-2 col-sm-6">
              <?php $fieldb = get_field('service_2_body');
                    $fieldb = strip_tags($fieldb); ?>
              <p class="lead"><?php echo $fieldb; ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ( get_field('service_3_headline') ): ?>
      <div class="content-section-a section-3">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-6">
              <div class="clearfix"></div>
              <h2 class="section-heading"><?php the_field('service_3_headline'); ?></h2>
            </div>
            <div class="col-lg-6 col-lg-offset-2 col-sm-6">
              <?php $fieldc = get_field('service_3_body');
                    $fieldc = strip_tags($fieldc); ?>
              <p class="lead"><?php echo $fieldc; ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ( get_field('service_4_headline') ): ?>
      <div class="content-section-a section-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-6">
              <div class="clearfix"></div>
              <h2 class="section-heading"><?php the_field('service_4_headline'); ?></h2>
            </div>
            <div class="col-lg-6 col-lg-offset-2 col-sm-6">
              <?php $fieldd = get_field('service_4_body');
                    $fieldd = strip_tags($fieldd); ?>
              <p class="lead"><?php echo $fieldd; ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ( get_field('service_5_headline') ): ?>
      <div class="content-section-a section-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-6">
              <div class="clearfix"></div>
              <h2 class="section-heading"><?php the_field('service_5_headline'); ?></h2>
            </div>
            <div class="col-lg-6 col-lg-offset-2 col-sm-6">
              <?php $fielde = get_field('service_5_body');
                    $fielde = strip_tags($fielde); ?>
              <p class="lead"><?php echo $fielde; ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>


  <?php endwhile; // end of the loop. ?>


  <footer class="entry-footer">

    <?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

  </footer><!-- .entry-footer -->

</article>


<?php get_footer(); ?>
