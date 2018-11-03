<?php
/**
 * Template Name: Page with Right Sidebar
**/

get_header(); ?>

<?php do_action( 'bb_mobile_application_page_right_header' ); ?>

<div class="container">
    <div class="middle-align row">       
		<div class="col-md-8" id="content-ts">
			<?php while ( have_posts() ) : the_post(); ?>	
                <img src="<?php the_post_thumbnail_url(); ?>" width="100%">
                <h1><?php the_title();?></h1>       		
                
                <?php the_content();

                //If comments are open or we have at least one comment, load up the comment template
                	if ( comments_open() || '0' != get_comments_number() )
                    	comments_template();
                ?>
            <?php endwhile; // end of the loop. ?>            
        </div>
        <div class="col-md-4" id="sidebar">
			<?php dynamic_sidebar('sidebar-2'); ?>
		</div>
        <div class="clear"></div>    
    </div>
</div>

<?php do_action( 'bb_mobile_application_page_right_footer' ); ?>

<?php get_footer(); ?>