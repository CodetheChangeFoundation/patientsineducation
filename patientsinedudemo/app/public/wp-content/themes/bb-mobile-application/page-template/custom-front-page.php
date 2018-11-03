<?php
/**
 * Template Name: Custom home
 */

get_header(); ?>

<?php do_action( 'bb_mobile_application_before_slider' ); ?>

<?php if( get_theme_mod('bb_mobile_application_slider_hide_show') != ''){ ?> 
<section id="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
      <?php $pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'bb_mobile_application_slider' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $pages[] = $mod;
            }
          }
          if( !empty($pages) ) :
          $args = array(
              'post_type' => 'page',
              'post__in' => $pages,
              'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
      ?>     
      <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <img src="<?php the_post_thumbnail_url('full'); ?>"/>
              <div class="carousel-caption">
                <div class="inner_carousel">
                    <h2><?php the_title();?></h2>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <div class="know-btn">
                  <a href="<?php the_permalink(); ?>"><?php echo esc_html_e('KNOW MORE','bb-mobile-application'); ?></a>
                </div> 
              </div>
          </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
      </div>
      <?php else : ?>
      <div class="no-postfound"></div>
        <?php endif;
      endif;?>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
      </a>
    </div>  
    <div class="clearfix"></div>
</section>
<?php }?>

<?php do_action( 'bb_mobile_application_after_slider' ); ?>

<?php if( get_theme_mod('bb_mobile_application_title') != ''){ ?>
  <?php /** post section **/ ?>
  <section class="creative-feature">
    <div class="container">
      <?php if( get_theme_mod('bb_mobile_application_title') != ''){ ?>
        <div class="heading-line">
          <h3><?php echo esc_html(get_theme_mod('bb_mobile_application_title','')); ?> </h3>
        </div>
      <?php } ?>
      <div class="row m-0">
        <div class="col-lg-4 col-md-4 p-0">
          <section id="about" class="darkbox" >
              <?php 
                $page_query = new WP_Query(array( 'category_name' => get_theme_mod('bb_mobile_application_blogcategory_left_setting','theblog')));?>
                <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                  <div class="left-part">
                    <div class="row m-0"> 
                      <div class="col-lg-3 col-md-3 p-0">
                        <div class="abt-img-box"><?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?></div>
                      </div>
                      <div class="col-lg-9 col-md-9">
                        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                      </div>
                    </div>
                    <p><?php $excerpt = get_the_excerpt(); echo esc_html( bb_mobile_application_string_limit_words( $excerpt,15 ) ); ?></p>
                  </div>
                  <?php endwhile;
                  wp_reset_postdata();
              ?>          
              <div class="clearfix"></div>
          </section>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="middle-image">
            <?php
              $args = array( 'name' => get_theme_mod('bb_mobile_application_middle_image_setting',''));
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="row">
                  <div class="featuered-image">
                    <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>                  
                  </div>
                </div>
                <?php endwhile; 
                wp_reset_postdata();?>
              <?php else : ?>
                 <div class="no-postfound"></div>
               <?php
              endif; ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 p-0">
          <section id="about" class="darkbox" >
              <?php 
                  $page_query = new WP_Query(array( 'category_name' => get_theme_mod('bb_mobile_application_blogcategory_right_setting','theblog')));?>
                  <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                    <div class="right-part">
                      <div class="row m-0">
                        <div class="col-lg-3 col-md-3 p-0">
                          <div class="abt-img-box"><?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?></div>
                          </div>
                          <div class="col-lg-9 col-md-9">
                            <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                          </div>
                        </div>
                        <p><?php $excerpt = get_the_excerpt(); echo esc_html( bb_mobile_application_string_limit_words( $excerpt,15 ) ); ?></p>
                      </div>
                  <?php endwhile;
                  wp_reset_postdata();
              ?>
              <div class="clearfix"></div>
          </section>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<?php do_action( 'bb_mobile_application_after_creative_feature' ); ?>

<div class="container">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>