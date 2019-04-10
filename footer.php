<?php
 /**
 * Footer template
 *
 * @package patientsineducation
 */
?>
      <?php
      $leftColumn = get_field('footer_left_column', 'option');
      $middleColumn = get_field('footer_middle_column', 'option');
      $rightColumn = get_field('footer_right_column', 'option');
      ?>
      <footer class="text-white">
        <!-- <div class="bg-secondary">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <p class="my-2">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nulla odio, facilisis quis dapibus sed, dictum sed elit.” – Patients In Education</p>
              </div>
            </div>
          </div>
        </div> -->
        <div class="bg-dark">
          <div class="container pt-5">
            <div class="row">
              <div class="col-12 col-md-5 pt-4">
                <h5><?php echo $leftColumn['title']; ?></h5>
                <p><?php echo $leftColumn['content']; ?></p>
              </div>
              <div class="col-12 col-md-3 pt-4">
                <h5><?php echo $middleColumn['title']; ?></h5>
                <p><?php echo $middleColumn['content']; ?></p>
              </div>
              <div class="col-12 col-md-4 pt-4">
                <h5><?php echo $rightColumn['title']; ?></h5>
                <div>
                  <?php if ($rightColumn['facebook_link']):; ?>
                    <a href="<?php echo $rightColumn['facebook_link']; ?>">
                      <img class="img-fluid-icon pie-social-icon" src="<?php echo do_shortcode('[get_icon_url image="fb-icon.png"]');?>" alt="Facebook" />
                    </a>
                  <?php endif; ?>
                  <?php if ($rightColumn['twitter_link']):; ?>
                    <a href="<?php echo $rightColumn['twitter_link']; ?>" target="_blank">
                      <img class="img-fluid-icon pie-social-icon" src="<?php echo do_shortcode('[get_icon_url image="twitter-icon.png"]');?>" alt="Twitter" />
                    </a>
                  <?php endif; ?>
                </div>
                <?php if ($rightColumn['email_address']):; ?>
                  <p>Email: <?php echo $rightColumn['email_address']; ?></p>
                <?php endif; ?>
                <?php if ($rightColumn['button_label'] && $rightColumn['button_link']):; ?>
                  <a class="btn btn-primary" href="<?php echo $rightColumn['button_link']; ?>" role="button"><?php echo $rightColumn['button_label']; ?></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-12 text-center pt-5 pb-3">
                <p>&copy; <?php echo date("Y"); ?> Patients In Education. Developed by <a class="text-white" href="http://codethechange.ca" target="_blank">Code the Change Foundation</a>.</p>
              </div>
            </div>
          </div>
        </div>
      <?php wp_footer() ?>
      </footer>
    </div>
  </body>
</html>
