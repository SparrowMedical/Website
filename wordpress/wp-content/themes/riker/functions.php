<?php
define( 'RIKER_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'RIKER_THEME_NAME', wp_get_theme()->get( 'Name' ) );
define( 'RIKER_TEMPLATE_DIR', get_template_directory() );
define( 'RIKER_TEMPLATE_DIR_URI', get_template_directory_uri() );

if ( ! function_exists( 'riker_support' ) ) {
	function riker_support()  {
		// Make theme available for translation.
		load_theme_textdomain( 'riker', RIKER_TEMPLATE_DIR . '/languages' );
		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );
		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'riker_support' );

/**
 * Block styles.
 */
require RIKER_TEMPLATE_DIR . '/inc/block-styles.php';
