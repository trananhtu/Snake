<div class="widget tuta-blog-category-widget">

    <h3 class="widget-title"><?php echo __('Blog Categories', 'tuta'); ?></h3>

    <ul class="widget-content list-style-1">
        <?php
            $categories = get_categories(); // get_the_category();
            // echo '<pre>';
            // print_r($categories);
            // echo '</pre>';
            $separetor = '';
            $output = '';
            if(!empty($categories)) :
                foreach($categories as $category) : ?>
                    <li>
                        <a href="<?php echo get_category_link($category->term_id); ?>"
                            title="<?php printf(__('View all posts in %s', 'tuta'), $category->name); ?>">
                            <?php echo $category->name . ' (' . $category->count . ')'?>
                        </a>
                    </li> <?php
                endforeach;
            endif;
        ?>
    </ul>

</div> <!-- .tuta-blog-category-widget -->