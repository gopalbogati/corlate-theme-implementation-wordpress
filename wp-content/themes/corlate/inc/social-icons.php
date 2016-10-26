<?php

/**
 * CUSTOMIZER SOCIAL ICONS HEADER
 * @param  [customizer] $wp_customize [CUSTOMIZER SOCIAL ICONS HEADER]
 * @return [AUTHOR]               [DEEPEN]
 */
function test_register_customizer( $wp_customize ) {
  
//SOCIAL SETTINGS TAB
   $wp_customize->add_section( 'social_settings' , array(
    'title'      => __( 'Social Media', 'test' ),
    'description' => __('Leave the field blank in order to Disable the Social Button', 'test'),
    'priority'   => 30
   ));

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
        'section' => 'social_settings',
        'settings' => $value ,
        'type' => 'text',
    ) ) );

}

}
add_action( 'customize_register', 'test_register_customizer' );


?>