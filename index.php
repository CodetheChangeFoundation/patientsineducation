<?php
/**
 * Index template
 *
 * @package patientsineducation
 */
?>

<?php get_header(); ?>

<?php
if (have_posts()):
  while (have_posts()): the_post();
    /* Display the page title and under-navbar styling only if it's not the home page */
    if (!is_front_page()): ?>
      <div class="pie-under-navbar pt-4">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center px-5">
              <h2><?php the_title(); ?></h2>
              <h5><?php echo strip_tags(get_the_content(),'<br>'); ?></h5>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_template_part('template-parts/contact-forms')?>
<?php get_template_part('template-parts/carousel')?>
<?php get_template_part('template-parts/paragraph')?>
<?php get_template_part('template-parts/directors')?>
<?php get_template_part('template-parts/help-section')?>
<?php get_template_part('template-parts/outreach'); ?>
<?php get_template_part('template-parts/organizations-section')?>

<?php
  global $post;
  $post_slug = $post->post_name;
  if ($post_slug == 'engagements'):
    get_template_part('content', 'post');
  endif;
?>


<?php if (get_field('enable_content') && get_field('additional_content')): ?>
  <div>
    <?php the_field('additional_content'); ?>
  </div>
<?php endif; ?>

<?php get_template_part('template-parts/four-icon-section'); ?>
<div class="container mx-0 px-0 mt-4 mw-100">
  <?php get_template_part('template-parts/more-about-pie'); ?>
</div>

<?php get_footer(); ?>