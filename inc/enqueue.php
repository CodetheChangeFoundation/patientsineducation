<?php
/**
 * Code the Change Foundation enqueue functions
 *
 * @package startertheme
 */

function startertheme_load_scritps() {
  wp_enqueue_style( 'startertheme', get_template_directory_uri() . '/assets/css/startertheme.css', array(), '1.0.0', 'all' );
  wp_deregister_script( 'jquery' );
  wp_register_script( 'startertheme', get_template_directory_uri() . "/assets/js/startertheme.js", false, '1.0.0', true );
  wp_enqueue_script( 'startertheme' );
}
add_action( 'wp_enqueue_scripts', 'startertheme_load_scritps' );
