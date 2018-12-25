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
require get_template_directory() . '/inc/bs4navwalker.php';
require get_template_directory() . '/custom-fields/help-section.php';
require get_template_directory() . '/custom-fields/four-icon-section.php';
require get_template_directory() . '/custom-fields/organizations-section.php';
require get_template_directory() . '/custom-fields/project-description.php';
require get_template_directory() . '/custom-fields/more-about-pie.php';
require get_template_directory() . '/custom-fields/enable-contact-forms.php';

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

add_shortcode( 'get_icon_url', function( $atts ){
    return get_template_directory_uri() . '/assets/icons/' . $atts['image'];
});
