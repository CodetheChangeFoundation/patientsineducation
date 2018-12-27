<?php
/**
 * Paragraph template
 *
 * @package patientsineducation
 */

  if(get_field('enable_paragraph_cf')): ?>
    <div class="container">
      <?php if(get_field('paragraph_title')): ?>
        <h1><?php the_field('paragraph_title') ?></h1>
      <?php endif; ?>

      <?php if(get_field('paragraph_content')): ?>
        <section>
          <?php the_field('paragraph_content') ?>
        </section>
      <?php endif; ?>
    </div>
  <?php endif;
?>
