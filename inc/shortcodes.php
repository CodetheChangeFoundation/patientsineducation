<?php
/**
 * Shortcodes
 *
 * @package patientsineducation
 */

add_shortcode( 'get_icon_url', function( $atts ){
  return get_template_directory_uri() . '/assets/icons/' . $atts['image'];
});