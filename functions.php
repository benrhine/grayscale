<?php
/**
 * Grayscale
 *
 * @package WordPress
 * @subpackage Graycale
 */

define('THEME','grayscale');
define('THEME_NAME','Grayscale');
define('THEME_PATH',__DIR__);

include('includes/core/core.php');

add_action('init', function(){
     if(!is_admin()){
          wp_deregister_script('jquery');
          wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', false, '1.9.1');
          
     }
});

add_action('wp_enqueue_scripts',function(){
     wp_enqueue_style(THEME, get_stylesheet_uri());
     // Script
     wp_enqueue_script('jquery');
	//wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
     wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), true);
     wp_enqueue_script( 'jquery-easing', '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array('jquery'), true);
     wp_enqueue_script( 'google-maps-js', '//maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false', array(), true );
     wp_enqueue_script( 'grayscale-js', get_template_directory_uri() . '/js/grayscale.js', array(), true );
});
?>
