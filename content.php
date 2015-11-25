<li>
    <article id="post-<?php the_id(); ?>" <?php post_class(); ?>>
        <?php tuta_entry_header(); ?>            
        <?php tuta_thumbnail('large'); ?>
        <?php tuta_entry_meta(); ?>
        <?php tuta_entry_content(); ?>
        <?php (is_single()? tuta_entry_tag() : '')?>
        <!-- <a class="more-link" href="#">View more details</a> -->
    </article>
</li>