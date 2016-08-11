<?php
	// Blog Panel
	$wp_customize->add_panel( 'homeland_blog_panel', array(
		'title' => __( 'Blog', 'homeland' ),
		'priority' => 130
	));

		// Main Section
		$wp_customize->add_section('homeland_blog_main_section', array(
			'title' => __('Main', 'homeland'),
			'panel' => 'homeland_blog_panel',
		));

			// Show Excerpt
			$wp_customize->add_setting( 'homeland_blog_excerpt', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_blog_excerpt', array(
				'label' => __( 'Display Blog Excerpt?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_blog_main_section',
				'description' => __('This will show all excerpt for blog templates except on blog timeline where excerpt always shown.', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Excerpt Length
			$wp_customize->add_setting('homeland_excerpt_length_blog', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
				'default' => '30',
			));

			$wp_customize->add_control('homeland_excerpt_length_blog', array(
			 	'label' => __('Excerpt Length', 'homeland'),
			 	'section' => 'homeland_blog_main_section',
			 	'description' => __('This will control the number of words in the excerpts for blog page templates and blog archive pages. Default value is 30', 'homeland'),
			 	'type' => 'text',
			));

			// Button Label
			$wp_customize->add_setting('homeland_blog_button', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_blog_button', array(
			 	'label' => __('Blog Button Label', 'homeland'),
			 	'section' => 'homeland_blog_main_section',
			 	'type' => 'text',
			));


		// Single Post Section
		$wp_customize->add_section('homeland_blog_single_section', array(
			'title' => __('Single Post', 'homeland'),
			'panel' => 'homeland_blog_panel',
		));

			// Layout
			$wp_customize->add_setting( 'homeland_single_blog_layout', array(
				'type' => 'option',
				'default' => 'Default',
			) );
			$wp_customize->add_control( 'homeland_single_blog_layout', array(
				'label' => __( 'Layout', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_blog_single_section',
				'description' => __('Select your desire layout for blog single page', 'homeland'),
				'choices' => array(
					'Default' => __( 'Default', 'homeland' ),
					'Left Sidebar' => __( 'Left Sidebar', 'homeland' ),
					'Fullwidth' => __( 'Fullwidth', 'homeland' ),
				)
			) );

			// Hide Featured Image
			$wp_customize->add_setting( 'homeland_blog_thumb_slider', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_blog_thumb_slider', array(
				'label' => __( 'Exclude Featured Image?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_blog_single_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Attachment Order
			$wp_customize->add_setting( 'homeland_blog_attachment_order', array(
				'type' => 'option',
				'default' => 'DESC',
			) );
			$wp_customize->add_control( 'homeland_blog_attachment_order', array(
				'label' => __( 'Attachment Ordering', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_blog_single_section',
				'choices' => array(
					'ASC' => __( 'Ascending', 'homeland' ),
					'DESC' => __( 'Descending', 'homeland' ),
				)
			) );

			// Attachment Sort
			$wp_customize->add_setting( 'homeland_blog_attachment_orderby', array(
				'type' => 'option',
				'default' => 'ID',
			) );
			$wp_customize->add_control( 'homeland_blog_attachment_orderby', array(
				'label' => __( 'Attachment Sorting', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_blog_single_section',
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

			// Hide Author Details
			$wp_customize->add_setting( 'homeland_blog_author_hide', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_blog_author_hide', array(
				'label' => __( 'Hide Author Details?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_blog_single_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Hide Comments
			$wp_customize->add_setting( 'homeland_hide_blog_comments', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_blog_comments', array(
				'label' => __( 'Hide Comments?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_blog_single_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Hide Previous and Next Buttons
			$wp_customize->add_setting( 'homeland_hide_blog_prevnext', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_blog_prevnext', array(
				'label' => __( 'Hide Previous and Next Buttons?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_blog_single_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );


		// Archive Section
		$wp_customize->add_section('homeland_blog_archive_section', array(
			'title' => __('Archive', 'homeland'),
			'panel' => 'homeland_blog_panel',
		));

			// Hide Advance Search
			$wp_customize->add_setting( 'homeland_hide_blog_archive_advance_search', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_blog_archive_advance_search', array(
				'label' => __( 'Hide Advance Search?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_blog_archive_section',
				'description' => __('This will hide advance search in archive, category and taxonomy pages for blog list.', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Archive Layout
			$wp_customize->add_setting( 'homeland_archive_layout', array(
				'type' => 'option',
				'default' => 'Default',
			) );
			$wp_customize->add_control( 'homeland_archive_layout', array(
				'label' => __( 'Archive Layout', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_blog_archive_section',
				'description' => __('Select your desire layout for blog archive page', 'homeland'),
				'choices' => array(
					'Default' => __( 'Default', 'homeland' ),
					'Left Sidebar' => __( 'Left Sidebar', 'homeland' ),
					'List Alternate' => __( 'List Alternate', 'homeland' ),
					'Grid' => __( 'Grid', 'homeland' ),
					'Grid Left Sidebar' => __( 'Grid Left Sidebar', 'homeland' ),
					'2 Columns' => __( '2 Columns', 'homeland' ),
					'3 Columns' => __( '3 Columns', 'homeland' ),
					'4 Columns' => __( '4 Columns', 'homeland' ),
					'Fullwidth' => __( 'Fullwidth', 'homeland' ),
					'Timeline' => __( 'Timeline', 'homeland' ),
				)
			) );
?>