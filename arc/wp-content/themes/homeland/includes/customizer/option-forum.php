<?php
	// Forum Panel
	$wp_customize->add_panel( 'homeland_forum_panel', array(
		'title' => __( 'Forum', 'homeland' ),
		'priority' => 135
	));

		// Main Section
		$wp_customize->add_section('homeland_forum_section', array(
			'title' => __('Main', 'homeland'),
			'panel' => 'homeland_forum_panel',
		));

			// Forum Header
			$wp_customize->add_setting('homeland_forum_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_forum_header', array(
			 	'label' => __('Forum Header Title', 'homeland'),
			 	'section' => 'homeland_forum_section',
			 	'type' => 'text',
			));

			// Forum Subtitle
			$wp_customize->add_setting('homeland_forum_subtitle', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_forum_subtitle', array(
			 	'label' => __('Forum Subtitle', 'homeland'),
			 	'section' => 'homeland_forum_section',
			 	'type' => 'text',
			));


		// Header Images Section
		$wp_customize->add_section('homeland_forum_header_section', array(
			'title' => __('Header Images', 'homeland'),
			'panel' => 'homeland_forum_panel',
		));

			// Default
			$wp_customize->add_setting( 'homeland_forum_hdimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_forum_hdimage',
					array(
						'label' => __( 'Forum Image', 'homeland' ),
						'section' => 'homeland_forum_header_section',
						'description' => __('Upload default header image for forum page', 'homeland')
					)
				)
			);

			// Single Forum
			$wp_customize->add_setting( 'homeland_forum_single_hdimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_forum_single_hdimage',
					array(
						'label' => __( 'Single Forum Image', 'homeland' ),
						'section' => 'homeland_forum_header_section',
						'description' => __('Upload single header image for forum page', 'homeland')
					)
				)
			);

			// Single Topic Image
			$wp_customize->add_setting( 'homeland_forum_single_topic_hdimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_forum_single_topic_hdimage',
					array(
						'label' => __( 'Single Topic Image', 'homeland' ),
						'section' => 'homeland_forum_header_section',
						'description' => __('Upload single topic header image for forum page', 'homeland')
					)
				)
			);

			// Topic Edit Image
			$wp_customize->add_setting( 'homeland_forum_topic_edit_hdimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_forum_topic_edit_hdimage',
					array(
						'label' => __( 'Topic Edit Image', 'homeland' ),
						'section' => 'homeland_forum_header_section',
						'description' => __('Upload topic edit header image for forum page', 'homeland')
					)
				)
			);

			// Forum Search Image
			$wp_customize->add_setting( 'homeland_forum_search_hdimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_forum_search_hdimage',
					array(
						'label' => __( 'Forum Search Image', 'homeland' ),
						'section' => 'homeland_forum_header_section',
						'description' => __('Upload forum search header image for forum page', 'homeland')
					)
				)
			);

			// User Profile Image
			$wp_customize->add_setting( 'homeland_user_profile_hdimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_user_profile_hdimage',
					array(
						'label' => __( 'User Profile Image', 'homeland' ),
						'section' => 'homeland_forum_header_section',
						'description' => __('Upload user profile header image for forum page', 'homeland')
					)
				)
			);


		// Background Images Section
		$wp_customize->add_section('homeland_forum_background_section', array(
			'title' => __('Background Images', 'homeland'),
			'panel' => 'homeland_forum_panel',
		));

			// Default
			$wp_customize->add_setting( 'homeland_forum_bgimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_forum_bgimage',
					array(
						'label' => __( 'Forum Image', 'homeland' ),
						'section' => 'homeland_forum_background_section',
						'description' => __('Upload default background image for forum page', 'homeland')
					)
				)
			);

			// Single Forum
			$wp_customize->add_setting( 'homeland_forum_single_bgimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_forum_single_bgimage',
					array(
						'label' => __( 'Single Forum Image', 'homeland' ),
						'section' => 'homeland_forum_background_section',
						'description' => __('Upload single background image for forum page', 'homeland')
					)
				)
			);

			// Single Topic Image
			$wp_customize->add_setting( 'homeland_forum_single_topic_bgimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_forum_single_topic_bgimage',
					array(
						'label' => __( 'Single Topic Image', 'homeland' ),
						'section' => 'homeland_forum_background_section',
						'description' => __('Upload single topic background image for forum page', 'homeland')
					)
				)
			);

			// Topic Edit Image
			$wp_customize->add_setting( 'homeland_forum_topic_edit_bgimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_forum_topic_edit_bgimage',
					array(
						'label' => __( 'Topic Edit Image', 'homeland' ),
						'section' => 'homeland_forum_background_section',
						'description' => __('Upload topic edit background image for forum page', 'homeland')
					)
				)
			);

			// Forum Search Image
			$wp_customize->add_setting( 'homeland_forum_search_bgimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_forum_search_bgimage',
					array(
						'label' => __( 'Forum Search Image', 'homeland' ),
						'section' => 'homeland_forum_background_section',
						'description' => __('Upload forum search background image for forum page', 'homeland')
					)
				)
			);

			// User Profile Image
			$wp_customize->add_setting( 'homeland_user_profile_bgimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_user_profile_bgimage',
					array(
						'label' => __( 'User Profile Image', 'homeland' ),
						'section' => 'homeland_forum_background_section',
						'description' => __('Upload user profile background image for forum page', 'homeland')
					)
				)
			);
?>