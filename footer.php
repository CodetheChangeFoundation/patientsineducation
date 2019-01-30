<?php
 /**
 * Footer template
 *
 * @package patientsineducation
 */
?>
      <footer>
        <div class="pie-prefooter container-fluid m-0">
          <div class="row py-2">
            <div class="col-12 text-center">
              <p class="mb-0">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nulla odio, facilisis quis dapibus sed, dictum sed elit. Phasellus nullam.” – Patients In Education</p>
            </div>
          </div>
        </div>
        <div class="pie-footer m-0">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-5">
                <h5>Patients In Education</h5>
                <p>Patients in Education is a partnership between the Patient & Community Partnership for Education in the Office of the Vice-Provost Health at the University of British Columbia and the community.</p>
              </div>
              <div class="col-12 col-md-3">
                <h5>Address</h5>
                <ul>
                  <li>Office of the Vice-Provost Health</li>
                  <li>400-2194 Health Sciences Mall</li>
                  <li>Vancouver, BC Canada V6T 1Z3</li>
                  <li>Telephone : +1 (604)-822-8002</li>
                </ul>
              </div>
              <div class="col-12 col-md-4">
                <h5>Contact Info</h5>
                <p>
                  <!-- <a href="">
                    <img class="img-fluid-icon pie-social-icon" src="<?php echo do_shortcode('[get_icon_url image="fb-icon.png"]');?>" alt="Facebook" />
                  </a> -->
                  <a href="https://twitter.com/PatientsInEd" target="_blank">
                    <img class="img-fluid-icon pie-social-icon" src="<?php echo do_shortcode('[get_icon_url image="twitter-icon.png"]');?>" alt="Twitter" />
                  </a>
                  <br>
                  Email : patients.in.education@gmail.com
                  <br>
                  <button class="btn btn-primary mt-2">
                    <a href="/contact-us/">Contact Us</a>
                  </button>
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
