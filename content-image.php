<article id="post-<?php the_id(); ?>" <?php post_class("blog-content"); ?>>
    <?php tuta_entry_header(); ?>
    <?php
        if(!is_single()) {
            tuta_thumbnail('large');
            tuta_entry_meta();
        }
    ?>
    <?php // đếm số lượng attachment có trong pots
        $attachments = get_children(array('post_parent'=>$post->ID));
        $attachment_number = count($attachments);
        printf(__('<p>This image post contains %1$s photos</p>', 'tuta'), $attachment_number);
    ?>
    <?php tuta_entry_content(); ?>
</article>