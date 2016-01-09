<div class="tuta-pane author-box">
	<div class="author-avatar">
		<a href="<?php echo get_author_posts_url(get_the_author_meta("ID")); ?>" rel="author">
            <?php
                /**
                 * Filter the author bio avatar size.
                 *
                 * @since Snake 1.0
                 *
                 * @param int $size The avatar height and width size in pixels.
                 */
                $author_bio_avatar_size = apply_filters( 'tuta_author_bio_avatar_size', 90 );

                echo get_avatar( get_the_author_meta( 'ID' ), $author_bio_avatar_size );
            ?>
        </a>
	</div>
	<div class="author-body">
		<h3>
			<?php printf(__('Write by <a href="%1$s" rel="author">%2$s</a>', 'tuta'),
				get_author_posts_url(get_the_author_meta("ID")),
				get_the_author()
            ); ?>
		</h3>
		<p>
            <?php echo get_the_author_meta('description'); ?>
            <a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
                <?php printf( __( 'View all posts by %s', 'tuta' ), get_the_author() ); ?>
            </a>
        </p>
	</div>
</div>