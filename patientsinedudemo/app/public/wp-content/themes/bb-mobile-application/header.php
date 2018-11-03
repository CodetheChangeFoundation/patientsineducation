<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-ts">
 *
 * @package BB Mobile Application
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'bb-mobile-application' ) ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  
  <div id="header">
    <div class="container">
      <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','bb-mobile-application'); ?></a></div>
      <div class="row">
        <div class="logo col-md-4 col-sm-4">
          <?php bb_mobile_application_the_custom_logo(); ?>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php
          $description = get_bloginfo( 'description', 'display' );
          if ( $description || is_customize_preview() ) : ?>
              <p class="site-description"><?php echo esc_html( $description ); ?></p>
          <?php endif; ?>
        </div>
        <div class="menubox col-md-8 col-sm-8">
          <div class="nav">
  		      <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
          </div>
        </div>        
      </div>
      <div class="clear"></div>
    </div>
  </div>