<?php
/**
 * Carousel template
 *
 * @package patientsineducation
 */
?>

<?php
$image1 = get_field('slider_1');
$image2 = get_field('slider_2');
$image3 = get_field('slider_3');
$image4 = get_field('slider_4');
$image5 = get_field('slider_5');

$size = 'full'; // (thumbnail, medium, large, full or custom size)

?>

<div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators carousel-indicators--round">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
    <?php if( !empty($image5)): ?>
    <li data-target="#carousel" data-slide-to="4"></li>
    <?php endif; ?>

  </ol>

<div class="carousel-inner" role="listbox">

    <div class="item active">
        <img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>"?>
    </div>

    <div class="item">
        <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>"?>
    </div>

    <div class="item">
        <img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>"?>
    </div>

    <div class="item">
        <img src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>"?>
    </div>

    <?php if( !empty($image5)): ?>
    <div class="item">
        <img src="<?php echo $image5['url']; ?>" alt="<?php echo $image5['alt']; ?>"?>
    </div>
     <?php endif; ?>

    </div>

  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>