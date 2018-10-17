<?php
if ( !defined( 'ABSPATH' ) ) {
exit;
}
//親スタイルシート読み込み
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// メニューカスタム版
register_nav_menus(
 array(
  'primary-menu' => __( 'ヘッダー用メニュー', 'default' ),
  'secondary-menu' => __( 'フッター用メニュー', 'default' ),
  'sidepage-menu' => __( 'サイド用メニュー', 'default' ),
  'smartphone-menu' => __( 'スマートフォン用メニュー', 'default' ),
  'utility_top'=> __( 'ユーティリティメニュー（上）', 'default' ),
  'utility_bottom'=> __( 'ユーティリティメニュー（下）', 'default' )
 )
);

// 404 error 回避
add_action( 'after_setup_theme', 'my_after_setup_theme' );
function my_after_setup_theme() {
    remove_action( 'wp_enqueue_scripts', 'load_stylesheet' );
}
