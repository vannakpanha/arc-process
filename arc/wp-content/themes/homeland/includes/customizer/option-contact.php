<?php
	// Contact Panel
	$wp_customize->add_panel( 'homeland_contact_panel', array(
		'title' => __( 'Contact', 'homeland' ),
		'priority' => 133
	));

		// Main Section
		$wp_customize->add_section('homeland_contact_main_section', array(
			'title' => __('Main', 'homeland'),
			'panel' => 'homeland_contact_panel',
		));

			// Email
			$wp_customize->add_setting('homeland_email_address', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_email_address', array(
			 	'label' => __('Email Address', 'homeland'),
			 	'section' => 'homeland_contact_main_section',
			 	'type' => 'text',
			));

			// Fax
			$wp_customize->add_setting('homeland_fax', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_fax', array(
			 	'label' => __('Fax', 'homeland'),
			 	'section' => 'homeland_contact_main_section',
			 	'type' => 'text',
			));

			// Phone Number
			$wp_customize->add_setting('homeland_phone_number', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_phone_number', array(
			 	'label' => __('Phone Number', 'homeland'),
			 	'section' => 'homeland_contact_main_section',
			 	'type' => 'text',
			));

			// Address
			$wp_customize->add_setting('homeland_contact_address', array(
				'type' => 'option',
				'sanitize_callback' => 'homeland_textarea',
			));

			$wp_customize->add_control('homeland_contact_address', array(
			 	'label' => __('Address', 'homeland'),
			 	'section' => 'homeland_contact_main_section',
			 	'type' => 'textarea',
			));

			// Working Hours
			$wp_customize->add_setting('homeland_working_hours', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_working_hours', array(
			 	'label' => __('Working Hours', 'homeland'),
			 	'section' => 'homeland_contact_main_section',
			 	'type' => 'text',
			));

			// Contact Background Image
			$wp_customize->add_setting( 'homeland_contact_alt_bgimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_contact_alt_bgimage',
					array(
						'label' => __( 'Top Background Image', 'homeland' ),
						'section' => 'homeland_contact_main_section',
						'description' => __('Upload top background image for contact alternate page', 'homeland')
					)
				)
			);


		// Google Map Section
		$wp_customize->add_section('homeland_contact_gmap_section', array(
			'title' => __('Google Map', 'homeland'),
			'panel' => 'homeland_contact_panel',
		));

			// Hide Google Map
			$wp_customize->add_setting( 'homeland_hide_gmap', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_gmap', array(
				'label' => __( 'Hide Google Map?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_contact_gmap_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Latitude 
			$wp_customize->add_setting('homeland_map_lat', array(
				'default' => '37.0625',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_map_lat', array(
			 	'label' => __('Map Latitude', 'homeland'),
			 	'section' => 'homeland_contact_gmap_section',
			 	'type' => 'text',
			));

			// Longitude 
			$wp_customize->add_setting('homeland_map_lng', array(
				'default' => '-95.677068',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_map_lng', array(
				'label' => __('Map Longitude', 'homeland'),
				'section' => 'homeland_contact_gmap_section',
				'type' => 'text',
			));

			// Map Zoom Value 
			$wp_customize->add_setting('homeland_map_zoom', array(
				'default' => '10',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_map_zoom', array(
			 	'label' => __('Map Zoom Level', 'homeland'),
			 	'section' => 'homeland_contact_gmap_section',
			 	'description' => __('Add your value for map zoom level from 1-20', 'homeland'),
			 	'type' => 'text',
			));
?>