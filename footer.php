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
      <footer>
        <div class="pie-prefooter container-fluid m-0">
          <div class="row">
            <div class="col-12 text-center">
              <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nulla odio, facilisis quis dapibus sed, dictum sed elit. Phasellus nullam.” – Patients In Education</p>
            </div>
          </div>
        </div>
        <div class="pie-footer m-0">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-5">
                <h5><?php echo $leftColumn['title']; ?></h5>
                <p><?php echo $leftColumn['content']; ?></p>
              </div>
              <div class="col-12 col-md-3">
                <h5><?php echo $middleColumn['title']; ?></h5>
                <p><?php echo $middleColumn['content']; ?></p>
              </div>
              <div class="col-12 col-md-4">
                <h5><?php echo $rightColumn['title']; ?></h5>
                <p>
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
                  <?php if ($rightColumn['email_address']):; ?>
                    <br>Email: <?php echo $rightColumn['email_address']; ?><br>
                  <?php endif; ?>
                  <?php if ($rightColumn['button_label'] && $rightColumn['button_link']):; ?>
                    <button class="btn btn-primary mt-2">
                      <a href="<?php echo $rightColumn['button_link']; ?>"><?php echo $rightColumn['button_label']; ?></a>
                    </button>
                  <?php endif; ?>
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-center mb-0">
              <p>&copy; <?php echo date("Y"); ?> Patients In Education. Developed by <a id="ctc" href="http://codethechange.ca" target="_blank">Code the Change Foundation</a>.</p>
            </div>
          </div>
        </div>
      <?php wp_footer() ?>
      </footer>
    </div>
  </body>
</html>
