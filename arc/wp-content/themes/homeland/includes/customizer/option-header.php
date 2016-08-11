<?php
	// Header Panel
	$wp_customize->add_panel( 'homeland_header_panel', array(
		'title' => __( 'Header', 'homeland' ),
		'priority' => 124
	));

	  // Main Section
		$wp_customize->add_section('homeland_header_main_section', array(
			'title' => __('Main', 'homeland'),
			'panel' => 'homeland_header_panel',
		));

			// Sticky Header
			$wp_customize->add_setting( 'homeland_sticky_header', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_sticky_header', array(
				'label' => __( 'Enable Sticky Header?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_header_main_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Sliding Bar
			$wp_customize->add_setting( 'homeland_enable_slide_bar', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_enable_slide_bar', array(
				'label' => __( 'Enable Sliding Bar at the top?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_header_main_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Header Layout
			$wp_customize->add_setting( 'homeland_theme_header', array(
				'type' => 'option',
				'default' => 'Default',
			) );
			$wp_customize->add_control( 'homeland_theme_header', array(
				'label' => __( 'Select Header Layout', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_header_main_section',
				'choices' => array(
					'Default' => __( 'Default', 'homeland' ),
					'Header 2' => __( 'Header 2', 'homeland' ),
					'Header 3' => __( 'Header 3', 'homeland' ),
					'Header 4' => __( 'Header 4', 'homeland' ),
					'Header 5' => __( 'Header 5', 'homeland' ),
					'Header 6' => __( 'Header 6', 'homeland' ),
					'Header 7' => __( 'Header 7', 'homeland' ),
					'Header 8' => __( 'Header 8', 'homeland' ),
					'Header 9' => __( 'Header 9', 'homeland' ),
					'Header 10' => __( 'Header 10', 'homeland' ),
				)
			) );

			// Call us text
			$wp_customize->add_setting('homeland_call_us_label', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_call_us_label', array(
			 	'label' => __('Call us label', 'homeland'),
			 	'section' => 'homeland_header_main_section',
			 	'type' => 'text',
			));

			// Hide Page Title and Subtitle
			$wp_customize->add_setting( 'homeland_hide_ptitle_stitle', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_ptitle_stitle', array(
				'label' => __( 'Hide Page Title and Subtitle?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_header_main_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );


		// Buttons Section
		$wp_customize->add_section('homeland_header_button_section', array(
			'title' => __('Buttons', 'homeland'),
			'panel' => 'homeland_header_panel',
		));

			// Hide Login
			$wp_customize->add_setting( 'homeland_hide_login', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_login', array(
				'label' => __( 'Hide Login?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_header_button_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Login Label
			$wp_customize->add_setting('homeland_login_label', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_login_label', array(
			 	'label' => __('Login label', 'homeland'),
			 	'section' => 'homeland_header_button_section',
			 	'type' => 'text',
			));

			// Login Link
			$wp_customize->add_setting('homeland_login_link', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			));

			$wp_customize->add_control('homeland_login_link', array(
			 	'label' => __('Custom Login Link', 'homeland'),
			 	'section' => 'homeland_header_button_section',
			 	'description' => __('Add your custom login link here, do not forget adding http://', 'homeland'),
			 	'type' => 'url',
			));

			// Logout Label
			$wp_customize->add_setting('homeland_logout_label', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_logout_label', array(
			 	'label' => __('Logout label', 'homeland'),
			 	'section' => 'homeland_header_button_section',
			 	'type' => 'text',
			));

			// Hide Register
			$wp_customize->add_setting( 'homeland_hide_register', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_register', array(
				'label' => __( 'Hide Register?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_header_button_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Register Label
			$wp_customize->add_setting( 'homeland_register_label', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			) );
			$wp_customize->add_control( 'homeland_register_label', array(
				'label' => __( 'Register Label', 'homeland' ),
				'type' => 'text',
				'section' => 'homeland_header_button_section',
			) );

			// Register Link
			$wp_customize->add_setting('homeland_register_link', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			));

			$wp_customize->add_control('homeland_register_link', array(
			 	'label' => __('Custom Register Link', 'homeland'),
			 	'section' => 'homeland_header_button_section',
			 	'description' => __('Add your custom register link here, do not forget adding http://', 'homeland'),
			 	'type' => 'url',
			));


		// Social Media Section
		$wp_customize->add_section('homeland_social_media_section', array(
			'title' => __('Social Media', 'homeland'),
			'panel' => 'homeland_header_panel',
		));

			// Brand Icon Color
			$wp_customize->add_setting( 'homeland_brand_color', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_brand_color', array(
				'label' => __( 'Use Social Media Brand Color?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_social_media_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// RSS Feed link
			$wp_customize->add_setting('homeland_rss', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			));

			$wp_customize->add_control('homeland_rss', array(
			 	'label' => __('RSS Feed Link', 'homeland'),
			 	'section' => 'homeland_social_media_section',
			 	'type' => 'url',
			));

			// Twitter ID
			$wp_customize->add_setting('homeland_twitter', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_twitter', array(
			 	'label' => __('Twitter ID', 'homeland'),
			 	'section' => 'homeland_social_media_section',
			 	'type' => 'text',
			));

			// Facebook ID
			$wp_customize->add_setting('homeland_facebook', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_facebook', array(
			 	'label' => __('Facebook ID', 'homeland'),
			 	'section' => 'homeland_social_media_section',
			 	'type' => 'text',
			));

			// Youtube link
			$wp_customize->add_setting('homeland_youtube', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			));

			$wp_customize->add_control('homeland_youtube', array(
			 	'label' => __('Youtube URL', 'homeland'),
			 	'section' => 'homeland_social_media_section',
			 	'type' => 'url',
			));

			// Pinterest ID
			$wp_customize->add_setting('homeland_pinterest', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_pinterest', array(
			 	'label' => __('Pinterest ID', 'homeland'),
			 	'section' => 'homeland_social_media_section',
			 	'type' => 'text',
			));

			// LinkedIn link
			$wp_customize->add_setting('homeland_linkedin', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			));

			$wp_customize->add_control('homeland_linkedin', array(
			 	'label' => __('LinkedIn URL', 'homeland'),
			 	'section' => 'homeland_social_media_section',
			 	'type' => 'url',
			));

			// Dribbble ID
			$wp_customize->add_setting('homeland_dribbble', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_dribbble', array(
			 	'label' => __('Dribbble ID', 'homeland'),
			 	'section' => 'homeland_social_media_section',
			 	'type' => 'text',
			));

			// Instagram ID
			$wp_customize->add_setting('homeland_instagram', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_instagram', array(
			 	'label' => __('Instagram ID', 'homeland'),
			 	'section' => 'homeland_social_media_section',
			 	'type' => 'text',
			));

			// Google Plus link
			$wp_customize->add_setting('homeland_gplus', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			));

			$wp_customize->add_control('homeland_gplus', array(
			 	'label' => __('Google Plus URL', 'homeland'),
			 	'section' => 'homeland_social_media_section',
			 	'type' => 'url',
			));


		// Images Section
		$wp_customize->add_section('homeland_header_image_section', array(
			'title' => __('Images', 'homeland'),
			'panel' => 'homeland_header_panel',
			'description' => __('Add your header images here, images should have 300px height', 'homeland')
		));

			// Hide Images
			$wp_customize->add_setting( 'homeland_hide_header_image', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_header_image', array(
				'label' => __( 'Hide Header Image?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_header_image_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Overlay Header Background Color
			$wp_customize->add_setting( 'homeland_header_overlay', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_header_overlay',
					array(
						'label' => __( 'Overlay Background Color', 'homeland' ),
						'section' => 'homeland_header_image_section',
					)
				)
			);

			// Default Image
			$wp_customize->add_setting( 'homeland_default_hdimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_default_hdimage',
					array(
						'label' => __( 'Default Image', 'homeland' ),
						'section' => 'homeland_header_image_section',
						'description' => __('Upload default header image for entire site', 'homeland')
					)
				)
			);

			// Archive Image
			$wp_customize->add_setting( 'homeland_archive_hdimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_archive_hdimage',
					array(
						'label' => __( 'Archive Image', 'homeland' ),
						'section' => 'homeland_header_image_section',
						'description' => __('Upload archive header image for archive page', 'homeland')
					)
				)
			);

			// Taxonomy Image
			$wp_customize->add_setting( 'homeland_taxonomy_hdimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_taxonomy_hdimage',
					array(
						'label' => __( 'Taxonomy Image', 'homeland' ),
						'section' => 'homeland_header_image_section',
						'description' => __('Upload taxonomy header image for taxonomy page', 'homeland')
					)
				)
			);

			// Agent Image
			$wp_customize->add_setting( 'homeland_agent_hdimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_agent_hdimage',
					array(
						'label' => __( 'Agent Image', 'homeland' ),
						'section' => 'homeland_header_image_section',
						'description' => __('Upload header image for agent single page', 'homeland')
					)
				)
			);

			// Search Image
			$wp_customize->add_setting( 'homeland_search_hdimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_search_hdimage',
					array(
						'label' => __( 'Search Image', 'homeland' ),
						'section' => 'homeland_header_image_section',
						'description' => __('Upload search header image for search page', 'homeland')
					)
				)
			);

			// Attachment Image
			$wp_customize->add_setting( 'homeland_attachment_hdimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_attachment_hdimage',
					array(
						'label' => __( 'Attachment Image', 'homeland' ),
						'section' => 'homeland_header_image_section',
						'description' => __('Upload attachment header image for attachment page', 'homeland')
					)
				)
			);

			// Page not found Image
			$wp_customize->add_setting( 'homeland_notfound_hdimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_notfound_hdimage',
					array(
						'label' => __( 'Page not found Image', 'homeland' ),
						'section' => 'homeland_header_image_section',
						'description' => __('Upload 404 not found header image for 404 page', 'homeland')
					)
				)
			);
?>