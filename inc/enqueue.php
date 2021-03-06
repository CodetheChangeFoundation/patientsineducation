<?php
/**
 * Enqueue functions
 *
 * @package patientsineducation
 */

function patients_load_scripts() {
  wp_enqueue_style( 'patients', get_template_directory_uri() . '/assets/css/patients.css', array(), '1.0.0', 'all' );
  wp_register_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array('jquery'), '3.6.0', true );
  wp_enqueue_script( 'modernizr' );
  wp_register_script( 'patients', get_template_directory_uri() . '/assets/js/patients.js', array('jquery', 'modernizr'), '1.0.0', true );
  wp_enqueue_script( 'patients' );
}

function pie_load_bootstrap_scripts() {
  wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap-grid.min.css', array(), '4.1.3', 'all');
  wp_enqueue_style('bootstrap-reboot', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap-reboot.min.css', array(), '4.1.3', 'all');
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.css', array(), '4.1.3', 'all');
  wp_deregister_script( 'jquery' );
  wp_register_script('jquery', "https://code.jquery.com/jquery-3.3.1.min.js", false, '3.3.1', true);
  wp_enqueue_script('jquery');
  wp_register_script('bootstrap-bundle', get_template_directory_uri() . "/assets/js/bootstrap/bootstrap.bundle.min.js", array('jquery'), '4.1.3', true);
  wp_enqueue_script('bootstrap-bundle');
  wp_register_script('bootstrap', get_template_directory_uri() . "/assets/js/bootstrap/bootstrap.min.js", array('jquery'), '4.1.3', true);
  wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'pie_load_bootstrap_scripts');
add_action('wp_enqueue_scripts', 'patients_load_scripts');