<?php get_header(); ?>

	<section id="main-content">

        <?php include '/inc/head-main.php'; ?>

        <div class="wrapper">

            <div class="row clearfix">

                <div class="col-main">

                    <article class="blog-content">

                        <?php if(have_posts()) :
                            while(have_posts()) : the_post();
                                get_template_part('content', get_post_format());
                            endwhile;
                        else :
                            get_template_part('content', 'none');
                        endif; ?>

                        <footer>

                            <?php get_template_part('author-bio'); ?>

                            <div class="box-wrap clearfix">

                                <div class="page-links-wrap">
                                    <?php tuta_link_pages(); ?>
                                </div>

                                <div class="tag-box pull-left">
                                	<?php tuta_entry_tag(); ?>
                                </div>

                            </div>

                            <?php tuta_entry_next_prev(); ?>

                        </footer> <!-- footer -->

                    </article> <!-- article -->

                    <?php comments_template(); ?>

                    <?php include (TEMPLATEPATH . '/inc/related-posts.php'); ?>

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

        <?php include '/inc/call-to-action.php'; ?>

    </section>
    <!-- #main-content -->

<?php get_footer(); ?>