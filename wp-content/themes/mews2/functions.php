<?php


// Регистрируем меню в шапке сайта
add_action( 'after_setup_theme', function() {
	register_nav_menu( 'top', 'Меню в шапке' );
});

// Добавляем фильтр, чтобы изменить класс элемента li в меню
add_filter('nav_menu_css_class', 'filter_menu_css_classes', 10, 4);

function filter_menu_css_classes($classes, $item, $args, $depth) {
	if ($args->theme_location === 'top') {
		$classes = ['header__menu-elem'];
	}
	return $classes;
}


// Подключение стилей и скриптов
function mews_scripts() {
  wp_enqueue_style( 'main-style', get_stylesheet_uri() );
  
  wp_enqueue_script( 'smooth-scroll-scripts', get_template_directory_uri() . '/scripts/smooth-scroll.polyfills.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/scripts/script.js', array(), _S_VERSION, true );
}


// Создания инфоблока "Новости"
add_action( 'wp_enqueue_scripts', 'mews_scripts' );
 
function register_news(){
	register_post_type('news', array(
		'labels'             => array(
			'name'               => 'Новости',
			'singular_name'      => 'Новость',
			'add_new'            => 'Добавить новость',
			'add_new_item'       => 'Добавить новый элемент новости',
			'edit_item'          => 'Редактировать новость',
			'new_item'           => 'Новая новость',
			'view_item'          => 'Посмотреть поновость',
			'search_items'       => 'Найти новость',
			'not_found'          =>  'Новость не найдено',
			'not_found_in_trash' => 'В корзине новостей не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Новости'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array(
                              'title',
                              'editor',
                              // 'author',
                              'thumbnail',
                              'excerpt',
                              // 'comments'
                              )
	) );
}
add_action('init', 'register_news');


// Поддерка превью картинок для постов
add_theme_support( 'post-thumbnails' );


// Добавляем размер превью для новости
if (function_exists('add_image_size')) {
  add_image_size('news-image', 600, 400, true);
}