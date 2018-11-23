<?php
/**
 * Four icon section template
 *
 * @package patientsineducation
 */

  if(get_field('enable_four_icon_section_cf')): ?>
    <div id="four-icon-section-wave">
      <svg viewBox="0 0 500 110" preserveAspectRatio="none" class="w-100 h-100">
        <path d="M 0 50 Q 83 100 167 50 Q 250 0 333 50 Q 417 100 500 50 L500.00,150.00 L0,150.00 Z"></path>
      </svg>
    </div>

    <div class="four-icon-section pb-4">
      <div class="container text-center">
        <section>
          <?php
          $vertical_positions = array('top','bottom');
          foreach ($vertical_positions as $vertical_position) { ?>

            <div class="row">
              <?php
              $horizontal_positions = array('left','right');
              foreach ($horizontal_positions as $horizontal_position) { ?>

                <div class="col-md-6">
                  <div>
                    <?php if(get_field('fi_' . $vertical_position . '_' . $horizontal_position .'_image')): ?>
                      <div style="background-image: url(<?php echo get_field('fi_' . $vertical_position . '_' . $horizontal_position .'_image')['url']; ?>)" class="four-icon-section-image rounded-circle"></div>
                    <?php endif ?>

                    <?php if(get_field('fi_' . $vertical_position . '_' . $horizontal_position .'_title')): ?>
                        <h2><?php the_field('fi_' . $vertical_position . '_' . $horizontal_position .'_title') ?></h2>
                    <?php endif ?>
                  </div>

                  <div>
                    <?php if(get_field('fi_' . $vertical_position . '_' . $horizontal_position .'_text')): ?>
                        <p><?php the_field('fi_' . $vertical_position . '_' . $horizontal_position .'_text') ?><p>
                    <?php endif ?>
                  </div>
                </div>

              <?php } ?>
            </div>
          <?php } ?>
        </section>
      </div>
    </div>

   <?php endif;
?>
