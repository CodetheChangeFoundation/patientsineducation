<?php
/**
 * Theme cleanup
 *
 * @package patientsineducation
 */

// Remove version string from js and css
function patients_remove_wp_version_strings( $src ) {
  global $wp_version;
  parse_str( parse_url( $src, PHP_URL_QUERY ), $query );
  if( !empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
    $src = remove_query_arg( 'ver', $src );
  }
  return $src;
}
add_filter( 'script_loader_src', 'patients_remove_wp_version_strings' );
add_filter( 'style_loader_src', 'patients_remove_wp_version_strings' );

// Remove metatag generator from header
function patients_remove_meta_version() {
  return '';
}
add_filter( 'the_generator', 'patients_remove_meta_version' );
