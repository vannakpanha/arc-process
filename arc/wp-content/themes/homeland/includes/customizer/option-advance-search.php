<?php
	// Advance Search Panel
	$wp_customize->add_panel( 'homeland_advance_search_panel', array(
		'title' => __( 'Advance Search', 'homeland' ),
		'priority' => 125
	));

	  // Main Section
		$wp_customize->add_section('homeland_search_main_section', array(
			'title' => __('Main', 'homeland'),
			'panel' => 'homeland_advance_search_panel',
		));

			// Hide Advance Search
			$wp_customize->add_setting( 'homeland_disable_advance_search', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_disable_advance_search', array(
				'label' => __( 'Hide Advance Search?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_search_main_section',
				'description' => __('This will hide advance search in all pages except in homepage', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Hide Map
			$wp_customize->add_setting( 'homeland_gmap_search', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_gmap_search', array(
				'label' => __( 'Hide Google Map?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_search_main_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Layout
			$wp_customize->add_setting( 'homeland_advance_search_layout', array(
				'type' => 'option',
				'default' => 'Default',
			) );
			$wp_customize->add_control( 'homeland_advance_search_layout', array(
				'label' => __( 'Select your Advance Search Layout', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_search_main_section',
				'choices' => array(
					'Default' => __( 'Default', 'homeland' ),
					'Left Sidebar' => __( 'Left Sidebar', 'homeland' ),
					'1 Column' => __( '1 Column', 'homeland' ),
					'2 Columns' => __( '2 Columns', 'homeland' ),
					'3 Columns' => __( '3 Columns', 'homeland' ),
					'4 Columns' => __( '4 Columns', 'homeland' ),
					'Grid Sidebar' => __( 'Grid Sidebar', 'homeland' ),
					'Grid Left Sidebar' => __( 'Grid Left Sidebar', 'homeland' ),
				)
			) );

			// Search Button
			$wp_customize->add_setting('homeland_search_button_label', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_search_button_label', array(
			 	'label' => __('Search Button label', 'homeland'),
			 	'section' => 'homeland_search_main_section',
			 	'type' => 'text',
			));


		// Property ID Section
		$wp_customize->add_section('homeland_search_id_section', array(
			'title' => __('Property ID', 'homeland'),
			'panel' => 'homeland_advance_search_panel',
		));

			// Hide ID
			$wp_customize->add_setting( 'homeland_hide_pid', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_pid', array(
				'label' => __( 'Hide Property ID Field?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_search_id_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// ID Label
			$wp_customize->add_setting('homeland_pid_label', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_pid_label', array(
			 	'label' => __('Property ID Label', 'homeland'),
			 	'section' => 'homeland_search_id_section',
			 	'type' => 'text',
			));


		// Location Section
		$wp_customize->add_section('homeland_location_section', array(
			'title' => __('Property Location', 'homeland'),
			'panel' => 'homeland_advance_search_panel',
		));

			// Hide location
			$wp_customize->add_setting( 'homeland_hide_location', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_location', array(
				'label' => __( 'Hide Location Field?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_location_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Location Label
			$wp_customize->add_setting('homeland_location_label', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_location_label', array(
			 	'label' => __('Property Location Label', 'homeland'),
			 	'section' => 'homeland_location_section',
			 	'type' => 'text',
			));

			// Order
			$wp_customize->add_setting( 'homeland_property_location_order', array(
				'type' => 'option',
				'default' => 'DESC',
			) );
			$wp_customize->add_control( 'homeland_property_location_order', array(
				'label' => __( 'Ordering', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_location_section',
				'choices' => array(
					'ASC' => __( 'Ascending', 'homeland' ),
					'DESC' => __( 'Descending', 'homeland' ),
				)
			) );

			// Sort
			$wp_customize->add_setting( 'homeland_property_location_orderby', array(
				'type' => 'option',
				'default' => 'ID',
			) );
			$wp_customize->add_control( 'homeland_property_location_orderby', array(
				'label' => __( 'Sorting', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_location_section',
				'choices' => array(
					'id' => __( 'ID', 'homeland' ),
					'count' => __( 'Count', 'homeland' ),
					'name' => __( 'Name', 'homeland' ),
					'slug' => __( 'Slug', 'homeland' ),
					'none' => __( 'None', 'homeland' ),
				)
			) );


		// Status Section
		$wp_customize->add_section('homeland_status_section', array(
			'title' => __('Property Status', 'homeland'),
			'panel' => 'homeland_advance_search_panel',
		));

			// Hide status
			$wp_customize->add_setting( 'homeland_hide_status', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_status', array(
				'label' => __( 'Hide Status Field?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_status_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Status Label
			$wp_customize->add_setting('homeland_status_label', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_status_label', array(
			 	'label' => __('Property Status Label', 'homeland'),
			 	'section' => 'homeland_status_section',
			 	'type' => 'text',
			));

			// Order
			$wp_customize->add_setting( 'homeland_property_status_order', array(
				'type' => 'option',
				'default' => 'DESC',
			) );
			$wp_customize->add_control( 'homeland_property_status_order', array(
				'label' => __( 'Ordering', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_status_section',
				'choices' => array(
					'ASC' => __( 'Ascending', 'homeland' ),
					'DESC' => __( 'Descending', 'homeland' ),
				)
			) );

			// Sort
			$wp_customize->add_setting( 'homeland_property_status_orderby', array(
				'type' => 'option',
				'default' => 'ID',
			) );
			$wp_customize->add_control( 'homeland_property_status_orderby', array(
				'label' => __( 'Sorting', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_status_section',
				'choices' => array(
					'id' => __( 'ID', 'homeland' ),
					'count' => __( 'Count', 'homeland' ),
					'name' => __( 'Name', 'homeland' ),
					'slug' => __( 'Slug', 'homeland' ),
					'none' => __( 'None', 'homeland' ),
				)
			) );


		// Type Section
		$wp_customize->add_section('homeland_type_section', array(
			'title' => __('Property Type', 'homeland'),
			'panel' => 'homeland_advance_search_panel',
		));

			// Hide type
			$wp_customize->add_setting( 'homeland_hide_property_type', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_property_type', array(
				'label' => __( 'Hide Type Field?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_type_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Type Label
			$wp_customize->add_setting('homeland_property_type_label', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_property_type_label', array(
			 	'label' => __('Property Type Label', 'homeland'),
			 	'section' => 'homeland_type_section',
			 	'type' => 'text',
			));

			// Order
			$wp_customize->add_setting( 'homeland_property_type_order', array(
				'type' => 'option',
				'default' => 'DESC',
			) );
			$wp_customize->add_control( 'homeland_property_type_order', array(
				'label' => __( 'Ordering', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_type_section',
				'choices' => array(
					'ASC' => __( 'Ascending', 'homeland' ),
					'DESC' => __( 'Descending', 'homeland' ),
				)
			) );

			// Sort
			$wp_customize->add_setting( 'homeland_property_type_orderby', array(
				'type' => 'option',
				'default' => 'ID',
			) );
			$wp_customize->add_control( 'homeland_property_type_orderby', array(
				'label' => __( 'Sorting', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_type_section',
				'choices' => array(
					'id' => __( 'ID', 'homeland' ),
					'count' => __( 'Count', 'homeland' ),
					'name' => __( 'Name', 'homeland' ),
					'slug' => __( 'Slug', 'homeland' ),
					'none' => __( 'None', 'homeland' ),
				)
			) );


		// Bedrooms Section
		$wp_customize->add_section('homeland_bed_section', array(
			'title' => __('Property Bedrooms', 'homeland'),
			'panel' => 'homeland_advance_search_panel',
		));

			// Hide bedrooms
			$wp_customize->add_setting( 'homeland_hide_bed', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_bed', array(
				'label' => __( 'Hide Bedrooms Field?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_bed_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Bedroom Label
			$wp_customize->add_setting('homeland_bed_label', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_bed_label', array(
			 	'label' => __('Property Bedroom Label', 'homeland'),
			 	'section' => 'homeland_bed_section',
			 	'type' => 'text',
			));

			// Bedroom Selections
			$wp_customize->add_setting('homeland_bed_number', array(
				'default' => '1, 2, 3',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_bed_number', array(
			 	'label' => __('Selection of how many bedrooms', 'homeland'),
			 	'section' => 'homeland_bed_section',
			 	'description' => __('Example of data to be added is something like this 1, 2, 3, 4', 'homeland'),
			 	'type' => 'text',
			));


		// Bathrooms Section
		$wp_customize->add_section('homeland_bath_section', array(
			'title' => __('Property Bathrooms', 'homeland'),
			'panel' => 'homeland_advance_search_panel',
		));

			// Hide bathrooms
			$wp_customize->add_setting( 'homeland_hide_bath', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_bath', array(
				'label' => __( 'Hide Bathroom Field?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_bath_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Bathroom Label
			$wp_customize->add_setting('homeland_bath_label', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_bath_label', array(
			 	'label' => __('Property Bathroom Label', 'homeland'),
			 	'section' => 'homeland_bath_section',
			 	'type' => 'text',
			));

			// Bathroom Selections
			$wp_customize->add_setting('homeland_bath_number', array(
				'default' => '1, 2, 3',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_bath_number', array(
			 	'label' => __('Selection of how many bathrooms', 'homeland'),
			 	'section' => 'homeland_bath_section',
			 	'description' => __('Example of data to be added is something like this 1, 2, 3, 4', 'homeland'),
			 	'type' => 'text',
			));


		// Minimum Price Section
		$wp_customize->add_section('homeland_min_price_section', array(
			'title' => __('Property Minimum Price', 'homeland'),
			'panel' => 'homeland_advance_search_panel',
		));

			// Hide minimum price
			$wp_customize->add_setting( 'homeland_hide_min_price', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_min_price', array(
				'label' => __( 'Hide Minimum Price Field?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_min_price_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Minimum Price Label
			$wp_customize->add_setting('homeland_min_price_label', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_min_price_label', array(
			 	'label' => __('Property Minimum Price Label', 'homeland'),
			 	'section' => 'homeland_min_price_section',
			 	'type' => 'text',
			));

			// Minimum Price Range
			$wp_customize->add_setting('homeland_min_price_value', array(
				'default' => '5000, 10000, 50000, 100000, 200000, 300000, 400000, 500000, 600000, 700000, 800000, 900000, 1000000, 1500000, 2000000, 2500000, 5000000',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_min_price_value', array(
			 	'label' => __('Property Minimum Price Range', 'homeland'),
			 	'section' => 'homeland_min_price_section',
			 	'description' => __('Example of data to be added is something like this 5000, 10000, 50000, 100000', 'homeland'),
			 	'type' => 'textarea',
			));


		// Maximum Price Section
		$wp_customize->add_section('homeland_max_price_section', array(
			'title' => __('Property Maximum Price', 'homeland'),
			'panel' => 'homeland_advance_search_panel',
		));

			// Hide maximum price
			$wp_customize->add_setting( 'homeland_hide_max_price', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_max_price', array(
				'label' => __( 'Hide Maximum Price Field?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_max_price_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Maximum Price Label
			$wp_customize->add_setting('homeland_max_price_label', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_max_price_label', array(
			 	'label' => __('Property Maximum Price Label', 'homeland'),
			 	'section' => 'homeland_max_price_section',
			 	'type' => 'text',
			));

			// Maximum Price Range
			$wp_customize->add_setting('homeland_max_price_value', array(
				'default' => '10000, 50000, 100000, 200000, 300000, 400000, 500000, 600000, 700000, 800000, 900000, 1000000, 1500000, 2000000, 2500000, 5000000, 10000000, 20000000',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_max_price_value', array(
			 	'label' => __('Property Maximum Price Range', 'homeland'),
			 	'section' => 'homeland_max_price_section',
			 	'description' => __('Example of data to be added is something like this 10000, 50000, 100000', 'homeland'),
			 	'type' => 'textarea',
			));
?>