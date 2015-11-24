<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]> <html <?php language_attributes(); ?>> <![endif]-->
<head>
    <meta charset="<?php language_attributes(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmgp.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <script src="js/modernizr.custom.js"></script>
    <?php wp_head();?>
</head>
    
<body <?php body_class('tuta-sub-page tuta-style-flat'); ?>>

    <header id="tuta-page-header">
        
        <div class="clearfix">

            <div class="header-top clearfix">
                <div class="wrapper clearfix">

                    <?php tuta_logo(); ?>
                    <?php //tuta_menu('primery-menu'); ?>
                    
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
                    <nav id="main-nav" class="clearfix">

                        <ul id="main-menu">
                            <li class="active">
                                <a href="index-1.html"><span>Home</span></a>
                                <div class="sub-main-menu-o sf-mega">
                                    <ul class="sub-menu">
                                        <li class="active"><a href="index-1.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-3-pattern.html">Home 3 Pattern</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-4-flat.html">Home 4 Flat</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                        <li><a href="index-5-flat.html">Home 5 Flat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="sell-your-car.html"><span>Sell a Car</span></a></li>
                            <li><a href="about-us.html"><span>About Us</span></a></li>
                            <li>
                                <a href="blog.html"><span>News and reviews</span></a>

                                <div class="sub-main-menu sf-mega">
                                    <div class="row">

                                        <div class="col-md-3">
                                            <ul class="sub-menu">
                                                <li class="active"><a href="blog.html">New car reviews</a></li>
                                                <li><a href="blog.html">New car deal</a></li>
                                                <li><a href="blog.html">Owner reviews</a></li>
                                                <li><a href="blog.html">Latest New</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-md-9 news-wrapper">
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <article class="item">
                                                        <a href="single-blog.html"><img src="placeholders/post-image/image-283-120-1.jpg" width="283" height="120" alt=""></a>
                                                        <h3><a href="single-blog.html" title="">Porche 977 gt3 cup 'sun edition'</a></h3>
                                                    </article>
                                                </div>

                                                <div class="col-md-4">
                                                    <article class="item">
                                                        <a href="single-blog.html"><img src="placeholders/post-image/image-283-120-2.jpg" width="283" height="120" alt=""></a>
                                                        <h3><a href="single-blog.html" title="">Porche 977 gt3 cup 'sun edition'</a></h3>
                                                    </article>
                                                </div>

                                                <div class="col-md-4">
                                                    <article class="item">
                                                        <a href="single-blog.html"><img src="placeholders/post-image/image-283-120-3.jpg" width="283" height="120" alt=""></a>
                                                        <h3><a href="single-blog.html" title="">Porche 977 gt3 cup 'sun edition'</a></h3>
                                                    </article>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--.sub-main-menu-->
                            </li>
                            <li><a href="#"><span>Single Post</span></a></li>
                            <li>
                                <a href="#"><span>Shop</span></a>
                                 <div class="sub-main-menu-o sf-mega">
                                    <ul class="sub-menu">
                                        <li><a href="shop-product-1.html">Shop 1</a></li>
                                        <li><a href="shop-product-1-sidebar.html">Shop 1 sidebar</a></li>
                                        <li><a href="shop-product-2.html">Shop 2</a></li>
                                        <li><a href="shop-product-2-sidebar.html">Shop 2 sidebar</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#"><span>Page</span></a>
                                <div class="sub-main-menu-o sf-mega">
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="FAQ.html">F.A.Q</a></li>
                                        <li><a href="pricing-table.html">Pricing Table</a></li>
                                        <li><a href="search-car.html">Search Car</a></li>
                                        <li><a href="single-blog.html">Single Blog</a></li>
                                        <li><a href="single-car.html">Single Car</a></li>
                                    </ul>
                                </div>
                                
                            </li>
                            <li><a href="contact-us.html"><span>Contact Us</span></a></li>
                        </ul>

                        <i class='fa fa-align-justify'></i>
                    
                        <div class="mobile-menu-wrapper">
                            <ul id="mobile-menu">
                                <li class="current-menu-item">
                                    <a href="index-1.html">Home</a>
                                    <ul>
                                        <li><a href="index-1.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-3-pattern.html">Home 3 Pattern</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-4-flat.html">Home 4 Flat</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>                                        
                                        <li><a href="index-5-flat.html">Home 5 Flat</a></li>
                                    </ul>
                                </li>
                                <li><a href="sell-your-car.html">Sell a Car</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li>
                                    <a href="blog.html">News and reviews</a>
                                    <ul>
                                        <li><a href="blog.html">New car reviews</a></li>
                                        <li><a href="blog.html">New car deal</a></li>
                                        <li><a href="blog.html">Owner reviews</a></li>
                                        <li><a href="blog.html">Latest New</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="elements.html">Single Post</a>
                                </li>
                                <li>
                                    <a href="shop.html">Shop</a>
                                    <ul>
                                        <li><a href="shop-product-1.html">Shop 1</a></li>
                                        <li><a href="shop-product-1-sidebar.html">Shop 1 sidebar</a></li>
                                        <li><a href="shop-product-2.html">Shop 2</a></li>
                                        <li><a href="shop-product-2-sidebar.html">Shop 2 sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop.html">Page</a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="FAQ.html">F.A.Q</a></li>
                                        <li><a href="pricing-table.html">Pricing Table</a></li>
                                        <li><a href="search-car.html">Search Car</a></li>
                                        <li><a href="single-blog.html">Single Blog</a></li>
                                        <li><a href="single-car.html">Single Car</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact-us.html">Contact Us</a>
                                </li>
                            </ul>
                            <!-- mobile-menu -->
                        </div>
                        <!-- mobile-menu-wrapper -->

                    </nav>

                    <div class="search-top">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" value="" name="search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search" onclick="alert('a');"></i></button>
                                </span>
                            </div><!-- /input-group -->
                        </form>
                    </div>
                    <!-- .search-wrapper -->
                </div>
                <!-- .waypoint -->
            </div>
        </div>
        <!-- .header-bottom -->

    </header>
    <!-- .tuta-page-header -->