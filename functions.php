<?php 
function amazing_bootstrapping()
{
	load_theme_textdomain('amz');
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	
	add_theme_support('automatic-feed-links');
	add_theme_support('html5', array('search-form', 'comment-list', 'comment-form', 'gallery', 'caption'));
	add_theme_support('post-formats', array('image', 'gallery', 'quote', 'audio', 'video', 'link'));
	add_theme_support('customize-selective-refresh-widgets');
	// register_nav_menu('topmenu', __('Top Menu', 'amazing'));
 //    register_nav_menu('footermenu', __('Footer Menu', 'amazing'));
   
    
    add_theme_support('custom-header');

	$amazing_logo = array(
		'height'      => 85,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	);
    add_theme_support('custom-logo', $amazing_logo);
    add_theme_support( 'custom-background' );

    	//register nav menu .
  register_nav_menus(array(
  	'menu-1'=>esc_html__('Primary','amz')

	));
}
add_action("after_setup_theme", "amazing_bootstrapping");



// ENQUEUE STYLE CSS AND JS FILE 
function amazing_enqueue_assets()
{
	wp_enqueue_style("dashicons");
	wp_enqueue_style("style-css", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "amazing_enqueue_assets");

// DISABLE GUTENBERG.
function disable_gutenberg_editor()
{
return false;
}
add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");

//require kc map
require_once 'kingcomposer/my-service-map.php';
require_once 'kingcomposer/client-rating-map.php';

//post view count
function gt_get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
    return "$count views";
}
function gt_set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
}
function gt_posts_column_views( $columns ) {
    $columns['post_views'] = 'Views';
    return $columns;
}
function gt_posts_custom_column_views( $column ) {
    if ( $column === 'post_views') {
        echo gt_get_post_view();
    }
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );