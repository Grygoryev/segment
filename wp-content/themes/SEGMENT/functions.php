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

function load_styles_and_scripts() {
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/App.js', [], '1.0', true);

//    if (is_front_page() &&
//	      is_page('single-portfolio') &&
//	      is_page('Портфолио')
//    ) {
	    wp_enqueue_script('quiz', get_template_directory_uri() . '/js/QuizForm.js', [], '1.0', true);
	    wp_localize_script('quiz', 'segmentData', array(
		    'rootUrl' => get_site_url()
	    ));
//    }
}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function remove_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
}

add_action( 'wp_enqueue_scripts', 'remove_block_library_css' );

function my_deregister_scripts(){
  wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

function segment_features() {
	add_theme_support('post-thumbnails');
}

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
}

add_action('init', 'segment_post_types');
add_action('after_setup_theme', 'segment_features');