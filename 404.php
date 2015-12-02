<?php get_header(); ?>

    <section id="main-content">

        <?php include '/inc/head-main.php'; ?>

        <div class="wrapper">

            <div class="row clearfix">

                <div class="page-404">
                    <?php
                        _e('<h2 class="text-center">404 NOT FOUND</h2>', 'tuta');
                        _e('<p class="text-center">The article you were looking for was not found, but maybe try looking again!</p>', 'tuta');

                        get_search_form();

                        _e('<h3>Content categories</h3>', 'tuta');
                        echo '<div class="404-catlist">';
                            wp_list_categories(array('title_li' => ''));
                        echo '</div>';
                        _e('<h3>Tag Cloud</h3>', 'tuta');
                        wp_tag_cloud();

                    ?>
                </div>

            </div>
            <!-- .row -->

        </div>
        <!-- .wrapper -->

        <?php include '/inc/call-to-action.php'; ?>

    </section>
    <!-- #main-content -->

<?php get_footer(); ?>