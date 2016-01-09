    <aside id="aside-bottom">
        <div class="wrapper">
            <div class="row">

                <div class="col-ex-12 col-md-4">
                    <div class="logo-bottom">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?> /placeholders/logo.png" title="tuta" width="259" height="58" alt="">
                        </a>
                    </div>
                    <div class="widget-area-7">
                        <div class="widget widget-text">
                            <p>AutoDealer is a professional responsive vehicle marketplace WordPress theme.</p>
                            <p>The theme has been developed especially for car sellers, dealers or auto motor retailers.</p>
                            <a href="#" class="purchase"><?php echo __('Purchase This Theme &raquo;', 'tuta')?></a>
                        </div>
                    </div>
                    <!-- .widget-area-7 -->
                </div>

                <div class="col-xs-6 col-sm-3 col-md-2">
                    <div class="widget-area-8">
                        <div class="widget widget_text">
                            <h3 class="widget-title widget-title-6"><?php echo __('Privacy', 'tuta')?></h3>
                            <ul class="widget-content">
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Statement</a></li>
                                <li><a href="#">F.A.Q.</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Confidentiality</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- .widget-area-8 -->
                </div>

                <div class="col-xs-6 col-sm-3 col-md-2">
                    <div class="widget-area-8">
                        <div class="widget widget_text">
                            <h3 class="widget-title widget-title-6"><?php echo __('Vehicle', 'tuta')?></h3>
                            <ul class="widget-content">
                                <li><a href="#">Motorbikes</a></li>
                                <li><a href="#">Compacts</a></li>
                                <li><a href="#">Sedans</a></li>
                                <li><a href="#">4x4 SUVs</a></li>
                                <li><a href="#">Pickups</a></li>
                                <li><a href="#">Vans &amp; Trucks</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- .widget-area-9 -->
                </div>

                <div class="col-xs-6 col-sm-3 col-md-2">
                    <div class="widget-area-10">
                        <div class="widget widget_text">
                            <h3 class="widget-title widget-title-6"><?php echo __('Support', 'tuta')?></h3>
                            <ul class="widget-content">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">Safety &amp; Security</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- .widget-area-10 -->
                </div>

                <div class="col-xs-6 col-sm-3 col-md-2">
                    <div class="widget-area-11">
                        <div class="widget widget_text">
                            <h3 class="widget-title widget-title-6"><?php echo __('Address', 'tuta')?></h3>
                            <ul class="widget-content">
                                <li>King Street, Melbourne</li>
                                <li>Victoria 3000 Australia</li>
                                <li>Mon - Fri: 9AM - 7 PM</li>
                                <li>Sat - Sun: 9AM - 2 PM</li>
                            </ul>
                            <a class="view-bmap" href="#"><?php echo __('View Bigger Map &raquo;', 'tuta')?></a>
                        </div>
                    </div>
                    <!-- .widget-area-11 -->
                </div>

            </div>
        </div>
    </aside>
    <!-- #aside-bottom -->

    <footer id="tuta-page-footer">
        <div class="wrapper">
            <div class="row">

                <div class="col-md-5">
                    <p class="copyright">
                        <?php printf(
                            __('&copy; Copyright %1$s %2$s Theme by TUTA.', 'tuta'),
                            date('Y'),
                            get_bloginfo('sitename')
                        ); ?>
                    </p>
                </div>

                <div class="col-md-7">
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
        </div>
    </footer>
    <!-- #tuta-page-footer -->

    <?php wp_footer(); ?>

</body>
</html>