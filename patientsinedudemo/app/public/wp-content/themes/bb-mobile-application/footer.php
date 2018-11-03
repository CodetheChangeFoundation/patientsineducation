<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package BB Mobile Application
 */
?>
    <div  id="footer" class="copyright-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3">
            <?php dynamic_sidebar('footer-1');?>
          </div>
          <div class="col-md-3 col-sm-3">
            <?php dynamic_sidebar('footer-2');?>
          </div>
          <div class="col-md-3 col-sm-3">
            <?php dynamic_sidebar('footer-3');?>
          </div>
          <div class="col-md-3 col-sm-3">
            <?php dynamic_sidebar('footer-4');?>
          </div> 
        </div> 
      </div>
      <div class="inner">
        <div class="copyright text-center">
          <p><?php echo esc_html(get_theme_mod('bb_mobile_application_footer_copy',__('Copyright 2016 - ','bb-mobile-application'))); ?> <?php bb_mobile_application_credit(); ?></p>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>