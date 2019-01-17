<?php
 /**
 * Code the Change template for the footer
 *
 * @package startertheme
 */
?>
    <footer>
      <div class="pie-prefooter m-0">
        <div class="row px-5 py-2">
          <div class="col-12 text-center m-1">
            “Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nulla odio, facilisis quis dapibus sed, dictum sed elit. Phasellus nullam.” – Patients In Education
          </div>
        </div>
      </div>
      <div class="pie-footer m-0">
        <div class="row px-5">
          <div class="col-12 col-md-5 px-4">
            <h5>Patients In Education</h5>
            <p>Patients in Education is a partnership between the Patient & Community Partnership for Education in the Office of the Vice-Provost Health at the University of British Columbia and the community.</p>
          </div>
          <div class="col-12 col-md-3 px-4">
            <h5>Address</h5>
            <ul>
              <li>Office of the Vice-Provost Health</li>
              <li>400-2194 Health Sciences Mall</li>
              <li>Vancouver, BC Canada V6T 1Z3</li>
              <li>Telephone : +1 (604)-822-8002</li>
            </ul>
          </div>
          <div class="col-12 col-md-4 px-4">
            <h5>Contact Info</h5>
            <p>
              <!-- <a href="">
                <img class="img-fluid-icon pie-social-icon" src="<?php echo do_shortcode('[get_icon_url image="fb-icon.png"]');?>" alt="Facebook" />
              </a> -->
              <a href="https://twitter.com/PatientsInEd" target="_blank">
                <img class="img-fluid-icon pie-social-icon" src="<?php echo do_shortcode('[get_icon_url image="twitter-icon.png"]');?>" alt="Twitter" />
              </a>
              <br>
              Email : patients.in.education@gmail.com<br>
              <a href="/contact-us/" class="btn btn-primary mt-2">Contact Us</a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center mb-0">
            © <?php echo date("Y"); ?> Patients In Education. Developed by <a href="http://codethechange.ca" target="_blank">Code the Change Foundation</a>.
          </div>
        </div>
      </div>
    <?php wp_footer() ?>
    </footer>
  </body>
</html>
