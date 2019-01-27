<?php
/**
 * Director's grid template
 *
 * @package patientsineducation
 */
?>
<div class="bg-grey container-fluid">
  <div class="row directors-grid">
    <?php
    if (get_field('enable_directors_grid')):
      while (have_rows('director')): the_row();
    ?>
        <div class="col-12 col-sm-6 col-lg-4 text-center pt-5">
          <?php
          $image = get_sub_field('image');
          $name = get_sub_field('name');
          $desc = get_sub_field('description');
          if (!empty($image) && !empty($name) && !empty($desc)):
          ?>
            <figure class="m-auto">
              <div>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="w-100 d-block"/>
                <?php if (!empty(get_sub_field('link'))): ?>
                  <div class="button-container p-1">
                    <button class="btn btn-primary">
                      <a class="link" href="<?php echo the_sub_field('link') ?>" target="_blank">
                        Learn More
                      </a>
                    </button>
                  </div>
                <?php endif; ?>
              </div>
              <figcaption class="p-2">
                <p class="w-100"><?php echo $desc?></p>
              </figcaption>
            </figure>
            <div class="employee-name pt-2">
              <h3 class="m-0"><?php echo $name ?></h3>
            </div>
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>