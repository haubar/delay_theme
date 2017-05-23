<?php
// register_nav_menus(
//     array(
//         'primary-menu' => __( 'menu' )
//     )
// );

// function register_my_menu() {
//   register_nav_menu('new-menu',__( 'category Menu' ));
// }
// add_action( 'init', 'register_my_menu' );


//選單
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}

function get_firest_image() {
  global $post, $posts;
  $first_img = '';
  if ( has_post_thumbnail() )
  {
    $first_img = wp_get_attachment_url( get_post_thumbnail_id() );
  }
  else
  { 
    $first_img = 'http://fakeimg.pl/326x217/ccc/';
    ob_start();
    ob_end_clean();
    $output = preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $post->post_content, $matches);
    $first_img = $matches[1];
  }
  return $first_img;
}

//自訂內頁瀏覽數
function getPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta( $postID, $count_key, true );
    if( is_single() ){
      if( $count == '' ){
        add_post_meta( $postID, $count_key, 1 );
        return 1;
      }else{
        $count++;
        update_post_meta( $postID, $count_key, $count);
      }
    }
      returnempty( $count )? 0 : $count ;
}

//加入特色圖片
function molugo_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 367, 210); // default Featured Image dimensions (cropped)
 
    // add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
    add_image_size( 'single-thumb', 1000, 363 , true); // 
    add_image_size( 'index-master-thumb', 576, 576, true ); // 
    add_image_size( 'index-slave-thumb', 417, 276 ); // 
    add_image_size( 'index-center-thumb', 598, 399 ); // 
    add_image_size( 'list-thumb', 326, 217 ); // 
}
add_action( 'after_setup_theme', 'molugo_post_thumbnails' );



?>