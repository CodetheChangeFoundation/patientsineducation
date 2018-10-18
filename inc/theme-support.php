<?php
/**
 * Code the Change Starter theme support options
 *
 * @package startertheme
 */

// Activate User Selected Post Formats
$options = get_option( 'post_formats' );
$formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
$output = array();
foreach ($formats as $format) {
  $output[] = ( @$options[$format] == 1 ? $format : '' );
}
if ( !empty( $options ) ) {
  add_theme_support( 'post-formats', $output );
}

// Activate Featured Images
add_theme_support( 'post-thumbnails' );

// Activate Custom Header Image
add_theme_support( 'custom-header' );

// Activate Nav Menu Option
function startertheme_register_nav_menu() {
  register_nav_menu( 'primary', 'Header Navigation Menu' );
  register_nav_menu( 'footer', 'Footer Menu' );
}
add_action( 'after_setup_theme', 'startertheme_register_nav_menu' );

// Activate HTML5 Features
add_theme_support( 'html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption') );

