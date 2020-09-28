<?php

//------------------додавання css + js ----------------------
  function ewa_scripts() {
    //---------------css---------------------
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/app.min.css' );
    //---------------js---------------------
    wp_enqueue_script( 'jq-sctipt', get_template_directory_uri() . '/assets/libs/jquery.min.js', array(), '', true );
    wp_enqueue_script( 'main-sctipt', get_template_directory_uri() . '/assets/js/app.min.js', array(), '', true );
    wp_enqueue_script( 'validete-sctipt', get_template_directory_uri() . '/assets/libs/jquery.mask.min.js', array(), '', true );
    wp_enqueue_script( 'mask-sctipt', get_template_directory_uri() . '/assets/libs/jquery.validate.js', array(), '', true );
		
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
  }
  add_action( 'wp_enqueue_scripts', 'ewa_scripts' );

//------------------підключення додаткових функцій для постов ----------------------
  function myfirsttheme_setup() {
      add_theme_support( 'post-thumbnails' );
      add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
  }
  add_action( 'after_setup_theme', 'myfirsttheme_setup' );

//------------------чистка від лишнього ----------------------
    remove_action('wp_head','feed_links_extra', 3); // убирает ссылки на rss категорий
    remove_action('wp_head','feed_links', 2); // минус ссылки на основной rss и комментарии
    remove_action('wp_head','rsd_link');  // сервис Really Simple Discovery
    remove_action('wp_head','wlwmanifest_link'); // Windows Live Writer
    remove_action('wp_head','wp_generator');  // скрыть версию wordpress
    add_action( 'init', 'true_jquery_register' );
		function true_jquery_register() {
			if ( !is_admin() ) {
				wp_deregister_script( 'jquery' );
				wp_register_script( 'jquery', ( 'https://code.jquery.com/jquery-3.5.1.min.js' ), false, null, true );
				wp_enqueue_script( 'jquery' );
			}
		}

//------------------delet Post Type ----------------------
  function remove_menus(){
    // remove_menu_page( 'index.php' );                  //Консоль
    remove_menu_page( 'edit.php' );                   //Записи
    // remove_menu_page( 'upload.php' );                 //Медиафайлы
    // remove_menu_page( 'edit.php?post_type=page' );    //Страницы
    remove_menu_page( 'edit-comments.php' );          //Комментарии
    // remove_menu_page( 'themes.php' );                 //Внешний вид
    remove_menu_page( 'users.php' );                  //Пользователи
    // remove_menu_page( 'tools.php' );                  //Инструменты
    // remove_menu_page( 'options-general.php' );        //Настройки
  }
  add_action( 'admin_menu', 'remove_menus' );

//------------------информация---------------------
    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title'    => 'Настройка темы',
            'menu_title'    => 'Настройка темы',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'  => false
        ));

		}
		