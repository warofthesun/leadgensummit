<?php

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );

function my_theme_register_required_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// Lazy Load
		array(
			'name'     				=> 'BJ LazyLoad',
			'slug'     				=> 'bj-lazy-load',
			'source'   				=> 'https://downloads.wordpress.org/plugin/bj-lazy-load.zip',
			'required' 				=> false,
			'version' 				=> '1.0.9',
			'force_activation' 		=> false,
			'force_deactivation' 	=> false,
			'external_url' 			=> '',
		),

    // Classic Editor
		array(
			'name'     				=> 'Classic Editor',
			'slug'     				=> 'classic-editor',
			'source'   				=> 'https://downloads.wordpress.org/plugin/classic-editor.zip',
			'required' 				=> false,
			'version' 				=> '1.5',
			'force_activation' 		=> false,
			'force_deactivation' 	=> false,
			'external_url' 			=> '',
		),

		// Flamingo
		array(
			'name'     				=> 'Flamingo',
			'slug'     				=> 'flamingo',
			'source'   				=> 'https://downloads.wordpress.org/plugin/flamingo.zip',
			'required' 				=> false,
			'version' 				=> '2.1',
			'force_activation' 		=> false,
			'force_deactivation' 	=> false,
			'external_url' 			=> '',
		),

		// Forminator
		array(
			'name'     				=> 'Forminator',
			'slug'     				=> 'forminator',
			'source'   				=> 'https://downloads.wordpress.org/plugin/forminator.zip',
			'required' 				=> false,
			'version' 				=> '1.11',
			'force_activation' 		=> false,
			'force_deactivation' 	=> false,
			'external_url' 			=> '',
		),

		// Hotjar
		array(
			'name'     				=> 'Hotjar',
			'slug'     				=> 'hotjar',
			'source'   				=> 'https://downloads.wordpress.org/plugin/hotjar.zip',
			'required' 				=> false,
			'version' 				=> '1.0',
			'force_activation' 		=> false,
			'force_deactivation' 	=> false,
			'external_url' 			=> '',
		),

		// PDF Embedder
		array(
			'name'     				=> 'PDF Embedder',
			'slug'     				=> 'pdf-embedder',
			'source'   				=> 'https://downloads.wordpress.org/plugin/pdf-embedder.zip',
			'required' 				=> false,
			'version' 				=> '4.6',
			'force_activation' 		=> false,
			'force_deactivation' 	=> false,
			'external_url' 			=> '',
		),

    // UpdraftPlus
		array(
			'name'     				=> 'UpdraftPlus',
			'slug'     				=> 'updraftplus',
			'source'   				=> 'https://downloads.wordpress.org/plugin/updraftplus.zip',
			'required' 				=> false,
			'version' 				=> '1.14',
			'force_activation' 		=> false,
			'force_deactivation' 	=> false,
			'external_url' 			=> '',
		),

    // Yoast
		array(
			'name'     				=> 'Yoast',
			'slug'     				=> 'wordpress-seo',
			'source'   				=> 'https://downloads.wordpress.org/plugin/wordpress-seo.zip',
			'required' 				=> false,
			'version' 				=> '12.9',
			'force_activation' 		=> false,
			'force_deactivation' 	=> false,
			'external_url' 			=> '',
		),

	);

	$theme_text_domain = 'StarterTheme';

	$config = array(
		'domain'       		=> $theme_text_domain,         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Required Plugins', $theme_text_domain ),
			'menu_title'                       			=> __( 'Install Plugins', $theme_text_domain ),
			'installing'                       			=> __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', $theme_text_domain ),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
			'return'                           			=> __( 'Return to Required Plugins Installer', $theme_text_domain ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', $theme_text_domain ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', $theme_text_domain ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);

	tgmpa( $plugins, $config );

}
