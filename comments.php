<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Snake
 * @since Snake 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
?>

<div class="comment-box">

    <?php if ( have_comments() ) : ?>
        <h2 class="tuta-pane tuta-pane-1 comments-title">
            <?php
                printf( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'tuta' ),
                    number_format_i18n( get_comments_number() ), get_the_title() );
            ?>
        </h2>

        <ol class="comments-list">
            <?php
                // wp_list_comments( array(
                //     'style'       => 'ol',
                //     'short_ping'  => true,
                //     'avatar_size' => 56,
                // ) );

                wp_list_comments( array(
                    'type' => 'comment',
                    'callback' => 'tuta_comments_list',
                    'avatar_size' => '50',
                ) );

                // wp_list_comments( array(
                //     'type' => 'comment',
                //     'callback' => 'custom_comments',
                // ) );
            ?>
        </ol><!-- .comment-list -->

        <?php tuta_comment_nav(); ?>

    <?php endif; // have_comments() ?>

    <?php
        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
            <p class="no-comments"><?php _e( 'Comments are closed.', 'tuta' ); ?></p> <?php
        endif; ?> <?php

        $comments_fields = array(
            'author' => '<div class="col-md-6 col-md-pull-6"><span class="form-control-wrap">
                            <input id="comment-author" name="author" class="show-input" size="30"
                            placeholder="' . __('Name', 'tuta') . ' *" type="text"
                            value="' . esc_attr( $commenter['comment_author'] ) . '">
                        </span>',

            'email' => '<span class="form-control-wrap">
                            <input id="comment-author" name="email" class="show-input" size="30"
                            placeholder="' . __('Email', 'tuta') . ' *" type="text"
                            value="' . esc_attr( $commenter['comment_author_email'] ) . '">
                        </span>',

            'url' => '<span class="form-control-wrap">
                            <input id="comment-author" name="url" class="show-input" size="30"
                            placeholder="' . __('Website', 'tuta') . '" type="text"
                            value="' . esc_attr( $commenter['comment_author_url'] ) . '">
                        </span></div></div>',
        );
        $comments_args = array(
            //'fields' => $comments_fields,
            'id_form' => 'tuta-comment',
            'class_form' => 'tuta-comment post-comment',
            'id_submit' => 'tuta-comment-submit',
            'class_submit' => 'tuta-button-default button-gde',
            'name_submit' => 'submit',
            'label_submit' => __( 'Post Comment', 'tuta' ),
            'title_reply' => __( '<span class="tuta-pane tuta-pane-1 show">Leave a Reply', 'tuta' ),
            'title_reply_to' => __( '<span class="tuta-pane tuta-pane-1 show">Leave a Reply to %s', 'tuta' ),
            'cancel_reply_link' => '<i class="fa fa-times-circle" title="' . __( 'Cancel Reply', 'tuta' ) . '"></i></span>',
            'comment_field' => ( is_user_logged_in() ? '' : '<div class="row"><div class="col-md-6 col-md-push-6">' ) .
                                '<span class="form-control-wrap">
                                    <textarea id="comment-message" name="comment" cols="30" rows="10" aria-required="true" placeholder="' . __( 'Your comment', 'tuta' ) . ' *"></textarea>
                                </span>' .
                                ( is_user_logged_in() ? '' : '</div>' ),
            'must_log_in' => '<p class="must-log-in">' .
                                sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.', 'tuta' ),
                                    wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
                                ) . '</p>',
            'logged_in_as' => '<p class="logged-in-as hide">' .
                                sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'tuta' ),
                                    admin_url( 'profile.php' ),
                                    $user_identity,
                                    wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
                                ) . '</p>',
            'comment_notes_before' => '<p class="comment-notes">' .
                                        __( 'Your email address will not be published. Required fields are marked *', 'tuta' ) .
                                        '</p>',
            // 'comment_notes_after' => '<p class="form-allowed-tags">' .
            //                             sprintf( __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s', 'tuta' ),
            //                               ' <code>' . allowed_tags() . '</code>' ) .
            //                             '</p>',
            'fields' => apply_filters( 'comment_form_default_fields', $comments_fields ),
        );

        comment_form($comments_args);

    ?>

</div> <!-- .comment-box -->
