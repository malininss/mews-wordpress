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

// Регистрируем меню в мобильной версии
add_action( 'after_setup_theme', function() {
	register_nav_menu( 'mobile', 'Мобильная версия меню' );
});

// Регистрируем меню в подвале
add_action( 'after_setup_theme', function() {
	register_nav_menu( 'footer', 'Меню в подвале' );
});



// Подключение стилей и скриптов
function mews_scripts() {
  wp_enqueue_style( 'main-style', get_stylesheet_uri() );
  
  wp_enqueue_script( 'smooth-scroll-scripts', get_template_directory_uri() . '/scripts/smooth-scroll.polyfills.min.js', array(), true );
	wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/scripts/script.js', array(), true );
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


function register_services(){
	register_post_type('services', array(
		'labels'             => array(
			'name'               => 'Услуги',
			'singular_name'      => 'Услуга',
			'add_new'            => 'Добавить услугу',
			'add_new_item'       => 'Добавить новую услугу',
			'edit_item'          => 'Редактировать услугу',
			'new_item'           => 'Новая услуга',
			'view_item'          => 'Посмотреть услугу',
			'search_items'       => 'Найти услугу',
			'not_found'          =>  'Услуга не найдено',
			'not_found_in_trash' => 'В корзине услуг не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Услуги'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
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
add_action('init', 'register_services');

function register_prices(){
	register_post_type('prices', array(
		'labels'             => array(
			'name'               => 'Стоимость услуг',
			'singular_name'      => 'Стоимость услуги',
			'add_new'            => 'Добавить стоимость услуги',
			'add_new_item'       => 'Добавить новую стоимость услуги',
			'edit_item'          => 'Редактировать стоимость услуги',
			'new_item'           => 'Новая стоимость услуга',
			'view_item'          => 'Посмотреть стоимость услуги',
			'search_items'       => 'Найти стоимость услуги',
			'not_found'          =>  'Стоимость услуги не найдено',
			'not_found_in_trash' => 'В корзине стоимости услуг не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Стоимость услуг'

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
                            //   'editor',
                              // 'author',
                            //   'thumbnail',
                            //   'excerpt',
                              // 'comments'
                              )
	) );
}
add_action('init', 'register_prices');

function register_gallery(){
	register_post_type('gallery', array(
		'labels'             => array(
			'name'               => 'Галерея',
			'singular_name'      => 'Фотография',
			'add_new'            => 'Добавить фотографию в галерею',
			'add_new_item'       => 'Добавить новую фотографию в галерею',
			'edit_item'          => 'Редактировать фотографию в галерее',
			'new_item'           => 'Новая фотографию в галерею',
			'view_item'          => 'Посмотреть усфотографию в галерее',
			'search_items'       => 'Найти фотографию в галерее',
			'not_found'          =>  'Фотографии в галерее не найдено',
			'not_found_in_trash' => 'В корзине фотографий в галерее не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Фотографии в галерее'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array(
                              'title',
                            //   'editor',
                              // 'author',
                              'thumbnail',
                            //   'excerpt',
                              // 'comments'
                              )
	) );
}
add_action('init', 'register_gallery');



// Поддерка превью картинок для постов
add_theme_support( 'post-thumbnails' );


// Добавляем размер превью для новости
if (function_exists('add_image_size')) {
  add_image_size('news-image', 600, 400, true);
}

// Добавляем размер превью для услуг
if (function_exists('add_image_size')) {
	add_image_size('services-image', 600, 400, true);
}



// Добавляем блок кастомного поля на страницу редактирования поста.
add_action('add_meta_boxes', 'cd_meta_box_add');
function cd_meta_box_add() {
    add_meta_box('post-datas', __('Post datas', 'd1mon'), 'cd_meta_box_post_datas', 'prices', 'normal', 'high');
}

// Задаём максимальное число параметров массива.
$post_datas_max = 20;

// Формируем форму редактирования в блоке кастомного поля.
function cd_meta_box_post_datas($post) {
    global $post_datas_max;
    $post_datas_i = 0;
    wp_nonce_field('my_meta_box_nonce', 'meta_box_nonce');

    if ($post_datas = get_post_meta($post->ID, 'post_datas', true)) {
        foreach ($post_datas as $data_arr) {
            // Если есть значения, то заносим их в форму.
            if (mb_strlen($data_arr['name']) || mb_strlen($data_arr['value'])) {
                $post_datas_i++;
                echo '<p>Услуга:<input name="data_name_'.$post_datas_i.'" id="data_name_'.$post_datas_i.'" value="'.esc_attr($data_arr['name']).'" /></p>';
                echo '<p>Стоимость:<input name="data_value_'.$post_datas_i.'" id="data_value_'.$post_datas_i.'" value="'.esc_attr($data_arr['value']).'" /></p>';
				echo '<br>';
			}
        }
    }

    // Доформировываем форму пустыми полями.
    while ($post_datas_i <= $post_datas_max) {
        $post_datas_i++;
        echo '<p>Услуга:<input name="data_name_'.$post_datas_i.'" id="data_name_'.$post_datas_i.'" value="" /></p>';
		echo '<p>Стоимость:<input name="data_value_'.$post_datas_i.'" id="data_value_'.$post_datas_i.'" value="" /></p> ';
		echo '<br>';
    }
}

// Сохраняем кастомное поле при сохранении поста.
add_action( 'save_post', 'cd_meta_box_save' );
function cd_meta_box_save( $post_id ) {
    global $post_datas_max;
    $post_datas_i = 0;
    $post_datas_rec_i = 0;

    // Bail if we're doing an auto save
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // if our nonce isn't there, or we can't verify it, bail
    if (!isset($_POST['meta_box_nonce']) || !wp_verify_nonce($_POST['meta_box_nonce'], 'my_meta_box_nonce')) return;

    // if our current user can't edit this post, bail
    if (!current_user_can('edit_post')) return;

    // Массив для фильтрации записываемых данных. В данном примере допустима запись тегов ссылок.
    $allowed = array('a' => array('href' => array()));

    // Собираем наш массив.
    while ($post_datas_i <= $post_datas_max) {
        $post_datas_i++;
        if ((isset($_POST['data_name_'.$post_datas_i]) && mb_strlen($_POST['data_name_'.$post_datas_i]))
        || (isset($_POST['data_value_'.$post_datas_i]) && mb_strlen($_POST['data_value_'.$post_datas_i]))) {
            $post_datas_rec[$post_datas_rec_i]['name'] = isset($_POST['data_name_'.$post_datas_i]) && mb_strlen($_POST['data_name_'.$post_datas_i]) ? wp_kses($_POST['data_name_'.$post_datas_i], $allowed) : '';
            $post_datas_rec[$post_datas_rec_i]['value'] = isset($_POST['data_value_'.$post_datas_i]) && mb_strlen($_POST['data_value_'.$post_datas_i]) ? wp_kses($_POST['data_value_'.$post_datas_i], $allowed) : '';
            $post_datas_rec_i++;
        }
    }

    // Если массив собрался, то записываем.
    if (isset($post_datas_rec)) {
        update_post_meta($post_id, 'post_datas', $post_datas_rec);
    }
}