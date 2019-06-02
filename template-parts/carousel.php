<?php
/**
 * Carousel template
 *
 * @package patientsineducation
 */
if (get_field('enable_carousel')):
?>
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php
      $index = 0;
      while (have_rows('carousel_image')): the_row(); ?>
        <li data-target="#carousel" data-slide-to="<?php echo $index ?>" class="<?php if ($index++ == 0) { echo 'active'; } ?>"></li>
      <?php endwhile; ?>
    </ol>

    <div class="carousel-inner" role="listbox">
      <?php
      $first = true;
      while (have_rows('carousel_image')): the_row(); ?>
        <div class="carousel-item background-image <?php if ($first) { echo 'active'; } ?>">
          <img class="d-block h-100 w-100 img-fluid img-cover" src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>">
        </div>
      <?php $first = false; endwhile; ?>
    </div>

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<?php endif; ?>