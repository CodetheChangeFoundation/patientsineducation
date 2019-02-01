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

<?php get_template_part('template-parts/carousel')?>
<?php get_template_part('template-parts/paragraph')?>
<?php get_template_part('template-parts/help-section')?>
<?php get_template_part('template-parts/outreach'); ?>
<?php get_template_part('template-parts/four-icon-section'); ?>
<?php get_template_part('template-parts/more-about-pie'); ?>
<?php get_template_part('template-parts/directors')?>
<?php get_template_part('template-parts/organizations-section')?>
<?php get_template_part('template-parts/contact-forms')?>

<?php
  global $post;
  $post_slug = $post->post_name;
  if ($post_slug == 'engagements'):
    get_template_part('content', 'post');
  endif;
?>

<?php get_footer(); ?>