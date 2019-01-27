<?php
/**
 * Engagement custom post type loop template
 *
 * @package patientsineducation
 */
?>

<div class="container accordion" id="engagements">
	<div class="row">
		<?php 
		$args = array('post_type'=> 'engagements');              
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

				if(has_post_thumbnail()): ?>
					<div class="project-container mb-4 col-12 col-md-6 col-lg-4 order-md-<?php echo $count; ?> order-lg-<?php echo $count; ?>">
						<a class="show-more-button" data-toggle="collapse" href="#<?php echo $post->post_name; ?>" role="button"
							aria-expanded="false" aria-controls="<?php echo $post->post_name; ?>">
							<div class="project-image" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
								<div class="project-description p-2">
									<h6 class="m-0 text-black font-weight-bold"><?php the_title(); ?></h6>
									<h6 class="m-0 text-black-light font-weight-bold"><?php the_excerpt(); ?></h6>
								</div>
							</div>
						</a>
					</div>
					<div class="col-12 collapse order-md-<?php echo $order_md; ?> order-lg-<?php echo $order_lg; ?>" data-parent="#engagements" id="<?php echo $post->post_name; ?>">
						<div class="mb-4 card card-body">
							<p class="closeIcon pb-2 pt-2 pr-3 pl-3" role="button"> &times; </p>
							<h3 class="text-black-secondary pr-5"><?php the_title(); ?></h3>
							<h5 class="mb-0 text-light-secondary"><?php the_excerpt(); ?></h5>
							<span class="text-lead mb-3"><?php the_field('leading_sentence'); ?><span class="text-description"><?php the_field('paragraph'); ?></span></span>
							<p class="m-0"><a class="btn btn-primary text-weight-bold" href="#" target="_blank">Learn More</a></p>
						</div>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>