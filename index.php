<?php
/**
 * Plugin Name: Acf demo 
 * Author: Rupom
 * Description: plugin description
 * Version: 1.0
 *
 */
require_once(plugin_dir_path( __FILE__ )."libs/class-tgm-plugin-activation.php");
add_action( 'tgmpa_register', 'acf_register_required_plugins' );
function acf_register_required_plugins() {
	$plugins = array(
		array(
			'name'      => 'ACF',
			'slug'      => 'advanced-custom-fields',
			'required'  => true,
		),
	);
	$config = array(
		'id'           => 'acf-demo',          
		'default_path' => '',                 
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'plugins.php',         
		'capability'   => 'manage_options',    
		'has_notices'  => true,                  
		'dismissable'  => true,                  
		'dismiss_msg'  => '',                     
		'is_automatic' => false,                  
		'message'      => '',                     	
	);
	tgmpa( $plugins, $config );
}
// add_filter('acf/settings/show_admin', '__return_false');

?>