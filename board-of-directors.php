<?php /* Template Name: BoardOfDirectors */ ?>

<?php get_header(); ?>

<div class="board-of-directors">

<div class ="container">

<?php
  if(have_posts()):
    while(have_posts()): the_post(); ?>
    <h1><?php echo the_title(); ?></h1>
    <p><?php echo the_content(); ?></p>
    <?php endwhile;
  endif;
?>

<div>
  <?php
    if(!get_field('enable_content_box')):
      if(get_field('content_box')): ?>
        <p><?php echo get_field('content_box') ?></p>
      <?php endif;
    endif;
  ?>
</div>

<!-- director photos grid -->
<?php

  $image1 = get_field('director_1');
  $image2 = get_field('director_2');
  $image3 = get_field('director_3');
  $image4 = get_field('director_4');
  $image5 = get_field('director_5');
  $image6 = get_field('director_6');
  $image7 = get_field('director_7');
  $image8 = get_field('director_8');
  $image9 = get_field('director_9');
  $image10 = get_field('director_10');
  $image11 = get_field('director_11');
  $image12 = get_field('director_12');
  $image13 = get_field('director_13');
  $image14 = get_field('director_14');
  $image15 = get_field('director_15');

  $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

?>
<div class="row">
<?php if( !empty($image1)): ?>
    <div class="col-xs">
      <div class="hovereffect">
        <img class="large-img" src="<?php echo $image1['sizes'][ $size ]; ?>" alt="<?php echo $image1['alt']; ?>"?>
        <?php if( $image1['title'] ): ?>
        <p class="title"><?php echo $image1['title'] ?></p>
        <?php endif; ?>
        <div class="overlay">
          <div class="content">
            <img class="small-img" src="<?php echo $image1['sizes'][ $size ]; ?>">
            <button type="submit" href="#">Learn More</button>
            <?php if( $image1['caption'] ): ?>
              <p><?php echo $image1['caption'] ?></p>
            <?php endif; ?>
          </div>
            <?php if( $image1['title'] ): ?>
              <p class="title"><?php echo $image1['title'] ?></p>
            <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

<?php if( !empty($image2)): ?>
    <div class="col-xs">
      <div class="hovereffect">
        <img class="large-img" src="<?php echo $image2['sizes'][ $size ]; ?>" alt="<?php echo $image2['alt']; ?>"?>
        <?php if( $image2['title'] ): ?>
        <p class="title"><?php echo $image2['title'] ?></p>
        <?php endif; ?>
        <div class="overlay">
          <div class="content">
            <img class="small-img" src="<?php echo $image2['sizes'][ $size ]; ?>">
            <button type="submit" href="#">Learn More</button>
            <?php if( $image2['caption'] ): ?>
              <p><?php echo $image2['caption'] ?></p>
            <?php endif; ?>
          </div>
            <?php if( $image2['title'] ): ?>
              <p class="title"><?php echo $image2['title'] ?></p>
            <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>


<?php if( !empty($image3)): ?>
    <div class="col-xs">
      <div class="hovereffect">
        <img class="large-img" src="<?php echo $image3['sizes'][ $size ]; ?>" alt="<?php echo $image3['alt']; ?>"?>
        <?php if( $image3['title'] ): ?>
        <p class="title"><?php echo $image3['title'] ?></p>
        <?php endif; ?>
        <div class="overlay">
          <div class="content">
            <img class="small-img" src="<?php echo $image3['sizes'][ $size ]; ?>">
            <button type="submit" href="#">Learn More</button>
            <?php if( $image3['caption'] ): ?>
              <p><?php echo $image3['caption'] ?></p>
            <?php endif; ?>
          </div>
            <?php if( $image3['title'] ): ?>
              <p class="title"><?php echo $image3['title'] ?></p>
            <?php endif; ?>
        </div>
      </div>
   </div>
   <?php endif; ?>
</div>

<div class="row">
<?php if( !empty($image4)): ?>
<div class="col-xs">
      <div class="hovereffect">
        <img class="large-img" src="<?php echo $image4['sizes'][ $size ]; ?>" alt="<?php echo $image4['alt']; ?>"?>
        <?php if( $image4['title'] ): ?>
        <p class="title"><?php echo $image4['title'] ?></p>
        <?php endif; ?>
        <div class="overlay">
          <div class="content">
            <img class="small-img" src="<?php echo $image4['sizes'][ $size ]; ?>">
            <button type="submit" href="#">Learn More</button>
            <?php if( $image4['caption'] ): ?>
              <p><?php echo $image4['caption'] ?></p>
            <?php endif; ?>
          </div>
            <?php if( $image4['title'] ): ?>
              <p class="title"><?php echo $image4['title'] ?></p>
            <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

