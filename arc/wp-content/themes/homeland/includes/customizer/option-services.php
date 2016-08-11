<?php
	// Services Panel
	$wp_customize->add_panel( 'homeland_services_panel', array(
		'title' => __( 'Services', 'homeland' ),
		'priority' => 132
	));

		// Main Section
		$wp_customize->add_section('homeland_services_main_section', array(
			'title' => __('Main', 'homeland'),
			'panel' => 'homeland_services_panel',
		));

			// Limit
			$wp_customize->add_setting('homeland_num_services', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_num_services', array(
			 	'label' => __('Number of services items per page', 'homeland'),
			 	'section' => 'homeland_services_main_section',
			 	'type' => 'text',
			));

			// Hide Excerpt
			$wp_customize->add_setting( 'homeland_services_excerpt', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_services_excerpt', array(
				'label' => __( 'Hide Excerpt?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_services_main_section',
				'description' => __('This will hide services excerpt', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Excerpt Length
			$wp_customize->add_setting('homeland_excerpt_length_services', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
				'default' => '30',
			));

			$wp_customize->add_control('homeland_excerpt_length_services', array(
			 	'label' => __('Excerpt Length', 'homeland'),
			 	'section' => 'homeland_services_main_section',
			 	'description' => __('This will control the number of words in the excerpts for services page templates, services archive pages and services in homepage. Default value is 30', 'homeland'),
			 	'type' => 'text',
			));

			// Services Order
			$wp_customize->add_setting( 'homeland_services_order', array(
				'type' => 'option',
				'default' => 'DESC',
			) );
			$wp_customize->add_control( 'homeland_services_order', array(
				'label' => __( 'Ordering', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_services_main_section',
				'choices' => array(
					'ASC' => __( 'Ascending', 'homeland' ),
					'DESC' => __( 'Descending', 'homeland' ),
				)
			) );

			// Services Sort
			$wp_customize->add_setting( 'homeland_services_orderby', array(
				'type' => 'option',
				'default' => 'ID',
			) );
			$wp_customize->add_control( 'homeland_services_orderby', array(
				'label' => __( 'Sorting', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_services_main_section',
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

			// Button Label
			$wp_customize->add_setting('homeland_services_button', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_services_button', array(
			 	'label' => __('Services Button Label', 'homeland'),
			 	'section' => 'homeland_services_main_section',
			 	'type' => 'text',
			));

			// Link Target
			$wp_customize->add_setting( 'homeland_services_link_target', array(
				'type' => 'option',
				'default' => '_blank',
			) );
			$wp_customize->add_control( 'homeland_services_link_target', array(
				'label' => __( 'Link Target', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_services_main_section',
				'description' => __('Select your services link target option for services custom link', 'homeland'),
				'choices' => array(
					'_self' => __( 'Self', 'homeland' ),
					'_blank' => __( 'Blank', 'homeland' ),
					'_parent' => __( 'Parent', 'homeland' ),
					'_top' => __( 'Top', 'homeland' ),
				)
			) );

			// Services Slug
			$wp_customize->add_setting('homeland_services_slug', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_services_slug', array(
			 	'label' => __('Services Slug', 'homeland'),
			 	'section' => 'homeland_services_main_section',
			 	'description' => __('The slug name cannot be the same name as your services page or else the layout breaks. This option changes the permalink when you use the permalink type as %postname%. Make sure to regenerate permalinks structure.', 'homeland'),
			 	'type' => 'text',
			));


		// Single Post Section
		$wp_customize->add_section('homeland_services_single_section', array(
			'title' => __('Single Post', 'homeland'),
			'panel' => 'homeland_services_panel',
		));

			// Layout
			$wp_customize->add_setting( 'homeland_services_single_layout', array(
				'type' => 'option',
				'default' => 'Default',
			) );
			$wp_customize->add_control( 'homeland_services_single_layout', array(
				'label' => __( 'Layout', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_services_single_section',
				'description' => __('Select your desire layout for services single page', 'homeland'),
				'choices' => array(
					'Default' => __( 'Default', 'homeland' ),
					'Left Sidebar' => __( 'Left Sidebar', 'homeland' ),
					'Fullwidth' => __( 'Fullwidth', 'homeland' ),
				)
			) );


		// Archive Section
		$wp_customize->add_section('homeland_services_archive_section', array(
			'title' => __('Archive', 'homeland'),
			'panel' => 'homeland_services_panel',
		));

			// Hide Advance Search
			$wp_customize->add_setting( 'homeland_hide_services_archive_advance_search', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_services_archive_advance_search', array(
				'label' => __( 'Hide Advance Search?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_services_archive_section',
				'description' => __('This will hide advance search in archive page for services list.', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Layout
			$wp_customize->add_setting( 'homeland_services_archive_layout', array(
				'type' => 'option',
				'default' => 'Default',
			) );
			$wp_customize->add_control( 'homeland_services_archive_layout', array(
				'label' => __( 'Archive Layout', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_services_archive_section',
				'description' => __('Select your desire layout for archive page', 'homeland'),
				'choices' => array(
					'Default' => __( 'Default', 'homeland' ),
					'Left Sidebar' => __( 'Left Sidebar', 'homeland' ),
					'Fullwidth' => __( 'Fullwidth', 'homeland' ),
					'Grid Fullwidth' => __( 'Grid Fullwidth', 'homeland' ),
				)
			) );

			// Archive Header
			$wp_customize->add_setting('homeland_services_archive_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_services_archive_header', array(
			 	'label' => __('Archive Header Title', 'homeland'),
			 	'description' => __('Add your archive and taxonomy header title here', 'homeland'),
			 	'section' => 'homeland_services_archive_section',
			 	'type' => 'text',
			));

			// Subtitle
			$wp_customize->add_setting('homeland_services_archive_subtitle', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_services_archive_subtitle', array(
			 	'label' => __('Archive Subtitle', 'homeland'),
			 	'description' => __('Add your archive and taxonomy subtitle here', 'homeland'),
			 	'section' => 'homeland_services_archive_section',
			 	'type' => 'text',
			));
?>