

<?php
/*
* Custom Customizer options for cl
*
*/
function cl_customizer_register( $wp_customize ){
	$wp_customize->add_panel( 'cl_theme_option', array(
		'priority' => 150,
		'capability' => 'edit_theme_options',
		'title' => __( 'Corlate Theme Options', 'cl' ),
		) );
	/*
	* Section for header text
	*
	*/
	$wp_customize->add_section('header_option', array(
		'title' => __('Header Options', 'cl'),
		'panel' => 'cl_theme_option'
		));

	/*
	* Settings for site logo
	*
	*/
	$wp_customize->add_setting('site_mobile_logo', array(
		'type' => 'theme_mod',
		'sanitize_callback' => 'cl_sanitize_url',
		));
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'site_mobile_logo',
			array(
				'label' => __( 'Site Mobile Logo', 'cl' ),
				'section' => 'header_option',
				)
			)
		);

// Setting for phone
	$wp_customize->add_setting('cl_phone', array(
		'type' => 'theme_mod',
		'sanitize_callback' => '',
		));

	$wp_customize->add_control('cl_phone', array(
		'label' => __('Phone Number', 'cl'),
		'section' => 'header_option',
		'settings' => 'cl_phone',
		'type' => 'text'

		));
//for social icons
	$social = array(
		'facebook' => 'facebook_setting',
		'linkedin' => 'linkedin_setting',
		'twitter' => 'twitter_setting',
		'skype' => 'skype_setting',
		'dribble' => 'dribble_setting',


		);
	foreach ($social as $key => $value) {
  # code...
   //For Facebook
		$wp_customize->add_setting( $value );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $value , array(
			'label' => __( 'Write your '.$key.' Link Here', 'test' ),
			'section' => 'header_option',
			'settings' => $value ,
			'type' => 'text',
			) ) );

	}


//about us team section
	$wp_customize->add_section('Aboutus_Section', array(
		'title' => __('About page section', 'cl'),
		'panel' => 'cl_theme_option'
		));


	$social = array(
		'facebook' => 'facebook_setting',
		'twitter' => 'twitter_setting',
		'gmail' => 'gmail_setting',
		


		);
	foreach ($social as $key => $value) {
  # code...
   //For Facebook
		$wp_customize->add_setting( $value );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $value , array(
			'label' => __( 'Write your '.$key.' Link Here', 'test' ),
			'section' => 'Aboutus_Section',
			'settings' => $value ,
			'type' => 'text',
			) ) );

	}


	

/*
	* Section for header text
	*
	*/
	$wp_customize->add_section('Background_images', array(
		'title' => __('Section images Options', 'cl'),
		'panel' => 'cl_theme_option'
		));
//for services background image
	$wp_customize->add_setting('site_services_background', array(
		'type' => 'theme_mod',
		'sanitize_callback' => 'cl_sanitize_url',
		));
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'site_services_background',
			array(
				'label' => __( 'Services background image', 'cl' ),
				'section' => 'Background_images',
				)
			)
		);


//for partners background image
	$wp_customize->add_setting('site_partners_background', array(
		'type' => 'theme_mod',
		'sanitize_callback' => 'cl_sanitize_url',
		));
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'site_partners_background',
			array(
				'label' => __( 'Partners background image', 'cl' ),
				'section' => 'Background_images',
				)
			)
		);
//contact section images

	$wp_customize->add_setting('site_contact_background', array(
		'type' => 'theme_mod',
		'sanitize_callback' => 'cl_sanitize_url',
		));
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'site_contact_background',
			array(
				'label' => __( 'Contact background image', 'cl' ),
				'section' => 'Background_images',
				)
			)
		);


	
    /*
	* Add section for Footer Options
	*
	*/
	$wp_customize->add_section('footer_options', array(
		'title' => __('Footer Options', 'cl'),
		'panel' => 'cl_theme_option'
		));
	


	/*
	* Settings for Powred By text
	*
	*/
	$wp_customize->add_setting('copyright_text', array(
		'type' => 'theme_mod',
		'sanitize_callback' => 'cl_sanitize_html',
		));

	$wp_customize->add_control('copyright_text', array(
		'label' => __('Copyright Text', 'cl'),
		'section' => 'footer_options',
		'settings' => 'copyright_text',

		));

	/*//customizer for footer page link
	$footer= array('cl_pagelink1' =>'firstpage' ,
		'cl_pagelink2' =>'secondpage' ,
		'cl_pagelink3' =>'thirdpage' ,
		'cl_pagelink4' =>'fourthpage' , );
	foreach ($footer as $key => $value) {
		$wp_customize->add_setting($key, array(
			'type' => 'theme_mod',
			'sanitize_callback' => '',
			));

		$wp_customize->add_control($key, array(
			'label' => __($value, 'cl'),
			'section' => 'footer_options',
			'settings' => $key,
			'type' => 'text'

			));
	}
	*/	
}
add_action( 'customize_register', 'cl_customizer_register' );
/*
* Sanitize call back for url
*
*/
function cl_sanitize_url( $url ) {
	return esc_url_raw( $url );
}
/*
* Sanitize call back for 'html' type text inputs
*
*/
function cl_sanitize_html( $html ) {
	return wp_filter_post_kses( $html );
}
