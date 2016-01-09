<?php

/**
 * @ Thiết lập các hằng dữ liệu quan trọng
 * THEME_URL = get_stylesheet_directory() - đường dẫn tới thư mục theme
 * CORE = thư mục / core của theme, chứa các file nguồn quan trọng.
 */

define( 'THEME_URL', get_stylesheet_directory() );
define( 'CORE', THEME_URL . '/core');

/**
 * @ Load file /core/init.php
 * @ Đây là file cấu hình ban đầu của theme mà sẽ không nên thay đổi sau này
 */

require_once( CORE . '/init.php' );

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require_once THEME_URL . '/inc/template-tags.php';

/**
 * Thiết lập $content_with để khai báo kích thước chiều rộng của nội dung
 */

if (!isset($content_width)) {
	/**
	 * Nếu biến $content_with chưa có dữ liệu thì gán giá trị cho nó
	 */
	$content_width = 620;
}

/**
 * @ Thiết lập các chức năng sẽ được theme hỗ trợ
 */

if (!function_exists('tuta_theme_setup')) {
	/**
	 * Nếu chưa có hàm tuta_theme_setup thì sẽ tạo mới hàm đó
	 */
	function tuta_theme_setup() {
		/**
		 * Thiết lập theme có thể dịch được
		 */
		$language_folder = THEME_URL . '/languages';
		load_theme_textdomain('tuta', $language_folder);

		/**
		 * Tự chèn RSS Feed links trong <head>
		 */
		add_theme_support('automatic-feed-links' );

		/**
		 * Thêm chức năng post thumbnail
		 */
		add_theme_support('post-thumbnails');

		/**
		 * Thêm chức năng title-tag để tự thêm  <title>
		 */
		add_theme_support('title-tag');

		/**
		 * Thêm chức năng post-format
		 */
		add_theme_support('post-formats', array('video', 'image',	'audio', 'gallery'));

        /**
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));

		/**
		 * Thêm chức năng custom background
		 */
		$default_background = array(
			'default-color' => '#fff',
		);
		add_theme_support('custom-background', $default_background);

		/**
		 * Tạo menu cho theme
		 */
		register_nav_menu('main-menu', __('TuTa Main Menu', 'tuta'));

		/**
		 * Tạo sidebar cho theme
		 */
		$sidebar = array(
			'name'          => __( 'Main Sidebar', 'tuta' ),
			'id'            => 'main-sidebar',
			'description'   => __('Main sidebar for TUTA theme', 'tuta'),
			'class'         => 'main-sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>'
		);

		register_sidebar($sidebar);
	}
}
add_action('after_setup_theme', 'tuta_theme_setup');

/**
 * Chèn CSS và Javascript vào theme
 * Sử dụng hook wp_enqueue_scripts() để hiển thị nó ra ngoài front-end
 */
function tuta_scripts() {
    /**
     * Hàm get_stylesheet_uri() sẽ trả về giá trị dẫn đến file style.css của theme
     * Nếu sử dụng child theme, thì file style.css này vẫn load ra từ parent theme
     */

    // Chèn file style.css chứa CSS của theme
    wp_register_style('main-style', get_template_directory_uri() . '/style.css', 'all');
    wp_enqueue_style('main-style');

    // Chèn JS

    wp_register_script('modernizr-js', get_template_directory_uri() . '/js/modernizr.custom.js', array(), false, false);
    wp_enqueue_script('modernizr-js' );

    wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('bootstrap-js' );

    wp_register_script('maps-google-js', 'http://maps.google.com/maps/api/js?sensor=true', array('jquery'));
    wp_enqueue_script('maps-google-js' );

    wp_register_script('gmaps-js', get_template_directory_uri() . '/js/gmaps.js', array('jquery'));
    wp_enqueue_script('gmaps-js');

    wp_register_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery') );
    wp_enqueue_script( 'custom-js' );


}
add_action('wp_enqueue_scripts', 'tuta_scripts');

/**
 * Thiết lập hàm hiển thị logo
 * tuta_logo()
 */
if (!function_exists('tuta_logo')) {
    function tuta_logo() {
        global $tuta_options;
        if(!$tuta_options['logo-on']) {
            if (is_home()) {
                printf(
                    '<h1 class="logo-image">
                        <span>
                           <a href="%1$s" title="%2$s">
                               <img src="%4$s/placeholders/logo.png" width="259" height="58" alt="%3$s">
                               <span class="sr-only">%3$s</span>
                           </a>
                        </span>
                    </h1>',
                    get_bloginfo('url'),
                    get_bloginfo('description'),
                    get_bloginfo('sitename'),
                    get_template_directory_uri()
                );
            } else {
                printf(
                    '<div class="logo-image">
                        <span>
                           <a href="%1$s" title="%2$s">
                               <img src="%4$s/placeholders/logo.png" width="259" height="58" alt="%3$s">
                               <span class="sr-only">%3$s</span>
                           </a>
                        </span>
                    </div>',
                    get_bloginfo('url'),
                    get_bloginfo('description'),
                    get_bloginfo('sitename'),
                    get_template_directory_uri()
                );
            }
        }
    }
}

/**
 * Thiết lập hàm hiển thị menu
 * tuta_menu($slug)
 */
if (!function_exists('tuta_menu')) {
	function tuta_menu($slug) {
		$menu = array(
			'theme_location' => $slug,
			'container' => 'nav',
			'container_id' => 'main-nav',
            //'menu_class' => 'main-nav',
            'menu_id' => 'main-menu',
            'link_before' => '<span>',
            'link_after' => '</span>'
		);
		wp_nav_menu($menu);
	}
}

/**
 * Tạo phân trang, hiển thị liên kết theo dạng mới nhất, cũ nhất
 */

if(!function_exists('tuta_pagination')) {
	function tuta_pagination() {
		// không hiển thị phân trang nếu ít hơn 2 trang
		// echo 'tuta ' . $GLOBALS['wp_query']->max_num_pages() . ' kaka';
		// if($GLOBALS['wp_query']->max_num_pages() < 2) {
		// 	return '';
		// }

		global $wp_query;
		$total = $wp_query->max_num_pages;
		if ( $total < 2 )  {
			return '';
		}

		?>
		<nav class="tuta-pane" role="navigation">
            <h2 class="screen-reader-text"><?php __('Posts navigation', 'tuta'); ?></h2>
            <div class="tuta-pagination">
                <?php echo paginate_links(array(
                	'end_size' => 2,
                	'prev_text' => __('<span class="tuta-button-default button-3d button-sm btn-white-hover">Prev</span>', 'tuta'),
                	'next_text' => __('<span class="tuta-button-default button-3d button-sm btn-white-hover">Next</span>', 'tuta'),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'tuta' ) . ' </span>',
                )); ?>
            </div>
        </nav>
        <?php
	}
}

/**
 * Hàm hiển thị ảnh thumbnail của post
 * Ảnh thumbnail sẽ không được hiển thi trong trang single
 * Nhưng sẽ hiển thị trong single nếu post đó có format là image
 * @ tuta_thumbnail($size)
 */
if(!function_exists('tuta_thumbnail')) {
	function tuta_thumbnail($size) {
		// chỉ hiển thị thumbnail với post không có mật khẩu
		if(has_post_thumbnail() && !post_password_required() || has_post_format('image')) :
			//if(!is_single()) : ?>
				<figure class="thumbnail">
					<a href="<?php echo get_permalink(get_the_ID()); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail($size); ?>
					</a>
				</figure><?php
			/*else : ?>
				<figure class="thumbnail">
					<?php the_post_thumbnail($size); ?>
				</figure><?php
			endif;*/
		endif;
	}
}

/**
 * Hàm hiển thị tiêu đề của post
 * Tiêu đề của post sẽ nằm trong thẻ H1 trong  trang single
 * Còn ở trang chủ và trang lưu trữ nó nằm trong thẻ H2
 * @tuta_entry_header()
 */
if(!function_exists('tuta_entry_header')) {
	function tuta_entry_header() { ?>
        <header class="entry-header"> <?php
    		if(is_single()) : ?>
    			<h1 class="content-title">
    				<?php the_title(); ?>
    			</h1>
    		<?php else : ?>
    			<h2 class="content-title">
    				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
    					<?php the_title(); ?>
    				</a>
    			</h2> <?php
    		endif; ?>
        </header> <?php
	}
}

/**
 * Hàm hiển thị thông tin của post (Post Meta)
 * @tuta_antry_meta()
 */
