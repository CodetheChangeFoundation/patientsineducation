<?php
/**
 * Header template
 *
 * @package patientsineducation
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

    <?php if (is_singular() && pings_open(get_queried_object())): ?>
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head() ?>
  </head>

  <body <?php body_class() ?>>
    <div class="container-fluid p-0">
      <?php if (is_front_page() && have_rows('home_page_ticker', 'option')): ?>
        <div id="ticker" class="carousel slide bg-dark" data-ride="carousel" data-interval="7500">
          <div class="carousel-inner container">
            <?php
            $i = 0;
            while ( have_rows('home_page_ticker', 'option') ) : the_row();
            ?>

              <div class="carousel-item <?php echo $i++==0 ? 'active' : '' ?>">
                <div class="d-flex w-100 justify-content-center align-items-center h-100">
                  <h5 class="m-0 text-white"><?php the_sub_field('title') ?> <?php if (get_sub_field('date')): ?>on <?php the_sub_field('date'); endif;?></h5>
                  <?php $button = get_sub_field('button'); if ($button): ?>
                    <a class="text-dark btn btn-primary btn-sm ml-4" role="button" href="<?php echo $button['url'] ?>"><?php echo $button['title'] ?></a>
                  <?php endif; ?>
                </div>
              </div>

            <?php endwhile; ?>
          </div>
        </div>
      <?php endif; ?>

      <nav class="navbar navbar-expand-md navbar-light bg-primary py-3 sticky-top border-bottom border-white">
        <div class="container">
          <a class="navbar-brand font-weight-bold" href="<?php echo get_home_url() ?>">
            <?php if(get_header_image()): ?>
              <img src="<?php echo( get_header_image() ); ?>" width="50" height="50" class="d-inline-block align-center mr-2" alt="PIE Logo">
            <?php endif; ?>

            <?php echo( get_bloginfo( 'title' ) ); ?>
          </a>
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
        </div>
      </nav>
