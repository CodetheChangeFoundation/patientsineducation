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
            <th class="h4 text-center" colspan="2">
              <?php if(get_field('os_organization_subtitle_left')): ?>
                <h4 class="mb-0"><?php the_field('os_organization_subtitle_left') ?></h4>
              <?php endif ?>
            </th>
            <th class="text-center" scope="col">
              <?php if(get_field('os_organization_subtitle_right')): ?>
                <h4 class="mb-0"><?php the_field('os_organization_subtitle_right') ?></h4>
              <?php endif ?>
            </th>
          </tr>
        </thead>

        <tbody>
          <?php for ($i = 1; $i <= get_field('number_of_organizations'); $i++) {
            $organization = "organization_"."$i";
            $$organization = get_field($organization);
            if ($$organization): ?>
              <tr>
                <td>
                  <div style="background-image: url(<?php echo $$organization['image']; ?>)" class="organizations-section-image rounded-circle"></div>
                </td>

                <td>
                  <h4>
                    <?php echo $$organization['name']; ?>
                  </h4>
                </td>

                <td class="text-center">
                  <a href="<?php echo $$organization['website_link']; ?>" target="_blank" class="btn btn-info">Learn More</a>
                </td>
              </tr>
            <?php endif ?>
          <?php } ?>
        </tbody>

      </table>
    </div>
  </div>
<?php endif; ?>
