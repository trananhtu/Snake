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

<?php
// global $tuta_options;
// echo '<pre>';
// print_r($tuta_options);
// echo '</pre>';
?>

    <header id="tuta-page-header">

        <div class="clearfix">

            <div class="header-top clearfix">
                <div class="wrapper clearfix">

                    <?php tuta_logo(); ?>

                    <div class="login-wrapper">
                        <ul>
                            <li><span><?php echo __('Welcome!', 'tuta')?></span></li>
                            <li><a href="#"><?php echo __('Sign in', 'tuta')?></a></li>
                            <li><span class="sepa">i</span></li>
                            <li><a href="#"><?php echo __('Register', 'tuta')?></a></li>
                        </ul>
                    </div>
                    <!-- .login-wrapper -->

                    <nav class="page-nav">
                        <span class="quick-link"><?php echo __('Quick links', 'tuta')?> <i class="fa fa-angle-down"></i></span>
                        <ul>
                            <li><a href="#"><?php echo __('My Account', 'tuta')?></a></li>
                            <li><a href="#"><?php echo __('Wishlist', 'tuta')?></a></li>
                            <li><a href="#"><?php echo __('My Cart', 'tuta')?></a></li>
                            <li><a href="#"><?php echo __('Checkout', 'tuta')?></a></li>
                            <li><a href="#"><?php echo __('Log In', 'tuta')?></a></li>
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
                                <p class="h6"><?php echo __('Free Ship', 'tuta')?></p>
                                <p><?php echo __('on order over ', 'tuta')?> $75.00</p>
                            </div>
                            <div class="item fa fa-rotate-right">
                                <p class="h6"><?php echo __('Free Return', 'tuta')?></p>
                                <p><?php echo __('free 90 days return policy', 'tuta')?></p>
                            </div>
                            <div class="item fa fa-money">
                                <p class="h6"><?php echo __('Member discount', 'tuta')?></p>
                                <p><?php echo __('free register', 'tuta')?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="item shopping-cart fa fa-shopping-cart ">
                                <a href="#" class="h6"><?php echo __('Shopping Cart', 'tuta')?></a>
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