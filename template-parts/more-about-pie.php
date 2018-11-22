<?php
/**
 * More About PIE template
 *
 * @package patientsineducation
 */
$more_about_us_1 = get_field('more_about_us_1');
$more_about_us_2 = get_field('more_about_us_2');
$more_about_us_3 = get_field('more_about_us_3');
$more_about_us_4 = get_field('more_about_us_4');
  if($more_about_us_1): ?>
    <div class="row row-odd position-relative">
        <div class="thumbnail-1 col-12 col-md-6 col-lg-6 order-1" style="background-image: url(<?php echo $more_about_us_1['thumbnail']; ?>);"></div>
        <div class="content-container-1 col-12 col-md-6 col-lg-6 order-2">
          <h3 class="font-weight-bold title-1"><?php echo $more_about_us_1['title']; ?></h1>
          <p class="content-text-1"><?php echo $more_about_us_1['content']; ?></p>
        </div>
    </div>
  <?php endif;
  if($more_about_us_2): ?>
    <div class="row row-even position-relative">
        <div class="thumbnail-2 col-12 col-md-6 col-lg-6 order-3 order-md-4 order-lg-4" style="background-image: url(<?php echo $more_about_us_2['thumbnail']; ?>);"></div>
        <div class="content-container-2 text-right col-12 col-md-6 col-lg-6 order-4 order-md-3 order-lg-3">
          <h3 class="font-weight-bold title-2"><?php echo $more_about_us_2['title']; ?></h1>
          <p class="content-text-2"><?php echo $more_about_us_2['content']; ?></p>
        </div>
      </div>
  <?php endif;
  if($more_about_us_3): ?>
    <div class="row row-odd position-relative">
        <div class="thumbnail-3 col-12 col-md-6 col-lg-6 order-5" style="background-image: url(<?php echo $more_about_us_3['thumbnail']; ?>);"></div>
        <div class="content-container-3 col-12 col-md-6 col-lg-6 order-6">
          <h3 class="font-weight-bold title-3"><?php echo $more_about_us_3['title']; ?></h1>
          <p class="content-text-3"><?php echo $more_about_us_3['content']; ?></p>
        </div>
      </div>
  <?php endif;
  if($more_about_us_4): ?>
    <div class="row row-even position-relative">
        <div class="thumbnail-4 col-12 col-md-6 col-lg-6 order-7 order-md-8 order-lg-8" style="background-image: url(<?php echo $more_about_us_4['thumbnail']; ?>);"></div>
        <div class="content-container-4 text-right col-12 col-md-6 col-lg-6 order-8 order-md-7 order-lg-7">
          <h3 class="font-weight-bold title-4"><?php echo $more_about_us_4['title']; ?></h1>
          <p class="content-text-4"><?php echo $more_about_us_4['content']; ?></p>
        </div>
        <div class="w-100"></div>
    </div>
  <?php endif;
?>
