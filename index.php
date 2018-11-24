<?php
/**
 * Code the Change template for the index
 *
 * @package startertheme
 */
?>

<?php get_header(); ?>

<h1>This is the index.</h1>
<?php
  if(have_posts()):
    while(have_posts()): the_post(); ?>
    <h1><?php echo the_title(); ?></h1>
    <p><?php echo the_content(); ?></p>
    <?php endwhile;
  endif;
?>

<?php get_template_part( 'template-parts/paragraph' )?>
<?php get_template_part( 'template-parts/help-section' )?>

<div>
  <?php
    if(get_field('enable_content')):
      if(get_field('additional_content')): ?>
        <?php the_field('additional_content') ?>
      <?php endif;
    endif;
  ?>
</div>

<?php get_footer(); ?>
