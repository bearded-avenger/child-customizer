<?php

/**
  	* Checks for a template file in the wp-content/cc-templates directory, and if there is will use that intead of child theme template
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

	    if (is_author()) {
	    	return $this->get_template_hierarchy('author');
	    }

	    if (is_page()) {
	    	return $this->get_template_hierarchy('page');
	    }

	    if (is_search()) {
	    	return $this->get_template_hierarchy('search');
	    }

	    if (is_404()) {
	    	return $this->get_template_hierarchy('404');
	    }
	}

	public function get_template_hierarchy( $template ) {

	    // Get the template slug
	    $template_slug = rtrim($template, '.php');
	    $template      = $template_slug . '.php';

	    // Check if a custom template exists in the theme folder, if not, load the plugin template file
	    if (file_exists( WP_CONTENT_DIR. '/cc-templates/'.$template)) {
			$file = WP_CONTENT_DIR. '/cc-templates/'.$template;
	    } else {
	    	$file = locate_template($template);
	    }

	    return apply_filters( 'ba_cc_template_'.$template, $file);
	}

	public function style(){
		if (file_exists( WP_CONTENT_DIR. '/cc-templates/style.css')) {
			wp_enqueue_style('cc-user-styles', WP_CONTENT_DIR.'/cc-templates/style.css', true);
		}
	}
}
new baChildCustomizerClass;