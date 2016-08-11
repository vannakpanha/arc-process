<?php
	// Portfolio Panel
	$wp_customize->add_panel( 'homeland_portfolio_panel', array(
		'title' => __( 'Portfolio', 'homeland' ),
		'priority' => 131
	));

		// Main Section
		$wp_customize->add_section('homeland_portfolio_main_section', array(
			'title' => __('Main', 'homeland'),
			'panel' => 'homeland_portfolio_panel',
		));

			// Limit
			$wp_customize->add_setting('homeland_num_portfolio', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_num_portfolio', array(
			 	'label' => __('Number of portfolio items per page', 'homeland'),
			 	'section' => 'homeland_portfolio_main_section',
			 	'type' => 'text',
			));

			// Hide Excerpt
			$wp_customize->add_setting( 'homeland_portfolio_excerpt', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_portfolio_excerpt', array(
				'label' => __( 'Hide Excerpt?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_portfolio_main_section',
				'description' => __('This will hide portfolio excerpt', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Excerpt Length
			$wp_customize->add_setting('homeland_excerpt_length_portfolio', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
				'default' => '30',
			));

			$wp_customize->add_control('homeland_excerpt_length_portfolio', array(
			 	'label' => __('Excerpt Length', 'homeland'),
			 	'section' => 'homeland_portfolio_main_section',
			 	'description' => __('This will control the number of words in the excerpts for portfolio page templates, portfolio archive pages and portfolio in homepage. Default value is 30', 'homeland'),
			 	'type' => 'text',
			));

			// Portfolio Order
			$wp_customize->add_setting( 'homeland_portfolio_order', array(
				'type' => 'option',
				'default' => 'DESC',
			) );
			$wp_customize->add_control( 'homeland_portfolio_order', array(
				'label' => __( 'Ordering', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_portfolio_main_section',
				'choices' => array(
					'ASC' => __( 'Ascending', 'homeland' ),
					'DESC' => __( 'Descending', 'homeland' ),
				)
			) );

			// Portfolio Sort
			$wp_customize->add_setting( 'homeland_portfolio_orderby', array(
				'type' => 'option',
				'default' => 'ID',
			) );
			$wp_customize->add_control( 'homeland_portfolio_orderby', array(
				'label' => __( 'Sorting', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_portfolio_main_section',
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

			// Portfolio Slug
			$wp_customize->add_setting('homeland_portfolio_slug', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_portfolio_slug', array(
			 	'label' => __('Portfolio Slug', 'homeland'),
			 	'section' => 'homeland_portfolio_main_section',
			 	'description' => __('The slug name cannot be the same name as your portfolio page or else the layout breaks. This option changes the permalink when you use the permalink type as %postname%. Make sure to regenerate permalinks structure.', 'homeland'),
			 	'type' => 'text',
			));


		// Single Post Section
		$wp_customize->add_section('homeland_portfolio_single_section', array(
			'title' => __('Single Post', 'homeland'),
			'panel' => 'homeland_portfolio_panel',
		));

			// Layout
			$wp_customize->add_setting( 'homeland_single_portfolio_layout', array(
				'type' => 'option',
				'default' => 'Fullwidth',
			) );
			$wp_customize->add_control( 'homeland_single_portfolio_layout', array(
				'label' => __( 'Layout', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_portfolio_single_section',
				'description' => __('Select your desire layout for portfolio single page', 'homeland'),
				'choices' => array(
					'Fullwidth' => __( 'Default', 'homeland' ),
					'Left Sidebar' => __( 'Left Sidebar', 'homeland' ),
					'Right Sidebar' => __( 'Right Sidebar', 'homeland' ),
				)
			) );

			// Static Images
			$wp_customize->add_setting( 'homeland_portfolio_static_image', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_portfolio_static_image', array(
				'label' => __( 'Use static image for portfolio?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_portfolio_single_section',
				'description' => __('Note: If you select yes it will display portfolio images without a slider', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Attachment Order
			$wp_customize->add_setting( 'homeland_portfolio_attachment_order', array(
				'type' => 'option',
				'default' => 'DESC',
			) );
			$wp_customize->add_control( 'homeland_portfolio_attachment_order', array(
				'label' => __( 'Attachment Ordering', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_portfolio_single_section',
				'choices' => array(
					'ASC' => __( 'Ascending', 'homeland' ),
					'DESC' => __( 'Descending', 'homeland' ),
				)
			) );

			// Attachment Sort
			$wp_customize->add_setting( 'homeland_portfolio_attachment_orderby', array(
				'type' => 'option',
				'default' => 'ID',
			) );
			$wp_customize->add_control( 'homeland_portfolio_attachment_orderby', array(
				'label' => __( 'Attachment Sorting', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_portfolio_single_section',
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

			// Hide Previous and Next Buttons
			$wp_customize->add_setting( 'homeland_hide_portfolio_prevnext', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_portfolio_prevnext', array(
				'label' => __( 'Hide Previous and Next Buttons?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_portfolio_single_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );


		// Archive Section
		$wp_customize->add_section('homeland_portfolio_archive_section', array(
			'title' => __('Archive', 'homeland'),
			'panel' => 'homeland_portfolio_panel',
		));

			// Hide Advance Search
			$wp_customize->add_setting( 'homeland_hide_portfolio_archive_advance_search', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_portfolio_archive_advance_search', array(
				'label' => __( 'Hide Advance Search?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_portfolio_archive_section',
				'description' => __('This will hide advance search in archive, category and taxonomy pages for portfolio list.', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Layout
			$wp_customize->add_setting( 'homeland_portfolio_tax_layout', array(
				'type' => 'option',
				'default' => 'Default',
			) );
			$wp_customize->add_control( 'homeland_portfolio_tax_layout', array(
				'label' => __( 'Archive and Taxonomy Layout', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_portfolio_archive_section',
				'description' => __('Select your desire layout for taxonomy and archive page', 'homeland'),
				'choices' => array(
					'Default' => __( 'Default', 'homeland' ),
					'Left Sidebar' => __( 'Left Sidebar', 'homeland' ),
					'Right Sidebar' => __( 'Right Sidebar', 'homeland' ),
				)
			) );

			// Archive Header
			$wp_customize->add_setting('homeland_portfolio_archive_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_portfolio_archive_header', array(
			 	'label' => __('Archive Header Title', 'homeland'),
			 	'description' => __('Add your archive and taxonomy header title here', 'homeland'),
			 	'section' => 'homeland_portfolio_archive_section',
			 	'type' => 'text',
			));

			// Subtitle
			$wp_customize->add_setting('homeland_portfolio_archive_subtitle', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_portfolio_archive_subtitle', array(
			 	'label' => __('Archive Subtitle', 'homeland'),
			 	'description' => __('Add your archive and taxonomy subtitle here', 'homeland'),
			 	'section' => 'homeland_portfolio_archive_section',
			 	'type' => 'text',
			));
?>