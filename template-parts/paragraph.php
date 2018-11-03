<?php
/**
 * Paragraph template
 *
 * @package patientsineducation
 */

  if(get_field('enable_paragraph_cf') && get_field('paragraph_content')): ?>
    <div class="container">
      <section>
        <?php the_field('paragraph_content') ?>
      </section>
    </div>
  <?php endif;
?>
