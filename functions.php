<?php
/**
 * Patients in Education Functions
 *
 * @package patientsineducation
 */

require get_template_directory() . '/inc/cleanup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/theme-support.php';
require get_template_directory() . '/custom-fields/paragraph.php';
require get_template_directory() . '/custom-fields/project-description.php';
require get_template_directory() . '/custom-fields/more-about-pie.php';

function pie_scripts_enqueue() {
  wp_enqueue_style('piestyle', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
  /*   wp_deregister_script('jquery');
  wp_register_script('piejs', get_template_directory_uri() . "/assets/js/pie.js", false, '1.0.0', true);
  wp_enqueue_script('piejs');
  */
}
add_action('wp_enqueue_scripts', 'pie_scripts_enqueue');

function pie_load_bootstrap_scripts() {
  wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap-grid.min.css', array(), '4.1.3', 'all');
  wp_enqueue_style('bootstrap-reboot', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap-reboot.min.css', array(), '4.1.3', 'all');
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.css', array(), '4.1.3', 'all');
  wp_register_script('jquery', "https://code.jquery.com/jquery-3.3.1.min.js", false, '3.3.1', true);
  wp_enqueue_script('jquery');
  wp_register_script('bootstrap-bundle', get_template_directory_uri() . "/assets/js/bootstrap/bootstrap.bundle.min.js", false, '4.1.3', true);
  wp_enqueue_script('bootstrap-bundle');
  wp_register_script('bootstrap', get_template_directory_uri() . "/assets/js/bootstrap/bootstrap.min.js", false, '4.1.3', true);
  wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'pie_load_bootstrap_scripts');

function pie_custom_post_type (){

	$labels = array(
		'name' => 'Projects',
		'singular_name' => 'Project',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Projects',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
      'custom-fields',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('engagement',$args);
}
add_action('init','pie_custom_post_type');
