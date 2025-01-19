<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' );
$enable_skip_link = apply_filters( 'hello_elementor_enable_skip_link', true );
$skip_link_url = apply_filters( 'hello_elementor_skip_link_url', '#content' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/sfyn-custom.css' ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-75LXGVZFL6"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-75LXGVZFL6');
    document.addEventListener("DOMContentLoaded", function() {
        var menuButton = document.getElementById('hamburger-menu');
        var closeButton = document.getElementById('close-sidebar');
        var sidebar = document.getElementById('sidebar');
    
        menuButton.addEventListener('click', function() {
            sidebar.classList.remove('sidebar-closed');
            sidebar.classList.add('sidebar-open');
        });
    
        closeButton.addEventListener('click', function() {
            sidebar.classList.remove('sidebar-open');
            sidebar.classList.add('sidebar-closed');
        });
    });
    

    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header id="sfyn-header">
        <div class="sfyn-header-inner">
            
            <!--<div class="announcement-bar">-->
            <!--    <span class="blinking-text">Closed Dec 23 - Jan 3. Orders ship after Jan 6. <strong>Happy Christmas!</strong></span>-->
            <!--</div>-->
            
            <div class="sfyn-nav-header">
                <div class="sfyn-custom-container">
                    <div class="sfyn-grid-2fr">
                        <div class="sfyn-nav-info">
                            <ul class="sfyn-nav-info-wrapper">
                                <li>
                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="13" height="10"
                                            viewBox="0 0 13 10" fill="none">
                                            <path
                                                d="M12.4511 3.22571C12.5612 3.42142 12.5551 3.61713 12.4328 3.81284C12.3227 4.00855 12.1575 4.1064 11.9374 4.1064H11.3502V9.097C11.3502 9.18263 11.3197 9.2499 11.2585 9.29883C11.2096 9.35999 11.1423 9.39057 11.0567 9.39057H10.7631C10.6775 9.39057 10.6041 9.35999 10.5429 9.29883C10.494 9.2499 10.4695 9.18263 10.4695 9.097V4.1064H7.82745V8.74839C7.82745 8.91964 7.76629 9.06642 7.64398 9.18874C7.53389 9.32329 7.39934 9.39057 7.24032 9.39057H2.54329C2.38427 9.39057 2.24361 9.32329 2.12129 9.18874C2.0112 9.06642 1.95616 8.91964 1.95616 8.74839V4.1064H1.36903C1.14885 4.1064 0.977608 4.00855 0.855289 3.81284C0.745202 3.61713 0.745202 3.42142 0.855289 3.22571L2.54329 0.290057C2.65337 0.0943476 2.82462 -0.00350738 3.05703 -0.00350738H10.2494C10.4818 -0.00350738 10.653 0.0943476 10.7631 0.290057L12.4511 3.22571ZM6.94676 8.50987V6.74848H2.83685V8.50987H6.94676ZM6.94676 5.86779V4.1064H2.83685V5.86779H6.94676ZM1.88277 3.22571H11.4236L10.0842 0.877187H3.22216L1.88277 3.22571Z"
                                                fill="#2E2E2E"></path>
                                        </svg><span><?php echo get_field('find_store', 'option'); ?></span></a>
                                </li>
                                <li>
                                    <a href="mailto: <?php echo get_field('email', 'option'); ?>"><svg
                                            aria-hidden="true" class="e-font-icon-svg e-far-envelope"
                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z">
                                            </path>
                                        </svg><span><?php echo get_field('email', 'option'); ?></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="sfyn-nav-menu">
                            <?php wp_nav_menu( array( 'theme_location' => 'nav_menu', 'menu_class' => 'list-unstyled menu sfyn-header-menu', ) ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sfyn-main-header">
                <div class="sfyn-custom-container">
                    <div class="sfyn-main-header-grid sfyn-desktop-header">
                        <div class="sfyn-logo-col">
                            <a href="https://rootsorganic.com.au/">
                                <img src="<?php echo get_field('header_logo', 'option'); ?>" alt="Logo">
                            </a>
                        </div>
                        <div class="sfyn-header-menu-col">
                            <div class="sfyn-header-menu">
                                <?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'menu_class' => 'list-unstyled menu sfyn-header-menu', ) ); ?>
                            </div>
                        </div>
                        <div class="sfyn-header-icon">
                            <div class="sfyn-header-icon-wrapper">
                                <div class="sfyn-icon-item sfyn-wishlist">
                                    <a href="">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-far-heart" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="sfyn-icon-item sfyn-cart-icon">
                                    <?php echo do_shortcode("[fk_cart_menu]"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="sfyn-main-header-grid sfyn-mob-header">
                        <div class="sfyn-header-menu-col">
                            <nav class="nav">
                                <div class="nav-left">
                                    <a class="nav-item" id="hamburger-menu">
                                        <div class="hamburger hamburger-spin">
                                            <div class="hamburger-box">
                                                <div class="hamburger-inner"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </nav>
                            <div class="content">
                                <aside id="sidebar" class="sidebar-closed">
                                    <div class="sidebar-inner">
                                        <div class="sfyn-mobile-header-content">
                                            <div class="sfyn-logo-col">
                                                <a href="">
                                                    <img src="<?php echo get_field('header_logo', 'option'); ?>" alt="Logo">
                                                </a>
                                            </div>
                                            <div class="sfyn-header-menu">
                                                <?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'menu_class' => 'list-unstyled menu sfyn-header-menu', ) ); ?>
                                            </div>
                                        </div>
                                        <div class="sfyn-close-sidebar">
                                            <button id="close-sidebar" class="close-sidebar-button">&times;</button>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                        <div class="sfyn-logo-col">
                            <a href="">
                                <img src="<?php echo get_field('header_logo', 'option'); ?>" alt="Logo">
                            </a>
                        </div>
                        <div class="sfyn-header-icon">
                            <div class="sfyn-header-icon-wrapper">
                                <div class="sfyn-icon-item sfyn-wishlist">
                                    <a href="">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-far-heart" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="sfyn-icon-item sfyn-cart-icon">
                                    <?php echo do_shortcode("[fk_cart_menu]"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </header>