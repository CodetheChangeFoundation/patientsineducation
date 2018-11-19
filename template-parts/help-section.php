<?php
/**
 * Help section template
 *
 * @package patientsineducation
 */

  if(get_field('enable_help_section_cf')): ?>
    <div class="help-section">
      <div class="container text-center">
        <?php if(get_field('help_section_title')): ?>
            <h1 id="help-section-title"><?php the_field('help_section_title') ?></h1>
        <?php endif ?>

        <section>
          <div class="row">
            <?php
            $positions = array('right', 'middle', 'left');
            foreach ($positions as $position) { ?>
              <div class="col-md-4 col-xs-12">
                <?php if(get_field('hs_' . $position . '_column_image')): ?>
                  <div style="background-image: url(<?php echo get_field('hs_' . $position . '_column_image')['url']; ?>)" class="help-section-image rounded-circle"></div>
                <?php endif ?>

                <?php if(get_field('hs_' . $position .'_column_title')): ?>
                    <h2><?php the_field('hs_' . $position .'_column_title') ?></h2>
                <?php endif ?>

                <?php if(get_field('hs_' . $position .'_column_text')): ?>
                    <p><?php the_field('hs_' . $position .'_column_text') ?><p>
                <?php endif ?>
              </div>
            <?php } ?>
          </div>
        </section>
      </div>
    </div>

    <div id="help-section-wave">
      <svg viewBox="0 0 500 150" preserveAspectRatio="none">
        <path d="M 0 50 Q 83 100 167 50 Q 250 0 333 50 Q 417 100 500 50 L500.00,0.00 L0.00,0.00 Z"></path>
      </svg>
    </div>

  <?php endif;
?>
