<?php
  // Footer Section
	$wp_customize->add_section('homeland_footer_section', array(
		'title' => __('Footer', 'homeland'),
		'priority' => 127
	));

		// Hide Widgets
		$wp_customize->add_setting( 'homeland_hide_widgets', array(
			'type' => 'option',
			'default' => '',
		) );
		$wp_customize->add_control( 'homeland_hide_widgets', array(
			'label' => __( 'Hide Footer Widgets?', 'homeland' ),
			'type' => 'radio',
			'section' => 'homeland_footer_section',
			'choices' => array(
				'true' => __( 'Yes', 'homeland' ),
				'' => __( 'No', 'homeland' ),
			)
		) );

		// Layout
		$wp_customize->add_setting( 'homeland_footer_layout', array(
			'type' => 'option',
			'default' => 'Default',
		) );
		$wp_customize->add_control( 'homeland_footer_layout', array(
			'label' => __( 'Footer Layout', 'homeland' ),
			'type' => 'select',
			'section' => 'homeland_footer_section',
			'choices' => array(
				'Default' => __( 'Default', 'homeland' ),
				'Layout 2' => __( 'Layout 2', 'homeland' ),
				'Layout 3' => __( 'Layout 3', 'homeland' ),
				'Layout 4' => __( 'Layout 4', 'homeland' ),
				'Layout 5' => __( 'Layout 5', 'homeland' ),
				'Layout 6' => __( 'Layout 6', 'homeland' ),
			)
		) );

		// Copyright text
		$wp_customize->add_setting('homeland_copyright_text', array(
			'type' => 'option',
			'sanitize_callback' => 'sanitize_text_field',
		));

		$wp_customize->add_control('homeland_copyright_text', array(
		 	'label' => __('Copyright Text', 'homeland'),
		 	'section' => 'homeland_footer_section',
		 	'type' => 'text',
		));

		// Google Analytics
		$wp_customize->add_setting('homeland_ga_code', array(
			'type' => 'option',
			'sanitize_callback' => 'sanitize_text_field',
		));

		$wp_customize->add_control('homeland_ga_code', array(
		 	'label' => __('Google Analytics Code', 'homeland'),
		 	'section' => 'homeland_footer_section',
		 	'description' => __('Paste your google analytics code here from google', 'homeland'),
		 	'type' => 'textarea',
		));
?>