<?php
/**
 * Paragraph template
 *
 * @package patientsineducation
 */
if (get_field('enable_paragraph') && get_field('paragraph_title')):
?>
  <div class="container py-4">
    <h1 class="font-weight-bold my-4"><?php the_field('paragraph_title') ?></h1>
    <?php if (get_field('paragraph_content')): ?>
      <section>
        <?php the_field('paragraph_content') ?>
      </section>
    <?php endif; ?>
  </div>
<?php endif; ?>
