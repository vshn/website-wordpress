<?php
/**
 * File for registering options page in back end
 * @link https://www.advancedcustomfields.com/resources/options-page/
 */
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(
        array(
            'page_title'      => __( 'Global Fields' ),
            'menu_title'      => __( 'Global Fields' ),
            'menu_slug'       => 'global_fields',
            'capability'      => 'edit_posts',
            'show_in_graphql' => true,
        )
    );


	// acf_add_options_page(array(
	// 	'page_title' 	=> 'Theme General Settings',
	// 	'menu_title'	=> 'Theme Settings',
	// 	'menu_slug' 	=> 'theme-general-settings',
	// 	'capability'	=> 'edit_posts',
	// 	'redirect'		=> false
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Header Settings',
	// 	'menu_title'	=> 'Header',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Footer Settings',
	// 	'menu_title'	=> 'Footer',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Social Settings',
	// 	'menu_title'	=> 'Social Networks',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
}