<?php
/**
 * Template Name: Full Width
 */
?>

<?php get_header(); ?>

    <section id="main-content" class="full-width">

        <?php get_template_part('inc/head-main'); ?>

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

                    </article> <!-- article -->

                </div>
                <!-- .col-main -->

            </div>
            <!-- .row -->

        </div>
        <!-- .wrapper -->

        <?php get_template_part('inc/call-to-action'); ?>

    </section>
    <!-- #main-content -->

<?php get_footer(); ?>