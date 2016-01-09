<div class="sub-page-slide-wrap">

    <div class="sub-page-slide owl-carousel">

    <?php
        global $post;
        $args = array('numberposts' => 4);
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
                        <span class="time"><?php the_date(); ?></span> -
                        <a href="<?php echo get_author_posts_url($post->ID); ?>"><?php the_author(); ?></a>
                    </div>
                    <?php the_excerpt(); ?>
                    <a class="more-link" href="<?php the_permalink(); ?>"> <?php
                        echo __('View more details', 'tuta');
                        the_title( '<span class="screen-reader-text">', '</span>', true); ?>
                    </a>
                </div>
            </article>
        <?php endforeach; wp_reset_postdata(); ?>

    </div> <!-- .blog-slide -->

    <ul class="control-sub-page-slide">
        <?php foreach($custom_posts as $post) : setup_postdata($post); ?>
            <li class="active">
                <?php tuta_thumbnail('thumbnail'); ?>
            </li>
        <?php endforeach; wp_reset_postdata(); ?>
    </ul> <!-- .control -->
</div> <!-- .tuta-blog-slide -->