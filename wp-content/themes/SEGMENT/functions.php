<?php
	add_filter('manage_posts_columns', 'posts_columns', 5);
	add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);

	function posts_columns($defaults){
		$defaults['riv_post_thumbs'] = __('Миниатюра');
		return $defaults;
	}

	function posts_custom_columns($column_name, $id){
		if($column_name === 'riv_post_thumbs'){
			the_post_thumbnail( array(50, 50) );
		}
	}

	wp_deregister_script( 'jquery' );

	function wpschool_remove_jquery_migrate( $scripts ) {
		if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
			$script = $scripts->registered['jquery'];
			if ( $script->deps ) {
				$script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
			}
		}
	}
	add_action( 'wp_default_scripts', 'wpschool_remove_jquery_migrate' );

	function load_styles_and_scripts() {
		wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
		wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/App.js', [], '1.0', true);

//    if (is_front_page() &&
//	      is_page('single-portfolio') &&
//	      is_page('Портфолио')
//    ) {
//	    wp_enqueue_script('quiz', get_template_directory_uri() . '/js/QuizForm.js', [], '1.0', true);
//	    wp_localize_script('quiz', 'segmentData', array(
////		    'rootUrl' => get_site_url(),
//		    'ajaxurl' => admin_url( 'admin-ajax.php' )
//	    ));
//    }
	}

	add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');
	if ( !is_admin() ) wp_deregister_script('jquery');

	function remove_block_library_css(){
		wp_dequeue_style( 'wp-block-library' );
	}

	add_action( 'wp_enqueue_scripts', 'remove_block_library_css' );

	function my_deregister_scripts(){
		wp_dequeue_script( 'wp-embed' );
	}
	add_action( 'wp_footer', 'my_deregister_scripts' );

	function segment_features() {

		if (function_exists('add_theme_support'))
		{
			add_theme_support('post-thumbnails');
//		add_theme_support('menus');
		}

		add_filter('intermediate_image_sizes', 'dco_remove_default_image_sizes');
	}

//add_image_size('large', 700, '', true); // Large Thumbnail
//add_image_size('medium', 250, '', true); // Medium Thumbnail
//add_image_size('small', 120, '', true); // Small Thumbnail
//add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

	function dco_remove_default_image_sizes( $sizes): array
	{
		return array_diff( $sizes, array(
			'medium',
			'medium_large',
//		'large',
			'1536x1536',
//		'2048x2048'
		) );
	}

	add_filter('intermediate_image_sizes', 'dco_remove_default_image_sizes');

	function segment_post_types() {
		register_post_type('worker', [
			'supports' => ['title', 'editor', 'thumbnail'],
//	  'rewrite' => ['slug' => 'team'],
//    'has_archive' => true,
			'public' => true,
			'labels' => [
				'name' => 'Сотрудники',
				'add_new' => 'Добавить нового',
				'edit_item' => 'Редактировать',
				'all_items' => 'Все сотрудники',
				'singular_name' => 'Сотрудник'
			],
			'menu_icon' => 'dashicons-businessperson'
		]);

		register_post_type('review', [
			'supports' => ['title', 'editor', 'thumbnail'],
//	  'rewrite' => ['slug' => 'team'],
//    'has_archive' => true,
			'public' => true,
			'labels' => [
				'name' => 'Отзывы',
				'add_new' => 'Добавить новый',
				'edit_item' => 'Редактировать',
				'all_items' => 'Все отзывы',
				'singular_name' => 'Отзыв'
			],
			'menu_icon' => 'dashicons-megaphone'
		]);

		register_post_type('news', [
			'supports' => ['title', 'editor', 'thumbnail'],
//	  'rewrite' => ['slug' => 'team'],
//    'has_archive' => true,
			'public' => true,
			'labels' => [
				'name' => 'Новости',
				'add_new' => 'Добавить новость',
				'edit_item' => 'Редактировать',
				'all_items' => 'Все новости',
				'singular_name' => 'Новость'
			],
			'menu_icon' => 'dashicons-media-document'
		]);

		register_post_type('portfolio', [
			'supports' => ['title', 'editor', 'thumbnail'],
//	  'rewrite' => ['slug' => 'team'],
//    'has_archive' => true,
			'public' => true,
			'taxonomies' => ['category'],
			'hierarchical' => true,
			'exclude_from_search' => false,
			'labels' => [
				'name' => 'Портфолио',
				'add_new' => 'Добавить портфолио',
				'edit_item' => 'Редактировать',
				'all_items' => 'Все экземпляры',
				'singular_name' => 'Портфолио'
			],
			'menu_icon' => 'dashicons-format-gallery'
		]);

		register_post_type('smi', [
			'supports' => ['title', 'editor', 'thumbnail'],
//	  'rewrite' => ['slug' => 'team'],
//    'has_archive' => true,
			'public' => true,
			'hierarchical' => true,
			'exclude_from_search' => false,
			'labels' => [
				'name' => 'СМИ О НАС',
				'add_new' => 'Добавить информацию',
				'edit_item' => 'Редактировать',
				'all_items' => 'Все экземпляры',
				'singular_name' => 'СМИ_О_НАС'
			],
			'menu_icon' => 'dashicons-media-spreadsheet'
		]);

		register_post_type('service', [
			'supports' => ['title', 'editor', 'thumbnail'],
//	  'rewrite' => ['slug' => 'team'],
//    'has_archive' => true,
			'public' => true,
			'taxonomies' => ['category'],
			'hierarchical' => true,
			'exclude_from_search' => false,
			'labels' => [
				'name' => 'Услуги',
				'add_new' => 'Добавить услугу',
				'edit_item' => 'Редактировать',
				'all_items' => 'Все экземпляры',
				'singular_name' => 'Услуги'
			],
			'menu_icon' => 'dashicons-screenoptions'
		]);

		register_post_type('achievments', [
			'supports' => ['title', 'editor', 'thumbnail'],
			'rewrite' => ['slug' => 'dostizheniya'],
//    'has_archive' => true,
			'public' => true,
//		'taxonomies' => ['category'],
			'hierarchical' => true,
			'exclude_from_search' => false,
			'labels' => [
				'name' => 'Достижения',
				'add_new' => 'Добавить достижения',
				'edit_item' => 'Редактировать',
				'all_items' => 'Все экземпляры',
				'singular_name' => 'Достижения'
			],
			'menu_icon' => 'dashicons-buddicons-groups'
		]);
	}

	add_action('init', 'segment_post_types');
	add_action('after_setup_theme', 'segment_features');

	if( function_exists('acf_add_options_page') ) {

		acf_add_options_page(array(
			'page_title' => 'Контакты',
			'menu_title' => 'Контакты',
			'menu_slug' => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect' => false
		));
	}