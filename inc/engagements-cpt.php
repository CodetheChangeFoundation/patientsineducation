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
   'has_archive' => false,
   'publicly_queryable' => true,
   'query_var' => true,
   'rewrite' => true,
   'capability_type' => 'post',
   'hierarchical' => false,
   'supports' => array(
     'title',
     'custom-fields',
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

add_filter( 'manage_engagements_posts_columns', 'patients_filter_posts_columns' );
function patients_filter_posts_columns( $columns ) {
  $columns = array(
      'cb' => $columns['cb'],
      'image' => __( 'Image' ),
      'title' => __( 'Title' ),
      'short_description' => __( 'Description' ),
      'link' => __( 'Link' ),
      'engagement_type' => __( 'Engagement type' ),
      'requestor' => __( 'Requestor' ),
      'engagement_date' => __( 'Engagement date' ),
      'program' => __( 'Program' ),
      'patients_requested' => __( 'Patients requested' ),
      'date' => __( 'Date published' )
    );
  return $columns;
}

add_action( 'manage_engagements_posts_custom_column', 'patients_engagements_column', 10, 2);
function patients_engagements_column( $column, $post_id ) {
  // image column
  if ( 'image' === $column ) {
    echo get_the_post_thumbnail( $post_id, array(80, 80) );
  }

  // custom field columns
  $column_names = ['short_description', 'link', 'engagement_type', 'requestor', 'engagement_date', 'program', 'patients_requested'];
  foreach ($column_names as $key => $value) {
    if ( $value === $column ) {
      $column_name = get_field($value);
      if ( ! $column_name ) {
        _e( 'n/a' );  
      } else {
        echo $column_name;
      }
    }
  }
}

add_filter( 'manage_edit-engagements_sortable_columns', 'patients_engagements_sortable_columns');
function patients_engagements_sortable_columns( $columns ) {
  $columns['patients_requested'] = 'patients_requested';
  $columns['engagement_date'] = 'engagement_date';
  return $columns;
}

add_action( 'pre_get_posts', 'patients_posts_orderby' );
function patients_posts_orderby( $query ) {
  if( ! is_admin() || ! $query->is_main_query() ) {
    return;
  }

  if ( 'patients_requested' === $query->get( 'orderby') ) {
    $query->set( 'orderby', 'meta_value' );
    $query->set( 'meta_key', 'patients_requested' );
    $query->set( 'meta_type', 'numeric' );
  }
  if ( 'engagement_date' === $query->get( 'orderby') ) {
    $query->set( 'orderby', 'meta_value' );
    $query->set( 'meta_key', 'engagement_date' );
    $query->set( 'meta_type', 'date' );
  }
}