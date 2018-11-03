<?php 

/**
 * Image Caption Hover - Widget
 * Wordpress 2.8 and above
 * @see http://codex.wordpress.org/Widgets_API#Developing_Widgets
 */
class Image_Caption_Hover_Widget_Class extends WP_Widget {

    /**
     * Constructor
     *
     * @return void
     **/
    function __construct() {
        $widget_ops = array( 'classname' => 'wcpich_caption', 'description' => 'Easily use Image Caption Hover in widgets' );
        parent::__construct( 'wcpich_caption', 'Image Caption Hover', $widget_ops );
    }

    /**
     * Outputs the HTML for this widget.
     *
     * @param array  An array of standard parameters for widgets in this theme
     * @param array  An array of settings for this widget instance
     * @return void Echoes it's output
     **/
    function widget( $args, $instance ) {
        extract( $args, EXTR_SKIP );
        extract($instance);
		echo do_shortcode( '[ichcpt id="'.$ich_cpt_id.'"]' );

    }

    /**
     * Deals with the settings when they are saved by the admin. Here is
     * where any validation should be dealt with.
     *
     * @param array  An array of new settings as submitted by the admin
     * @param array  An array of the previous settings
     * @return array The validated and (if necessary) amended settings
     **/
    function update( $new_instance, $old_instance ) {

        // update logic goes here
        $updated_instance = $new_instance;
        return $updated_instance;
    }

    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void Echoes it's output
     **/
    function form( $instance ) {
        extract($instance);
        $ich_effects = get_posts( array('post_type' => 'ich_cpt', 'posts_per_page' => -1) );
?>
	<p>
		<label for="<?php echo $this->get_field_id('ich_cpt_id'); ?>"><?php _e( 'Choose Image Caption Hover', 'image-caption-hover' ); ?>: </label>
		<select class="widefat" name="<?php echo $this->get_field_name('ich_cpt_id'); ?>" id="<?php echo $this->get_field_id('ich_cpt_id'); ?>">
			<?php foreach ($ich_effects as $ich_cpt) { ?>
				<option value="<?php echo $ich_cpt->ID; ?>" <?php if(isset($ich_cpt_id) && $ich_cpt_id == $ich_cpt->ID){echo 'selected';} ?>><?php echo $ich_cpt->post_title; ?></option>
			<?php } ?>
		</select>
	</p>

<?php
    }
}
// End of Plugin Class


add_action( 'widgets_init', 'register_ich_widget_class' );

function register_ich_widget_class(){
    register_widget( 'Image_Caption_Hover_Widget_Class' );
}

?>