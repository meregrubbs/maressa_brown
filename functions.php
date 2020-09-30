<?php 

// Register navwalker
require_once('class-wp-bootstrap-navwalker.php');

// Theme support
function mb_theme_setup() {
    // Nav menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}

add_action('after_setup_theme', 'mb_theme_setup');

// Options page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

?>