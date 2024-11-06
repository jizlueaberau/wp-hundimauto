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
<head><!-- Google Consent Mode --><script data-cookieconsent="ignore">
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments)
    }
    gtag("consent", "default", {
        ad_personalizatioin: "granted",
        ad_storage: "granted",
        ad_user_data: "granted",
        analytics_storage: "granted",
        personalization_storage: "granted",
        security_storage: "granted",
        wait_for_udpate: 500
    });
    gtag("set", "ads_data_redaction", true);
    gtag("set", "url_passthrough", true);
</script><!-- End Google Consent Mode --><!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-55V2MMQ');</script>
<!-- End Google Tag Manager --><!-- CookieBot CMP -->
<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="51476768-74bb-40f6-b429-bd2e5e06313c" data-blockingmode="auto" type="text/javascript"></script><!-- End CookieBot CMP -->
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
<body <?php body_class( get_theme_mod( 'theme_setting') ); ?>><!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55V2MMQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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