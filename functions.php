<?php
if (!current_user_can('administrator')):
show_admin_bar(false);
endif;
?>
<?php 
/*------------------------ Custom Menu --------------------------*/
function register_main_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'secondary-menu' => __( 'Secondary Menu' )
		
		)
	);
}
if (function_exists('register_nav_menus')) add_action( 'init', 'register_main_menus' );
/*------------------------ Custom Menu --------------------------*/
?>
<?php 
/*------------------------ Add post thumbnails---Featured image --------------------------*/
if (function_exists('add_theme_support')) {
	add_theme_support( 'post-thumbnails', array( 'post', 'page', 'product') );
	  //set_post_thumbnail_size( 400, 350 ); // Add it for posts and pages
	  
	  add_image_size( 'test', $width=400, $height = 350, $crop = true);
	}
/*------------------------ Add post thumbnails---Featured image --------------------------*/
?>
<?php
/*----------------------------- Theme Options -------------------------------------*/
$functions_path = TEMPLATEPATH . '/functions/';
require_once ($functions_path . 'theme-options.php');
require_once ($functions_path . 'custom_functions.php');
require_once ($functions_path . 'image_resizer.php');
//require_once ($functions_path . 'image_upload.php');
/*----------------------------- Theme Options -------------------------------------*/
?>
<?php 
// Side Bar Widget
if ( function_exists('register_sidebar') ){
	register_sidebar(array(
		'name'=>'Right Sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4><hr class="black">',
	));
}
?>
<?php add_action('wp_logout','go_home');
function go_home(){
  wp_redirect( home_url() );
  exit();
} ?>
<?php function filter_search($query) {
    if ($query->is_search) {
	$query->set('post_type', array('page'));
    };
    return $query;
};
add_filter('pre_get_posts', 'filter_search');?>