if(!function_exists('tuta_entry_meta')) {
	function tuta_entry_meta() {

		echo '<div class="info-1"><span class="time">';

        $format = get_post_format();
        if ( current_theme_supports( 'post-formats', $format ) ) {
            printf( '<span class="entry-format"><i class="fa fa-asterisk"></i> %1$s<a href="%2$s">%3$s</a></span>',
                sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Format', 'Used before post format.', 'tuta' ) ),
                esc_url( get_post_format_link( $format ) ),
                get_post_format_string( $format )
            );
        }

        //echo 'get_post_type ' . get_post_type();

        if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

            if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
                $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
            }

            $time_string = sprintf( $time_string,
                esc_attr( get_the_date( 'c' ) ),
                get_the_date(),
                esc_attr( get_the_modified_date( 'c' ) ),
                get_the_modified_date()
            );

            printf( '<span class="posted-on"><i class="fa fa-clock-o"></i> <span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">%3$s</a></span>',
                _x( 'Posted on', 'Used before publish date.', 'tuta' ),
                esc_url( get_permalink() ),
                $time_string
            );
        }

        if ( 'post' == get_post_type() ) {
            // author
            //if ( is_singular() || is_multi_author() ) {
                printf( '<span class="byline"><span class="author vcard"><i class="fa fa-user"></i> <span class="screen-reader-text">%1$s </span><a class="url fn n" href="%2$s">%3$s</a></span></span>',
                    _x( 'Author', 'Used before post author name.', 'tuta' ),
                    esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                    get_the_author()
                );
            //}

            // category
            $categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'tuta' ) );
            if ( $categories_list && tuta_categorized_blog() ) {
                printf( '<span class="cat-links"><i class="fa fa-bookmark"></i> <span class="screen-reader-text">%1$s </span>%2$s</span>',
                    _x( 'Categories', 'Used before category names.', 'tuta' ),
                    $categories_list
                );
            }

            // tag
            $tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'tuta' ) );
            if ( $tags_list ) {
                printf( '<span class="tags-links"><i class="fa fa-tag"></i> <span class="screen-reader-text">%1$s </span>%2$s</span>',
                    _x( 'Tags', 'Used before tag names.', 'tuta' ),
                    $tags_list
                );
            }
        }

		// hiển thị tên tác giả, tên category và ngày tháng đăng bài
		// printf(__(', By: <a href="%1$s">%2$s</a>, In: %3$s', 'tuta'),
		// 	//get_the_date(),
  //           get_author_posts_url(get_the_author_meta("ID")),
		// 	get_the_author(),
		// 	get_the_category_list(', ')
		// );

		// Hiển thị số đếm lượt bình luận
		if(comments_open()) :
			echo '<span><i class="fa fa-comment"></i> ';
			comments_popup_link(
				__('Leave a comment', 'tuta'),
				__('One comment', 'tuta'),
				'% ' . __('comments', 'tuta'),
				'',
                __('Comment disable', 'tuta')
			);
            echo '</span>';
		endif;

        edit_post_link( __( 'Edit', 'tuta' ), '<span class="edit-link"><i class="fa fa-edit"></i> ', '</span>' );

		echo '</span></div>';
	}
}

/**
 * Determine whether blog/site has more than one category.
 *
 * @since Twenty Fifteen 1.0
 *
 * @return bool True of there is more than one category, false otherwise.
 */
function tuta_categorized_blog() {
    if ( false === ( $all_the_cool_cats = get_transient( 'tuta_categories' ) ) ) {
        // Create an array of all the categories that are attached to posts.
        $all_the_cool_cats = get_categories( array(
            'fields'     => 'ids',
            'hide_empty' => 1,

            // We only need to know if there is more than one category.
            'number'     => 2,
        ) );

        // Count the number of categories that are attached to the posts.
        $all_the_cool_cats = count( $all_the_cool_cats );

        set_transient( 'tuta_categories', $all_the_cool_cats );
    }

    if ( $all_the_cool_cats > 1 ) {
        // This blog has more than 1 category so tuta_categorized_blog should return true.
        return true;
    } else {
        // This blog has only 1 category so tuta_categorized_blog should return false.
        return false;
    }
}

/**
 * Thêm chữ Read More vào excerpt
 */
function tuta_readmore() {
	return '<p><a class="more-link" href="' . get_permalink(get_the_ID()) . '"> View more details' .
        the_title( '<span class="screen-reader-text">', '</span>', false) . '</a></p>';
}
add_filter('excerpt_more', 'tuta_readmore');

