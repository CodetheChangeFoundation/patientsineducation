<?php
/**
 * Committees template
 *
 * @package patientsineducation
 */

if (get_field('enable_committees_section')):
?>
  <div class="pt-4 pb-4 px-5 bg-grey" id="committees">
    <div class="container">
      <?php if (get_field('committees_title')): ?>
        <h1 class="pb-4"><?php the_field('committees_title') ?></h1>
      <?php endif; ?>

      <?php if (get_field('committees_paragraph')): ?>
        <?php the_field('committees_paragraph') ?>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>
