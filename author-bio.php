<div class="tuta-pane author-box">
	<div class="author-avatar">
		<a href="<?php echo get_author_posts_url(get_the_author_meta("ID")); ?>"><?php echo get_avatar(get_the_author_meta("ID")); ?></a>
	</div>
	<div class="author-body">
		<h3>
			<?php printf(__('Write by <a href="%1$s">%2$s</a>'),
				get_author_posts_url(get_the_author_meta("ID")),
				get_the_author()) ?>
		</h3>
		<p><?php echo get_the_author_meta('description'); ?></p>
	</div>
</div>