<?php
/**
 * Template Name: Front Page Template.
 *
 * Front Page Template.
 *
 * @package custom-bootstrap
 */

get_header();

?>

<article id="front-page">

  <?php while ( have_posts() ) : the_post(); ?>

  <div class="front-slider">
    <?php echo do_shortcode('[foogallery id="39"]'); ?>
  </div>

  <?php if ( get_field('section_a_body') ): ?>
    <div class="content-section-a">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-sm-6 col-text">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading"><?php the_field('section_a_headline'); ?></h2>
            <?php $fielda = get_field('section_a_body');
                  $fielda = strip_tags($fielda); ?>
            <p class="lead"><?php echo $fielda; ?></p>
          </div>
          <div class="col-lg-5 col-lg-offset-2 col-sm-6 col-image">
            <?php
            $imagea = get_field('section_a_image');
            if( !empty($imagea) ): ?>
              <img src="<?php echo $imagea['url']; ?>" alt="<?php echo $imagea['alt']; ?>" class="img-responsive" />
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ( get_field('section_b_body') ): ?>
    <div class="content-section-b">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-sm-6 col-image">
            <?php
            $imageb = get_field('section_b_image');
            if( !empty($imageb) ): ?>
              <img src="<?php echo $imageb['url']; ?>" alt="<?php echo $imageb['alt']; ?>" class="img-responsive" />
            <?php endif; ?>
          </div>
          <div class="col-lg-5 col-lg-offset-2 col-sm-6 col-text">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading"><?php the_field('section_b_headline'); ?></h2>
            <?php $fieldb = get_field('section_b_body');
                  $fieldb = strip_tags($fieldb); ?>
            <p class="lead"><?php echo $fieldb; ?></p>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ( get_field('section_c_body') ): ?>
    <div class="content-section-a">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-sm-6 col-text">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading"><?php the_field('section_c_headline'); ?></h2>
            <?php $fieldc = get_field('section_c_body');
                  $fieldc = strip_tags($fieldc); ?>
            <p class="lead"><?php echo $fieldc; ?></p>
          </div>
          <div class="col-lg-5 col-lg-offset-2 col-sm-6 col-image">
            <?php
            $imagec = get_field('section_c_image');
            if( !empty($imagec) ): ?>
              <img src="<?php echo $imagec['url']; ?>" alt="<?php echo $imagec['alt']; ?>" class="img-responsive" />
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>SERVICES</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5ths">
            <h3><?php the_field('service_1_headline'); ?></h3>
          </div>
          <div class="col-md-5ths">
            <h3><?php the_field('service_2_headline'); ?></h3>
          </div>
          <div class="col-md-5ths">
            <h3><?php the_field('service_3_headline'); ?></h3>
          </div>
          <div class="col-md-5ths">
            <h3><?php the_field('service_4_headline'); ?></h3>
          </div>
          <div class="col-md-5ths">
            <h3><?php the_field('service_5_headline'); ?></h3>
          </div>
        </div>
      </div>
    </div>

  <?php endwhile; // end of the loop. ?>


  <footer class="entry-footer">

    <?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

  </footer><!-- .entry-footer -->

</article>


<?php get_footer(); ?>
