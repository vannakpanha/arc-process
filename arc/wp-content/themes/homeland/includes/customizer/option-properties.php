<?php
	// Property Panel
	$wp_customize->add_panel( 'homeland_property_panel', array(
		'title' => __( 'Properties', 'homeland' ),
		'priority' => 129
	));

		// Currency Section
		$wp_customize->add_section('homeland_currency_section', array(
			'title' => __('Currency', 'homeland'),
			'panel' => 'homeland_property_panel',
		));

			// Currency Sign
			$wp_customize->add_setting('homeland_property_currency', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_property_currency', array(
			 	'label' => __('Currency Sign', 'homeland'),
			 	'section' => 'homeland_currency_section',
			 	'type' => 'text',
			));

			// Price Format
			$wp_customize->add_setting( 'homeland_price_format', array(
				'type' => 'option',
				'default' => 'Comma',
			) );
			$wp_customize->add_control( 'homeland_price_format', array(
				'label' => __( 'Price Format', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_currency_section',
				'choices' => array(
					'Comma' => __( 'Comma', 'homeland' ),
					'Dot' => __( 'Dot', 'homeland' ),
					'Europe' => __( 'Europe', 'homeland' ),
					'Brazil' => __( 'Brazil', 'homeland' ),
					'None' => __( 'None', 'homeland' ),
				)
			) );

			// Position of currency sign
			$wp_customize->add_setting( 'homeland_property_currency_sign', array(
				'type' => 'option',
				'default' => 'Before',
			) );
			$wp_customize->add_control( 'homeland_property_currency_sign', array(
				'label' => __( 'Position of currency sign', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_currency_section',
				'choices' => array(
					'Before' => __( 'Before', 'homeland' ),
					'After' => __( 'After', 'homeland' ),
				)
			) );

			// Decimal Places
			$wp_customize->add_setting('homeland_property_decimal', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_property_decimal', array(
			 	'label' => __('Decimal', 'homeland'),
			 	'description' => __('Enter how many decimal number you want to add for your property price', 'homeland'),
			 	'section' => 'homeland_currency_section',
			 	'type' => 'text',
			));


		// Main Section
		$wp_customize->add_section('homeland_property_main_section', array(
			'title' => __('Main', 'homeland'),
			'panel' => 'homeland_property_panel',
		));

			// Hide Map
			$wp_customize->add_setting( 'homeland_hide_map_list', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_map_list', array(
				'label' => __( 'Hide Google Map?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_property_main_section',
				'description' => __('This will hide google map in property page only', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Limit
			$wp_customize->add_setting('homeland_num_properties', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_num_properties', array(
			 	'label' => __('Number of property item per page', 'homeland'),
			 	'section' => 'homeland_property_main_section',
			 	'type' => 'text',
			));

			// Order
			$wp_customize->add_setting( 'homeland_album_order', array(
				'type' => 'option',
				'default' => 'DESC',
			) );
			$wp_customize->add_control( 'homeland_album_order', array(
				'label' => __( 'Ordering', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_property_main_section',
				'choices' => array(
					'ASC' => __( 'Ascending', 'homeland' ),
					'DESC' => __( 'Descending', 'homeland' ),
				)
			) );

			// Sort
			$wp_customize->add_setting( 'homeland_album_orderby', array(
				'type' => 'option',
				'default' => 'ID',
			) );
			$wp_customize->add_control( 'homeland_album_orderby', array(
				'label' => __( 'Sorting', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_property_main_section',
				'choices' => array(
					'ID' => __( 'ID', 'homeland' ),
					'author' => __( 'Author', 'homeland' ),
					'title' => __( 'Title', 'homeland' ),
					'name' => __( 'Name', 'homeland' ),
					'date' => __( 'Date', 'homeland' ),
					'modified' => __( 'Modified', 'homeland' ),
					'parent' => __( 'Parent', 'homeland' ),
					'rand' => __( 'Random', 'homeland' ),
					'comment_count' => __( 'Comment Count', 'homeland' ),
					'menu_order' => __( 'Menu Order', 'homeland' ),
				)
			) );

			// Hide Excerpt
			$wp_customize->add_setting( 'homeland_property_excerpt', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_property_excerpt', array(
				'label' => __( 'Hide Excerpt?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_property_main_section',
				'description' => __('This will hide property excerpt', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Excerpt Length
			$wp_customize->add_setting('homeland_excerpt_length_properties', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
				'default' => '30',
			));

			$wp_customize->add_control('homeland_excerpt_length_properties', array(
			 	'label' => __('Excerpt Length', 'homeland'),
			 	'section' => 'homeland_property_main_section',
			 	'description' => __('This will control the number of words in the excerpts for property page templates, property archive pages and property in homepage. Default value is 30', 'homeland'),
			 	'type' => 'text',
			));

			// Button Label
			$wp_customize->add_setting('homeland_property_button', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_property_button', array(
			 	'label' => __('Property Button Label', 'homeland'),
			 	'section' => 'homeland_property_main_section',
			 	'type' => 'text',
			));

			// Filter Sort
			$wp_customize->add_setting( 'homeland_filter_default', array(
				'type' => 'option',
				'default' => 'Price',
			) );
			$wp_customize->add_control( 'homeland_filter_default', array(
				'label' => __( 'Filter Sorting', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_property_main_section',
				'choices' => array(
					'Date' => __( 'Date', 'homeland' ),
					'Name' => __( 'Name', 'homeland' ),
					'Price' => __( 'Price', 'homeland' ),
					'Random' => __( 'Random', 'homeland' ),
				)
			) );

			// Preferred Size
			$wp_customize->add_setting( 'homeland_preferred_size', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_preferred_size', array(
				'label' => __( 'Preferred Size?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_property_main_section',
				'choices' => array(
					'Lot Area' => __( 'Lot Area', 'homeland' ),
					'Floor Area' => __( 'Floor Area', 'homeland' ),
				)
			) );

			// Property Slug
			$wp_customize->add_setting('homeland_property_slug', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_property_slug', array(
			 	'label' => __('Property Slug', 'homeland'),
			 	'section' => 'homeland_property_main_section',
			 	'description' => __('The slug name cannot be the same name as your property page or else the layout breaks. This option changes the permalink when you use the permalink type as %postname%. Make sure to regenerate permalinks structure.', 'homeland'),
			 	'type' => 'text',
			));


		// Single Post Section
		$wp_customize->add_section('homeland_property_single_section', array(
			'title' => __('Single Post', 'homeland'),
			'panel' => 'homeland_property_panel',
		));

			// Layout
			$wp_customize->add_setting( 'homeland_single_property_layout', array(
				'type' => 'option',
				'default' => 'Default',
			) );
			$wp_customize->add_control( 'homeland_single_property_layout', array(
				'label' => __( 'Layout', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_property_single_section',
				'description' => __('Select your desire layout for property single page', 'homeland'),
				'choices' => array(
					'Default' => __( 'Default', 'homeland' ),
					'Left Sidebar' => __( 'Left Sidebar', 'homeland' ),
					'Fullwidth' => __( 'Fullwidth', 'homeland' ),
				)
			) );

			// Featured Image
			$wp_customize->add_setting( 'homeland_properties_thumb_slider', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_properties_thumb_slider', array(
				'label' => __( 'Exclude Featured Image?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_property_single_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Static Images
			$wp_customize->add_setting( 'homeland_property_static_image', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_property_static_image', array(
				'label' => __( 'Use static image for properties?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_property_single_section',
				'description' => __('Note: If you select yes it will display property images without a slider', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Attachment Order
			$wp_customize->add_setting( 'homeland_attachment_order', array(
				'type' => 'option',
				'default' => 'DESC',
			) );
			$wp_customize->add_control( 'homeland_attachment_order', array(
				'label' => __( 'Attachment Ordering', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_property_single_section',
				'choices' => array(
					'ASC' => __( 'Ascending', 'homeland' ),
					'DESC' => __( 'Descending', 'homeland' ),
				)
			) );

			// Attachment Sort
			$wp_customize->add_setting( 'homeland_attachment_orderby', array(
				'type' => 'option',
				'default' => 'ID',
			) );
			$wp_customize->add_control( 'homeland_attachment_orderby', array(
				'label' => __( 'Attachment Sorting', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_property_single_section',
				'choices' => array(
					'ID' => __( 'ID', 'homeland' ),
					'author' => __( 'Author', 'homeland' ),
					'title' => __( 'Title', 'homeland' ),
					'name' => __( 'Name', 'homeland' ),
					'date' => __( 'Date', 'homeland' ),
					'modified' => __( 'Modified', 'homeland' ),
					'parent' => __( 'Parent', 'homeland' ),
					'rand' => __( 'Random', 'homeland' ),
					'comment_count' => __( 'Comment Count', 'homeland' ),
					'menu_order' => __( 'Menu Order', 'homeland' ),
				)
			) );

			// Amenities Header
			$wp_customize->add_setting('homeland_property_amenities_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_property_amenities_header', array(
			 	'label' => __('Amenities Header Title', 'homeland'),
			 	'section' => 'homeland_property_single_section',
			 	'type' => 'text',
			));

			// Clickable Amenities
			$wp_customize->add_setting( 'homeland_clickable_amenities', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_clickable_amenities', array(
				'label' => __( 'Clickable Amenities List?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_property_single_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Hide Map
			$wp_customize->add_setting( 'homeland_hide_map', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_map', array(
				'label' => __( 'Hide Google Map?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_property_single_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Display Street View Map
			$wp_customize->add_setting( 'homeland_show_street_view', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_show_street_view', array(
				'label' => __( 'Display Map Street View?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_property_single_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Map Header
			$wp_customize->add_setting('homeland_property_map_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_property_map_header', array(
			 	'label' => __('Map Header Title', 'homeland'),
			 	'section' => 'homeland_property_single_section',
			 	'type' => 'text',
			));

			// Hide Agent Details
			$wp_customize->add_setting( 'homeland_agent_info', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_agent_info', array(
				'label' => __( 'Hide Agent Details?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_property_single_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Agent Form Header
			$wp_customize->add_setting('homeland_agent_form', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_agent_form', array(
			 	'label' => __('Agent Form Header Title', 'homeland'),
			 	'section' => 'homeland_property_single_section',
			 	'type' => 'text',
			));

			// Hide Other Properties
			$wp_customize->add_setting( 'homeland_other_properties', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_other_properties', array(
				'label' => __( 'Hide Other Properties?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_property_single_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Limit Other Properties
			$wp_customize->add_setting('homeland_other_property_limit', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_other_property_limit', array(
			 	'label' => __('Number of other properties display', 'homeland'),
			 	'section' => 'homeland_property_single_section',
			 	'type' => 'text',
			));

			// Other Properties Header
			$wp_customize->add_setting('homeland_other_properties_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_other_properties_header', array(
			 	'label' => __('Other Property Header Title', 'homeland'),
			 	'section' => 'homeland_property_single_section',
			 	'type' => 'text',
			));

			// Hide Comments
			$wp_customize->add_setting( 'homeland_hide_property_comments', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_property_comments', array(
				'label' => __( 'Hide Comments?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_property_single_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Hide Previous and Next Buttons
			$wp_customize->add_setting( 'homeland_hide_property_prevnext', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_property_prevnext', array(
				'label' => __( 'Hide Previous and Next Buttons?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_property_single_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );


		// Archive Section
		$wp_customize->add_section('homeland_property_archive_section', array(
			'title' => __('Archive', 'homeland'),
			'panel' => 'homeland_property_panel',
		));

			// Hide Advance Search
			$wp_customize->add_setting( 'homeland_hide_property_archive_advance_search', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_property_archive_advance_search', array(
				'label' => __( 'Hide Advance Search?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_property_archive_section',
				'description' => __('This will hide advance search in archive, category and taxonomy pages for property list.', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Layout
			$wp_customize->add_setting( 'homeland_tax_layout', array(
				'type' => 'option',
				'default' => 'Default',
			) );
			$wp_customize->add_control( 'homeland_tax_layout', array(
				'label' => __( 'Archive and Taxonomy Layout', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_property_archive_section',
				'description' => __('Select your desire layout for taxonomy and archive page', 'homeland'),
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

			// Archive Header
			$wp_customize->add_setting('homeland_property_archive_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_property_archive_header', array(
			 	'label' => __('Archive Header Title', 'homeland'),
			 	'description' => __('Add your archive and taxonomy header title here', 'homeland'),
			 	'section' => 'homeland_property_archive_section',
			 	'type' => 'text',
			));

			// Subtitle
			$wp_customize->add_setting('homeland_property_archive_subtitle', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_property_archive_subtitle', array(
			 	'label' => __('Archive Subtitle', 'homeland'),
			 	'description' => __('Add your archive and taxonomy subtitle here', 'homeland'),
			 	'section' => 'homeland_property_archive_section',
			 	'type' => 'text',
			));
?>