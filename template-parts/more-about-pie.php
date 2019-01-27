<?php
/**
 * More About PIE template
 *
 * @package patientsineducation
 */

if( get_field('enable_more_about_pie') && get_field('number_of_sections') ): ?>
  <div>
    <h1 class="text-center font-weight-bold text-large">More About PIE</h1>
  </div>
  <?php for ($x = 1; $x <= get_field('number_of_sections'); $x++) {
    if ($x%2 == 1) {
      $row = "odd";
    } elseif ($x%2 == 0) {
      $row = "even";
    }
    $name_of_the_variable = "more_about_us_"."$x";
    $$name_of_the_variable = get_field($name_of_the_variable);
    if ($$name_of_the_variable): ?>
    <div class="row row-<?php echo $row; ?> position-relative">
        <div class="thumbnail-<?php echo $x; ?> col-12 col-md-6 col-lg-6 order-<?php echo 2*$x-1; ?> <?php if ($row == "even"){echo "order-md-".(string)(2*$x);}?> <?php if ($row == "even"){echo "order-lg-".(string)(2*$x);}?>" style="background-image: url(<?php echo $$name_of_the_variable['thumbnail']; ?>);"></div>
        <div class="content-container-<?php echo $x; ?> col-12 col-md-6 col-lg-6 order-<?php echo 2*$x; ?> <?php if ($row == "even"){echo "order-md-".(string)(2*$x-1);}?> <?php if ($row == "even"){echo "order-lg-".(string)(2*$x-1);}?>">
          <span class="dot-<?php echo $x; ?>"></span>
          <h3 class="font-weight-bold title-<?php echo $x; ?>"><?php echo $$name_of_the_variable['title']; ?></h3>
          <p class="content-text-<?php echo $x; ?>"><?php echo $$name_of_the_variable['content']; ?></p>
        </div>
    </div>
    <?php endif;?>
  <?php } ?>
<?php endif;?>