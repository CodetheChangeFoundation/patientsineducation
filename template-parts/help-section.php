<?php
/**
 * Help section template
 *
 * @package patientsineducation
 */

if (get_field('enable_help_section') && get_field('help_section_title')):
?>
  <div class="bg-grey pt-4">
    <div class="container text-center">
      <h1 class="font-weight-bold text-left pb-4"><?php the_field('help_section_title') ?></h1>
      <section>
        <div class="row">
          <?php
          $positions = array('left', 'middle', 'right');
          foreach ($positions as $position) :
          ?>
            <div class="col-md-4 col-xs-12">
              <?php 
              $image = get_field('hs_' . $position . '_column_image');
              if ($image): ?>
                <div class="help-section-image rounded-circle">
                  <img class="img-fluid img-cover h-100 rounded-circle" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
              <?php endif; ?>

              <?php if (get_field('hs_' . $position .'_column_title')): ?>
                  <h3 class="font-weight-bold"><?php the_field('hs_' . $position .'_column_title') ?></h3>
              <?php endif; ?>

              <?php if (get_field('hs_' . $position .'_column_text')): ?>
                  <p><?php the_field('hs_' . $position .'_column_text') ?><p>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </section>
    </div>
  </div>

  <div class="help-section-wave">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" class="w-100 h-100">
      <path class="section-wave" d="M 0 50 Q 83 100 167 50 Q 250 0 333 50 Q 417 100 500 50 L500.00,0.00 L0.00,0.00 Z"></path>
    </svg>
  </div>
<?php endif; ?>
