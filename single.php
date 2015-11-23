<?php get_header(); ?>
<article id="post-<?php the_id(); ?>" <?php post_class(); ?>>
	<div class="entry_thumbnail">
		<?php tuta_thumbnail('thumbnail'); ?>
	</div>
	<header class="entry-header">
		<?php tuta_entry_header(); ?>
		<?php tuta_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php tuta_entry_content(); ?>
		<?php (is_single()? tuta_entry_tag() : '')?>
	</div>
</article>

<?php get_footer(); ?>