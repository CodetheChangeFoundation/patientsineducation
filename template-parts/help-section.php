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
        <div class="row m-3 w-100">
          <div class="col-md-4 col-xs-12">
            <?php if(get_field('hs_left_column_image')): ?>
              <img src="<?php echo get_field('hs_left_column_image')['url']; ?>" class="img-fluid rounded-circle"/>
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
              <img src="<?php echo get_field('hs_middle_column_image')['url']; ?>" class="img-fluid rounded-circle"/>
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
              <img src="<?php echo get_field('hs_right_column_image')['url']; ?>" class="img-fluid rounded-circle"/>
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
