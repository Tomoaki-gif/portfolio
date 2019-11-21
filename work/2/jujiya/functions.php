<?php
function my_setup() {
	add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
	add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
	add_theme_support('title-tag'); // タイトルタグ自動生成
	add_theme_support(
		'html5',
		array( //HTML5でマークアップ
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption' ,
		)
	);
}

add_action('after_setup_theme', 'my_setup');

/**
* CSSとJavaScriptの読み込み
*/
function my_script_init() {
	wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js', array(), '5.0.8', 'all');
	wp_enqueue_style('my_style', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
	wp_enqueue_style('my_style', get_template_directory_uri() . '/css/hiraku.css', array(), '1.0.0', 'all');
	wp_enqueue_script('my_script', get_template_directory_uri() . '/js/hiraku.js', array( 'jquery' ), '1.0.0', true);
	wp_enqueue_script('my_script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
* メニューの登録
*/
function my_menu_init() {
	register_nav_menus(
		array(
			'global' => 'ヘッダーメニュー',
			'drawer' => 'ドロワーメニュー',
		)
	);
}
add_action('init', 'my_menu_init');