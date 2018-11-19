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

// custom js 読み込み
wp_enqueue_script(
    'all',
    get_stylesheet_directory_uri() . '/js/all.js',
    array(),
    null,
    true
);
wp_enqueue_script(
    'sp_navigation',
    get_stylesheet_directory_uri() . '/js/sp.js',
    array(),
    null,
    true
);
wp_enqueue_script(
    'main_animation',
    get_stylesheet_directory_uri() . '/js/main_animation.js',
    array(),
    null,
    true
);

// メニューカスタム版
register_nav_menus(
 array(
  'primary-menu' => __( 'ヘッダー用メニュー', 'default' ),
  'secondary-menu' => __( 'フッター用メニュー', 'default' ),
  'smartphone-menu' => __( 'スマートフォン用メニュー', 'default' ),
  'utility_header_top'=> __( 'ユーティリティメニュー（ヘッダー上）', 'default' ),
  'utility_header_bottom'=> __( 'ユーティリティメニュー（ヘッダー下）', 'default' ),
  'utility_footer_top'=> __( 'ユーティリティメニュー（フッター上）', 'default' ),
  'utility_footer_bottom'=> __( 'ユーティリティメニュー（フッター下）', 'default' ),
  'smartphone-submenu01' => __( 'スマートフォン用サブメニュー01', 'default' ),
  'smartphone-submenu02' => __( 'スマートフォン用サブメニュー02', 'default' ),
  'smartphone-submenu03' => __( 'スマートフォン用サブメニュー03', 'default' ),
  'smartphone-submenu04' => __( 'スマートフォン用サブメニュー04', 'default' )
 )
);
