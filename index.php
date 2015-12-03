<?php get_header(); ?>

	<section id="main-content">

        <?php include '/inc/head-main.php'; ?>

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

                        <?php get_sidebar(); ?>

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
                        <!-- .tuta-testimonial-1-widget -->

                    </div>
                    <!-- .widget-area-2 -->

                </div>
                <!-- .col-aside -->

            </div>
            <!-- .row -->

        </div>
        <!-- .wrapper -->

        <?php include '/inc/call-to-action.php'; ?>

    </section>
    <!-- #main-content -->

<?php get_footer(); ?>