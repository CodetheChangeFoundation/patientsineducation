<?php
//about theme info
add_action( 'admin_menu', 'bb_mobile_application_abouttheme' );
function bb_mobile_application_abouttheme() {    	
	add_theme_page( esc_html__('About App Theme', 'bb-mobile-application'), esc_html__('About App Theme', 'bb-mobile-application'), 'edit_theme_options', 'bb_mobile_application_guide', 'bb_mobile_application_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function bb_mobile_application_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() .'/inc/admin/admin.css');
}
add_action('admin_enqueue_scripts', 'bb_mobile_application_admin_theme_style');

//guidline for about theme
function bb_mobile_application_mostrar_guide() {
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
 <div class="wrapper-info">
	 <div class="header">
	 	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/logo.png" alt="" />
	 	<h2><?php esc_html_e('Welcome to Mobile App Lite Theme', 'bb-mobile-application'); ?></h2>
 		<p><?php esc_html_e('Most of our outstanding theme is elegant, responsive, multifunctional, SEO friendly has amazing features and functionalities that make them highly demanding for designers and bloggers, who ought to excel in web development domain. Our Themeshopy has got everything that an individual and group need to be successful in their venture.', 'bb-mobile-application'); ?></p>
		<div class="main-button">
			<a href="<?php echo esc_url( BB_MOBILE_APPLICATION_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'bb-mobile-application'); ?></a>
			<a href="<?php echo esc_url( BB_MOBILE_APPLICATION_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'bb-mobile-application'); ?></a>
			<a href="<?php echo esc_url( BB_MOBILE_APPLICATION_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'bb-mobile-application'); ?></a>
		</div>
	</div>
	<div class="button-bg">
	<button class="tablink" onclick="openPage('Home', this, '')"><?php esc_html_e('Lite Theme Setup', 'bb-mobile-application'); ?></button>
	<button class="tablink" onclick="openPage('Contact', this, '')"><?php esc_html_e('Premium Theme info', 'bb-mobile-application'); ?></button>
	</div>
	<div id="Home" class="tabcontent tab1">
	  	<h3><?php esc_html_e('How to set up homepage', 'bb-mobile-application'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( BB_MOBILE_APPLICATION_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'bb-mobile-application'); ?></a>
			<a href="<?php echo esc_url( BB_MOBILE_APPLICATION_CONTACT ); ?>"><?php esc_html_e('Support', 'bb-mobile-application'); ?></a>
			<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Start Customizing', 'bb-mobile-application'); ?></a>
		</div>
	  	<div class="documentation">
		  	<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 1.', 'bb-mobile-application'); ?></b> <?php esc_html_e('Follow these instructions to setup Home page.', 'bb-mobile-application'); ?></li>
					<li> <b><?php esc_html_e('Step 2.', 'bb-mobile-application'); ?></b> <?php esc_html_e(' Create Page to set template: Go to Dashboard >> Pages >> Add New Page.Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.', 'bb-mobile-application'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/home-page-template.png" alt="" />	
		  	</div>
		  	<div class="clearfixed">
				<div class="doc-image1">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/set-front-page.png" alt="" />	
			    </div>
			    <div class="image-docs1">
				    <ul>
						<li> <b><?php esc_html_e('Step 3.', 'bb-mobile-application'); ?></b> <?php esc_html_e('Set the front page: Go to Setting -> Reading --> Set the front page display static page to home page', 'bb-mobile-application'); ?></li>
					</ul>
			  	</div>
			</div>
		</div>
	</div>

	<div id="Contact" class="tabcontent">
	 	<h3><?php esc_html_e('Premium Theme Info', 'bb-mobile-application'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( BB_MOBILE_APPLICATION_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'bb-mobile-application'); ?></a>
			<a href="<?php echo esc_url( BB_MOBILE_APPLICATION_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'bb-mobile-application'); ?></a>
			<a href="<?php echo esc_url( BB_MOBILE_APPLICATION_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'bb-mobile-application'); ?></a>
		</div>
	  	<div class="features-section">
	  		<div class="col-4">
	  			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/screenshot.png" alt="" />
	  			<p><?php esc_html_e( 'Are you searching for a versatile option to present a multipurpose website? Well, the Mobile Responsive Business WordPress Theme is an extensively developed theme to cover the website requirements of every business. The best thing about this theme is its customization options that let you make unique websites on single clicks. Extreme consideration is given to the design of this Mobile Application WordPress Theme so as to make it adaptable for any business type. Because of the well-structured Landing Page that comes incorporated with this theme, any business can lead ahead of its competitors! This Corporate WordPress Theme is really advantageous, it owes the credit of being multipurpose and giving a thorough insight of your website to the site visitors. You dont have to make any changes in its coding to create different website pages. You can nicely showcase your work with this mobile application theme. The great features of this theme put forward the robustness of your product. It offers detailed documentation and full theme support. Also, this Mobile Friendly WordPress Theme presents your stunning website on handheld devices as per users convenience. Get this state of the art Landing Page WordPress Theme right away.', 'bb-mobile-application' ); ?></p>
	  		</div>
	  		<div class="col-4">
	  			<h4><?php esc_html_e( 'Theme Features', 'bb-mobile-application' ); ?></h4>
				<ul>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Theme options using customizer API', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Responsive Design', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Favicon, Logo, Title and Tagline Customization', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advanced Color Options and Color Pallets', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( '100+ Font Family Options', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Slider with a Number of Slider Images Upload Option Available.', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Support to Add Custom CSS/JS', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'SEO Friendly', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Pagination Option', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Compatible With Different WordPress Famous Plugins Like Contact Form 7 and Woocommerce', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Enable-Disable Options on All Sections', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Footer Customization Options', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Fully Integrated with Font Awesome Icon', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Short Codes', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Background Image Option', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Page Templates', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Featured Product Images, HD Images and Video display', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Make Post About Firms News, Events, Achievements and So On.', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Left and Right Sidebar', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Sticky Post & Comment Threads', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Parallax Image-Background Section', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Customizable Home Page', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Full-Width Template', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'bb-mobile-application' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Social Media Feature', 'bb-mobile-application' ); ?></li>
				</ul>
			</div>
		</div>
	</div>

<script>
	function openPage(pageName,elmnt,color) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablink");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].style.backgroundColor = "";
	    }
	    document.getElementById(pageName).style.display = "block";
	    elmnt.style.backgroundColor = color;

	}
	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
</script>
<?php } ?>