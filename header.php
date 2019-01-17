<?php
/**
 * Code the Change template for the header
 *
 * @package startertheme
 */
 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo( 'name' ); wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description') ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- flexbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" >

    <?php if(is_singular() && pings_open(get_queried_object())): ?>
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif ?>
    <?php wp_head() ?>
  </head>

<body <?php body_class() ?>>
  <nav class="navbar navbar-expand-md navbar-light bg-danger">
   <a class="navbar-brand" href="#">Patients in Education</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <?php
   wp_nav_menu([
     'menu'            => 'primary',
     'theme_location'  => 'primary',
     'container'       => 'div',
     'container_id'    => 'bs4navbar',
     'container_class' => 'collapse navbar-collapse',
     'menu_id'         => false,
     'menu_class'      => 'navbar-nav ml-auto',
     'depth'           => 2,
     'fallback_cb'     => 'bs4navwalker::fallback',
     'walker'          => new bs4navwalker()
   ]);
   ?>
</nav>
