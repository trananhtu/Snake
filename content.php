<!-- <article id="post-<?php the_id(); ?>" <?php post_class(); ?>>
	<div class="entry_thumbnail">
		
	</div>
	<header class="entry-header">
		
		
	</header>
	<div class="entry-content">
		
		
	</div>
</article> -->




    <li>
        <article>
            <?php tuta_entry_header(); ?>            
            <?php tuta_thumbnail('large'); ?>
            <?php tuta_entry_meta(); ?>
            <?php tuta_entry_content(); ?>
            <?php (is_single()? tuta_entry_tag() : '')?>
            <!-- <a class="more-link" href="#">View more details</a> -->
        </article>
    </li>

    
