<div class="sub-page-slide-wrap">

    <div class="sub-page-slide owl-carousel">

    <?php 
        global $post;
        $args = array('numberposts' => 6);
        $custom_posts = get_posts($args);
        foreach($custom_posts as $post) : setup_postdata($post); ?>

        <article class="item">
            <div class="pull-left">
                <?php tuta_thumbnail('large'); ?>
            </div>
            <div class="content">
                <h3 class="content-title">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h3>
                <div class="info-1">
                    <span class="time"><?php the_meta(); ?></span>
                </div>
                <p><?php the_excerpt(); ?></p>
                <a class="more-link" href="<?php the_permalink(); ?>"><?php __('View more details', 'tuta'); ?></a>
            </div>                                    
        </article>
        
        <?php endforeach; wp_reset_postdata(); ?>

    </div>
    <!-- .blog-slide -->
    
    <ul class="control-sub-page-slide">
        <li class="active">
            <a href="#"><img src="placeholders/post-image/image-150-90-1.jpg" width="150" height="90" alt=""></a>
        </li>
    </ul>
    <!-- .control -->
</div>
<!-- .tuta-blog-slide -->