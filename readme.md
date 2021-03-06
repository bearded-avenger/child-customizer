=== Child Customizer ===  
Contributors: nphaskins  
Tags: child theme  
Donate link: http://nickhaskins.co  
Requires at least: 3.0.1  
Tested up to: 3.8  
Stable tag: trunk
License: GPLv2 or later  
License URI: http://www.gnu.org/licenses/gpl-2.0.html    

Safely override a child theme template.  

Plugin is to be used with Wordpress child themes only. The plugin checks to see if any theme template files are in the \'wp-content/cc-templates\' directory, and if there are, it will use that template instead of the child themes template.  

Provides support to override index, single, archive, author, page, search, and 404.  

Mainly developed for use with my own framework but can be used with any Wordpress child theme.  

## Installation   
1. Upload \"child-customizer\" to the \"/wp-content/plugins/\" directory.  
2. Activate the plugin through the \"Plugins\" menu in WordPress.  

## Frequently Asked Questions  
### How do I override a child template?   
Copy any template from the child theme into the \'wp-content/cc-temlates\' directory.  


### How can I override Child Theme CSS?   
Create a style.css file in \'wp-content/cc-temlates\', and it will then be automatically loaded for you.    

== Changelog ==  

= 1.2 ==  
* Moved templates dir to wp-content so not overriden if plugin is ever updated  

= 1.1 =  
* Load CSS file if one is present  

= 1.0 =  
* Initial release.  
