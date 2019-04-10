<?php
/**
 * Members sign up form
 *
 * @package patientsineducation
 */
?>

<?php if (get_field('enable_member_sign_up')): ?>
<div class="container my-4">
  <div class="row">
    <div class="col-12">
      <h1><?php the_field('member_sign_up_form_title') ?></h1>
    </div>
  </div>
  <?php $signUpForm = get_field('member_sign_up_contact_form_7_shortcode'); ?>
  <?php echo do_shortcode($signUpForm); ?>
</div>
<?php endif; ?>