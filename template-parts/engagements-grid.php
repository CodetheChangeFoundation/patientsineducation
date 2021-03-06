<?php
/**
 * Engagement custom post type loop template
 *
 * @package patientsineducation
 */
?>

<div class="container accordion mb-4" id="engagements">
	<?php
	$args = array(
		'post_type'=> 'engagements',
		'posts_per_page' => -1,
		'meta_query' => array(
			array(
				'key' => '_thumbnail_id',
				'compare' => 'EXISTS'
			)
		)
	);
	$the_query = new WP_Query( $args );
	if ($the_query->have_posts()):
		$count = 0;
		while ($the_query->have_posts()): $the_query->the_post();
			$count++;
			if ($count%3 == 1):
				$order_lg = $count + 3;
			elseif ($count%3 == 2):
				$order_lg = $count + 2;
			elseif ($count%3 == 0):
				$order_lg = $count + 1;
			endif;

			if ($count%2 == 1):
				$order_md = $count + 2;
			elseif ($count%2 == 0):
				$order_md = $count + 1;
			endif;

			if (has_post_thumbnail()):
				$image_id = get_post_thumbnail_id();
				$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
				if ($count == 1): ?>
					<div class="row">
				<?php endif; ?>
					<div class="project-container mb-4 col-12 col-md-6 col-lg-4 order-md-<?php echo $count; ?> order-lg-<?php echo $count; ?>">
						<a class="show-more-button text-body" data-toggle="collapse" href="#<?php echo $post->post_name; ?>" role="button"
							aria-expanded="false" aria-controls="<?php echo $post->post_name; ?>">
							<div class="project-image border rounded-2 mt-4">
								<img class="img-fluid img-cover" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php $image_alt ?>">
								<div class="project-description px-3 py-2 rounded-2 bg-light">
									<h4 class="m-0"><?php the_title(); ?></h4>
									<h6 class="m-0"><?php the_field('short_description'); ?></h6>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 collapse order-md-<?php echo $order_md; ?> order-lg-<?php echo $order_lg; ?>" data-parent="#engagements" id="<?php echo $post->post_name; ?>">
						<div class="rounded-2 card card-body border">
							<a class="close-icon text-primary btn btn-link font-weight-bold" role="button">&times;</a>
							<h3 class="pr-5"><?php the_title(); ?></h3>
							<h5><?php the_field('short_description'); ?></h5>
							<hr>
							<p><?php the_field('long_description'); ?></p>
							<?php if (get_field('link')): ?>
								<span class="m-0">
									<a class="btn btn-primary" href="<?php echo get_field('link')['url']; ?>" target="_blank">
									<?php
									if (!empty(get_field('link')['title'])):
										echo get_field('link')['title'];
									else:
										echo "Learn More";
									endif;
									?>
									</a>
								</span>
							<?php endif; ?>
						</div>
					</div>
				<?php if ($count == 6): $count = 0; ?>
					</div>
				<?php endif; ?>
			<?php endif; ?>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>
</div>

<?php wp_reset_postdata(); ?>