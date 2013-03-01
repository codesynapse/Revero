<?php
// Start the engine
require_once( get_template_directory() . '/lib/init.php' );

// Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );

// Add Viewport meta tag for mobile browsers
add_action( 'genesis_meta', 'sample_viewport_meta_tag' );
function sample_viewport_meta_tag() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

// Add support for custom background
add_theme_support( 'custom-background' );

// Add support for custom header
add_theme_support( 'genesis-custom-header', array(
	'width' => 1152,
	'height' => 120
) );

// Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

/** Add New Thumbnail Size **/
add_image_size('grid-thumbnail', 100, 100, TRUE);

/** Reposition the primary navigation menu */
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_before_header', 'genesis_do_nav' );

// Reposition the secondary navigation menu
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_before', 'genesis_do_subnav' );

// Remove the header right widget area
unregister_sidebar( 'header-right' );

add_theme_support( 'genesis-structural-wraps', array( 'header', 'nav', 'subnav', 'inner', 'footer-widgets', 'footer' ) );