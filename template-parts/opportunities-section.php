<?php
/**
 * Opportunities template
 *
 * @package patientsineducation
 */
if (get_field('enable_opportunities_section')):
?>
  <div class="container pt-4 pb-4">
    <?php if(get_field('opportunities_title')): ?>
      <h1 class="text-center pb-4"><?php the_field('opportunities_title') ?></h1>
    <?php endif; ?>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="table-responsive ml-auto mr-auto">
          <table class="table border">
            <thead>
              <tr>
                <th class="text-center" scope="col">
                  <?php if (get_field('column_one_title')): ?>
                    <h4 class="mb-0"><?php the_field('column_one_title') ?></h4>
                  <?php endif; ?>
                </th>
                <th class="text-center" scope="col">
                  <?php if (get_field('column_two_title')): ?>
                    <h4 class="mb-0"><?php the_field('column_two_title') ?></h4>
                  <?php endif; ?>
                </th>
                <th class="text-center" scope="col">
                  <?php if (get_field('column_three_title')): ?>
                    <h4 class="mb-0"><?php the_field('column_three_title') ?></h4>
                  <?php endif; ?>
                </th>
                <th class="text-center" scope="col">
                  <?php if (get_field('column_four_title')): ?>
                    <h4 class="mb-0"><?php the_field('column_four_title') ?></h4>
                  <?php endif; ?>
                </th>
              </tr>
            </thead>

            <tbody>
              <?php while (have_rows('opportunity')): the_row(); ?>
                <tr>
                  <?php if (!empty(get_sub_field('column_1'))): ?>
                    <td>
                      <h4>
                        <?php echo the_sub_field('column_1') ?>
                      </h4>
                    </td>
                  <?php endif; ?>

                  <?php if (!empty(get_sub_field('column_2'))): ?>
                    <td>
                      <h4>
                        <?php echo the_sub_field('column_2') ?>
                      </h4>
                    </td>
                  <?php endif; ?>

                  <?php if (!empty(get_sub_field('column_3'))): ?>
                    <td>
                      <h4>
                        <?php echo the_sub_field('column_3') ?>
                      </h4>
                    </td>
                  <?php endif; ?>

                  <?php if (!empty(get_sub_field('column_4'))): ?>
                    <td>
                      <h4>
                        <?php echo the_sub_field('column_4') ?>
                      </h4>
                    </td>
                  <?php endif; ?>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
