<?php get_header(); ?>

    <section id="main-content">

        <?php include '/inc/head-main.php'; ?>

        <div class="wrapper">

            <div class="search-info mb-20">
                <?php
                    $search_query = new WP_Query('s=' . $s . '&showposts = -1');
                    $search_keyword = wp_specialchars($s, 1);
                    $search_count = $search_query->post_count;
                    // echo '<pre>';
                    // var_dump($search_query);
                    // echo '</pre>';
                    printf(__('Search result for <strong>%1$s</strong>. We found <strong>%2$s</strong> articles for you.', 'tuta'), $search_keyword, $search_count);
                ?>
            </div>

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

            </div>
            <!-- .row -->

        </div>
        <!-- .wrapper -->

        <?php include '/inc/call-to-action.php'; ?>

    </section>
    <!-- #main-content -->

<?php get_footer(); ?>