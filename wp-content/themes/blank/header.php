<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blank' ); ?></a>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PuffnPass</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

        <!-- CSS here -->
        <link rel="stylesheet" href="http:/wordpress/wp-content/themes/blank/template/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="http:/wordpress/wp-content/themes/blank/template/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="http:/wordpress/wp-content/themes/blank/template/assets/css/flaticon.css">
        <link rel="stylesheet" href="http:/wordpress/wp-content/themes/blank/template/assets/css/slicknav.css">
        <link rel="stylesheet" href="http:/wordpress/wp-content/themes/blank/template/assets/css/animate.min.css">
        <link rel="stylesheet" href="http:/wordpress/wp-content/themes/blank/template/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="http:/wordpress/wp-content/themes/blank/template/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="http:/wordpress/wp-content/themes/blank/template/assets/css/themify-icons.css">
        <link rel="stylesheet" href="http:/wordpress/wp-content/themes/blank/template/assets/css/slick.css">
        <link rel="stylesheet" href="http:/wordpress/wp-content/themes/blank/template/assets/css/nice-select.css">
        <link rel="stylesheet" href="http:/wordpress/wp-content/themes/blank/template/assets/css/style.css">
        <link rel="stylesheet" href="http:/wordpress/wp-content/themes/blank/style.css">
    </head>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="http://localhost/wordpress/home"><img src="http://localhost/wordpress/wp-content/uploads/2021/04/quitsmoke.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="http://localhost/wordpress">Home</a></li>
                                    <li><a href="http://localhost/wordpress/about">About</a></li>
                                   <!-- <li class="hot"><a href="#">Latest</a>
                                        <ul class="submenu">
                                            <li><a href="shop.html"> Product list</a></li>
                                            <li><a href="product_details.html"> Product Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                -->
                                    
                                    <li><a href="http://localhost/wordpress/contact">Contact</a></li>
                                  <!--  <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                        </ul>
                                    </li> -->
                                    <li><a href="http://localhost/wordpress/contact/shop">Shop</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li><a href="http://localhost/wordpress/cart"><span class="flaticon-shopping-cart"></span></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>


       <!-- JS here -->

    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/popper.min.js"></script>
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/owl.carousel.min.js"></script>
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/wow.min.js"></script>
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/animated.headline.js"></script>
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/jquery.scrollUp.min.js"></script>
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/jquery.nice-select.min.js"></script>
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/contact.js"></script>
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/jquery.form.js"></script>
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/jquery.validate.min.js"></script>
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/mail-script.js"></script>
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->    
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/plugins.js"></script>
    <script src="http:/wordpress/wp-content/themes/blank/template/assets/js/main.js"></script>
    

   