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
		                   <img src="placeholders/logo.png" width="259" height="58" alt="%3$s">
		                   <span class="sr-only">%3$s</span>
		               </a>
		            </span>
		        </h1>',
		        get_bloginfo('url'),
		        get_bloginfo('description'),
		        get_bloginfo('sitename')
			);
		} else {
			printf(
				'<div class="logo-image">
		            <span>
		               <a href="%1$s" title="%2$s">
		                   <img src="placeholders/logo.png" width="259" height="58" alt="%3$s">
		                   <span class="sr-only">%3$s</span>
		               </a>
		            </span>
		        </div>',
		        get_bloginfo('url'),
		        get_bloginfo('description'),
		        get_bloginfo('sitename')
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
	wp_register_style('main-style', get_template_directory_uri() . '/style.css', 'all');
	wp_enqueue_style('main-style');
}
add_action('wp_enqueue_scripts', 'tuta_style');








