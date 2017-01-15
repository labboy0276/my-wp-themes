<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title"
        content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <?php wp_head(); ?>
</head>

<body>
<header class="desktop">
  <!-- Navigation -->
  <div class="container above-nav">
    <div class="row">
      <div class="col-xs-6 logo">
        <?php if ( ! has_custom_logo() ) : ?>
          <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
             title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            <?php bloginfo( 'name' ); ?>
          </a>
          <?php else: the_custom_logo();
        endif; ?>
      </div>
      <div class="col-xs-6 contact">
        <h2>941-661-1028</h2>
        <h3>Eco Marine Solutions</h3>
        <h4>Port Charlotte, FL</h4>
      </div>
    </div> <!-- row -->
  </div> <!-- /.container -->
  <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-top">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Nav Menu -->
    <?php wp_nav_menu( array(
      'theme_location' => 'header-menu',
      'container' => 'div',
      'container_class' => 'collapse navbar-collapse',
      'container_id' => 'navbar-collapse-top',
      'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
      )); ?>
  </nav>
</header>

<?php // splitting out the menu for mobile nav, odd, but it works. ?>
<header class="mobile">
  <div class="container">
    <div class="row">
      <div class="col-xs-6 logo">
        <?php if ( ! has_custom_logo() ) : ?>
          <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
             title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            <?php bloginfo( 'name' ); ?>
          </a>
          <?php else: the_custom_logo();
        endif; ?>
      </div>
      <div class="col-xs-6 nav">
        <div class="navbar-default mobile-nav-float" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-mobile">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="menu-resp" aria-hidden="true">MENU</span>
            </button>
          </div>
        </div>
      </div>
    </div> <!-- row -->
  </div> <!-- /.container -->

  <div class="navbar-default" role="navigation">
    <!-- Nav Menu -->
    <?php wp_nav_menu( array(
      'theme_location' => 'header-menu',
      'container' => 'div',
      'container_class' => 'collapse navbar-collapse',
      'container_id' => 'navbar-collapse-mobile',
      'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
      )); ?>
  </div>

</header>

<main id="main" class="clearfix" role="main">

