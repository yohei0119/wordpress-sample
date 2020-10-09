<?php
/*
 * thumbnails有効化
 */
function theme_setup() {
	add_theme_support('post-thumbnails');
	// size setting add_theme_thumbnail_size(1200, 628, true);
}
add_action('after_setup_theme', 'theme_setup');

/*
 * title
 */
add_theme_support('title-tag');

// topページはタイトルだけにする
function rewrite_title($title) {
	if (is_home()) {
		$title['tagline'] = ''; 
	}
	return $title;
}
add_filter('document_title_parts', 'rewrite_title');

// 区切りを「_」に変更する
function my_document_title_separator($sep){
  $sep = '-';
  return $sep;
}
add_filter('document_title_separator', 'my_document_title_separator');

/*
 * cssファイル読み込み
 */
function add_bootstrap_style() {
  wp_enqueue_style(
    'bootstrapstyle', // hundle名
    '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', // ファイルパス
    '', // このファイルの前に読み込みたいhundle
    '20201001', // キャッシュ対策
    'all' // media 
  );
}
add_action('wp_enqueue_scripts', 'add_bootstrap_style');

function add_fontawesome_style() {
  wp_enqueue_style(
    'fontawesome',
    '//pro.fontawesome.com/releases/v5.10.0/css/all.css', 
    '',
    '20201001',
    'all' 
  );
}
add_action('wp_enqueue_scripts', 'add_fontawesome_style');

function add_style_files() {
	// サイト共通のCSSの読み込み
	wp_enqueue_style(
    'style',
    get_template_directory_uri() . '/style.css',
    "bootstrapstyle",
    //'20201001',
    'all' 
  );
}
add_action('wp_enqueue_scripts', 'add_style_files');

/*
 * jsファイル読み込み
 */
function add_jquery_scripts() {
	// WordPress本体のjquery.jsを読み込まない
	wp_deregister_script('jquery');
 
	// jQueryの読み込み
	wp_enqueue_script(
    'jquery', // hundle名
    '//code.jquery.com/jquery-3.5.1.min.js', // ファイルパス
    '', // このファイルの前に読み込みたいhundle
    '20201001', // キャッシュ対策
    true // body閉じタグの上に挿入
  );
}
add_action('wp_enqueue_scripts', 'add_jquery_scripts');

function add_popper_scripts() {
	wp_enqueue_script(
    'popper',
    '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', 
    'jquery',
    '20201001',
    true
  );
}
add_action('wp_enqueue_scripts', 'add_popper_scripts');

function add_bootstrap_scripts() {
	wp_enqueue_script(
    'bootstrap',
    '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
    'jquery',
    '20201001',
    true
  );
}
add_action('wp_enqueue_scripts', 'add_bootstrap_scripts');

function add_validation_scripts() {
	wp_enqueue_script(
    'validation',
    '//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js',
    'jquery',
    '20201001',
    true
  );
}
add_action('wp_enqueue_scripts', 'add_validation_scripts');

function add_main_scripts() {
	wp_enqueue_script(
    'main',
    get_stylesheet_directory_uri() . '/js/index.js',
    'jquery',
    '20201001',
    true
  );
}
add_action('wp_enqueue_scripts', 'add_main_scripts');

// iosのバグが発生する為
function is_ios() {
  $is_ipad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
  global $is_iphone;
  if ($is_iphone || $is_ipad) {
    return true;
  }
}

if(!is_iOS()){
  function add_luxy_scripts() {
    wp_enqueue_script( 
      'luxy',
      get_stylesheet_directory_uri() . '/js/luxy.min.js',
      array('jquery'),
      '20201001',
      true
    );
  }
  add_action('wp_enqueue_scripts', 'add_luxy_scripts');

  function add_luxyinit_scripts() {
    wp_enqueue_script( 
      'luxyinit',
      get_stylesheet_directory_uri() . '/js/luxy.js',
      array('luxy'),
      '20201001', 
      true
    );
  }
  add_action('wp_enqueue_scripts', 'add_luxyinit_scripts');  
}

/*
 * single.phpのカテゴリー分岐
 */
if (!function_exists( 'post_is_in_descendant_category')){
  function post_is_in_descendant_category($cats, $_post = null) {
    foreach ((array) $cats as $cat){
      $descendants = get_term_children((int) $cat, 'category');
      if ($descendants && in_category( $descendants, $_post))
        return true;
    }
    return false;
  }
}

/*
 * OGP設定
 */
function my_meta_ogp() {
  if( is_front_page() || is_home() || is_singular() ){
    global $post;

    $ogp_title = '';
    $ogp_descr = '';
    $ogp_url = '';
    $ogp_img = '';
    $insert = '';

    // 記事＆固定ページ
    if( is_singular() ) { 
       setup_postdata($post);
       $ogp_title = $post->post_title;
       $ogp_descr = mb_substr(get_the_excerpt(), 0, 100);
       $ogp_url = get_permalink();
       wp_reset_postdata();
    // トップページ   
    } elseif ( is_front_page() || is_home() ) { 
       $ogp_title = get_bloginfo('name');
       $ogp_descr = get_bloginfo('description');
       $ogp_url = home_url();
    }

    // og:type
    $ogp_type = ( is_front_page() || is_home() ) ? 'website' : 'article';

    // og:image
    if ( is_singular() && has_post_thumbnail() ) {
       $ps_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
       $ogp_img = $ps_thumb[0];
    } else {
     $ogp_img = 'TOPページ＆アイキャッチ画像がないときに使われる画像のURL';
    }

    // 出力するOGPタグをまとめる
    $insert .= '<meta property="og:title" content="'.esc_attr($ogp_title).'" />' . "\n";
    $insert .= '<meta property="og:description" content="'.esc_attr($ogp_descr).'" />' . "\n";
    $insert .= '<meta property="og:type" content="'.$ogp_type.'" />' . "\n";
    $insert .= '<meta property="og:url" content="'.esc_url($ogp_url).'" />' . "\n";
    $insert .= '<meta property="og:image" content="'.esc_url($ogp_img).'" />' . "\n";
    $insert .= '<meta property="og:site_name" content="'.esc_attr(get_bloginfo('name')).'" />' . "\n";
    $insert .= '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    $insert .= '<meta name="twitter:site" content="ツイッターのアカウント名" />' . "\n";
    $insert .= '<meta property="og:locale" content="ja_JP" />' . "\n";

    // facebookのapp_id（設定する場合）
    $insert .= '<meta property="fb:app_id" content="ここにappIDを入力">' . "\n";
    // app_idを設定しない場合ここまで消す

    echo $insert;
  }
} //END my_meta_ogp

add_action('wp_head','my_meta_ogp'); //headにOGPを出力

?>