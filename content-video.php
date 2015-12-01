<article id="post-<?php the_id(); ?>" <?php post_class("blog-content"); ?>>
    <?php tuta_entry_header(); ?>
    <?php if(!is_single()) : tuta_entry_meta(); endif;?>
    <?php the_content(); ?>
</article>