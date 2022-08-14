<?php

// 投稿名変更
function change_post_menu_label() {
	global $menu;
  global $submenu;
  $menu[5][0] = 'ブログ';
  $submenu['edit.php'][5][0] = 'ブログ一覧';
  $submenu['edit.php'][10][0] = 'ブログ新規';
  $submenu['edit.php'][15][0] = 'ブログカテゴリー';
  $submenu['edit.php'][16][0] = 'ブログタグ';
}
add_action( 'admin_menu', 'change_post_menu_label' );


// カスタム投稿タイプ作成
// function create_post_type() {
//   $articleSupports = [
//     'title',
//     'editor',
//     'revisions'
//   ];

  // add post type
//   register_post_type( 'article',
//     array(
//       'label' => '予約情報',
//       'public' => true,
//       'has_archive' => true,
//       'menu_position' => 5,
//       'supports' => $articleSupports,
// 			'show_in_rest' => true
//     )
//   );
// }
// add_action( 'init', 'create_post_type' );


/*
 * 投稿にアーカイブ(投稿一覧)を持たせるようにします。
 * ※ 記載後にパーマリンク設定で「変更を保存」してください。
 */
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'post-all'; // ページ名
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

/*
 続きを読む　#more　削除
 */
  function custom_content_more_link( $output ) {
    $output = preg_replace('/#more-[\d]+/i', '', $output );
    return $output;
  }
  add_filter( 'the_content_more_link', 'custom_content_more_link' );


/*【管理画面】メディアを追加で挿入されるimgタグから不要な属性を削除 */
add_filter('image_send_to_editor', 'remove_image_attribute', 10);
add_filter('post_thumbnail_html', 'remove_image_attribute', 10);
function remove_image_attribute($html){
  $html = preg_replace('/(width|height)="\d*"\s/', '', $html); // width と heifht を削除
  return $html;
}

/*
 ウイジェット追加
 */

 register_sidebar(array (
   'name' => 'サイドバーウェジェット',
   'id' => 'sidebar',
   'before_widget' => '<div class="side_item">',
   'after_widget' => '</div>',
   'before_title' => '<h3 class="side_caption">',
   'after_title' => '</h3>',
 ));

/*
 固定ページでのペジネーション
 */
function my_parse_query( $query ) {
    if(!isset($query->query_vars['paged']) && isset($query->query_vars['page']) ){
        $query->query_vars['paged'] = $query->query_vars['page'];
    }
}
add_action( 'parse_query', 'my_parse_query' );

function add_query_vars_filter( $vars ){
  $vars[] = "cat";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );

/*
 CSSの読み込み設定追加
 */
function zyupan_scripts() {
  wp_enqueue_style( 'zyupan-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'zyupan_scripts' );

/*
 画像サポート
 */
add_theme_support( 'post-thumbnails' );
add_image_size( 'thumbnail-image', 480, 220, true );
add_image_size( 'featured-image', 1500, 1000, true );

/*
 自動リダイレクトを無効化します。
 */
 add_filter('redirect_canonical','my_disable_redirect_canonical');

function my_disable_redirect_canonical( $redirect_url ) {
    if ( is_page( 'topics' ) ) $redirect_url = false;
    return $redirect_url;
}

// コンタクトフォーム7で郵便番号から住所を自動入力
wp_enqueue_script('yubinbango','https://yubinbango.github.io/yubinbango/yubinbango.js',array(),false,true );


//add_filter( 'wpcf7_validate_email', 'wpcf7_main_validation_filter', 11, 2 );
//add_filter( 'wpcf7_validate_email*', 'wpcf7_main_validation_filter', 11, 2 );

function wpcf7_get_post_data( $tag ){
  if( !is_array( $tag ) ) return $tag;
  $seminar_id = ( isset( $_GET['seminar_id']) && $_GET['seminar_id'] ) ? $_GET['seminar_id'] : false;
  if( $seminar_id ) {
    if( $tag['name'] == 'seminar-name' ) {
        $title = get_the_title( $seminar_id );
        $tag['values'] = array( $title );
    } else if( $tag['name'] == 'seminar-date' ) {
        $url = get_field('date', $seminar_id);
        $tag['values'] = array( $url );
    }
  }
  return $tag;
}
//add_filter( 'wpcf7_form_tag', 'wpcf7_get_post_data');

@ini_set( 'max_execution_time', '100' );
@ini_set( 'post_max_size', '50M');
@ini_set( 'upload_max_size' , '30M' );

?>
