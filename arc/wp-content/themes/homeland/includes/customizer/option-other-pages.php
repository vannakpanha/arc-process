<?php
	// Other Pages Panel
	$wp_customize->add_panel( 'homeland_other_pages_panel', array(
		'title' => __( 'Other Pages', 'homeland' ),
		'priority' => 134
	));

		// About Section
		$wp_customize->add_section('homeland_other_about_section', array(
			'title' => __('About Page', 'homeland'),
			'panel' => 'homeland_other_pages_panel',
		));

			// About Header
			$wp_customize->add_setting('homeland_team_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_team_header', array(
			 	'label' => __('About Header Title', 'homeland'),
			 	'section' => 'homeland_other_about_section',
			 	'type' => 'text',
			));


		// 404 Page Section
		$wp_customize->add_section('homeland_other_404_section', array(
			'title' => __('404 Page', 'homeland'),
			'panel' => 'homeland_other_pages_panel',
		));

			// 404 Header
			$wp_customize->add_setting('homeland_not_found_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_not_found_header', array(
			 	'label' => __('404 Header Title', 'homeland'),
			 	'section' => 'homeland_other_404_section',
			 	'type' => 'text',
			));

			// 404 Subtitle
			$wp_customize->add_setting('homeland_not_found_subtitle', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_not_found_subtitle', array(
			 	'label' => __('404 Subtitle', 'homeland'),
			 	'section' => 'homeland_other_404_section',
			 	'type' => 'text',
			));

			// 404 Content Header
			$wp_customize->add_setting('homeland_not_found_large_text', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_not_found_large_text', array(
			 	'label' => __('Content Header Title', 'homeland'),
			 	'section' => 'homeland_other_404_section',
			 	'type' => 'text',
			));

			// 404 Content Subtitle
			$wp_customize->add_setting('homeland_not_found_small_text', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_not_found_small_text', array(
			 	'label' => __('Content Subtitle', 'homeland'),
			 	'section' => 'homeland_other_404_section',
			 	'type' => 'text',
			));

			// 404 Button Label
			$wp_customize->add_setting('homeland_not_found_button', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_not_found_button', array(
			 	'label' => __('Button Label', 'homeland'),
			 	'section' => 'homeland_other_404_section',
			 	'type' => 'text',
			));


		// Search Section
		$wp_customize->add_section('homeland_other_search_section', array(
			'title' => __('Search Page', 'homeland'),
			'panel' => 'homeland_other_pages_panel',
		));

			// Search Header
			$wp_customize->add_setting('homeland_search_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_search_header', array(
			 	'label' => __('Search Header Title', 'homeland'),
			 	'section' => 'homeland_other_search_section',
			 	'type' => 'text',
			));

			// Search Subtitle
			$wp_customize->add_setting('homeland_search_subtitle', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_search_subtitle', array(
			 	'label' => __('Search Subtitle', 'homeland'),
			 	'section' => 'homeland_other_search_section',
			 	'type' => 'text',
			));
?>