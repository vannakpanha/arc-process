<?php
	// Agents Panel
	$wp_customize->add_panel( 'homeland_agent_panel', array(
		'title' => __( 'Agents', 'homeland' ),
		'priority' => 126
	));

	  // Main Section
		$wp_customize->add_section('homeland_agent_main_section', array(
			'title' => __('Main', 'homeland'),
			'panel' => 'homeland_agent_panel',
		));

			// Hide Agents
			$wp_customize->add_setting( 'homeland_all_agents', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_all_agents', array(
				'label' => __( 'Hide Agents?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_agent_main_section',
				'description' => __('Note: this will hide all agents in your site including widgets.', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Limit
			$wp_customize->add_setting('homeland_agent_page_limit', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_agent_page_limit', array(
			 	'label' => __('Number of agents per page', 'homeland'),
			 	'description' => __('This will work on agents page only.', 'homeland'),
			 	'section' => 'homeland_agent_main_section',
			 	'type' => 'text',
			));

			// Order
			$wp_customize->add_setting( 'homeland_agent_page_order', array(
				'type' => 'option',
				'default' => 'DESC',
			) );
			$wp_customize->add_control( 'homeland_agent_page_order', array(
				'label' => __( 'Ordering', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_agent_main_section',
				'choices' => array(
					'ASC' => __( 'Ascending', 'homeland' ),
					'DESC' => __( 'Descending', 'homeland' ),
				)
			) );

			// Sort
			$wp_customize->add_setting( 'homeland_agent_page_orderby', array(
				'type' => 'option',
				'default' => 'ID',
			) );
			$wp_customize->add_control( 'homeland_agent_page_orderby', array(
				'label' => __( 'Sorting', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_agent_main_section',
				'choices' => array(
					'ID' => __( 'ID', 'homeland' ),
					'display_name' => __( 'Display Name', 'homeland' ),
					'name' => __( 'Name', 'homeland' ),
					'login' => __( 'Login', 'homeland' ),
					'nicename' => __( 'Nicename', 'homeland' ),
					'email' => __( 'Email', 'homeland' ),
					'url' => __( 'URL', 'homeland' ),
					'registered' => __( 'Registered', 'homeland' ),
					'post_count' => __( 'Post Count', 'homeland' ),
					'meta_value' => __( 'Meta Value', 'homeland' ),
				)
			) );

			// Agent Button
			$wp_customize->add_setting('homeland_agent_button', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_agent_button', array(
			 	'label' => __('Agent Button Label', 'homeland'),
			 	'section' => 'homeland_agent_main_section',
			 	'type' => 'text',
			));


		// Profile Section
		$wp_customize->add_section('homeland_profile_section', array(
			'title' => __('Profile Page', 'homeland'),
			'panel' => 'homeland_agent_panel',
			'description' => __('Note: this setting is only for agent profile page.', 'homeland'),
		));

			// Header Title
			$wp_customize->add_setting('homeland_agent_profile_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_agent_profile_header', array(
			 	'label' => __('Header Title', 'homeland'),
			 	'section' => 'homeland_profile_section',
			 	'type' => 'text',
			));


			// Subtitle
			$wp_customize->add_setting('homeland_agent_profile_subtitle', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_agent_profile_subtitle', array(
			 	'label' => __('Subtitle', 'homeland'),
			 	'section' => 'homeland_profile_section',
			 	'type' => 'text',
			));

			// Layout
			$wp_customize->add_setting( 'homeland_agent_profile_layout', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_agent_profile_layout', array(
				'label' => __( 'Select Layout', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_profile_section',
				'choices' => array(
					'Default' => __( 'Default', 'homeland' ),
					'Left Sidebar' => __( 'Left Sidebar', 'homeland' ),
					'Fullwidth' => __( 'Fullwidth', 'homeland' ),
				)
			) );

			// List Header
			$wp_customize->add_setting('homeland_agent_list_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_agent_list_header', array(
			 	'label' => __('List Header title', 'homeland'),
			 	'section' => 'homeland_profile_section',
			 	'type' => 'text',
			));
			
?>