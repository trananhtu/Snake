<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage SnakeTheme
 * @since SnakeTheme 1.0
 */
?>

<article id="post-<?php the_id(); ?>" <?php post_class("blog-content"); ?>>
    <?php tuta_entry_header(); ?>
    <?php if(!is_search()) tuta_thumbnail('large'); ?>
    <div class="entry-content">
        <?php tuta_entry_meta(); ?>
        <?php tuta_entry_content(); ?>
    </div>
</article>