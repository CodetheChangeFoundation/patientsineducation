<?php
/**
 * Help section template
 *
 * @package patientsineducation
 */

  if(get_field('enable_help_section_cf')): ?>
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
  <?php endif;
?>
