<?php
/**
 * Four icon section template
 *
 * @package patientsineducation
 */

if (get_field('enable_four_icon_section')):
?>
  <div class="four-icon-section-wave">
    <svg viewBox="0 0 500 110" preserveAspectRatio="none" class="w-100 h-100">
      <path class="section-wave" d="M 0 50 Q 83 100 167 50 Q 250 0 333 50 Q 417 100 500 50 L500.00,150.00 L0,150.00 Z"></path>
    </svg>
  </div>

  <div class="bg-grey pb-4">
    <div class="container text-center">
      <section>
        <?php
        $vertical_positions = array('top','bottom');
        foreach ($vertical_positions as $vertical_position) : ?>
          <div class="row">
            <?php
            $horizontal_positions = array('left','right');
            foreach ($horizontal_positions as $horizontal_position) : ?>
              <div class="col-12 col-md-6 mb-4">
                <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center">
                  <?php 
                  $image = get_field('fi_' . $vertical_position . '_' . $horizontal_position .'_image');
                  if ($image): ?>
                    <div class="four-icon-section-image rounded-circle">
                      <img class="img-fluid img-cover h-100 rounded-circle" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                  <?php endif ?>

                  <?php if (get_field('fi_' . $vertical_position . '_' . $horizontal_position .'_title')): ?>
                      <h3 class="ml-0 ml-sm-3 font-weight-bold"><?php the_field('fi_' . $vertical_position . '_' . $horizontal_position .'_title') ?></h3>
                  <?php endif ?>
                </div>

                <div>
                  <?php if (get_field('fi_' . $vertical_position . '_' . $horizontal_position .'_text')): ?>
                      <p><?php the_field('fi_' . $vertical_position . '_' . $horizontal_position .'_text') ?><p>
                  <?php endif ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endforeach; ?>
      </section>
    </div>
  </div>

  <div class="help-section-wave">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" class="w-100 h-100">
      <path class="section-wave" d="M 0 50 Q 83 100 167 50 Q 250 0 333 50 Q 417 100 500 50 L500.00,0.00 L0.00,0.00 Z"></path>
    </svg>
  </div>
<?php endif; ?>
