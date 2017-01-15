<?php
$ef_options = EF_Event_Options::get_theme_options();
$logo           = get_stylesheet_directory_uri() . '/img/logo.png';
$custom_logo_url        = !empty($ef_options['ef_header_logo']) ? $ef_options['ef_header_logo'] : $default_logo;
$custom_logo_size = ( empty($ef_options['ef_logo_remove_size']) ) ? array(145,45) : array('','');
//$custom_mobile_logo_url = !empty($ef_options['ef_header_mobile_logo']) ? $ef_options['ef_header_mobile_logo'] : $default_mobile_logo;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action('fudge_after_body'); ?>
<!-- site -->
<div class="site">
    <!-- site__header -->
    <header class="site__header">
        <!-- site__header-top -->
        <div class="site__header-top">
            <!-- site__centered -->
            <div class="site__centered">
                <!-- logo -->
                <h1 class="logo">

                    <a href="<?php echo home_url(); ?>" rel="home">
                        <img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>">
                    </a>

                </h1>
                <!-- /logo -->
                <!-- menu-btn -->
                <button class="menu-btn">
                    <span></span>
                </button>
                <!-- /menu-btn -->
                <!-- header-menu -->
                <nav class="header-menu">
                    <!-- header-menu__wrap -->
                    <div class="header-menu__wrap">
                        <div class="header-menu__layout">
                            <?php
                            $args = array(
                                'theme_location' => 'primary',
                                'container'      => 'ul',
                                'menu_id'        => 'menu-header',
                            );
                            wp_nav_menu($args);
                            ?>
                        </div>
                    </div>
                    <!-- /header-menu__wrap -->
                </nav>
                <!-- header-menu -->
            </div>
            <!-- /site__centered -->
        </div>
        <!-- /site__header-top -->
    </header>
    <!-- /site__header -->
    <!-- site__content -->
    <div class="site__content">
