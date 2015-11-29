<?php get_header(); ?>

	<section id="main-content">

        <div class="main-head">
            <div class="wrapper">
                <h1 class="page-title">Blogs</h1>
                <ol class="breadcrumb">
                    <li><a href="index-1.html">Home</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog.html">Category Title</a></li>
                </ol>
            </div>
        </div>
        <!-- .main-head -->

        <div class="tool-box">
            <div class="wrapper">
                <a href="#" class="tuta-button-default button-3d button-ico button-sm btn-white-hover pull-left">
                    <i class="fa fa-print"></i> Print This Page
                </a>
                <a href="#" class="tuta-button-default button-3d button-ico button-sm btn-white-hover pull-left">
                    <i class="fa fa-star"></i> Add To Favorites
                </a>
                <a href="#" class="tuta-button-default button-3d button-ico button-sm btn-white-hover pull-left">
                    <i class="fa fa-share-alt"></i> Share Vehicle
                </a>
                <a href="#" class="tuta-button-default button-3d button-ico button-sm btn-white-hover pull-right">
                    Back to Previous Page
                </a>
            </div>
        </div>
        <!-- .tool-box -->

        <div class="wrapper">

            <div class="row">

                <div class="col-main">
                    
                    <?php include (TEMPLATEPATH . '/inc/featured.php')?>

                </div>
                <!-- .col-main -->

                <div class="col-aside">
                    <div class="widget-area-12">
                        <div class="widget tuta-mp-post-widget">

                            <h3 class="widget-title">Most Popular Posts</h3>

                            <ul class="widget-content list-style-1">
                                <li>
                                    <h4 class="content-title content-title-1">
                                        <a href="#" title="">As we have come to expect from the Porsche design</a>
                                    </h4>
                                </li>

                                <li>
                                    <h4 class="content-title content-title-1">
                                        <a href="#" title="">As we have come to expect from the Porsche design</a>
                                    </h4>
                                </li>

                                <li>
                                    <h4 class="content-title content-title-1">
                                        <a href="#" title="">As we have come to expect from the Porsche design</a>
                                    </h4>
                                </li>

                                <li>
                                    <h4 class="content-title content-title-1">
                                        <a href="#" title="">As we have come to expect from the</a>
                                    </h4>
                                </li>

                                <li>
                                    <h4 class="content-title content-title-1">
                                        <a href="#" title="">As we have come to expect from the</a>
                                    </h4>
                                </li>
                            </ul>

                        </div>
                        <!-- .widget tuta-mp-post-widget -->
                    </div>
                    <!-- .widget-area-2 -->
                </div>
                <!-- .col-aside -->

            </div>
            <!-- .row -->
            
            <div class="divider-1"></div>

            <div class="row clearfix">

                <div class="col-main">

                    <div class="blog-content">

                        <div class="blog-list">
    	                    <?php if(have_posts()) :
    							while(have_posts()) : the_post();
    							    get_template_part('content', get_post_format());
    							endwhile;
    						else :
    							get_template_part('content', 'none');
    						endif; ?>
                        </div>

                        <?php tuta_pagination(); ?>

                    </div>
                    <!-- .blog-list -->
                    
                </div>
                <!-- .col-main -->

                <div class="col-aside">

                    <div class="widget-area-2">

                        <div class="widget tuta-featured-list-widget">

                            <h3 class="widget-title">Featured Listings</h3>

                            <ul class="widget-content list-style-1">
                                <li>
                                    <article>
                                        <a class="thumbnail pull-left" href="#" title="">
                                            <img src="placeholders/post-image/image-90-60-1.jpg" height="60" width="90" alt="">
                                        </a>
                                        <h4 class="content-title content-title-1">
                                            <a href="#" title="">New 2015 Dodge Charger SRT Hellcat is the quickest</a>
                                        </h4>
                                    </article>
                                </li>

                                <li>
                                    <article>
                                        <a class="thumbnail pull-left" href="#" title="">
                                            <img src="placeholders/post-image/image-90-60-1.jpg" height="60" width="90" alt="">
                                        </a>
                                        <h4 class="content-title content-title-1">
                                            <a href="#" title="">New 2015 Dodge Charger SRT Hellcat is the quickest</a>
                                        </h4>
                                    </article>
                                </li>

                                <li>
                                    <article>
                                        <a class="thumbnail pull-left" href="#" title="">
                                            <img src="placeholders/post-image/image-90-60-1.jpg" height="60" width="90" alt="">
                                        </a>
                                        <h4 class="content-title content-title-1">
                                            <a href="#" title="">New 2015 Dodge Charger SRT Hellcat is the quickest</a>
                                        </h4>
                                    </article>
                                </li>

                                <li>
                                    <article>
                                        <a class="thumbnail pull-left" href="#" title="">
                                            <img src="placeholders/post-image/image-90-60-1.jpg" height="60" width="90" alt="">
                                        </a>
                                        <h4 class="content-title content-title-1">
                                            <a href="#" title="">New 2015 Dodge Charger SRT Hellcat is the quickest</a>
                                        </h4>
                                    </article>
                                </li>
                            </ul>

                        </div>
                        <!-- .tuta-featured-list-widget -->

                        <div class="widget tuta-blog-category-widget">

                            <h3 class="widget-title">Blog Categories</h3>

                            <ul class="widget-content list-style-1">
                                <li>
                                    <a href="#" title="">About Our Services (32)</a>
                                </li>

                                <li>
                                    <a href="#" title="">Auto News (47)</a>
                                </li>

                                <li>
                                    <a href="#" title="">New Cars in Showroom (18)</a>
                                </li>

                                <li class="active">
                                    <a href="#" title="">Service Announcements (49)</a>
                                </li>

                                <li>
                                    <a href="#" title="">Formula 1 (23)</a>
                                </li>

                                <li>
                                    <a href="#" title="">Motorbike Races (10)</a>
                                </li>

                                <li>
                                    <a href="#" title="">Holiday Caravaning</a>
                                </li>
                            </ul>

                        </div>
                        <!-- .tuta-blog-category-widget -->

                        <div class="widget tuta-testimonial-1-widget">
                            <blockquote class="blockquote">
                                <p>
                                    <a href="#">AutoTrader</a> team is very proffessional and has found for me the perfect car for my needs. I'll be sure to give them a call whenever I'll be needing a new set of wheels! Highly recommended
                                </p>
                                <p class="customer">Brent Jarvis, <span>Customer</span></p>
                            </blockquote>
                        </div>
                        <!-- .widget-area-2 -->

                        <div class="widget tuta-ads-1-widget">
                            <a href="#" title="">
                                <img src="placeholders/post-image/image-ads-1.jpg" height="251" width="300" alt="">
                            </a>
                        </div>
                        <!-- .widget tuta-ads-1-widget -->

                    </div>
                    <!-- .widget-area-2 -->

                </div>
                <!-- .col-aside -->

            </div>
            <!-- .row -->           

        </div>
        <!-- .wrapper -->

        <div class="widget-area-6">
            <div class="widget tuta-submit-vehicle-widget">
                <p class="h2">Start Selling With Autotrader Now!</p>
                <p class="h5">No hidden fees or costs, you pay what you need.</p>
                <a class="tuta-button-default button-gde button-lg" href="#">Call to action button</a>
            </div>
        </div>
        <!-- .widget-area-6 -->

    </section>
    <!-- #main-content -->

<?php get_footer(); ?>