<?php
if ( !defined( 'ABSPATH' ) ) {
exit;
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// base.js 読み込み禁止
function dequeue_basejs () {
  wp_dequeue_script('base');
}
add_action('wp_enqueue_scripts', 'dequeue_basejs', 100); 

// メニューカスタム版
register_nav_menus(
 array(
  'primary-menu' => __( 'ヘッダー用メニュー', 'default' ),
  'secondary-menu' => __( 'フッター用メニュー', 'default' ),
  'smartphone-menu' => __( 'スマートフォン用メニュー', 'default' ),
  'utility_top'=> __( 'ユーティリティメニュー（上）', 'default' ),
  'utility_bottom'=> __( 'ユーティリティメニュー（下）', 'default' )
 )
);
