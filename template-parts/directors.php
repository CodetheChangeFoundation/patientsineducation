<?php
/**
 * Director's grid template
 *
 * @package patientsineducation
 */
?>
<?php if (get_field('enable_directors_grid')): ?>
  <div class="bg-grey">
    <div class="container pt-4">
      <div class="row">
        <div class="col-12">
          <h1><?php the_field('board_of_directors_title') ?></h1>
        </div>
      </div>
      <div class="row directors-grid">
        <?php
        if (get_field('enable_directors_grid')):
          while (have_rows('director')): the_row();
        ?>
            <div class="col-12 col-sm-6 col-lg-4 text-center pb-5">
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
                        <a class="btn btn-primary" href="<?php echo get_sub_field('link')['url'] ?>" target="_blank">
                          <?php
                          if (!empty(get_sub_field('link')['title'])):
                            echo get_sub_field('link')['title'];
                          else:
                            echo "Learn More";
                          endif;
                          ?>
                        </a>
                      </div>
                    <?php endif; ?>
                  </div>
                  <figcaption class="p-2">
                    <p class="w-100"><?php echo $desc?></p>
                  </figcaption>
                </figure>
                <div class="employee-name pt-2">
                  <h4 class="m-0"><?php echo $name ?></h4>
                </div>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>