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

                        </footer>
                        <!-- footer -->

                    </article>
                    <!-- article -->

                    <?php comments_template(); ?>

                    <!-- <section class="comment-box">

                        <h3 class="tuta-pane tuta-pane-1">2 Comments</h3>

                        <ol class="comments-list">
                            <li>
                                <article>
                                    <div class="thumbnail">
                                        <img src="placeholders/post-image/image-50-50-2.jpg" height="50" width="50" alt="">
                                    </div>
                                    <div class="comment-body">
                                        <header class="comment-header clearfix">
                                            <h5>Jolie Angelina</h5>
                                            <div class="info-1 clearfix">
                                                <span class="time">10 September, 2013 at 5:26 pm</span>

                                                <div class="pull-right">
                                                    <a href="#">Edit</a>
                                                    <i>/</i>
                                                    <a href="#">Reply</a>
                                                </div>

                                            </div>
                                        </header>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce adipiscing neque ornare orci ullamcorper accumsan. Sed malesuada pharetra erat, eu viverra eros rutrum sit amet. Sed malesuada pharetra erat, eu viverra eros rutrum sit amet. Aliquam commodo auctor facilisis.</p>
                                    </div>
                                </article>
                            </li>

                            <ul class="children">
                                <li>
                                    <article>
                                        <div class="thumbnail">
                                            <img src="placeholders/post-image/image-50-50-1.jpg" height="50" width="50" alt="">
                                        </div>

                                        <div class="comment-body">
                                            <header class="comment-header clearfix">
                                                <h5>Jolie Angelina</h5>
                                                <div class="info-1 clearfix">
                                                    <span class="time">10 September, 2013 at 5:26 pm</span>

                                                    <div class="pull-right">
                                                        <a href="#">Edit</a>
                                                        <i>/</i>
                                                        <a href="#">Reply</a>
                                                    </div>

                                                </div>
                                            </header>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce adipiscing neque ornare orci ullamcorper accumsan. Sed malesuada pharetra erat, eu viverra eros rutrum sit amet. Sed malesuada pharetra erat, eu viverra eros rutrum sit amet. Aliquam commodo auctor facilisis.</p>
                                        </div>
                                    </article>
                                </li>
                                <li>
                                    <article>
                                        <div class="thumbnail">
                                            <img src="placeholders/post-image/image-50-50-1.jpg" height="50" width="50" alt="">
                                        </div>

                                        <div class="comment-body">
                                            <header class="comment-header clearfix">
                                                <h5>Jolie Angelina</h5>
                                                <div class="info-1 clearfix">
                                                    <span class="time">10 September, 2013 at 5:26 pm</span>

                                                    <div class="pull-right">
                                                        <a href="#">Edit</a>
                                                        <i>/</i>
                                                        <a href="#">Reply</a>
                                                    </div>

                                                </div>
                                            </header>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce adipiscing neque ornare orci ullamcorper accumsan. Sed malesuada pharetra erat, eu viverra eros rutrum sit amet. Sed malesuada pharetra erat, eu viverra eros rutrum sit amet. Aliquam commodo auctor facilisis.</p>
                                        </div>
                                    </article>
                                </li>
                            </ul>

                        </ol>
                        .comments-list

                        <div class="tuta-pagination">
                            <a class="previous" href="#">&laquo; Previous</a>
                            <span>1</span>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a class="next" href="#">Next &raquo;</a>
                        </div>
                        .tuta-pagination

                    </section>
                    .comment-box -->

                    <?php include (TEMPLATEPATH . '/inc/related-posts.php'); ?>

                    <!-- <section class="post-comment">

                        <h3 class="tuta-pane tuta-pane-1">Leave a Reply</h3>
                        <p>Your email address will not be published. Required fields are marked *</p>

                        <form class="comments-form">
                            <div class="row">

                                <div class="col-md-6">
                                    <span class="form-control-wrap">
                                        <input id="comment-name" class="show-input" placeholder="Name *" type="text" value="" name="name">
                                    </span>

                                    <span class="form-control-wrap">
                                        <input id="comment-email" class="show-input" placeholder="Email *" type="text" value="" name="email">
                                    </span>

                                    <span class="form-control-wrap">
                                        <input id="comment-url" class="show-input" placeholder="Website" type="text" value="" name="url">
                                    </span>
                                </div>

                                <div class="col-md-6">
                                    <span class="form-control-wrap">
                                        <textarea id="comment-message" name="message" cols="30" rows="10" placeholder="Your comment *"></textarea>
                                    </span>
                                </div>

                                <div class="col-md-12">
                                    <input type="submit" value="Post Comment" id="submit-comment" class="tuta-button-default button-gde">
                                </div>

                            </div>
                        </form>
                    </section> -->
                    <!-- .post-comment -->

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