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
    while(have_posts()): the_post();
      /* Display the page title and under-navbar styling only if it's not the home page */
      if(!is_front_page()): ?>
        <div class="container-fluid m-0" style="margin-top: 2.5rem !important;">
          <hr />
          <div class="pie-under-navbar row px-5 py-4">
            <div class="col-12 text-center">
              <h2><?php echo the_title(); ?></h2>
              <h5><?php echo the_content(); ?></h5>
            </div>
          </div>
        </div>
      <?php else: ?>
        <p><?php echo the_content(); ?></p>
      <?php endif;
    endwhile;
  endif;
?>

<?php get_template_part( 'template-parts/contact-forms' )?>
<?php get_template_part( 'template-parts/paragraph' )?>
<?php get_template_part( 'template-parts/help-section' )?>
<?php get_template_part( 'template-parts/organizations-section' )?>

<div>
  <?php
    if(get_field('enable_content')):
      if(get_field('additional_content')): ?>
        <?php the_field('additional_content') ?>
      <?php endif;
    endif;
  ?>
</div>

<?php get_template_part( 'template-parts/four-icon-section' )?>
<div class="container mx-0 px-0 mt-4 mw-100">
  <?php get_template_part('template-parts/more-about-pie'); ?>
</div>

<?php get_footer(); ?>
