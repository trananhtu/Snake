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

                        <?php include (TEMPLATEPATH . '/inc/most-popular-posts.php'); ?>

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

                        <?php include (TEMPLATEPATH . '/inc/random-posts.php'); ?>

                        <?php include (TEMPLATEPATH . '/inc/category.php'); ?>

                        <div class="widget tuta-testimonial-1-widget">
                            <blockquote class="blockquote">
                                <p>
                                    <a href="#">AutoTrader</a> team is very proffessional and has found for me the perfect car for my needs. I'll be sure to give them a call whenever I'll be needing a new set of wheels! Highly recommended
                                </p>
                                <p class="customer">Brent Jarvis, <span>Customer</span></p>
                            </blockquote>
                        </div>
                        <!-- .widget-area-2 -->

                        <!-- <div class="widget tuta-ads-1-widget">
                            <a href="#" title="">
                                <img src="placeholders/post-image/image-ads-1.jpg" height="251" width="300" alt="">
                            </a>
                        </div> -->
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