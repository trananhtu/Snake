<div class="widget tuta-featured-list-widget">

    <h3 class="widget-title"><?php echo __('Featured Listings',' tuta'); ?></h3>

    <ul class="widget-content list-style-1">
        <?php global $post;
            $random_posts = get_posts(array(
                'posts_per_page' => 5,
                'orderby' => 'rand'
            ));
            foreach($random_posts as $post) : setup_postdata($post); ?>
                <li>
                    <article>
                        <div class="pull-left">
                            <?php tuta_thumbnail('thumbnail'); ?>
                        </div>
                        <!-- <a class="thumbnail pull-left" href="#" title="">
                            <img src="placeholders/post-image/image-90-60-1.jpg" height="60" width="90" alt="">
                        </a> -->
                        <h4 class="content-title content-title-1">
                            <a href="<?php the_permalink($post->ID); ?>" title="<?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h4>
                    </article>
                </li> <?php
            endforeach; wp_reset_postdata(); ?>
    </ul>

</div> <!-- .tuta-featured-list-widget -->