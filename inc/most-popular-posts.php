<div class="widget tuta-mp-post-widget">

    <h3 class="widget-title"><?php echo __('Most Popular Posts', 'tuta')?></h3>

    <ul class="widget-content list-style-1">
        <?php global $post;
            $most_popular_posts = get_posts(array(
                'posts_per_page' => 6,
                'orderby' => 'comment_count'
            ));
            foreach($most_popular_posts as $post) : setup_postdata($post); ?>
                <li>
                    <h4 class="content-title content-title-1">
                        <a href="<?php the_permalink($post->ID); ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h4>
                </li> <?php
            endforeach; wp_reset_postdata(); ?>
    </ul>

</div> <!-- .widget tuta-mp-post-widget -->