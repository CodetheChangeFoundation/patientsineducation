<?php
/**
 * Directors template
 *
 * @package patientsineducation
 */

if(get_field('enable_directors_section')): ?>

  <div class ="container">
    <?php if(get_field('board_of_directors_title')): ?>
      <h1 class="text-left pb-4"><?php the_field('board_of_directors_title') ?></h1>
    <?php endif ?>

    <?php
    $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
    for ($i = 1; $i < 16; $i=$i+3){?>

      <div class="row">
        <?php
        $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
        for ($j = 0; $j < 3; $j++){
          $image = get_field('director_'.($i+$j)); ?>

          <?php if( !empty($image)): ?>
            <div class="col-xs">
              <div class="hovereffect">
                <img class="large-img" src="<?php echo $image['sizes'][ $size ]; ?>" alt="<?php echo $image['alt']; ?>"?>

                <?php if( $image['title'] ): ?>
                  <p class="title"><?php echo $image['title'] ?></p>
                <?php endif; ?>

                <div class="overlay">
                  <div class="content">
                    <img class="small-img" src="<?php echo $image['sizes'][ $size ]; ?>">
                    <button type="submit" href="#">Learn More</button>
                    <?php if( $image['caption'] ): ?>
                      <p><?php echo $image['caption'] ?></p>
                    <?php endif; ?>
                  </div>
                  <?php if( $image['title'] ): ?>
                    <p class="title"><?php echo $image['title'] ?></p>
                  <?php endif; ?>
                </div>

              </div>
            </div>
          <?php endif; ?>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
<?php endif;?>
