<?php
/**
 * Organizations we work with section template
 *
 * @package patientsineducation
 */

  if(get_field('enable_organizations_section_content_cf')): ?>
    <div class="container pt-4 pb-4">

      <?php if(get_field('os_organizations_title')): ?>
        <h1 class="text-center pb-4"><?php the_field('os_organizations_title') ?></h1>
      <?php endif ?>

      <div class="table-responsive ml-auto mr-auto max-width-650">
        <table class="table border">

          <thead>
            <tr>
              <th class="h4 text-left align-middle pl-5" colspan="2">
                <?php if(get_field('os_organization_subtitle_left')): ?>
                  <h4><?php the_field('os_organization_subtitle_left') ?></h4>
                <?php endif ?>
              </th>
              <th class="text-center align-middle" scope="col">
                <?php if(get_field('os_organization_subtitle_right')): ?>
                  <h4><?php the_field('os_organization_subtitle_right') ?></h4>
                <?php endif ?>
              </th>
            </tr>
          </thead>

          <tbody>
            <?php for ($i = 1; $i <= 30; $i++) {?>
              <?php if(get_field('os_organization_name_' . $i)): ?>
                <tr>
                  <td>
                    <?php if(get_field('os_organization_image_' . $i)): ?>
                      <div style="background-image: url(<?php echo get_field('os_organization_image_' . $i)['url']; ?>)" class="organizations-section-image rounded-circle"></div>
                    <?php endif ?>
                  </td>

                  <td><h4><?php the_field('os_organization_name_' . $i) ?></h4></td>

                  <td class="text-center">
                    <?php if(get_field('os_organization_website_' . $i)): ?>
                      <a href="<?php the_field('os_organization_website_' . $i) ?>" target="_blank" class="btn btn-info">Learn More</a>
                    <?php endif ?>
                  </td>
                </tr>
              <?php endif ?>
            <?php } ?>
          </tbody>

        </table>
      </div>
    </div>
  <?php endif;
  ?>
