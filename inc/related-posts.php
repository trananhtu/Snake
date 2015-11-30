<section class="related-article">

    <h3 class="tuta-pane tuta-pane-1"><?php echo __('Related Post', 'tuta'); ?></h3>

    <div class="row">

        <?php global $post;
            $related_posts = get_posts(array(
                'posts_per_page' => 3,
                'orderby' => 'rand'
            ));
            foreach ($related_posts as $post) : setup_postdata($post); ?>
                <div class="col-sm-6 col-md-4">
                    <article class="item">
                        <!-- <a class="thumbnail" href="#" title="Lamborghini AventadorJ">
                            <img src="placeholders/post-image/image-283-174-5.jpg" width="283" height="174" alt="">
                        </a> -->
                        <?php tuta_thumbnail('thumbnail'); ?>
                        <h4 class="content-title">
                            <a href="<?php the_permalink($post->ID); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </h4>
                        <div class="info-1">
                            <span class="time"><?php the_date(); ?></span>
                            <!-- <a href="<?php echo get_author_posts_url($post->ID); ?>"><?php the_author(); ?></a> -->
                        </div>
                    </article>
                </div> <?php
            endforeach; wp_reset_postdata(); ?>
    </div> <!--.row-->

</section> <!-- .related-article -->