/**
 * Hàm hiển thị nội dung post type.
 * Hàm này sẽ hiển thị rút gọn của post ngoài trang chủ (the_excerpt),
 * nhưng nó sẽ hiển thị toàn bộ nội dung ở trang single (the_content).
 * @tuta_entry_content()
 */
if(!function_exists('tuta_entry_content')) {
	function tuta_entry_content() {
		if(!is_single() && !is_page()) :
			the_excerpt();
		else :
			the_content();
		endif;
	}
}

if(!function_exists('tuta_link_pages')) {
	function tuta_link_pages() {
		//if(is_single()) :
			// Hiển thị phân trang trong post type
			$link_pages = array(
				'before' => __('<div class="page-links-wrap"><span>Pages: </span><div class="page-links">', 'tuta'),
				'after' => '</div></div>',
				'link_before' => '<span>',
				'link_after' => '</span>',
				'nextpagelink' => __('Next Page', 'tuta'),
				'previouspagelink' => __('Previous Page', 'tuta'),
                'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tuta' ) . ' </span>%',
                'separator'   => '<span class="screen-reader-text">, </span>',
			);
			wp_link_pages($link_pages);
		//endif;
	}
}

/**
 * Hàm hiển thị tag của post
 * @tuta_entry_tag()
 */
if(!function_exists('tuta_entry_tag')) {
	function tuta_entry_tag() { ?>
        <div class="tag-box pull-left"> <?php
    		if(has_tag()) :
    			//printf('%1$s', get_the_tag_list()); // '', ', '
                echo get_the_tag_list();
    		else :
    			echo __('No Tag', 'tuta');
    		endif; ?>
        </div> <?php
	}
}

/**
 * Hàm hiển thị các bài trước, tiếp theo
 * @tuta_entry_next_prev()
 */
if(!function_exists('tuta_entry_next_prev')) {
	function tuta_entry_next_prev() {
		?>
		<div class="box-wrap">
		    <div class="row">

		        <div class="col-sm-6 col-md-6">
		        	<?php $next_post_term = get_next_post();
		        	if(!empty($next_post_term)) : ?>
			            <div class="other-article">
			                <a class="h3" href="<?php echo get_permalink($next_post_term->ID); ?>" title="<?php echo $next_post_term->post_title; ?>">
			                	<?php echo __('&laquo; Previous Article', 'tuta') ?>
		                	</a>
			                <h4>
			                	<a href="<?php echo get_permalink($next_post_term->ID); ?>" title="<?php echo $next_post_term->post_title; ?>">
			                		<?php echo $next_post_term->post_title; ?>
			                	</a>
		                	</h4>
			            </div> <?php
		            endif; ?>
		        </div>

		        <div class="col-sm-6 col-md-6">
	        		<?php $prev_post_term = get_previous_post();
	        		if(!empty($prev_post_term)) : ?>
			            <div class="other-article text-right">
			                <a class="h3" href="<?php echo get_permalink($prev_post_term->ID); ?>" title="<?php echo $prev_post_term->post_title; ?>">
			                	<?php echo __('Next Article &raquo;', 'tuta')?>
		                	</a>
			                <h4>
			                	<a href="<?php echo get_permalink($prev_post_term->ID); ?>" title="<?php echo $prev_post_term->post_title; ?>">
			                		<?php echo $prev_post_term->post_title; ?>
		                		</a>
			                </h4>
			            </div> <?php
		            endif; ?>
		        </div>

		    </div>
		</div>
		<?php
	}
}

/**
 * Breadcrumbs
 */
if(!function_exists('tua_breadcrumbs')) {
    function tuta_breadcrumbs() {
        $name = __('Home', 'tuta'); // text for home link

        if(is_category() || is_single()) {
            echo '<ol class="breadcrumb">';
            global $post;
            $home = get_bloginfo('url');
            echo '<li><a href="' . $home . '">' . $name . '</a></li>';
            global $wp_query;
            $cat_obj = $wp_query->get_queried_object();
            //var_dump($cat_obj->term_id . 'tuta');
            $this_cat = $cat_obj->term_id;
            if(!empty($this_cat)) {
                $this_cat = get_category($this_cat);
                $parent_cat = get_category($this_cat->parent);

                if($this_cat->parent != 0) {
                    $parent_cat_str = trim(get_category_parents($parent_cat, TRUE, ','));
                    $parent_cat_arr = explode(",", $parent_cat_str);
                    foreach ($parent_cat_arr as $catparent ) {
                        if($catparent != '')
                            echo '<li class="1">' . $catparent . '</li>';
                    }
                }
                echo '<li>';
                single_cat_title();
                echo '</li>';
            } else {
                echo '<li><a href="' . get_category_link(get_the_category()[0]->term_id) . '">' . get_the_category()[0]->name . '</a></li>';
            }
        }
        echo '</ol>';
    }
}

