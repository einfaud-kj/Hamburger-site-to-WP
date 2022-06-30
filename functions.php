<?php
//テーマサポート
register_nav_menus( array(
    'categorymenu' => 'SidebarMenu',
    'footermenu' => 'FooterMenu'
  ));
add_theme_support('title-tag');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' ); 

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
    wp_enqueue_style('font-awesome','//use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1' );
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
    
function hamburger_theme_setup(){
    load_theme_textdomain( 'hamburger', get_template_directory() . '/languages' );
    }
add_action( 'after_setup_theme', 'hamburger_theme_setup' );