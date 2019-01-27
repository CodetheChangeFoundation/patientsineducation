<?php
/**
 * Paragraph template
 *
 * @package patientsineducation
 */

  if( get_field('enable_paragraph_cf') && get_field('paragraph_title') ): ?>
    <div class="container py-3">
      <h2 class="font-weight-bold my-4"><?php the_field('paragraph_title') ?></h2>

      <?php if(get_field('paragraph_content')): ?>
        <section>
          <?php the_field('paragraph_content') ?>
        </section>
      <?php endif; ?>
    </div>
  <?php endif; ?>
