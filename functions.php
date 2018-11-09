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
require get_template_directory() . '/custom-fields/help-section.php';

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
