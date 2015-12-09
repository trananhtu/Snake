<?php
    if(!class_exists('TuTa_Theme_Options')) {
        // TuTa_Theme_Options sẽ chứa toàn bộ code tạo options trong theme từ
        // Redux Framework
        class TuTa_Theme_Options {
            // Tái tạo các biến có trong Redux Framework
            public $srgs = array();
            public $sections = array();
            public $theme;
            public $ReduxFramework;

            // Load Redux Framework
            public function __construct() {
                if(!class_exists('ReduxFramework')) {
                    return;
                }

                // This is needed. Bah WordPress bugs.  <img draggable="false" class="emoji" alt="😉" src="http://s.w.org/images/core/emoji/72x72/1f609.png">
                if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
                    $this->initSettings();
                } else {
                    add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
                }
            }

            public function initSettings() {
                // Set the default arguments
                $this->setArguments();

                // Set a few help tabs so you can see how it's done
                $this->setHelpTabs();

                // Create the sections and fields
                $this->setSections();

                if(!isset($this->args['opt_name'])) { // No errors please
                    return;
                }

                $this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
            }

            // Thiết lập cho phương thức setArguments
            // Phương thức này chứa các thiết lập cơ bản cho trang như tên menu...
            public function setArguments() {
                // Lưu các  đối tượng trả về bởi hàm wp_get_theme()
                $theme = wp_get_theme();

                $this->args = array(
                    // Các thiết lập cho trang Options
                    'opt_name' => 'tuta_options', // Tên biến trả về dữ liệu của từng options, vd tt_options['field_1'].
                    'display_name' => $theme->get('Name'), // Thiết lập tên theme hiển thị trong Theme Options.
                    'menu_type' => 'menu',
                    'allow_sub_menu' => true,
                    'menu_title' => __('TuTa Theme Options', 'tuta'),
                    'page_title' => __('TuTa Theme Options', 'tuta'),
                    'dev_mode' => false,
                    'customizer' => true,
                    'menu_icon' => '', // Đường dẫn icon của menu options.
                    // Chức năng Hint tạo dấu hỏi chấm ở mỗi option để hướng dẫn người dùng.
                    'hints' => array(
                        'icon' => 'icon-question-sign',
                        'icon_position' => 'right',
                        'icon_color' => 'lightgray',
                        'icon_size' => 'normal',
                        'tipstyle' => array(
                            'color' => 'light',
                            'shadow' => true,
                            'rounded' => false,
                            'style' => ''
                        ),
                        'tip_position' => array(
                            'my' => 'top left',
                            'at' => 'bottom right'
                        ),
                        'tip_effect' => array(
                            'show' => array(
                                'effect' => 'slide',
                                'duration' => '500',
                                'event' => 'mouseover'
                            ),
                            'hide' => array(
                                'effect' => 'slide',
                                'duration' => '500',
                                'event' => 'click mouseleave'
                            )
                        ),
                    ),
                    'google_api_key' => 'AIzaSyAs0iVWrG4E_1bG244-z4HRKJSkg7JVrVQ'
                ); // end Hints

            } // end setArguments

            // Thiết lập khu vực Help để hướng dẫn người dùng
            public function setHelpTabs() {
                // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
                $this->args['help_tabs'][] = array(
                    'id' => 'redux-help-tab-1',
                    'title' => __('Theme Information 1', 'tuta'),
                    'content' => __('<p>This is the tab content 1, HTML is allowed.</p>', 'tuta')
                );

                $this->args['help_tabs'][] = array(
                    'id' => 'redux-help-tab-2',
                    'title' => __('Theme Infomation 2', 'tuta'),
                    'content' => __('<p>This is the tab content 2, HTML is allowed.</p>', 'tuta')
                );

                // Set the help sidebar
                $this->args['help_sidebar'] = __('<p>This is the sidebar content, HTML is allowed.</p>', 'tuta');
            } // end setHelpTabs

            /**
             * Thiết lập từng phần trong khu vực Theme Options
             * mỗi section được xem như là một phân vùng các tùy chọn.
             * Trong mỗi section có thể chứa nhiều field.
             */
            public function setSections() {
                // Home Section
                $this->sections[] = array(
                    'title' => __('TuTa Header', 'tuta'),
                    'desc' => __('All of settings for header on this theme', 'tuta'),
                    'icon' => '', //el-icon-home
                    'fields' => array(
                        // Mỗi array là một field
                        array(
                            'id' => 'logo-on',
                            'type' => 'switch',
                            'title' => __('Disable Image Logo', 'tuta'),
                            'compiler' => 'bool', // Trả về giá trị boolean
                            'desc' => __('Do you want to use image as a logo?', 'tuta'),
                            'on' => __('Enable', 'tuta'),
                            'off' => __('Disable', 'tuta')
                        ),
                        array(
                            'id' => 'logo-iamge',
                            'type' => 'media',
                            'title' => __('Logo Image', 'tuta'),
                            'desc' => __('Image that you want to use as logo', 'tuta')
                        ),
                    ),
                ); // end section

                // Typography Section
                $this->sections[] = array(
                    'title' => __('Typography', 'tuta'),
                    'desc' => __('All of settings for themes typography', 'tuta'),
                    'icon' => 'el-icon-font',
                    'fields' => array(
                        // Main Typography
                        array(
                            'id' => 'typo-main',
                            'type' => 'typography',
                            'title' => 'Main Typography',
                            'output' => array(
                                'body',
                                //'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
                                //'.h1', '.h2', '.h3', '.h4', '.h5', '.h6',
                                //'.tuta-button-default'
                            ),
                            'text-transform' => true,
                            'default' => array(
                                'font-size' => '13px',
                                'line-height' => '20px',
                                'font-family' => 'Roboto, Arial, sans-serif',
                                'font-color' => '#111111'
                            )
                        )
                    )
                ); // end section
            }




        }

        // kích hoạt class TuTa_Theme_Options vafp Redux Framework
        global $reduxConfig;
        $reduxConfig = new TuTa_Theme_Options();

    }