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
require get_template_directory() . '/custom-fields/carousel.php';
require get_template_directory() . '/custom-fields/directors.php';

add_shortcode( 'get_icon_url', function( $atts ){
    return get_template_directory_uri() . '/assets/icons/' . $atts['image'];
});