<?php
/**
 * Code the Change template for the index
 *
 * @package startertheme
 */
 ?>

<?php get_header(); ?>

<?php 
  if(have_posts()):
    while(have_posts()): the_post(); ?>
    <h1><?php echo the_title(); ?></h1>
    <p><?php echo the_content(); ?></p>
    <?php endwhile;
  endif;
?>

<div>
  <?php
    if(!get_field('enable_content_box')):
      if(get_field('content_box')): ?>
        <p><?php echo get_field('content_box') ?></p>
      <?php endif;
    endif;
  ?>
</div>

<?php get_footer(); ?>
