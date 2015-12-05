<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]> <html <?php language_attributes(); ?>> <![endif]-->
<head>
    <meta charset="<?php language_attributes(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmgp.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head();?>
</head>

<body <?php body_class('tuta-sub-page'); ?>> <!-- tuta-style-flat -->

    <header id="tuta-page-header">

        <div class="clearfix">

            <div class="header-top clearfix">
                <div class="wrapper clearfix">

                    <?php tuta_logo(); ?>

                    <div class="login-wrapper">
                        <ul>
                            <li><span>Welcome!</span></li>
                            <li><a href="#">Sign in</a></li>
                            <li><span class="sepa">i</span></li>
                            <li><a href="#">Register</a></li>
                        </ul>
                    </div>
                    <!-- .login-wrapper -->

                    <nav class="page-nav">
                        <span class="quick-link">Quick links <i class="fa fa-angle-down"></i></span>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">My Cart</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Log In</a></li>
                        </ul>
                    </nav>
                    <!-- .page-top -->

                </div>
            </div>
            <!-- .header-top -->

            <div class="header-middle clearfix">
                <div class="wrapper clearfix">
                    <div class="on-shoping-box row">
                        <div class="col-md-9">
                            <div class="item fa fa-truck">
                                <p class="h6">Free Ship</p>
                                <p>on order over $75.00</p>
                            </div>
                            <div class="item fa fa-rotate-right">
                                <p class="h6">Free Return</p>
                                <p>free 90 days return policy</p>
                            </div>
                            <div class="item fa fa-money">
                                <p class="h6">Member discount</p>
                                <p>free register</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="item shopping-cart fa fa-shopping-cart ">
                                <a href="#" class="h6">Shopping Cart</a>
                                <p><span>0 item</span> - <span>$ 0.00</span></p>
                            </div>
                            <!--.shopping-cart-->
                        </div>
                    </div>
                    <!--.on-shoping-box-->
                </div>
            </div>
            <!-- .header-middle -->

        </div>

        <div class="header-bottom">
            <div class="wrapper clearfix">
                <div class="waypoint">

                    <?php tuta_menu('main-menu'); ?>

                    <div class="search-top">

                        <?php get_search_form(); ?>

                    </div>
                    <!-- .search-wrapper -->

                </div>
                <!-- .waypoint -->
            </div>
        </div>
        <!-- .header-bottom -->

    </header>
    <!-- .tuta-page-header -->