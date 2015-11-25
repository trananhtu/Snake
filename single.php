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


        

                        <?php tuta_entry_header(); ?>
                        
                        <?php tuta_thumbnail('large'); ?>

                        <?php tuta_entry_meta(); ?>

                        <?php tuta_entry_content(); ?>

                        <footer>

                            <div class="box-wrap clearfix">

                                <div class="page-links-wrap">
                                    <span>Pages: </span>
                                    <div class="page-links">
                                        <span>1</span>
                                        <a href="#"><span>2</span></a>
                                        <a href="#"><span>3</span></a>
                                    </div>
                                </div>

                                <div class="tag-box pull-left">
                                	<?php (is_single()? tuta_entry_tag() : '')?>
                                    <!-- <a href="#">Kopatheme news</a>
                                    <a href="#">Cars</a>
                                    <a href="#">Vehicle</a> -->
                                </div>

                            </div>

                            <div class="box-wrap">
                                <div class="row">

                                    <div class="col-sm-6 col-md-6">
                                        <div class="other-article">
                                            <a class="h3" href="#">&laquo; Previous Article</a>
                                            <h4><a href="#">How to Add Custom Links to Gallery Images in WordPress?</a></h4>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="other-article text-right">
                                            <a class="h3" href="#">Next Article &raquo;</a>
                                            <h4><a href="#">US labour market shows strong rise: Q236,000 new jobs </a></h4>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </footer>
                        <!-- footer -->

                    </article>
                    <!-- article -->

                    <section class="comment-box">

                        <h3 class="kopa-pane kopa-pane-1">2 Comments</h3>

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
                        <!-- .comments-list -->

                        <div class="kopa-pagination">
                            <a class="previous" href="#">&laquo; Previous</a>
                            <span>1</span>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a class="next" href="#">Next &raquo;</a>
                        </div>
                        <!-- .kopa-pagination -->

                    </section>
                    <!-- .comment-box -->

                    <section class="related-article">

                        <h3 class="kopa-pane kopa-pane-1">Related Post</h3>

                        <div class="row">

                            <div class="col-sm-6 col-md-4">
                                <article class="item">
                                    <a class="thumbnail" href="#" title="Lamborghini AventadorJ">
                                        <img src="placeholders/post-image/image-283-174-5.jpg" width="283" height="174" alt="">
                                    </a>
                                    <h4 class="content-title">
                                        <a href="#" title="Lamborghini AventadorJ">Lamborghini AventadorJ</a>
                                    </h4>
                                    <div class="info-1">
                                        <span class="time">Aug 08, 2014</span>
                                        <span class="kopa-rating">
                                            <a href="#" class="fa fa-star"></a>
                                            <a href="#" class="fa fa-star"></a>
                                            <a href="#" class="fa fa-star"></a>
                                            <a href="#" class="fa fa-star"></a>
                                            <a href="#" class="fa fa-star-o"></a>
                                        </span>
                                    </div>
                                </article>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <article class="item">
                                    <a class="thumbnail" href="#" title="Lamborghini AventadorJ">
                                        <img src="placeholders/post-image/image-283-174-4.jpg" width="283" height="174" alt="">
                                    </a>
                                    <h4 class="content-title">
                                        <a href="#" title="Lamborghini AventadorJ">Lamborghini AventadorJ</a>
                                    </h4>
                                    <div class="info-1">
                                        <span class="time">Aug 08, 2014</span>
                                        <span class="kopa-rating">
                                            <a href="#" class="fa fa-star"></a>
                                            <a href="#" class="fa fa-star"></a>
                                            <a href="#" class="fa fa-star"></a>
                                            <a href="#" class="fa fa-star"></a>
                                            <a href="#" class="fa fa-star-o"></a>
                                        </span>
                                    </div>
                                </article>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <article class="item">
                                    <a class="thumbnail" href="#" title="Lamborghini AventadorJ">
                                        <img src="placeholders/post-image/image-283-174-2.jpg" width="283" height="174" alt="">
                                    </a>
                                    <h4 class="content-title">
                                        <a href="#" title="Lamborghini AventadorJ">Lamborghini AventadorJ</a>
                                    </h4>
                                    <div class="info-1">
                                        <span class="time">Aug 08, 2014</span>
                                        <span class="kopa-rating">
                                            <a href="#" class="fa fa-star"></a>
                                            <a href="#" class="fa fa-star"></a>
                                            <a href="#" class="fa fa-star"></a>
                                            <a href="#" class="fa fa-star"></a>
                                            <a href="#" class="fa fa-star-o"></a>
                                        </span>
                                    </div>
                                </article>
                            </div>

                        </div>
                        <!--.row-->

                    </section>
                    <!-- .related-article -->

                    <section class="post-comment">

                        <h3 class="kopa-pane kopa-pane-1">Leave a Reply</h3>
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
                                    <input type="submit" value="Post Comment" id="submit-comment" class="kopa-button-default button-gde">
                                </div>

                            </div>
                        </form>
                    </section>
                    <!-- .post-comment -->
                    
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