<?php

/**
 * Template Name: Home Page
 */

get_header(); 

?>

<?php
$image1 = get_field('image1');
?>
<?php
$image2 = get_field('image2');
?>
<?php
$image3 = get_field('image3');
?>

<div class="grid">
	<div id="content" role="main" class="row text-center">
		<div class="col-12 col-lg-3 rc1">
			<img src="<?php echo $image1; ?>" class="rounded-circle im1">
			<h1 class="t1"><?php the_field('title1'); ?></h1>
			<p><?php the_field('Outreach1'); ?></p>
		</div>
		<div class="col-12 col-lg-3 rc2 ">
			<img src="<?php echo $image2; ?>" class="rounded-circle im2">
			<h1 class="t1"><?php the_field('title2'); ?></h1>
			<p><?php the_field('Outreach2'); ?></p>
		</div>
		<div class="col-12 col-lg-3 rc3 ">
			<img src="<?php echo $image3; ?>" class="rounded-circle im3">
			<h1 class="t1"><?php the_field('title3'); ?></h1>
			<p><?php the_field('Outreach3'); ?></p>
		</div>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>