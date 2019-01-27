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
      $first = true;
      $index = 0;
      while (have_rows('carousel_image')): the_row();
      ?>
        <li data-target="#carousel" data-slide-to="<?php echo $index ?>" class="<?php if ($first): echo 'active'; endif; ?>"></li>
      <?php
        $first = false;
        $index++;
      endwhile;
      ?>
    </ol>

    <div class="carousel-inner">
      <?php
      $first = true;
      while (have_rows('carousel_image')): the_row();
      ?>
        <div
          class="carousel-item <?php if ($first): echo 'active'; endif; ?>"
          style="background-image: url('<?php echo get_sub_field('image')['url']; ?>');"
        >
        </div>
      <?php
        $first = false;
      endwhile;
      ?>
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