<?php
/**
 * BB Mobile Application Theme Customizer
 *
 * @package BB Mobile Application
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bb_mobile_application_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'bb_mobile_application_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'BB Settings', 'bb-mobile-application' ),
	    'description' => __( 'Description of what this panel does.', 'bb-mobile-application' ),
	) );

	//Layouts
	$wp_customize->add_section( 'bb_mobile_application_left_right', array(
    	'title'      => __( 'General Settings', 'bb-mobile-application' ),
		'priority'   => 30,
		'panel' => 'bb_mobile_application_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('bb_mobile_application_theme_options',array(
        'default' => '',
        'sanitize_callback' => 'bb_mobile_application_sanitize_choices'
	));
	$wp_customize->add_control('bb_mobile_application_theme_options',
	    array(
	        'type' => 'radio',
	        'label' => __( 'Change Layouts', 'bb-mobile-application' ),
	        'section' => 'bb_mobile_application_left_right',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','bb-mobile-application'),
	            'Right Sidebar' => __('Right Sidebar','bb-mobile-application'),
	            'One Column' => __('One Column','bb-mobile-application'),
	            'Three Columns' => __('Three Columns','bb-mobile-application'),
	            'Four Columns' => __('Four Columns','bb-mobile-application'),
	            'Grid Layout' => __('Grid Layout','bb-mobile-application')
	        ),
	    )
    );

	$font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );

	//Typography
	$wp_customize->add_section( 'bb_mobile_application_typography', array(
    	'title'      => __( 'Typography', 'bb-mobile-application' ),
		'priority'   => 30,
		'panel' => 'bb_mobile_application_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'bb_mobile_application_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_mobile_application_paragraph_color', array(
		'label' => __('Paragraph Color', 'bb-mobile-application'),
		'section' => 'bb_mobile_application_typography',
		'settings' => 'bb_mobile_application_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('bb_mobile_application_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'bb_mobile_application_sanitize_choices'
	));
	$wp_customize->add_control(
	    'bb_mobile_application_paragraph_font_family', array(
	    'section'  => 'bb_mobile_application_typography',
	    'label'    => __( 'Paragraph Fonts','bb-mobile-application'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('bb_mobile_application_paragraph_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('bb_mobile_application_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','bb-mobile-application'),
		'section'	=> 'bb_mobile_application_typography',
		'setting'	=> 'bb_mobile_application_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'bb_mobile_application_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_mobile_application_atag_color', array(
		'label' => __('"a" Tag Color', 'bb-mobile-application'),
		'section' => 'bb_mobile_application_typography',
		'settings' => 'bb_mobile_application_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('bb_mobile_application_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'bb_mobile_application_sanitize_choices'
	));
	$wp_customize->add_control(
	    'bb_mobile_application_atag_font_family', array(
	    'section'  => 'bb_mobile_application_typography',
	    'label'    => __( '"a" Tag Fonts','bb-mobile-application'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'bb_mobile_application_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_mobile_application_li_color', array(
		'label' => __('"li" Tag Color', 'bb-mobile-application'),
		'section' => 'bb_mobile_application_typography',
		'settings' => 'bb_mobile_application_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('bb_mobile_application_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'bb_mobile_application_sanitize_choices'
	));
	$wp_customize->add_control(
	    'bb_mobile_application_li_font_family', array(
	    'section'  => 'bb_mobile_application_typography',
	    'label'    => __( '"li" Tag Fonts','bb-mobile-application'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'bb_mobile_application_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_mobile_application_h1_color', array(
		'label' => __('H1 Color', 'bb-mobile-application'),
		'section' => 'bb_mobile_application_typography',
		'settings' => 'bb_mobile_application_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('bb_mobile_application_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'bb_mobile_application_sanitize_choices'
	));
	$wp_customize->add_control(
	    'bb_mobile_application_h1_font_family', array(
	    'section'  => 'bb_mobile_application_typography',
	    'label'    => __( 'H1 Fonts','bb-mobile-application'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('bb_mobile_application_h1_font_size',array(
		'default'	=> '50px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('bb_mobile_application_h1_font_size',array(
		'label'	=> __('H1 Font Size','bb-mobile-application'),
		'section'	=> 'bb_mobile_application_typography',
		'setting'	=> 'bb_mobile_application_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'bb_mobile_application_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_mobile_application_h2_color', array(
		'label' => __('h2 Color', 'bb-mobile-application'),
		'section' => 'bb_mobile_application_typography',
		'settings' => 'bb_mobile_application_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('bb_mobile_application_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'bb_mobile_application_sanitize_choices'
	));
	$wp_customize->add_control(
	    'bb_mobile_application_h2_font_family', array(
	    'section'  => 'bb_mobile_application_typography',
	    'label'    => __( 'h2 Fonts','bb-mobile-application'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('bb_mobile_application_h2_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('bb_mobile_application_h2_font_size',array(
		'label'	=> __('h2 Font Size','bb-mobile-application'),
		'section'	=> 'bb_mobile_application_typography',
		'setting'	=> 'bb_mobile_application_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'bb_mobile_application_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_mobile_application_h3_color', array(
		'label' => __('h3 Color', 'bb-mobile-application'),
		'section' => 'bb_mobile_application_typography',
		'settings' => 'bb_mobile_application_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('bb_mobile_application_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'bb_mobile_application_sanitize_choices'
	));
	$wp_customize->add_control(
	    'bb_mobile_application_h3_font_family', array(
	    'section'  => 'bb_mobile_application_typography',
	    'label'    => __( 'h3 Fonts','bb-mobile-application'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('bb_mobile_application_h3_font_size',array(
		'default'	=> '36px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('bb_mobile_application_h3_font_size',array(
		'label'	=> __('h3 Font Size','bb-mobile-application'),
		'section'	=> 'bb_mobile_application_typography',
		'setting'	=> 'bb_mobile_application_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'bb_mobile_application_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_mobile_application_h4_color', array(
		'label' => __('h4 Color', 'bb-mobile-application'),
		'section' => 'bb_mobile_application_typography',
		'settings' => 'bb_mobile_application_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('bb_mobile_application_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'bb_mobile_application_sanitize_choices'
	));
	$wp_customize->add_control(
	    'bb_mobile_application_h4_font_family', array(
	    'section'  => 'bb_mobile_application_typography',
	    'label'    => __( 'h4 Fonts','bb-mobile-application'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('bb_mobile_application_h4_font_size',array(
		'default'	=> '30px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('bb_mobile_application_h4_font_size',array(
		'label'	=> __('h4 Font Size','bb-mobile-application'),
		'section'	=> 'bb_mobile_application_typography',
		'setting'	=> 'bb_mobile_application_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'bb_mobile_application_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_mobile_application_h5_color', array(
		'label' => __('h5 Color', 'bb-mobile-application'),
		'section' => 'bb_mobile_application_typography',
		'settings' => 'bb_mobile_application_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('bb_mobile_application_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'bb_mobile_application_sanitize_choices'
	));
	$wp_customize->add_control(
	    'bb_mobile_application_h5_font_family', array(
	    'section'  => 'bb_mobile_application_typography',
	    'label'    => __( 'h5 Fonts','bb-mobile-application'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('bb_mobile_application_h5_font_size',array(
		'default'	=> '25px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('bb_mobile_application_h5_font_size',array(
		'label'	=> __('h5 Font Size','bb-mobile-application'),
		'section'	=> 'bb_mobile_application_typography',
		'setting'	=> 'bb_mobile_application_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'bb_mobile_application_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_mobile_application_h6_color', array(
		'label' => __('h6 Color', 'bb-mobile-application'),
		'section' => 'bb_mobile_application_typography',
		'settings' => 'bb_mobile_application_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('bb_mobile_application_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'bb_mobile_application_sanitize_choices'
	));
	$wp_customize->add_control(
	    'bb_mobile_application_h6_font_family', array(
	    'section'  => 'bb_mobile_application_typography',
	    'label'    => __( 'h6 Fonts','bb-mobile-application'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('bb_mobile_application_h6_font_size',array(
		'default'	=> '18px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('bb_mobile_application_h6_font_size',array(
		'label'	=> __('h6 Font Size','bb-mobile-application'),
		'section'	=> 'bb_mobile_application_typography',
		'setting'	=> 'bb_mobile_application_h6_font_size',
		'type'	=> 'text'
	));

	//home page slider
	$wp_customize->add_section( 'bb_mobile_application_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'bb-mobile-application' ),
		'priority'   => 30,
		'panel' => 'bb_mobile_application_panel_id'
	) );

	$wp_customize->add_setting('bb_mobile_application_slider_hide_show',array(
      'default' => 'true',
      'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('bb_mobile_application_slider_hide_show',array(
	  'type' => 'checkbox',
	  'label' => __('Show / Hide slider','bb-mobile-application'),
	  'section' => 'bb_mobile_application_slidersettings',
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'bb_mobile_application_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'bb_mobile_application_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'bb_mobile_application_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'bb-mobile-application' ),
			'section'  => 'bb_mobile_application_slidersettings',
			'type'     => 'dropdown-pages'
		) );

	}

	//Creative Feature
	$wp_customize->add_section('bb_mobile_application_creative_section',array(
		'title'	=> __('Creative Features Section','bb-mobile-application'),
		'description'	=> '',
		'priority'	=> null,
		'panel' => 'bb_mobile_application_panel_id',
	));
	
	$wp_customize->add_setting('bb_mobile_application_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('bb_mobile_application_title',array(
		'label'	=> __('Title','bb-mobile-application'),
		'section'	=> 'bb_mobile_application_creative_section',
		'type'	=> 'text'
	));

	// category left
	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
	if($i==0){
	$default = $category->slug;
	$i++;
	}
	$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('bb_mobile_application_blogcategory_left_setting',array(
		'default'	=> 'select',
		'sanitize_callback' => 'bb_mobile_application_sanitize_choices',
	));
	$wp_customize->add_control('bb_mobile_application_blogcategory_left_setting',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Latest Post','bb-mobile-application'),
		'section' => 'bb_mobile_application_creative_section',
	));

	//middle image
	$post_list = get_posts();
	$i = 0;
	$pst[]='Select';  
	foreach($post_list as $post){
	$pst[$post->post_title] = $post->post_title;
	}


	$wp_customize->add_setting('bb_mobile_application_middle_image_setting',array(
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('bb_mobile_application_middle_image_setting',array(
		'type'    => 'select',
		 'choices' => $pst,
		'label' => __('Select post to display featured image','bb-mobile-application'),
		'section' => 'bb_mobile_application_creative_section',
	));

	// category right
	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post1[]= 'select';
	foreach($categories as $category){
	if($i==0){
	$default = $category->slug;
	$i++;
	}
	$cat_post1[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('bb_mobile_application_blogcategory_right_setting',array(
		'default'	=> 'select',
		'sanitize_callback' => 'bb_mobile_application_sanitize_choices',
	));
	$wp_customize->add_control('bb_mobile_application_blogcategory_right_setting',array(
		'type'    => 'select',
		'choices' => $cat_post1,
		'label' => __('Select Category to display Latest Post','bb-mobile-application'),
		'section' => 'bb_mobile_application_creative_section',
	));
	
	//Footer
	$wp_customize->add_section('bb_mobile_application_footer_section',array(
		'title'	=> __('Footer Text','bb-mobile-application'),
		'description'	=> '',
		'priority'	=> null,
		'panel' => 'bb_mobile_application_panel_id',
	));

	$wp_customize->add_setting('bb_mobile_application_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));	
	$wp_customize->add_control('bb_mobile_application_footer_copy',array(
		'label'	=> __('Copyright Text','bb-mobile-application'),
		'section'	=> 'bb_mobile_application_footer_section',
		'type'		=> 'textarea'
	));	
}
add_action( 'customize_register', 'bb_mobile_application_customize_register' );	


/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class BB_Mobile_Application_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'BB_Mobile_Application_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new BB_Mobile_Application_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority'	=> 9,
					'title'    => esc_html__( 'Upgrade to Pro', 'bb-mobile-application' ),
					'pro_text' => esc_html__( 'Go Pro',         'bb-mobile-application' ),
					'pro_url'  => esc_url( 'https://www.themeshopy.com/premium/bb-mobile-application-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'bb-mobile-application-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'bb-mobile-application-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
BB_Mobile_Application_Customize::get_instance();