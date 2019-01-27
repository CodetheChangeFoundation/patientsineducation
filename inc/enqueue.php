<?php
/**
 * Patients in Education enqueue functions
 *
 * @package patients
 */

function startertheme_load_scritps() {
  wp_enqueue_style( 'startertheme', get_template_directory_uri() . '/assets/css/startertheme.css', array(), '1.0.0', 'all' );
  wp_register_script( 'startertheme', get_template_directory_uri() . "/assets/js/startertheme.js", false, '1.0.0', true );
  wp_enqueue_script( 'startertheme' );
}
 
function pie_scripts_enqueue() {
  wp_enqueue_style('piestyle', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'pie_scripts_enqueue');

function pie_load_bootstrap_scripts() {
  wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap-grid.min.css', array(), '4.1.3', 'all');
  wp_enqueue_style('bootstrap-reboot', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap-reboot.min.css', array(), '4.1.3', 'all');
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.css', array(), '4.1.3', 'all');
  wp_deregister_script( 'jquery' );
  wp_register_script('jquery', "https://code.jquery.com/jquery-3.3.1.min.js", false, '3.3.1', true);
  wp_enqueue_script('jquery');
  wp_register_script('bootstrap-bundle', get_template_directory_uri() . "/assets/js/bootstrap/bootstrap.bundle.min.js", false, '4.1.3', true);
  wp_enqueue_script('bootstrap-bundle');
  wp_register_script('bootstrap', get_template_directory_uri() . "/assets/js/bootstrap/bootstrap.min.js", false, '4.1.3', true);
  wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'pie_load_bootstrap_scripts');
add_action( 'wp_enqueue_scripts', 'startertheme_load_scritps' );