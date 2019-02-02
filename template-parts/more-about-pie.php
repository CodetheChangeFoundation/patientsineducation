<?php
/**
 * More About PIE template
 *
 * @package patientsineducation
 */

if (get_field('enable_more_about_pie')):
?>
  <div class="container mx-0 px-0 mt-4 mw-100">
    <div>
      <h1 class="text-center font-weight-bold mb-5"><?php echo the_field('more_about_pie_title') ?></h1>
    </div>
    <div id="more-about-pie-flex" class="d-flex flex-column justify-content-center align-items-center">
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
          <div class="d-flex flex-column flex-md-row align-items-center row-<?php echo $row; ?>">
            <div
              class="mb-5 thumbnail d-flex flex-fill about-pie-img order-<?php echo 2*$index-1; ?> <?php if ($row == "even"){echo "order-md-".(string)(2*$index);}?> <?php if ($row == "even"){echo "order-lg-".(string)(2*$index);}?>"
              style="background-image: url('<?php echo the_sub_field('image'); ?>');"
            >
            </div>
            <div class="mb-5 mx-5 d-flex flex-fill flex-column p-4 col-<?php echo $row; ?> order-<?php echo 2*$index; ?> <?php if ($row == "even"){echo "order-md-".(string)(2*$index-1);}?> <?php if ($row == "even"){echo "order-lg-".(string)(2*$index-1);}?>">
              <h3 class="font-weight-bold"><?php echo the_sub_field('title'); ?></h3>
              <p><?php echo the_sub_field('content'); ?></p>
            </div>
          </div>
          <?php $index++ ?>
        <?php endif; ?>
      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>