<?php
//テーマサポート
add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support( 'post-thumbnails' );

//タイトル出力
function hamburger_title($title){
    if(is_front_page() && is_home()) {
        $title = get_bloginfo('name','display');
    } 
    elseif(is_singular()) {
        $title = single_post_title('',false);
    }
    return $title;
}
add_filter('pre_get_document_title','hamburger_title');


function hamburger_script() {
    wp_enqueue_style('M+PLUS+1p','//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap',array());
    wp_enqueue_style('Roboto','//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap',array());
    wp_enqueue_style('Noto+Sans+JP','//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap',array());
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',array(),'4.7.0');
    wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array('ress'), 'all' );
    wp_enqueue_script( 'script', get_theme_file_uri() . '/js/script.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'hamburger_script');

function custom_search_filter( $query ) {
    if ( !$query->is_admin && $query->is_search ) {
      $query->set( 'post__not_in', array(237 ) );
    }
    return $query;
  }
  add_filter( 'pre_get_posts', 'custom_search_filter' );
    