<article id="post-<?php the_id(); ?>" <?php post_class("blog-content"); ?>>
    <?php tuta_entry_header(); ?>
    <?php if(!is_search()) tuta_thumbnail('large'); ?>
    <?php tuta_entry_meta(); ?>
    <?php tuta_entry_content(); ?>
</article>