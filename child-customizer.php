<?php
/*
Plugin Name: Child Customizer
Plugin URI: http://www.pagelines.com/
Description: Allows theme authors to override child theme templates
Version: 1.2
Author: Nick Haskins
Author URI: http://nickhaskins.co

STOP AND READ!!!!!!!!
This plugin is to be used to override template files in a Wordpress child theme. If you want to override the template files from the parent theme, simply copy them from the parent to you child theme.

Overriding child theme templates
- Create a folder named 'cc-templates' in your wp-content directory
- Copy (NOT MOVE) the template you want to override, from the child theme, to the 'cc-templates' directory.

Using Custom CSS
- If you want to override child css, simply create a style.css file in the plugin folder, and it will then be automatically be loaded for you.
*/

// dont touch any of this stuffs
class baChildCustomizer {

	public function __construct(){

		if( !defined( 'BA_CC_BASE_DIR' ) )
			define( 'BA_CC_BASE_DIR', plugin_dir_path( __FILE__ ));

		if( !defined( 'BA_CC_BASE_URL' ) )
			define( 'BA_CC_BASE_URL', plugins_url('',__FILE__));

		require_once('inc/loader.php'); // dont touch this file either
	}
}
new baChildCustomizer;
