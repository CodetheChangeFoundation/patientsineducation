<?php session_start(); ?>
<?php get_header(); ?>
<div class="ml-5 mr-5 mt accordion" id="accordionExample">
	<div class="row">
		<?php if( have_posts() ): ?>
			<?php $_SESSION["count"] = 0; ?>
			<?php while( have_posts() ): the_post(); ?>
				<?php $_SESSION["count"]++; ?>
				<?php get_template_part('content', 'archive'); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>
