<?php
/**
 * More About PIE template
 *
 * @package patientsineducation
 */

if (get_field('enable_more_about_pie')):
?>
  <div>
    <h1 class="text-center font-weight-bold text-large"><?php echo the_field('more_about_pie_title') ?></h1>
  </div>
  <?php
  $index = 1;
  while (have_rows('more_about_pie')): the_row();
    if (!empty(get_sub_field('image') && !empty(get_sub_field('content')))):
      if ($index%2 == 1):
        $row = "odd";
      elseif ($index%2 == 0):
        $row = "even";
      endif;
    ?>
      <div class="row row-<?php echo $row; ?> position-relative">
        <div
          class="thumbnail-<?php echo $index; ?> col-12 col-md-6 col-lg-6 order-<?php echo 2*$index-1; ?> <?php if ($row == "even"){echo "order-md-".(string)(2*$index);}?> <?php if ($row == "even"){echo "order-lg-".(string)(2*$index);}?>"
          style="background-image: url('<?php echo the_sub_field('image'); ?>');"
        >
        </div>
        <div class="content-container-<?php echo $index; ?> col-12 col-md-6 col-lg-6 order-<?php echo 2*$index; ?> <?php if ($row == "even"){echo "order-md-".(string)(2*$index-1);}?> <?php if ($row == "even"){echo "order-lg-".(string)(2*$index-1);}?>">
          <span class="dot-<?php echo $index; ?>"></span>
          <h3 class="font-weight-bold title-<?php echo $index; ?>"><?php echo the_sub_field('title'); ?></h3>
          <p class="content-text-<?php echo $index; ?>"><?php echo the_sub_field('content'); ?></p>
        </div>
      </div>
      <?php $index++ ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>