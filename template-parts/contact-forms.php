<?php
/**
 * Contact forms template
 *
 * @package patientsineducation
 */
if (get_field('enable_patients_form') || get_field('enable_volunteers_form') || get_field('enable_general_form')):
?>
  <div class="mt-5">
    <ul class="nav nav-tabs px-5" role="tablist">
      <?php if (get_field('enable_patients_form')): ?>
        <li class="nav-item">
          <a class="nav-link active px-4" id="patients-tab" data-toggle="tab" href="#patients-form" role="tab" aria-controls="patients-form" aria-selected="true">Request for Patients</a>
        </li>
      <?php endif; ?>
      <?php if (get_field('enable_volunteers_form')): ?>
        <li class="nav-item">
          <a class="nav-link<?php if (!get_field('enable_patients_form')): ?> active<?php endif; ?> px-4" id="volunteers-tab" data-toggle="tab" href="#volunteers-form" role="tab" aria-controls="volunteers-form" aria-selected="<?php echo((get_field('enable_patients_form')) ? 'false' : 'true');?>">Request for Volunteers</a>
        </li>
      <?php endif; ?>
      <?php if (get_field('enable_general_form')): ?>
        <li class="nav-item">
          <a class="nav-link<?php if (!((get_field('enable_patients_form')) || (get_field('enable_volunteers_form')))): ?> active<?php endif; ?> px-4" id="general-tab" data-toggle="tab" href="#general-form" role="tab" aria-controls="general-form" aria-selected="<?php echo(((get_field('enable_patients_form')) || (get_field('enable_volunteers_form'))) ? 'false' : 'true');?>">General Inquiry</a>
        </li>
      <?php endif; ?>
      <li class="nav-item px-4">
        <button class="btn btn-primary mt-1">
          <a href="mailto:patients.in.education@gmail.com">Email Us Directly</a>
        </button>
      </li>
    </ul>
    <div class="tab-content row">
      <div class="tab-pane fade <?php if (get_field('enable_patients_form')): ?>show active <?php endif; ?>col-11 mx-auto" id="patients-form" role="tabpanel" aria-labelledby="patients-tab">
        <?php echo do_shortcode('[contact-form-7 id="140" title="Request for Patients"]');?>
      </div>
      <div class="tab-pane fade <?php if (get_field('enable_volunteers_form') && !get_field('enable_patients_form')): ?>show active <?php endif; ?>col-11 mx-auto" id="volunteers-form" role="tabpanel" aria-labelledby="volunteers-tab">
        <?php echo do_shortcode('[contact-form-7 id="141" title="Request for Volunteers"]');?>
      </div>
      <div class="tab-pane fade <?php if (get_field('enable_general_form') && !get_field('enable_patients_form') && !get_field('enable_volunteers_form')): ?>show active <?php endif; ?>col-11 mx-auto" id="general-form" role="tabpanel" aria-labelledby="general-tab">
        <?php echo do_shortcode('[contact-form-7 id="142" title="General Inquiry"]');?>
      </div>
    </div>
  </div>
<?php elseif (get_the_title($ID)=='Contact Us'): ?>
  <div class="text-center">
    <button class="btn btn-primary mb-2">
      <a href="mailto:patients.in.education@gmail.com">Email Us</a>
    </button>
  </div>
<?php endif; ?>
