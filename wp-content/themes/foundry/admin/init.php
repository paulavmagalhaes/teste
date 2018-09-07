<?php 

/**
 * Load standard areas of the theme-side framework
 * These should be loaded at all times.
 */
get_template_part( 'admin/theme_menus_widgets' );
get_template_part( 'admin/theme_functions' );
get_template_part( 'admin/theme_scripts' );
get_template_part( 'admin/theme_filters' );
get_template_part( 'admin/theme_support' );
get_template_part( 'admin/theme_options' );

/**
 * Some parts of the framework only need to run on admin views.
 * These would be those.
 * Calling these only on admin saves some operation time for the theme, everything in the name of speed.
 */
if( is_admin() ){
	if (!( class_exists( 'TGM_Plugin_Activation' ) ))
		get_template_part( 'admin/class-tgm-plugin-activation' );
	
	get_template_part( 'admin/theme_metaboxes' );
}

/**
 * If WPML exists, let's load in our custom functions.
 */
if( function_exists('icl_get_languages') ){
	get_template_part( 'admin/theme_wpml' );
}

/**
 * If WooCommerce exists, let's load in our custom functions.
 */
if( class_exists('Woocommerce') ){
	get_template_part( 'admin/theme_woocommerce');
}