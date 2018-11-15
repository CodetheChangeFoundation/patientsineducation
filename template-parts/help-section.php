<?php
/**
 * Help section template
 *
 * @package patientsineducation
 */

  if(get_field('enable_help_section_cf')): ?>
    <div class="container text-center">
      <section>
        <?php if(get_field('help_section_title')): ?>
            <h1 id="help-section-title"><?php the_field('help_section_title') ?></h1>
        <?php endif ?>
        <div class="row">
          <div class="col-md-4 col-xs-12">
            <?php if(get_field('hs_left_column_image')): ?>
              <div style="background-image: url(<?php echo get_field('hs_left_column_image')['url']; ?>)" class="help-section-image rounded-circle"></div>
            <?php endif ?>

            <?php if(get_field('hs_left_column_title')): ?>
                <h2><?php the_field('hs_left_column_title') ?></h2>
            <?php endif ?>

            <?php if(get_field('hs_left_column_text')): ?>
                <?php the_field('hs_left_column_text') ?>
            <?php endif ?>
          </div>

          <div class="col-md-4 col-xs-12">
            <?php if(get_field('hs_middle_column_image')): ?>
              <div style="background-image: url(<?php echo get_field('hs_middle_column_image')['url']; ?>)" class="help-section-image rounded-circle"></div>
            <?php endif ?>

            <?php if(get_field('hs_middle_column_title')): ?>
                <h2><?php the_field('hs_middle_column_title') ?></h2>
            <?php endif ?>

            <?php if(get_field('hs_middle_column_text')): ?>
                <?php the_field('hs_middle_column_text') ?>
            <?php endif ?>
          </div>

          <div class="col-md-4 col-xs-12">
            <?php if(get_field('hs_right_column_image')): ?>
              <div style="background-image: url(<?php echo get_field('hs_right_column_image')['url']; ?>)" class="help-section-image rounded-circle"></div>
            <?php endif ?>

            <?php if(get_field('hs_right_column_title')): ?>
                <h2><?php the_field('hs_right_column_title') ?></h2>
            <?php endif ?>

            <?php if(get_field('hs_right_column_text')): ?>
                <?php the_field('hs_right_column_text') ?>
            <?php endif ?>
          </div>
        </div>
      </section>
    </div>
  <?php endif;
?>