<?php if( !empty($image5)): ?>
    <div class="col-xs">
      <div class="hovereffect">
        <img class="large-img" src="<?php echo $image5['sizes'][ $size ]; ?>" alt="<?php echo $image5['alt']; ?>"?>
        <?php if( $image5['title'] ): ?>
        <p class="title"><?php echo $image5['title'] ?></p>
        <?php endif; ?>
        <div class="overlay">
          <div class="content">
            <img class="small-img" src="<?php echo $image5['sizes'][ $size ]; ?>">
            <button type="submit" href="#">Learn More</button>
            <?php if( $image5['caption'] ): ?>
              <p><?php echo $image5['caption'] ?></p>
            <?php endif; ?>
          </div>
            <?php if( $image5['title'] ): ?>
              <p class="title"><?php echo $image5['title'] ?></p>
            <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

<?php if( !empty($image6)): ?>
    <div class="col-xs">
      <div class="hovereffect">
        <img class="large-img" src="<?php echo $image6['sizes'][ $size ]; ?>" alt="<?php echo $image6['alt']; ?>"?>
        <?php if( $image6['title'] ): ?>
        <p class="title"><?php echo $image6['title'] ?></p>
        <?php endif; ?>
        <div class="overlay">
          <div class="content">
            <img class="small-img" src="<?php echo $image6['sizes'][ $size ]; ?>">
            <button type="submit" href="#">Learn More</button>
            <?php if( $image6['caption'] ): ?>
              <p><?php echo $image6['caption'] ?></p>
            <?php endif; ?>
          </div>
            <?php if( $image6['title'] ): ?>
              <p class="title"><?php echo $image6['title'] ?></p>
            <?php endif; ?>
        </div>
        </div>
    </div>
    <?php endif; ?>
</div>


<div class="row">
<?php if( !empty($image7)): ?>
<div class="col-xs">
      <div class="hovereffect">
        <img class="large-img" src="<?php echo $image7['sizes'][ $size ]; ?>" alt="<?php echo $image7['alt']; ?>"?>
        <?php if( $image7['title'] ): ?>
        <p class="title"><?php echo $image7['title'] ?></p>
        <?php endif; ?>
        <div class="overlay">
          <div class="content">
            <img class="small-img" src="<?php echo $image7['sizes'][ $size ]; ?>">
            <button type="submit" href="#">Learn More</button>
            <?php if( $image7['caption'] ): ?>
              <p><?php echo $image7['caption'] ?></p>
            <?php endif; ?>
          </div>
            <?php if( $image7['title'] ): ?>
              <p class="title"><?php echo $image7['title'] ?></p>
            <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

<?php if( !empty($image8)): ?>
    <div class="col-xs">
      <div class="hovereffect">
        <img class="large-img" src="<?php echo $image8['sizes'][ $size ]; ?>" alt="<?php echo $image8['alt']; ?>"?>
        <?php if( $image8['title'] ): ?>
        <p class="title"><?php echo $image8['title'] ?></p>
        <?php endif; ?>
        <div class="overlay">
          <div class="content">
            <img class="small-img" src="<?php echo $image8['sizes'][ $size ]; ?>">
            <button type="submit" href="#">Learn More</button>
            <?php if( $image8['caption'] ): ?>
              <p><?php echo $image8['caption'] ?></p>
            <?php endif; ?>
          </div>
            <?php if( $image8['title'] ): ?>
              <p class="title"><?php echo $image8['title'] ?></p>
            <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>


    <?php if( !empty($image9)): ?>
    <div class="col-xs">
      <div class="hovereffect">
        <img class="large-img" src="<?php echo $image9['sizes'][ $size ]; ?>" alt="<?php echo $image9['alt']; ?>"?>
        <?php if( $image9['title'] ): ?>
        <p class="title"><?php echo $image9['title'] ?></p>
        <?php endif; ?>
        <div class="overlay">
          <div class="content">
            <img class="small-img" src="<?php echo $image9['sizes'][ $size ]; ?>">
            <button type="submit" href="#">Learn More</button>
            <?php if( $image9['caption'] ): ?>
              <p><?php echo $image9['caption'] ?></p>
            <?php endif; ?>
          </div>
            <?php if( $image9['title'] ): ?>
              <p class="title"><?php echo $image9['title'] ?></p>
            <?php endif; ?>
        </div>
        </div>
    </div>
    <?php endif; ?>

</div>


<div class="row">
<?php if( !empty($image10)): ?>
    <div class="col-xs">
      <div class="hovereffect">
        <img class="large-img" src="<?php echo $image10['sizes'][ $size ]; ?>" alt="<?php echo $image10['alt']; ?>"?>
        <?php if( $image10['title'] ): ?>
        <p class="title"><?php echo $image10['title'] ?></p>
        <?php endif; ?>
        <div class="overlay">
          <div class="content">
            <img class="small-img" src="<?php echo $image10['sizes'][ $size ]; ?>">
            <button type="submit" href="#">Learn More</button>
            <?php if( $image10['caption'] ): ?>
              <p><?php echo $image10['caption'] ?></p>
            <?php endif; ?>
          </div>
            <?php if( $image10['title'] ): ?>
              <p class="title"><?php echo $image10['title'] ?></p>
            <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

