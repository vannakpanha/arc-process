<?php
	// Logo
	$wp_customize->add_setting( 'homeland_logo', array(
		'type' => 'option',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 
		new WP_Customize_Image_Control( $wp_customize, 'homeland_logo', array(
		'label' => __( 'Logo', 'homeland' ),
		'section' => 'title_tagline',  
		'settings' => 'homeland_logo',
		'priority' => 1,
	) ) );

	// Retina Logo
	$wp_customize->add_setting( 'homeland_logo_retina', array(
		'type' => 'option',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 
		new WP_Customize_Image_Control( $wp_customize, 'homeland_logo_retina', array(
		'label' => __( 'Retina Logo', 'homeland' ),
		'section' => 'title_tagline',  
		'settings' => 'homeland_logo_retina',
		'description' => __('Note: you need to upload image with @2x in your filename like this image@2x.jpg', 'homeland'),
		'priority' => 1,
	) ) );


	// General Panel
	$wp_customize->add_panel( 'homeland_general_panel', array(
		'title' => __( 'General', 'homeland' ),
		'priority' => 121
	));

	  // Main Section
		$wp_customize->add_section('homeland_main_section', array(
			'title' => __('Main', 'homeland'),
			'panel' => 'homeland_general_panel',
		));

			// Disable Responsive
			$wp_customize->add_setting( 'homeland_site_layout', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_site_layout', array(
				'label' => __( 'Disable Responsive Layout?', 'homeland' ),
				'description' => __( 'Note: It is not recommended to disable responsive.', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_main_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Disable Preloader
			$wp_customize->add_setting( 'homeland_disable_preloader', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_disable_preloader', array(
				'label' => __( 'Disable Preloader?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_main_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Preloader Icon
			$wp_customize->add_setting( 'homeland_preloader_icon', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_preloader_icon',
					array(
						'label' => __( 'Preloader Icon', 'homeland' ),
						"description" => __( 'Upload your preloader icon use when your site is still loading, please upload only .gif extension', 'homeland' ),
						'section' => 'homeland_main_section',
					)
				)
			);


		// Map Section
		$wp_customize->add_section('homeland_gmap_section', array(
			'title' => __('Google Map', 'homeland'),
			'panel' => 'homeland_general_panel',
			'description' => __('Please use this site <a href="http://www.latlong.net/" target="_blank">latlong.net</a> to get your latitude and longitude values.', 'homeland')
		));	

			// API Key 
			$wp_customize->add_setting('homeland_map_api', array(
				'default' => '',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_map_api', array(
			 	'label' => __('Google Map API Key', 'homeland'),
			 	'section' => 'homeland_gmap_section',
			 	'description' => __('Google Maps now required all new sites to use an API Key as of June 22, 2016 which you can get it for free <a href="https://console.developers.google.com/apis/library?project=massive-oasis-135623" target="_blank">here</a>. All existing websites still recommended to add it.', 'homeland'),
			 	'type' => 'text',
			));

			// Latitude 
			$wp_customize->add_setting('homeland_home_map_lat', array(
				'default' => '37.0625',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_home_map_lat', array(
			 	'label' => __('Map Latitude', 'homeland'),
			 	'section' => 'homeland_gmap_section',
			 	'type' => 'text',
			));

			// Longitude 
			$wp_customize->add_setting('homeland_home_map_lng', array(
				'default' => '-95.677068',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_home_map_lng', array(
				'label' => __('Map Longitude', 'homeland'),
				'section' => 'homeland_gmap_section',
				'type' => 'text',
			));

			// Map Zoom Value 
			$wp_customize->add_setting('homeland_home_map_zoom', array(
				'default' => '10',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_home_map_zoom', array(
			 	'label' => __('Map Zoom Level', 'homeland'),
			 	'section' => 'homeland_gmap_section',
			 	'description' => __('Add your value for map zoom level from 1-20', 'homeland'),
			 	'type' => 'text',
			));

			// Map Pin
			$wp_customize->add_setting( 'homeland_map_pointer_icon', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_map_pointer_icon',
					array(
						'label' => __( 'Map Pin Icon', 'homeland' ),
						'description' => __( 'Upload your google map pin icon', 'homeland' ),
						'section' => 'homeland_gmap_section',
					)
				)
			);

			// Map Marker Clusterer
			$wp_customize->add_setting( 'homeland_map_pointer_clusterer_icon', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_map_pointer_clusterer_icon',
					array(
						'label' => __( 'Map Marker Clusterer Icon', 'homeland' ),
						'description' => __( 'Upload your google map marker clusterer icon', 'homeland' ),
						'section' => 'homeland_gmap_section',
					)
				)
			);


		// Styles Section
		$wp_customize->add_section('homeland_styles_section', array(
			'title' => __('Styles', 'homeland'),
			'panel' => 'homeland_general_panel',
		));

			// Layout Style
			$wp_customize->add_setting('homeland_theme_layout', array(
				'type' => 'option',
				'default' => 'Fullwidth',
			));

			$wp_customize->add_control('homeland_theme_layout', array(
			 	'label' => __('Select your theme layout for your website', 'homeland'),
			 	'section' => 'homeland_styles_section',
			 	'type' => 'radio',
			 	'choices' => array(
					'Fullwidth' => __( 'Fullwidth Theme Layout', 'homeland' ),
					'Boxed' => __( 'Boxed Type Theme Layout', 'homeland' ),
					'Boxed Left' => __( 'Boxed Left Theme Layout', 'homeland' )
				)
			));

			// Paging Style
			$wp_customize->add_setting('homeland_pnav', array(
				'type' => 'option',
				'default' => 'Pagination',
			));

			$wp_customize->add_control('homeland_pnav', array(
			 	'label' => __('Select your pagination type', 'homeland'),
			 	'section' => 'homeland_styles_section',
			 	'type' => 'radio',
			 	'choices' => array(
					'Pagination' => __( 'Pagination', 'homeland' ),
					'Next Previous Link' => __( 'Next Previous Link', 'homeland' )
				)
			));

			// Custom CSS
			$wp_customize->add_setting('homeland_custom_css', array(
				'default' => '',
				'type' => 'option',
				'description' => __('Add your custom CSS stylesheet code here', 'homeland'),
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_custom_css', array(
			 	'label' => __('Custom CSS', 'homeland'),
			 	'section' => 'homeland_styles_section',
			 	'description' => __('If you need to change major custom CSS code for this theme then you can use  our child theme css file in child theme folder', 'homeland'),
			 	'type' => 'textarea',
			));	
?>