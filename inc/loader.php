<?php

/**
  	* Checks for a template file in the plugin, and if there is will use that intead of child theme template
  	*
  	* @author  Nick Haskins <email@nickhaskins.com>
  	* @since 1.0
*/

class baChildCustomizerClass {

	public function __construct(){

		add_filter( 'template_include', array($this,'template_chooser'));
		add_action( 'wp_enqueue_scripts', array($this,'style'));
	}

	public function template_chooser($template) {

		if ( is_home() ) {
			return $this->get_template_hierarchy('index');
		}

	    if ( is_single() ) {
	    	return $this->get_template_hierarchy('single');
	    }

	    if (is_archive()) {
	    	return $this->get_template_hierarchy('archive');
	    }

	}

	public function get_template_hierarchy( $template ) {

	    // Get the template slug
	    $template_slug = rtrim($template, '.php');
	    $template      = $template_slug . '.php';

	    // Check if a custom template exists in the theme folder, if not, load the plugin template file
	    if (file_exists( BA_CC_BASE_DIR. '/templatesgohere/'.$template)) {
			$file = BA_CC_BASE_DIR. '/templatesgohere/'.$template;
	    } else {
	    	$file = locate_template($template);
	    }

	    return apply_filters( 'ba_cc_template_'.$template, $file);
	}

	public function style(){
		if (file_exists( BA_CC_BASE_DIR. '/style.css')) {
			wp_enqueue_style('cc-user-styles', BA_CC_BASE_URL.'/style.css', true);
		}
	}
}
new baChildCustomizerClass;