<?php if( !empty($image11)): ?>
    <div class="col-xs">
      <div class="hovereffect">
        <img class="large-img" src="<?php echo $image11['sizes'][ $size ]; ?>" alt="<?php echo $image11['alt']; ?>"?>
        <?php if( $image11['title'] ): ?>
        <p class="title"><?php echo $image11['title'] ?></p>
        <?php endif; ?>
        <div class="overlay">
          <div class="content">
            <img class="small-img" src="<?php echo $image11['sizes'][ $size ]; ?>">
            <button type="submit" href="#">Learn More</button>
            <?php if( $image11['caption'] ): ?>
              <p><?php echo $image2['caption'] ?></p>
            <?php endif; ?>
          </div>
            <?php if( $image11['title'] ): ?>
              <p class="title"><?php echo $image11['title'] ?></p>
            <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>


<?php if( !empty($image12)): ?>
    <div class="col-xs">
      <div class="hovereffect">
        <img class="large-img" src="<?php echo $image12['sizes'][ $size ]; ?>" alt="<?php echo $image12['alt']; ?>"?>
        <?php if( $image12['title'] ): ?>
        <p class="title"><?php echo $image12['title'] ?></p>
        <?php endif; ?>
        <div class="overlay">
          <div class="content">
            <img class="small-img" src="<?php echo $image12['sizes'][ $size ]; ?>">
            <button type="submit" href="#">Learn More</button>
            <?php if( $image12['caption'] ): ?>
              <p><?php echo $image12['caption'] ?></p>
            <?php endif; ?>
          </div>
            <?php if( $image12['title'] ): ?>
              <p class="title"><?php echo $image12['title'] ?></p>
            <?php endif; ?>
        </div>
      </div>
   </div>
   <?php endif; ?>
</div>


<div class="row">
<?php if( !empty($image13)): ?>
    <div class="col-xs">
      <div class="hovereffect">
        <img class="large-img" src="<?php echo $image13['sizes'][ $size ]; ?>" alt="<?php echo $image13['alt']; ?>"?>
        <?php if( $image13['title'] ): ?>
        <p class="title"><?php echo $image13['title'] ?></p>
        <?php endif; ?>
        <div class="overlay">
          <div class="content">
            <img class="small-img" src="<?php echo $image13['sizes'][ $size ]; ?>">
            <button type="submit" href="#">Learn More</button>
            <?php if( $image13['caption'] ): ?>
              <p><?php echo $image13['caption'] ?></p>
            <?php endif; ?>
          </div>
            <?php if( $image13['title'] ): ?>
              <p class="title"><?php echo $image13['title'] ?></p>
            <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

<?php if( !empty($image14)): ?>
    <div class="col-xs">
      <div class="hovereffect">
        <img class="large-img" src="<?php echo $image14['sizes'][ $size ]; ?>" alt="<?php echo $image14['alt']; ?>"?>
        <?php if( $image14['title'] ): ?>
        <p class="title"><?php echo $image14['title'] ?></p>
        <?php endif; ?>
        <div class="overlay">
          <div class="content">
            <img class="small-img" src="<?php echo $image14['sizes'][ $size ]; ?>">
            <button type="submit" href="#">Learn More</button>
            <?php if( $image14['caption'] ): ?>
              <p><?php echo $image14['caption'] ?></p>
            <?php endif; ?>
          </div>
            <?php if( $image14['title'] ): ?>
              <p class="title"><?php echo $image14['title'] ?></p>
            <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>


<?php if( !empty($image15)): ?>
    <div class="col-xs">
      <div class="hovereffect">
        <img class="large-img" src="<?php echo $image15['sizes'][ $size ]; ?>" alt="<?php echo $image15['alt']; ?>"?>
        <?php if( $image15['title'] ): ?>
        <p class="title"><?php echo $image15['title'] ?></p>
        <?php endif; ?>
        <div class="overlay">
          <div class="content">
            <img class="small-img" src="<?php echo $image15['sizes'][ $size ]; ?>">
            <button type="submit" href="#">Learn More</button>
            <?php if( $image15['caption'] ): ?>
              <p><?php echo $image15['caption'] ?></p>
            <?php endif; ?>
          </div>
            <?php if( $image15['title'] ): ?>
              <p class="title"><?php echo $image15['title'] ?></p>
            <?php endif; ?>
        </div>
      </div>
   </div>
   <?php endif; ?>
</div>


  </div>
  </div>

<?php get_footer(); ?>