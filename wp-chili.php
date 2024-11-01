<?php
/*
Plugin Name: WP Chili
Plugin URI: http://noteslog.com/chili/wp-chili/
Description: Easy code highlighting for WordPress with Chili 2.2
Author: Andrea Ercolino
Version: 1.2
Author URI: http://noteslog.com
*/

if (! is_admin()) 
{
	function wpchili_init() 
    {
        $wpchili_url = get_bloginfo('wpurl') . '/wp-content/plugins/wp-chili';
        wp_register_script('chili', $wpchili_url.'/chili/jquery.chili-2.2.js', array( 'jquery' ), '2.2');
		wp_enqueue_script('chili');
        wp_register_script('chili_recipes', $wpchili_url.'/chili/recipes.js', array( 'chili' ), '2.2');
		wp_enqueue_script('chili_recipes');
	}

	add_action( 'wp_print_scripts', 'wpchili_init' );
}

?>