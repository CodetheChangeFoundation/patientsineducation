<?php
/**
 * Opportunities template
 *
 * @package patientsineducation
 */
if (get_field('enable_opportunities_section')):
?>
  <div class="pt-4 pb-4 px-5 bg-grey">
    <?php if (get_field('opportunities_title')): ?>
      <h1 class="text-center pb-4"><?php the_field('opportunities_title') ?></h1>
    <?php endif; ?>

    <div class="row justify-content-center">
      <div class="col">
        <div class="table-responsive ml-auto mr-auto">
          <table class="table border">
            <thead>
              <tr>
                <?php if (get_field('column_one_title')): ?>
                  <th class="text-center" scope="col">
                    <h4 class="mb-0"><?php the_field('column_one_title') ?></h4>
                  </th>
                <?php endif; ?>
                <?php if (get_field('column_two_title')): ?>
                  <th class="text-center" scope="col">
                    <h4 class="mb-0"><?php the_field('column_two_title') ?></h4>
                  </th>
                <?php endif; ?>
                <?php if (get_field('column_three_title')): ?>
                  <th class="text-center" scope="col">
                    <h4 class="mb-0"><?php the_field('column_three_title') ?></h4>
                  </th>
                <?php endif; ?>
                <?php if (get_field('column_four_title')): ?>
                  <th class="text-center" scope="col">
                    <h4 class="mb-0"><?php the_field('column_four_title') ?></h4>
                  </th>
                <?php endif; ?>
              </tr>
            </thead>

            <tbody>
              <?php while (have_rows('opportunity')): the_row(); ?>
                <tr>
                  <?php if (!empty(get_sub_field('column_1'))): ?>
                    <td>
                      <h5>
                        <?php echo the_sub_field('column_1') ?>
                      </h5>
                    </td>
                  <?php endif; ?>

                  <?php if (!empty(get_sub_field('column_2'))): ?>
                    <td>
                      <h5>
                        <?php echo the_sub_field('column_2') ?>
                      </h5>
                    </td>
                  <?php endif; ?>

                  <?php if (!empty(get_sub_field('column_3'))): ?>
                    <td>
                      <h5>
                        <?php echo the_sub_field('column_3') ?>
                      </h5>
                    </td>
                  <?php endif; ?>

                  <?php if (!empty(get_sub_field('column_4'))): ?>
                    <td>
                      <h5>
                        <?php echo the_sub_field('column_4') ?>
                      </h5>
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
