<?php session_start(); ?>
<?php if ($_SESSION["count"]%3 == 1) {
				$order_lg = $_SESSION["count"] + 3;
			}
			elseif ($_SESSION["count"]%3 == 2) {
				$order_lg = $_SESSION["count"] + 2;
			}
			elseif ($_SESSION["count"]%3 == 0) {
				$order_lg = $_SESSION["count"] + 1;
			}?>

<?php if ($_SESSION["count"]%2 == 1) {
				$order_md = $_SESSION["count"] + 2;
			}
			elseif ($_SESSION["count"]%2 == 0) {
				$order_md = $_SESSION["count"] + 1;
			} ?>

		<?php if( has_post_thumbnail() ): ?>

			<div class="project-container mb-4 col-12 col-md-6 col-lg-4 order-md-<?php echo $_SESSION["count"]; ?> order-lg-<?php echo $_SESSION["count"]; ?>">
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
			<div class="col-12 collapse order-md-<?php echo $order_md; ?> order-lg-<?php echo $order_lg; ?>" data-parent="#accordionExample" id="<?php echo $post->post_name; ?>">
				 <div class="mb-4 card card-body">
						<p class="closeIcon" role="button"> &times; </p>
						<h3 class="text-black-secondary pr-5"><?php the_title(); ?></h3>
						<h5 class="mb-0 text-light-secondary"><?php the_excerpt(); ?></h5>
						<span class="text-lead"><?php the_field('leading_sentence'); ?><span class="text-description"><?php the_field('paragraph'); ?></span></span>
						<p class="m-0"><a class="btn text-black-light text-weight-bold" style="background: #FF6969; border-radius: 3px; color: #2E2A2B !important;" alt="SAR Repo" target="_blank">Learn More</a></p>
				 </div>
			</div>

		<?php endif; ?>
