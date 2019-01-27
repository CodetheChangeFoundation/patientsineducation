<?php
/**
 * Custom post types
 *
 * @package patientsineducation
 */

function pie_custom_post_type (){
  $labels = array(
   'name' => 'Engagements',
   'singular_name' => 'Engagement',
   'add_new' => 'Add Item',
   'all_items' => 'All Items',
   'add_new_item' => 'Add Item',
   'edit_item' => 'Edit Item',
   'new_item' => 'New Item',
   'view_item' => 'View Item',
   'search_item' => 'Search Engagements',
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
 register_post_type('engagements',$args);
}
add_action('init','pie_custom_post_type');