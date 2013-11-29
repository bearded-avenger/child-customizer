<?php
/*
Plugin Name: Child Customizer
Plugin URI: http://www.pagelines.com/
Description: Allows theme authors to override child theme templates
Version: 1.1
Author: Nick Haskins
Author URI: http://nickhaskins.co

STOP AND READ!!!!!!!!
This plugin is to be used to override template files in a Wordpress child theme. If you want to override the template files from the parent theme, simply copy them from the parent to you child theme.

Overriding child theme templates
- Copy (NOT MOVE) the template you want to override, from the child theme, to the 'templatesgohere' directory.

Using hooks and filters
- Put all of your hooks and filters into the 'hooksgohere.php' file

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
		require_once('hooksgohere.php'); // put all your hooks here in the file aptly named, hooksgohere.
	}
}
new baChildCustomizer;
