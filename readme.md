=== Child Customizer ===
Contributors: bearded-avenger
Tags: child theme
Donate link: http://nickhaskins.co
Requires at least: 3.0.1
Tested up to: 3.8
Stable tag: 4.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Safely override a child theme template.

== Description ==
Plugin is to be used with Wordpress child themes only. The plugin checks to see if any theme template files are in the \'templatesgohere\' directory, and if there are, it will use that template instead of the child themes template.

Also provides a \'hooksgohere.php\' file so theme authors can hook into child themes.

Mainly developed for use with my own framework but can probably used with any Wordpress child theme.

== Installation ==
1. Upload \"child-customizer\" to the \"/wp-content/plugins/\" directory.
2. Activate the plugin through the \"Plugins\" menu in WordPress.

== Frequently Asked Questions ==
= How do I override a child template? =
Copy any template from the child theme into the \'templatesgohere\' directory.

= How can I hook into a child theme with actions? =
Put all your hooks and filters for child theme into the \'hooksgohere.php\' file

== Changelog ==

= 1.0 =
* Initial release.
