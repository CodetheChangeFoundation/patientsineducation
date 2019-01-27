<?php
/**
 * Outreach section template
 *
 * @package patientsineducation
 */
if (get_field('enable_outreach_section')):
?>
  <div class="container">
    <div class="row">
      <h1 class="font-weight-bold text-left mb-5"><?php the_field('outreach_title'); ?></h1>
    </div>
    <div class="row text-center mt-5">
      <?php while (have_rows('outreach')): the_row(); ?>
        <?php if (!empty(get_sub_field('image')) && !empty(get_sub_field('content'))): ?>
          <div class="col-12 col-lg-3 outreach m-auto">
            <img
              src="<?php echo get_sub_field('image')['url']; ?>"
              alt="<?php echo get_sub_field('image')['alt']; ?>"
              class="rounded-circle outreach-img"
            />
            <h1 class="t1"><?php echo the_sub_field('title'); ?></h1>
            <p><?php echo the_sub_field('content'); ?></p>
          </div>
        <?php endif; ?>
      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>