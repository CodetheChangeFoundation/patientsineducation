<?php
	global $post;
	$ichcpt_settings = get_post_meta($post->ID, 'ichcpt_settings', true);
	// print_r($ichcpt_settings);
?>
<div class="ich-settings-main-wrap">
<div class="form-horizontal">
	<div class="form-group">
		<label for="noofcolumns" class="col-sm-3 control-label">
			<?php _e( 'Display', 'image-caption-hover' ); ?>
		</label>
		<div class="col-sm-9">
			<select name="ichcpt_settings[columns]" class="form-control input-sm" id="noofcolumns">
				<?php for($i = 1; $i <= 12; $i++) {
					if (1) { ?>
            			<option value="<?php echo $i; ?>" <?php if(isset($ichcpt_settings['columns']) && $ichcpt_settings['columns'] == $i){echo 'selected';} ?>><?php echo $i; ?></option>
					<?php }
					} ?>
			</select>
			<span class="help-block"><?php _e( 'Images in a row', 'image-caption-hover' ); ?>.</span>
		</div>
	</div>

	<div class="form-group">
		<label for="noofcolumns" class="col-sm-3 control-label">
			<?php _e( 'Space between images', 'image-caption-hover' ); ?>
		</label>
		<div class="col-sm-9">
			<input name="ichcpt_settings[col_space]" type="text" value="<?php echo (isset($ichcpt_settings['col_space'])) ? $ichcpt_settings['col_space'] : '10px' ; ?>" class="input-sm form-control">
			<span class="help-block"><?php _e( 'Space between each column', 'image-caption-hover' ); ?>.</span>
		</div>
	</div>

	<div class="form-group">
		<label for="noofcolumns" class="col-sm-3 control-label">
			<?php _e( 'Shortcodes in Caption', 'image-caption-hover' ); ?>
		</label>
		<div class="col-sm-9">
			<div class="checkbox">
				<label>
					<input name="ichcpt_settings[caption_shortcodes]" type="checkbox" <?php echo (isset($ichcpt_settings['caption_shortcodes'])) ? 'checked' : '' ; ?>>
					<?php _e( 'Enable', 'image-caption-hover' ); ?>
				</label>
			</div>
			<span class="help-block"><?php _e( 'Check to enable shortcodes in caption text box', 'image-caption-hover' ); ?>.</span>
		</div>
	</div>

	<div class="form-group">
		<label for="noofcolumns" class="col-sm-3 control-label">
			<?php _e( 'Custom CSS', 'image-caption-hover' ); ?>
		</label>
		<div class="col-sm-9">
			<textarea name="ichcpt_settings[custom_css]" class="form-control"><?php echo (isset($ichcpt_settings['custom_css'])) ? stripcslashes($ichcpt_settings['custom_css']) : '' ; ?></textarea>
			<span class="help-block"><?php _e( 'You can define your own styles here', 'image-caption-hover' ); ?>.</span>
		</div>
	</div>

</div>
</div>