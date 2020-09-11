<?php

//コンテンツ幅をセット（推奨設定）
if ( ! isset( $content_width ) ) {
    $content_width = 1280; //問題があれば幅を変更せよ、単位はpx
}

function custom_theme_setup() {
    //head内にフィードリンクを出力（推奨設定）
    add_theme_support( 'automatic_feed_links' );
    //タイトルタグを動的に出力
    add_theme_support( 'title-tag' );
    //ブロックエディター用のＣＳＳを有効化
    add_theme_support( 'wp-block-styles' );
    //埋め込みコンテンツをレスポンシブ対応に
    add_theme_support( 'responsive-embeds' );
    // アイキャッチ有効化
    add_theme_support( 'post-thumbnails' );
    // カスタムメニュー有効化、メニューの位置を設定
    register_nav_menus(
        array(
        'global-nav' => 'グローバルナビゲーション',
        )
    );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );


//ウィジェットエリアの登録 
function my_theme_widgets_init() {
  register_sidebar( array(
    'name' => 'Main Sidebar',
    'id' => 'main-sidebar',
  ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );

function enqueue_scripts() {
    //CSS
    wp_enqueue_style('main', get_stylesheet_uri() );
        //レスポンシブＣＳＳ
    wp_enqueue_style('responsive', get_template_directory_uri().'/responsive.css' );
    //javascript
    wp_enqueue_script('mainjs', get_stylesheet_directory_uri().'/js/main.js',array(),'',true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts' );

//アーカイブ
function custom_archives( $args ) {
     $args['type'] = 'yearly';
     return $args;
 }
 add_filter( 'widget_archives_args', 'custom_archives' );

//ループ回数を取得
function loopNumber(){
    global $wp_query;
    return $wp_query->current_post+1;
}

//西暦和暦変換
function wareki($ymd)
{
list($y,$m,$d) = explode("/",$ymd);
$m = str_pad($m,2,0,STR_PAD_LEFT);
$d = str_pad($d,2,0,STR_PAD_LEFT);
 
$ymd = $y.$m.$d;
if ($ymd <= "19120729") {
$gg = "明治";
$yy = $y - 1867;
} elseif ($ymd >= "19120730" && $ymd <= "19261224") {
$gg = "大正";
$yy = $y - 1911;
} elseif ($ymd >= "19261225" && $ymd <= "19890107") {
$gg = "昭和";
$yy = $y - 1925;
} elseif ($ymd >= "19890108" && $ymd <= "20190430") {
$gg = "平成";
$yy = $y - 1988;
} elseif ($ymd >= "20190501") {
$gg = "令和";
$yy = $y - 2018;
}
 
$strm = ltrim($m, '0');
$strd = ltrim($d, '0');
 
if ($yy == 1) {
$yy = "元";
}
 
$wareki = "{$gg}{$yy}年";
return $wareki;
}

// 管理者のみ管理バーを表示
function my_function_admin_bar($content) {
  return ( current_user_can("administrator") ) ? $content : false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');
