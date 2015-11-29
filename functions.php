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
		add_theme_support('post-formats', 
			array(
				'video',
				'image',
				'audio',
				'gallery'
			)
		); 

		/**
		 * Thêm chức năng custom background
		 */
		$default_background = array(
			'default-color' => '#e8e8e8',
		);
		add_theme_support('custom-background', $default_background);

		/**
		 * Tạo menu cho theme
		 */
		register_nav_menu('primary-menu', __('Primary Menu', 'tuta'));

		/**
		 * Tạo sidebar cho theme
		 */
		$sidebar = array(
			'name'          => __( 'Main Sidebar', 'tuta' ),
			'id'            => 'main-sidebar',
			'description'   => 'Main sidebar for TUTA theme',
			'class'         => 'main-sidebar',
			'before_title'  => '<h3 class="widgettitle">',
			'after_title'   => '</h3>'
		);
	
		register_sidebar( $sidebar );
	}

	add_action('init', 'tuta_theme_setup');
}


/**
 * Thiết lập hàm hiển thị logo
 * tuta_logo()
 */
if (!function_exists('tuta_logo')) {
	function tuta_logo() {
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
		                   <img src="%4$s/splaceholders/logo.png" width="259" height="58" alt="%3$s">
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

/**
 * Thiết lập hàm hiển thị menu
 * tuta_menu($slug)
 */
if (!function_exists('tuta_menu')) {
	function tuta_menu($slug) {
		$menu = array(
			'theme_location' => $slug,
			'container' => 'nav',
			'container_class' => $slug
		);
		wp_nav_menu($menu);
	}
}

/**
 * Chèn CSS và Javascript vào theme
 * Sử dụng hook wp_enqueue_scripts() để hiển thị nó ra ngoài front-end
 */
function tuta_style() {
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

  	wp_register_script('gmaps-js', get_template_directory_uri() . 'js/gmaps.js', array('jquery'));
  	wp_enqueue_script('gmaps-js');

  	wp_register_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery') );
  	wp_enqueue_script( 'custom-js' );
  	
	
}
add_action('wp_enqueue_scripts', 'tuta_style');

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
		<nav class="tuta-pane">
            <div class="tuta-pagination">
                <?php echo paginate_links(array(
                	'end_size' => 2,
                	'prev_text' => __('<span class="tuta-button-default button-3d button-sm btn-white-hover">Prev</span>', 'tuta'),
                	'next_text' => __('<span class="tuta-button-default button-3d button-sm btn-white-hover">Next</span>', 'tuta')
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
			if(!is_single()) : ?>
				<figure class="thumbnail">
					<a href="<?php echo get_permalink(get_the_ID()); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail($size); ?>
					</a>
				</figure><?php
			else : ?>
				<figure class="thumbnail">
					<?php the_post_thumbnail($size); ?>
				</figure><?php
			endif;
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
	function tuta_entry_header() {
		if(is_single()) : ?>
			<h1 class="content-title">
				<?php the_title(); ?>
			</h1>
		<?php else : ?>
			<h3 class="content-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<?php the_title(); ?>
				</a>
			</h3> <?php 
		endif;
	}
}

/**
 * Hàm hiển thị thông tin của post (Post Meta)
 * @tuta_antry_meta()
 */
if(!function_exists('tuta_entry_meta')) {
	function tuta_entry_meta() {
		//if(!is_single()) :
			echo '<div class="info-1">';
			// hiển thị tên tác giả, tên category và ngày tháng đăng bài
			printf(__('<span class="time">%1$s, By: <a href="%4$s">%2$s</a>, In: %3$s', 'tuta'),
				get_the_date(),
				get_the_author(),
				get_the_category_list(', '),
				get_author_posts_url(get_the_author_meta("ID"))
			);

			// Hiển thị số đếm lượt bình luận
			if(comments_open()) :
				echo ', Comment: ';
					comments_popup_link(
						__('Leave a comment', 'tuta'),
						__('One comment', 'tuta'),
						__('% comments', 'tuta'),
						__('Read all comments', 'tuta')
					);					
			endif;
			echo '</span>';
			echo '</div>';
		//endif;
	}
}

/**
 * Thêm chữ Read More vào excerpt
 */
function tuta_readmore() {
	return '<p><a class="more-link" href="' . get_permalink(get_the_ID()) . '">' . __('View more details', 'tuta') . '</a></p>';
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
		if(is_single()) :
			// Hiển thị phân trang trong post type
			$link_pages = array(
				'before' => __('<span>Pages: </span>
								<div class="page-links">', 'tuta'),
				'after' => '</div>',
				'link_before' => '<span>',
				'link_after' => '</span>',
				'nextpagelink' => __('Next Page', 'tuta'),
				'previouspagelink' => __('Previous Page', 'tuta')
			);
			wp_link_pages($link_pages);
		endif;
	}
}

/**
 * Hàm hiển thị tag của post
 * @tuta_entry_tag()
 */
if(!function_exists('tuta_entry_tag')) {
	function tuta_entry_tag() {
		if(has_tag()) :
			//echo '<div class="entry-tag">';
			printf(__('%1$s', 'tuta'), get_the_tag_list('', ', '));
			//echo '</div>';
		else :
			echo 'No Tag';
		endif;
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
			                <a class="h3" href="#"><?php echo __('&laquo; Previous Article', 'tuta') ?></a>
			                <h4>
			                	<a href="<?php echo get_permalink($next_post_term->ID); ?>"><?php echo $next_post_term->post_title; ?></a>
		                	</h4>
			            </div> <?php
		            endif; ?>
		        </div>

		        <div class="col-sm-6 col-md-6">
	        		<?php $prev_post_term = get_previous_post();
	        		if(!empty($prev_post_term)) : ?>
			            <div class="other-article text-right">
			                <a class="h3" href="#"><?php echo __('Next Article &raquo;', 'tuta')?></a>
			                <h4>
			                	<a href="<?php echo get_permalink($prev_post_term->ID); ?>"><?php echo $prev_post_term->post_title; ?></a>
			                </h4>
			            </div> <?php
		            endif; ?>
		        </div>

		    </div>
		</div>
		<?php
	}
}