/**
 * Sửa lại search mặc định
 */

if(!function_exists('tuta_form_search_top')) {
    function tuta_form_search_top($form) {
        $form = '<form class="searchform" role="search" method="get" action="' . home_url('/') . '">
            <div class="input-group">
                <label class="screen-reader-text">' . __('Search for: ', 'tuta') . '</label>
                <input type="search" class="form-control" name="s" placeholder="' . __('Search', 'tuta') . '" value="' . get_search_query() . '">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>';

        return $form;
    }
    add_filter('get_search_form', 'tuta_form_search_top');
}

/**
 * Custom comment
 */

function tuta_comments_list($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    } ?>
    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>"> <?php

    if ( 'div' != $args['style'] ) : ?> <div id="div-comment-<?php comment_ID() ?>" class="comment-body"> <?php endif; ?>

    <div class="thumbnail">
    <?php
        if ( $args['avatar_size'] != 0) :
            echo get_avatar( $comment, $args['avatar_size'] );
        endif;
     ?>
    </div>

    <div class="comment-body">
        <div class="comment-header clearfix">
            <p class="tuta-author"><?php comment_author_link(); ?></p>
            <div class="info-1 clearfix">
                <a href="<?php htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"></a>
                <time <?php comment_time('c'); ?> class="time"> <?php
                    printf( __( '%1$s at %2$s' ), get_comment_date(), get_comment_time() ); ?>
                </time>

                <div class="pull-right edit-box"> <?php
                    edit_comment_link( __('Edit', 'tuta') );
                    comment_reply_link( array_merge(
                        $args, array(
                            'reply_text' => __('Reply', 'tuta'),
                            'add_below'  => $add_below,
                            //'after'    = > ' <span>&amp;amp;darr;</span>',
                            'depth'      => $depth,
                            'max_depth'  => $args['max_depth']
                        )
                    ) ); ?>
                </div>

            </div>
        </div>
        <p> <?php
            if ( $comment->comment_approved == '0' ) : ?>
                <span class="comment-awaitting-moderation error">
                    <?php echo __( 'Your comment is awaitting moderation.', 'tuta' ); ?>
                </span> <?php
            endif; ?>
        </p>
        <?php comment_text(); ?>

    </div><!-- comment-body -->

    <?php if ( 'div' != $args['style'] ) : ?> </div> <?php endif;
}

function custom_comments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' : ?>
            <li <?php comment_class(); ?> id="comment<?php comment_ID(); ?>">
            <div class="back-link"><?php comment_author_link(); ?></div>
        <?php break;
        default : ?>
            <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
                <article class="comment" id="div-<?php comment_ID(); ?>">
                    <div class="thumbnail">
                        <?php echo get_avatar( $comment, 50 ); ?>
                    </div>

                    <div class="comment-body">
                        <div class="comment-header clearfix">
                            <p class="tuta-author"><?php comment_author(); ?></p>
                            <div class="info-1 clearfix">
                                <time <?php comment_time('c'); ?> class="time">
                                    <?php echo get_comment_date() . __(' at ', 'tuta') . get_comment_time(); ?>
                                </time>

                                <div class="pull-right edit-box"> <?php
                                    edit_comment_link( __('Edit', 'tuta') );
                                    comment_reply_link( array_merge(
                                        $args, array(
                                            'reply_text' => __('Reply', 'tuta'),
                                            //'after'    => ' <span>&amp;amp;darr;</span>',
                                            'depth'      => $depth,
                                            'max_depth'  => $args['max_depth']
                                        )
                                    ) ); ?>
                                </div>

                            </div>
                        </div>
                        <p><?php comment_text(); ?></p>

                    </div><!-- comment-body -->

                </article><!-- #comment-<?php comment_ID(); ?> -->
        <?php // End the default styling of comment
        break;
    endswitch;
}




