<?php
/**
 * Organizations template
 *
 * @package patientsineducation
 */

if (get_field('enable_organizations')):
?>
  <div class="container pt-4 pb-4">
    <?php if(get_field('organizations_title')): ?>
      <h1 class="text-center pb-4"><?php the_field('organizations_title') ?></h1>
    <?php endif; ?>

    <div class="table-responsive ml-auto mr-auto max-width-650">
      <table class="table border">
        <thead>
          <tr>
            <th class="h4 text-center" colspan="2">
              <?php if (get_field('organization_subtitle_left')): ?>
                <h4 class="mb-0"><?php the_field('organization_subtitle_left') ?></h4>
              <?php endif; ?>
            </th>
            <th class="text-center" scope="col">
              <?php if (get_field('organization_subtitle_right')): ?>
                <h4 class="mb-0"><?php the_field('organization_subtitle_right') ?></h4>
              <?php endif; ?>
            </th>
          </tr>
        </thead>

        <tbody>
          <?php while (have_rows('organization')): the_row(); ?>
            <?php if (!empty(get_sub_field('name'))): ?>
              <tr>
                <td>
                  <div
                    style="background-image: url(<?php echo the_sub_field('image')['url']; ?>);"
                    class="organizations-section-image rounded-circle"
                  >
                  </div>
                </td>

                <td>
                  <h4>
                    <?php echo the_sub_field('name') ?>
                  </h4>
                </td>

                <td class="text-center">
                  <?php if (!empty(get_sub_field('website_link'))): ?>
                      <a class="btn btn-primary" href="<?php echo get_sub_field('website_link')['url']; ?>" target="_blank">
                      <?php
                      if (!empty(get_sub_field('website_link')['title'])):
                        echo get_sub_field('website_link')['title'];
                      else:
                        echo "Learn More";
                      endif;
                      ?>
                      </a>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endif; ?>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
<?php endif; ?>
