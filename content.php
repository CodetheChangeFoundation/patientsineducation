

		<?php if( has_post_thumbnail() ): ?>

			<div class="project-container mb-4 order-1 col-12 col-md-6 col-lg-4">
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
			<div class="col-12 order-md-3 order-lg-4 collapse" id="<?php echo $post->post_name; ?>">
				 <div id="projBody1" class="mb-4 card card-body">
						<p class="closeIcon" role="button"> &times; </p>
						<h3 class="text-secondary pr-5"><?php the_title(); ?></h3>
						<h5 class="mb-0"><?php the_excerpt(); ?></h5>
						<p class="lead"><?php $array = explode('.',$text); ?><?php echo $array[0]; ?></p>
						<p><?php the_content(); ?></p>
						<p class="m-0"><a class="btn btn-outline-secondary" alt="SAR Repo" target="_blank">Learn More</a></p>
				 </div>
			</div>

		<?php endif; ?>
