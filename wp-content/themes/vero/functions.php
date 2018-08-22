<?php 

function register_enqueue_style(){
$theme_data = wp_get_theme();


wp_register_style('boostrap', get_theme_file_uri('vendor/bootstrap/css/bootstrap.min.css'), null, $theme_data->get('Version'), 'screen');
wp_register_style('portafolio', get_theme_file_uri('css/portfolio-item.css'), null, $theme_data->get('Version'), 'screen');

wp_enqueue_style('boostrap-css');
wp_enqueue_style('portafolio-css');
 
}
add_action('wp_enqueue_scripts', 'register_enqueue_style');



function register_enqueue_script(){
$theme_data = wp_get_theme();


wp_deregister_script('jquery');
wp_deregister_script('jquery_migrate');


wp_register_script('jQuer3', get_parent_theme_file_uri('vendor/jQuery/jQuery.min.js'), array ('jQuery_migrate'), null, true);
wp_register_script('bootstrap', get_parent_theme_file_uri('vendor/bootstrap/js/bootstrap.bundle.min.js'), array ('jQuery3_migrate'), null, true);

wp_enqueue_script('jQuery');
wp_enqueue_script('bootstrap');
 
}
add_action('wp_enqueue_scripts', 'register_enqueue_scripts');
 ?>
 <?php 

if ( function_exists( 'register_nav_menus')) {
	register_nav_menus( array ( 'superior' => 'Menú principal superior'));
}

if ( function_exists('add_theme_support')){
	add_theme_support( 'post-thumbnails');
}

?>
