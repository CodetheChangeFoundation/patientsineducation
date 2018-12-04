<?php
/**
 * Contact forms template
 *
 * @package patientsineducation
 */

  if(get_field('enable_contact_forms_cf')): ?>
    <div>
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active px-4" id="patients-tab" data-toggle="tab" href="#patients-form" role="tab" aria-controls="patients-form" aria-selected="true">Request for Patients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-4" id="volunteers-tab" data-toggle="tab" href="#volunteers-form" role="tab" aria-controls="volunteers-form" aria-selected="false">Request for Volunteers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-4" id="general-tab" data-toggle="tab" href="#general-form" role="tab" aria-controls="general-form" aria-selected="false">General Inquiry</a>
        </li>
		<li class="nav-item px-4">
		  <a href="mailto:patients.in.education@gmail.com" class="btn btn-primary mt-1">Email Us Directly</a>
		</li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active cf-holder mx-auto" id="patients-form" role="tabpanel" aria-labelledby="patients-tab">
          <?php echo do_shortcode('[contact-form-7 id="28" title="Request for Patients"]');?>
        </div>
        <div class="tab-pane fade cf-holder mx-auto" id="volunteers-form" role="tabpanel" aria-labelledby="volunteers-tab">
		  <?php echo do_shortcode('[contact-form-7 id="56" title="Request for Volunteers"]');?>
		</div>
        <div class="tab-pane fade cf-holder mx-auto" id="general-form" role="tabpanel" aria-labelledby="general-tab">
		  <?php echo do_shortcode('[contact-form-7 id="57" title="General Inquiry"]');?>
		</div>
      </div>
    </div>
  <?php endif;
?>
