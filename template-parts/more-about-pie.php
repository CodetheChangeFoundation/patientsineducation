<?php
/**
 * More About PIE template
 *
 * @package patientsineducation
 */

if (get_field('enable_more_about_pie')):
?>
  <div class="more-about-pie">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1><?php echo the_field('more_about_pie_title') ?></h1>
        </div>
      </div>

      <?php $index = 1; ?>
      <?php while (have_rows('more_about_pie')): the_row(); ?>
        <?php if (!empty(get_sub_field('image') && !empty(get_sub_field('content')))): ?>
          <?php
          $isLeft = ($index++ % 2 == 1);
          $contentClasses = 'border rounded-left-5 rounded-right-5 px-5 py-4 mt-4 mt-md-0';
          $content = '<h3>' . get_sub_field('title') . '</h3>' . get_sub_field('content');
          $image = get_sub_field('image');
          ?>
          <div class="row py-4 overflow-hidden overflow-sm-visible">
            <div class="col-12 <?php if ($isLeft) { echo 'col-md-5 stretch-left-md-5 background-image rounded-right-5 more-about-pie-image px-0'; } else { echo 'col-md-7 order-last order-md-first'; } ?>">
              <?php if (!$isLeft): ?>
                <div class="<?php echo $contentClasses ?>">
                  <?php echo $content; ?>
                </div>
              <?php else: ?>
                <img class="img-fluid img-cover rounded-right-5" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
              <?php endif; ?>
            </div>
            <div class="col-12 <?php if (!$isLeft) { echo 'col-md-5 stretch-right-md-5 order-first order-md-last background-image rounded-left-5 more-about-pie-image px-0'; } else { echo 'col-md-7'; } ?>">
              <?php if ($isLeft): ?>
                <div class="<?php echo $contentClasses ?>">
                  <?php echo $content; ?>
                </div>
              <?php else: ?>
                <img class="img-fluid img-cover rounded-left-5" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>
      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>