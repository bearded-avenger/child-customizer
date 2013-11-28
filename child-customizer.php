<?php
/*
Plugin Name: Child Customizer
Plugin URI: http://www.pagelines.com/
Description: Allows theme authors to override child theme templates
Version: 0.1
Author: NIck Haskins
Author URI: http://nickhaskins.co
*/

class SorenChildCustomizer {

	public function __construct(){

		add_action('template_redirect', array($this,'template_loader'));
	}

	function template_loader($template) {

	    // override home
	    if ( is_home()){

			$template_path = plugin_dir_path( __FILE__ ).'index.php';
		    if(file_exists($template_path)){
		        include($template_path);
		        exit;
		    }

	    } elseif (is_single()){

			$template_path = plugin_dir_path( __FILE__ ).'single.php';
		    if(file_exists($template_path)){
		        include($template_path);
		        exit;
		    }

	   }

	}
}
new SorenChildCustomizer;