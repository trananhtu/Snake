<?php
/**
 * Custom template tags for Twenty Fifteen
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

if ( ! function_exists( 'tuta_comment_nav' ) ) :
/**
 * Display navigation to next/previous comments when applicable.
 *
 * @since Twenty Fifteen 1.0
 */
function tuta_comment_nav() {
    // Are there comments to navigate through?
    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'tuta' ); ?></h2>
            <div class="tuta-pagination">
                <?php echo paginate_comments_links(array(
                    'end_size' => 2,
                    'prev_text' => __('<span class="previous">&laquo; Previous</span>', 'tuta'),
                    'next_text' => __('<span class="next">Next &raquo;</span>', 'tuta'),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'tuta' ) . ' </span>',
                )); ?>
            </div>
        </nav> <?php
    endif;
}
endif;