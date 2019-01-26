<?php
/**
 * Directors template
 *
 * @package patientsineducation
 */
?>
<div class="row">
<?php
  if(get_field('enable_directors_grid')):
    while (have_rows('director')): the_row();
?>

    <div class="col-12 col-sm-6 col-lg-4 text-center pt-5">
      <?php
        $image = get_sub_field('image');
        $name = get_sub_field('name');
        $desc = get_sub_field('description');
        if(!empty($image) && !empty($name) && !empty($desc)):
      ?>
      <figure class="m-auto">
        <div class="img-container">
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="w-100 d-block"/>
          <?php
            if(!empty(get_sub_field('link'))):
          ?>
          <div class="button-container">
            <button type="submit" href="<?php echo get_sub_field('link') ?>">Learn More</button>
          </div>
            <?php endif; ?>
        </div>
        <figcaption class="p-2 w-100 pre-scrollable">
          <p class="m-0"><?php echo $desc?></p>
        </figcaption>
      </figure>
      <div class="employee-name pt-2">
        <h3 class="m-0"><?php echo $name ?></h3>
      </div>
      <?php endif; ?>
    </div>

<?php
    endwhile;
  endif;
?>
</div>