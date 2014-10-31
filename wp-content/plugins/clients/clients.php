<?php
/*
Plugin Name: Red Rabbit Clients
Plugin URI: http://www.nathantate.io/
Description: A plugin for me
Version: 1.0
Author: Nathan Tate
Author URI: http://www.nathantate.io/
License: GPL
*/
add_action('init', 'clients_register');
 
function clients_register() {
 
	$labels = array(
		'name' => _x('Clients', 'post type general name'),
		'singular_name' => _x('Client', 'post type singular name'),
		'add_new' => _x('Add New', 'client'),
		'add_new_item' => __('Add New Client'),
		'edit_item' => __('Edit Client'),
		'new_item' => __('New Client'),
		'view_item' => __('View Client'),
		'search_items' => __('Search Clients'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'rewrite' => array('slug' => 'clients'),
    'has_archive' => true,
		'supports' => array('title','editor','thumbnail')
  );
 
	register_post_type( 'client' , $args );
	$labels = array(
		'name' => _x('Contributions', 'post type general name'),
		'singular_name' => _x('Contribution', 'post type singular name'),
		'add_new' => _x('Add New', 'contribution'),
		'add_new_item' => __('Add New Contribution'),
		'edit_item' => __('Edit Contribution'),
		'new_item' => __('New Contribution'),
		'view_item' => __('View Contribution'),
		'search_items' => __('Search Contributions'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash')
	);
 
	$args = array(
		'labels' => $labels,
    'public' => true,
		'supports' => array('title','editor','thumbnail')
  );
	register_post_type( 'contribution' , $args );

	$labels = array(
		'name' => _x('Recommendations', 'post type general name'),
		'singular_name' => _x('Recommendation', 'post type singular name'),
		'add_new' => _x('Add New', 'recommendation'),
		'add_new_item' => __('Add New Recommendation'),
		'edit_item' => __('Edit Recommendation'),
		'new_item' => __('New Recommendation'),
		'view_item' => __('View Recommendation'),
		'search_items' => __('Search Recommendations'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash')
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'rewrite' => array('slug' => 'recommendations'),
    'has_archive' => true,
		'supports' => array('title','editor','thumbnail')
  );
	register_post_type( 'recommendation' , $args );
}
