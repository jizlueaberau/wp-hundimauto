<?php
/**
 * The Header File
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package hundimauto
 * @since Hund im Auto Custom Theme 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <title><?php echo get_the_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light dark" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>

</head>
<body <?php body_class( get_theme_mod( 'theme_setting') ); ?>>

    <header id="header">
        <div id="theme">
            <a href="/"><img id="logo" src="<?php echo get_theme_file_uri( 'assets/images/logo-hia.svg' ); ?>" alt="Hund im Auto, Ihr Ansprechpartner für optimale Transportlösungen für Ihren Hund im Auto" /></a>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-12">

                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location'        => 'primary', // as registered in functions.php
                                'depth'                 => 3, //as we set up in our CSS
                                'container'             => 'nav', // html wrapper of the menu ul
                                'container_class'       => 'main-menu', // wraper class
                                'menu_class'            => 'navigation top-menu d-flex flex-row justify-content-end list-unstyled', // classes of the menu ul tag
                                'fallback_cb'           => false
                            )
                        );

                    ?>

                    <button type="button" class="mobile-nav-toggler hamburger hamburger--elastic" aria-label="menu">
                        <span class="hamburger-label">Menu</span>
                        <span class="hamburger-box"><span class="hamburger-inner"></span></span>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="mobile-menu">
                <nav class="menu-box">
                    <ul class="navigation clearfix"></ul>
                </nav>
            </div><!-- end Mobile Menu -->

        </div>
    </header><!-- end header parts -->