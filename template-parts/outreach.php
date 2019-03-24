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
      <div class="col-12">
        <h1 class="font-weight-bold text-left"><?php the_field('outreach_title'); ?></h1>
      </div>
    </div>
    <div class="row text-center">
      <?php 
      $i = 0;
      while (have_rows('outreach')): the_row(); ?>
        <?php 
        $spacing = "col-12 col-lg-4 pt-4";
        $classes = ($i >= 3 ? $spacing." d-none" : $spacing);
        if ($i == 3):
        ?>
          <div class="col-12 pt-3 pb-3">
            <a class="btn btn-primary" id="outreach-archive">Show Archived</a>
          </div>
        <?php endif; ?>
        <?php if (!empty(get_sub_field('image')) && !empty(get_sub_field('content'))): ?>
          <div class="<?php echo $classes; ?>" id="<?php echo "outreach-".$i; ?>">
            <img
              src="<?php echo get_sub_field('image')['url']; ?>"
              alt="<?php echo get_sub_field('image')['alt']; ?>"
              class="rounded-circle outreach-img"
            />
            <div class="border rounded-4 p-2">
              <div class="col-12 pt-5 px-4 mt-5">
                <h1 class="t1"><?php echo the_sub_field('title'); ?></h1>
                <p><?php echo the_sub_field('content'); ?></p>
              </div>
            </div>
          </div>
        <?php endif; ?>
        <?php $i++; ?>
      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>