<?php

//Add Theme Customizer options
function soilTesting_customize_register($wp_customize){
	
	//Sections
	$wp_customize->add_section('soilTesting-frontpage-contactInfo', array(
		'title'=>'Contact Info',
		'priority'=>65,
		'description'=>'Enter address information to be displayed on the front page header'
		));

	//settings
	$wp_customize->add_setting('soilTesting_options_id', array(
		'capability'=>'edit_theme_options',
		'type'=>'theme_mod'
		));

	//Controls
	$wp_customize->add_control('soilTesting_options_id',array(
		'label'=>'Address',
		'section'=>'soilTesting-frontpage-contactInfo',
		'type'=>'textarea',
		'priority'=>'0',
		'settings'=>'soilTesting_options_id'
		));

}
add_action( 'customize_register', 'soilTesting_customize_register' );