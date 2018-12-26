<?php
if ( !defined( 'ABSPATH' ) ) {
exit;
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// bodyにslug class付与
add_filter( 'body_class', 'add_page_slug_class_name' );
function add_page_slug_class_name( $classes ) {
  if ( is_page() ) {
    $page = get_post( get_the_ID() );
    $classes[] = $page->post_name;

    $parent_id = $page->post_parent;
    if ( $parent_id ) {
      $classes[] = get_post($parent_id)->post_name . '-child';
    }
  }
  return $classes;
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

// theme配下のimage path取得
function imagepassshort($arg) {
$content = str_replace('"images/', '"' . get_bloginfo('stylesheet_directory') . '/images/', $arg);
return $content;
}
add_action('the_content', 'imagepassshort');

// 投稿画面からサイト内ページのpath取得
add_shortcode('url', 'shortcode_url');
function shortcode_url() {
return get_bloginfo('url');
}

// 勝手にタグ追加機能を無効に
remove_filter( 'the_content', 'wpautop' );
// 固定ページ以外はタグ追加機能を有効にする
if ( !function_exists( 're_wpautop' ) ) {
    add_action('wp', 're_wpautop');
    function re_wpautop() {
        if(!is_page()) add_filter('the_content', 'wpautop');
    }
}

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
