<?php
/**
 * Shortcodes
 *
 * @package patientsineducation
 */

add_shortcode( 'get_icon_url', function( $atts ){
  return get_template_directory_uri() . '/assets/icons/' . $atts['image'];
});

function patients_button( $atts, $content=null ) {
  $atts = shortcode_atts(
    array (
      'title' => '',
      'link' => '',
      'align' => 'left'
    ), $atts
  );
  
  if ($atts['title'] != '' && $atts['link'] != '') {
    return '<div class="text-'.$atts['align'].'"><a href="'.get_home_url().'/'.$atts['link'].'" class="btn btn-primary" role="button">'.$atts['title'].'</a></div>';
  }
}
add_shortcode( 'button', 'patients_button' );

function patients_counter( $atts, $content=null ) {
  $atts = shortcode_atts(
    array (
      'number' => '',
      'description' => ''
    ), $atts
  );
  
  return '<div class="d-flex flex-row align-items-baseline"><h2 class="counter">'.$atts['number'].'</h2><h3 class="pl-2">'.$atts['description'].'</h3></div>';
}
add_shortcode( 'counter', 'patients_counter' );