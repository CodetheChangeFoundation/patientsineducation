<?php get_header(); ?>

<div class="project-grid">

<div class="row">


		<?php if( have_posts() ): ?>

			<?php while( have_posts() ): the_post(); ?>

				<?php get_template_part('content', 'archive'); ?>

			<?php endwhile; ?>

		<?php endif; ?>


</div>

</div>

<?php get_footer(); ?>
