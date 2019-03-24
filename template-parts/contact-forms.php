<?php
/**
 * Contact forms template
 *
 * @package patientsineducation
 */
?>

<?php 
  $form1 = get_field('form_1');
  $form2 = get_field('form_2');
  $form3 = get_field('form_3');
  if ($form1['enable'] || $form2['enable'] || $form3['enable']):
?>
  <div class="border-bottom">
    <ul class="nav nav-tabs px-5 mt-3 container border-0" role="tablist">
      <?php if ($form1['enable']): ?>
        <li class="nav-item mx-1">
          <a class="nav-link cftab active px-4" id="patients-tab" data-toggle="tab" href="#patients-form" role="tab" aria-controls="patients-form" aria-selected="true"><?php echo $form1['title']; ?></a>
        </li>
      <?php endif; ?>
      <?php if ($form2['enable']): ?>
        <li class="nav-item mx-1">
          <a class="nav-link cftab<?php if (!$form1['enable']): ?> active<?php endif; ?> px-4" id="volunteers-tab" data-toggle="tab" href="#volunteers-form" role="tab" aria-controls="volunteers-form" aria-selected="<?php echo($form1['enable'] ? 'false' : 'true');?>"><?php echo $form2['title']; ?></a>
        </li>
      <?php endif; ?>
      <?php if ($form3['enable']): ?>
        <li class="nav-item mx-1">
          <a class="nav-link cftab<?php if (!$form2['enable']): ?> active<?php endif; ?> px-4" id="general-tab" data-toggle="tab" href="#general-form" role="tab" aria-controls="general-form" aria-selected="<?php echo($form2['enable'] ? 'false' : 'true');?>"><?php echo $form3['title']; ?></a>
        </li>
      <?php endif; ?>
      <div class="nav-item mx-1 px-4">
        <a class="btn btn-primary" href="mailto:patients.in.education@gmail.com">Email Us Directly</a>
      </div>
    </ul>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="tab-content cf-form row">
          <div class="tab-pane fade <?php if ($form1['enable']): ?>show active <?php endif; ?>col-11 mx-auto" id="patients-form" role="tabpanel" aria-labelledby="patients-tab">
            <?php echo do_shortcode($form1['shortcode']);?>
          </div>
          <div class="tab-pane fade <?php if ($form2['enable'] && !$form1['enable']): ?>show active <?php endif; ?>col-11 mx-auto" id="volunteers-form" role="tabpanel" aria-labelledby="volunteers-tab">
            <?php echo do_shortcode($form2['shortcode']);?>
          </div>
          <div class="tab-pane fade <?php if ($form3['enable'] && !$form1['enable'] && !$form2['enable']): ?>show active <?php endif; ?>col-11 mx-auto" id="general-form" role="tabpanel" aria-labelledby="general-tab">
            <?php echo do_shortcode($form3['shortcode']);?>
          </div>
        </div>
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
