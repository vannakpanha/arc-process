<?php
	// Homepage Panel
	$wp_customize->add_panel( 'homeland_home_panel', array(
		'title' => __( 'Homepage', 'homeland' ),
		'priority' => 128
	));

	  // Main Section
		$wp_customize->add_section('homeland_home_main_section', array(
			'title' => __('Main', 'homeland'),
			'panel' => 'homeland_home_panel',
		));

			// Top Elements
			$wp_customize->add_setting( 'homeland_top_element_display', array(
				'type' => 'option',
				'default' => 'slider',
			) );
			$wp_customize->add_control( 'homeland_top_element_display', array(
				'label' => __( 'First Top Content', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_home_main_section',
				'description' => __('Select a top element content for homepage only', 'homeland'),
				'choices' => array(
					'slider' => __( 'Slider', 'homeland' ),
					'thumb-slider' => __( 'Thumb Slider', 'homeland' ),
					'revslider' => __( 'Revolution Slider', 'homeland' ),
					'static-image' => __( 'Static Image', 'homeland' ),
					'google-map' => __( 'Google Map', 'homeland' ),
					'video' => __( 'Video', 'homeland' ),
				)
			) );

			// Video Embedded
			$wp_customize->add_setting('homeland_video_url', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_video_url', array(
			 	'label' => __('Video Embedded Code', 'homeland'),
			 	'description' => __('Note: You can only use this if you select video in your first top content or use the homepage video page template.', 'homeland'),
			 	'section' => 'homeland_home_main_section',
			 	'type' => 'textarea',
			));

			// Hide Advance Search
			$wp_customize->add_setting( 'homeland_hide_advance_search', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_advance_search', array(
				'label' => __( 'Hide Advance Search?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_home_main_section',
				'description' => __('This will hide advance search box in homepage only', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Hide 2 Cols Bottom
			$wp_customize->add_setting( 'homeland_hide_two_cols', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_two_cols', array(
				'label' => __( 'Hide 2 Columns below?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_home_main_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Hide 3 Cols Bottom
			$wp_customize->add_setting( 'homeland_hide_three_cols', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_three_cols', array(
				'label' => __( 'Hide 3 Columns below?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_home_main_section',
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );


		// Static Image Section
		$wp_customize->add_section('homeland_static_image_section', array(
			'title' => __('Static Image', 'homeland'),
			'panel' => 'homeland_home_panel',
		));

			// Brief Description
			$wp_customize->add_setting('homeland_static_image_desc', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_static_image_desc', array(
			 	'label' => __('Description', 'homeland'),
			 	'section' => 'homeland_static_image_section',
			 	'type' => 'textarea',
			));

			// Static Image
			$wp_customize->add_setting( 'homeland_static_image', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_static_image',
					array(
						'label' => __( 'Static Image', 'homeland' ),
						'description' => __( 'Fill this field if you select static image for your homepage', 'homeland' ),
						'section' => 'homeland_static_image_section',
					)
				)
			);

			// Overlay Color
			$wp_customize->add_setting( 'homeland_static_image_overlay', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_static_image_overlay',
					array(
						'label' => __( 'Overlay Color', 'homeland' ),
						'section' => 'homeland_static_image_section',
					)
				)
			);


		// Slider Section
		$wp_customize->add_section('homeland_slider_section', array(
			'title' => __('Slider', 'homeland'),
			'panel' => 'homeland_home_panel',
		));

			// Hide Slider
			$wp_customize->add_setting( 'homeland_hide_properties_details', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_properties_details', array(
				'label' => __( 'Hide slider details?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_slider_section',
				'description' => __('This will hide slider details in homepage only', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Description Style
			$wp_customize->add_setting( 'homeland_slider_desc_type', array(
				'type' => 'option',
				'default' => 'Default',
			) );
			$wp_customize->add_control( 'homeland_slider_desc_type', array(
				'label' => __( 'Description Style', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_slider_section',
				'choices' => array(
					'Default' => __( 'Default', 'homeland' ),
					'Right' => __( 'Right', 'homeland' ),
					'Bottom' => __( 'Bottom', 'homeland' ),
				)
			) );

			// Display List
			$wp_customize->add_setting( 'homeland_slider_display_list', array(
				'type' => 'option',
				'default' => 'Featured Properties',
			) );
			$wp_customize->add_control( 'homeland_slider_display_list', array(
				'label' => __( 'Display List', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_slider_section',
				'choices' => array(
					'Properties' => __( 'Properties', 'homeland' ),
					'Featured Properties' => __( 'Featured Properties', 'homeland' ),
					'Blog' => __( 'Blog', 'homeland' ),
					'Portfolio' => __( 'Portfolio', 'homeland' ),
				)
			) );

			// Limit
			$wp_customize->add_setting('homeland_slider_limit', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_slider_limit', array(
			 	'label' => __('Number of item slider to be display', 'homeland'),
			 	'section' => 'homeland_slider_section',
			 	'type' => 'text',
			));

			// Order
			$wp_customize->add_setting( 'homeland_slider_order', array(
				'type' => 'option',
				'default' => 'DESC',
			) );
			$wp_customize->add_control( 'homeland_slider_order', array(
				'label' => __( 'Ordering', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_slider_section',
				'choices' => array(
					'ASC' => __( 'Ascending', 'homeland' ),
					'DESC' => __( 'Descending', 'homeland' ),
				)
			) );

			// Sort
			$wp_customize->add_setting( 'homeland_slider_orderby', array(
				'type' => 'option',
				'default' => 'ID',
			) );
			$wp_customize->add_control( 'homeland_slider_orderby', array(
				'label' => __( 'Sorting', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_slider_section',
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
					'price' => __( 'Price', 'homeland' ),
				)
			) );

			// Slider Button Label
			$wp_customize->add_setting('homeland_slider_button', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_slider_button', array(
			 	'label' => __('Slider Button Label', 'homeland'),
			 	'section' => 'homeland_slider_section',
			 	'type' => 'text',
			));


		// Welcome Section
		$wp_customize->add_section('homeland_welcome_section', array(
			'title' => __('Welcome', 'homeland'),
			'panel' => 'homeland_home_panel',
		));

			// Hide Welcome
			$wp_customize->add_setting( 'homeland_hide_welcome', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_welcome', array(
				'label' => __( 'Hide Welcome Text?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_welcome_section',
				'description' => __('This will hide welcome box in homepage only', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Welcome Header Title
			$wp_customize->add_setting('homeland_welcome_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_welcome_header', array(
			 	'label' => __('Welcome Header Title', 'homeland'),
			 	'section' => 'homeland_welcome_section',
			 	'type' => 'text',
			));

			// Welcome Text
			$wp_customize->add_setting('homeland_welcome_text', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_welcome_text', array(
			 	'label' => __('Welcome Description', 'homeland'),
			 	'section' => 'homeland_welcome_section',
			 	'type' => 'textarea',
			));

			// Button Label
			$wp_customize->add_setting('homeland_welcome_button', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_welcome_button', array(
			 	'label' => __('Welcome Button Label', 'homeland'),
			 	'section' => 'homeland_welcome_section',
			 	'type' => 'text',
			));

			// Button URL
			$wp_customize->add_setting('homeland_welcome_link', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_welcome_link', array(
			 	'label' => __('Welcome Button Link', 'homeland'),
			 	'section' => 'homeland_welcome_section',
			 	'type' => 'text',
			));

			// Background Image
			$wp_customize->add_setting( 'homeland_welcome_bgimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_welcome_bgimage',
					array(
						'label' => __( 'Background Image', 'homeland' ),
						'section' => 'homeland_welcome_section',
						'description' => __('Upload background image for welcome in homepage', 'homeland')
					)
				)
			);

			// Overlay Color
			$wp_customize->add_setting( 'homeland_welcome_overlay', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_welcome_overlay',
					array(
						'label' => __( 'Overlay Color', 'homeland' ),
						'section' => 'homeland_welcome_section',
					)
				)
			);


		// Call to action Section
		$wp_customize->add_section('homeland_cta_section', array(
			'title' => __('Call to Action Text', 'homeland'),
			'panel' => 'homeland_home_panel',
		));

			// Hide CTA
			$wp_customize->add_setting( 'homeland_hide_cta', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_cta', array(
				'label' => __( 'Hide Call to Action Text?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_cta_section',
				'description' => __('This will hide call to action box in homepage only', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// CTA Text
			$wp_customize->add_setting('homeland_cta_text', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_cta_text', array(
			 	'label' => __('Description', 'homeland'),
			 	'description' => __('Add a brief description for your call to action.', 'homeland'),
			 	'section' => 'homeland_cta_section',
			 	'type' => 'textarea',
			));

			// CTA Button Label
			$wp_customize->add_setting('homeland_cta_button', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_cta_button', array(
			 	'label' => __('Button Label', 'homeland'),
			 	'section' => 'homeland_cta_section',
			 	'type' => 'text',
			));

			// CTA Button URL
			$wp_customize->add_setting('homeland_cta_button_link', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_cta_button_link', array(
			 	'label' => __('Button Link', 'homeland'),
			 	'description' => __('Do not forget to add http:// if you added a link', 'homeland'),
			 	'section' => 'homeland_cta_section',
			 	'type' => 'text',
			));

			// CTA Link Target
			$wp_customize->add_setting( 'homeland_cta_link_target', array(
				'type' => 'option',
				'default' => '_self',
			) );
			$wp_customize->add_control( 'homeland_cta_link_target', array(
				'label' => __( 'Link Target', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_cta_section',
				'description' => __('Select your call to action link target option.', 'homeland'),
				'choices' => array(
					'_self' => __( 'Self', 'homeland' ),
					'_blank' => __( 'Blank', 'homeland' ),
					'_parent' => __( 'Parent', 'homeland' ),
					'_top' => __( 'Top', 'homeland' ),
				)
			) );


		// Properties Section
		$wp_customize->add_section('homeland_property_section', array(
			'title' => __('Properties', 'homeland'),
			'panel' => 'homeland_home_panel',
		));

			// Hide Property
			$wp_customize->add_setting( 'homeland_hide_properties', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_properties', array(
				'label' => __( 'Hide Properties?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_property_section',
				'description' => __('This will hide property box in homepage only', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Limit
			$wp_customize->add_setting('homeland_property_limit', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_property_limit', array(
			 	'label' => __('Number of properties display', 'homeland'),
			 	'section' => 'homeland_property_section',
			 	'type' => 'text',
			));

			// Property Header Title
			$wp_customize->add_setting('homeland_property_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_property_header', array(
			 	'label' => __('Property header title', 'homeland'),
			 	'section' => 'homeland_property_section',
			 	'type' => 'text',
			));

			// Featured Limit
			$wp_customize->add_setting('homeland_featured_property_limit', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_featured_property_limit', array(
			 	'label' => __('Number of featured properties display', 'homeland'),
			 	'section' => 'homeland_property_section',
			 	'type' => 'text',
			));

			// Property Featured Header Title
			$wp_customize->add_setting('homeland_featured_property_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_featured_property_header', array(
			 	'label' => __('Property header featured title', 'homeland'),
			 	'section' => 'homeland_property_section',
			 	'type' => 'text',
			));


		// Portfolio Section
		$wp_customize->add_section('homeland_portfolio_section', array(
			'title' => __('Portfolio', 'homeland'),
			'panel' => 'homeland_home_panel',
		));

			// Hide Portfolio
			$wp_customize->add_setting( 'homeland_hide_portfolio', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_portfolio', array(
				'label' => __( 'Hide Portfolio?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_portfolio_section',
				'description' => __('This will hide portfolio box in homepage only', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Limit
			$wp_customize->add_setting('homeland_portfolio_limit', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_portfolio_limit', array(
			 	'label' => __('Number of portfolio display', 'homeland'),
			 	'section' => 'homeland_portfolio_section',
			 	'type' => 'text',
			));

			// Portfolio Header Title
			$wp_customize->add_setting('homeland_portfolio_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_portfolio_header', array(
			 	'label' => __('Portfolio header title', 'homeland'),
			 	'section' => 'homeland_portfolio_section',
			 	'type' => 'text',
			));

			// Order
			$wp_customize->add_setting( 'homeland_portfolio_home_order', array(
				'type' => 'option',
				'default' => 'DESC',
			) );
			$wp_customize->add_control( 'homeland_portfolio_home_order', array(
				'label' => __( 'Ordering', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_portfolio_section',
				'choices' => array(
					'ASC' => __( 'Ascending', 'homeland' ),
					'DESC' => __( 'Descending', 'homeland' ),
				)
			) );

			// Sort
			$wp_customize->add_setting( 'homeland_portfolio_home_orderby', array(
				'type' => 'option',
				'default' => 'ID',
			) );
			$wp_customize->add_control( 'homeland_portfolio_home_orderby', array(
				'label' => __( 'Sorting', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_portfolio_section',
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

		// Blog Section
		$wp_customize->add_section('homeland_blog_section', array(
			'title' => __('Blog', 'homeland'),
			'panel' => 'homeland_home_panel',
		));

			// Limit
			$wp_customize->add_setting('homeland_blog_limit', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_blog_limit', array(
			 	'label' => __('Number of blog display', 'homeland'),
			 	'section' => 'homeland_blog_section',
			 	'type' => 'text',
			));

			// Blog Header Title
			$wp_customize->add_setting('homeland_blog_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_blog_header', array(
			 	'label' => __('Blog header title', 'homeland'),
			 	'section' => 'homeland_blog_section',
			 	'type' => 'text',
			));

			// Blog Categories
			$wp_customize->add_setting( 'homeland_blog_category', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_blog_category', array(
				'label' => __( 'Blog Category', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_blog_section',
				'choices' => homeland_categories_select()
			) );

			// Category List
			function homeland_categories_select() {
			  $args = array( 'hide_empty' => 0, 'orderby' => 'name' );
				$homeland_categories = get_categories( $args );
				$homeland_blog_category = array();
				
				foreach ($homeland_categories as $homeland_category_list ) {
					$homeland_blog_category[$homeland_category_list->slug] = $homeland_category_list->name;
				}
				array_unshift( $homeland_blog_category, __( 'Choose a category', 'homeland' ) );

				return $homeland_blog_category;
			}


		// Services Section
		$wp_customize->add_section('homeland_services_section', array(
			'title' => __('Services', 'homeland'),
			'panel' => 'homeland_home_panel',
		));

			// Hide Services
			$wp_customize->add_setting( 'homeland_hide_services', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_services', array(
				'label' => __( 'Hide Services?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_services_section',
				'description' => __('This will hide services box in homepage only', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Limit
			$wp_customize->add_setting('homeland_services_limit', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_services_limit', array(
			 	'label' => __('Number of services display', 'homeland'),
			 	'section' => 'homeland_services_section',
			 	'type' => 'text',
			));

			// Background Image
			$wp_customize->add_setting( 'homeland_services_bgimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_services_bgimage',
					array(
						'label' => __( 'Background Image', 'homeland' ),
						'section' => 'homeland_services_section',
						'description' => __('Upload background image for services in homepage', 'homeland')
					)
				)
			);

			// Overlay Color
			$wp_customize->add_setting( 'homeland_services_overlay', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_services_overlay',
					array(
						'label' => __( 'Overlay Color', 'homeland' ),
						'section' => 'homeland_services_section',
					)
				)
			);


		// Partners Section
		$wp_customize->add_section('homeland_partners_section', array(
			'title' => __('Partners', 'homeland'),
			'panel' => 'homeland_home_panel',
		));

			// Hide Partners
			$wp_customize->add_setting( 'homeland_hide_partners', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_partners', array(
				'label' => __( 'Hide Partners?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_partners_section',
				'description' => __('This will hide partners box in homepage only', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Limit
			$wp_customize->add_setting('homeland_partners_limit', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_partners_limit', array(
			 	'label' => __('Number of partners display', 'homeland'),
			 	'section' => 'homeland_partners_section',
			 	'type' => 'text',
			));

			// Partners Header Title
			$wp_customize->add_setting('homeland_partners_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_partners_header', array(
			 	'label' => __('Partners header title', 'homeland'),
			 	'section' => 'homeland_partners_section',
			 	'type' => 'text',
			));

			// Order
			$wp_customize->add_setting( 'homeland_partner_order', array(
				'type' => 'option',
				'default' => 'DESC',
			) );
			$wp_customize->add_control( 'homeland_partner_order', array(
				'label' => __( 'Ordering', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_partners_section',
				'choices' => array(
					'ASC' => __( 'Ascending', 'homeland' ),
					'DESC' => __( 'Descending', 'homeland' ),
				)
			) );

			// Sort
			$wp_customize->add_setting( 'homeland_partner_orderby', array(
				'type' => 'option',
				'default' => 'ID',
			) );
			$wp_customize->add_control( 'homeland_partner_orderby', array(
				'label' => __( 'Sorting', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_partners_section',
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

			// Background Image
			$wp_customize->add_setting( 'homeland_partners_bgimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_partners_bgimage',
					array(
						'label' => __( 'Background Image', 'homeland' ),
						'section' => 'homeland_partners_section',
						'description' => __('Upload background image for partners in homepage', 'homeland')
					)
				)
			);

			// Overlay Color
			$wp_customize->add_setting( 'homeland_partners_overlay', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_partners_overlay',
					array(
						'label' => __( 'Overlay Color', 'homeland' ),
						'section' => 'homeland_partners_section',
					)
				)
			);


		// Agent Section
		$wp_customize->add_section('homeland_agent_section', array(
			'title' => __('Agent', 'homeland'),
			'panel' => 'homeland_home_panel',
		));

			// Limit
			$wp_customize->add_setting('homeland_agent_limit', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_agent_limit', array(
			 	'label' => __('Number of agent display', 'homeland'),
			 	'section' => 'homeland_agent_section',
			 	'type' => 'text',
			));

			// Agent Header Title
			$wp_customize->add_setting('homeland_agents_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_agents_header', array(
			 	'label' => __('Agent Header Title', 'homeland'),
			 	'section' => 'homeland_agent_section',
			 	'type' => 'text',
			));

			// Order
			$wp_customize->add_setting( 'homeland_agent_order', array(
				'type' => 'option',
				'default' => 'DESC',
			) );
			$wp_customize->add_control( 'homeland_agent_order', array(
				'label' => __( 'Ordering', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_agent_section',
				'choices' => array(
					'ASC' => __( 'Ascending', 'homeland' ),
					'DESC' => __( 'Descending', 'homeland' ),
				)
			) );

			// Sort
			$wp_customize->add_setting( 'homeland_agent_orderby', array(
				'type' => 'option',
				'default' => 'ID',
			) );
			$wp_customize->add_control( 'homeland_agent_orderby', array(
				'label' => __( 'Sorting', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_agent_section',
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


		// Testimonials Section
		$wp_customize->add_section('homeland_testimonials_section', array(
			'title' => __('Testimonials', 'homeland'),
			'panel' => 'homeland_home_panel',
		));

			// Hide Testimonials
			$wp_customize->add_setting( 'homeland_hide_testimonials', array(
				'type' => 'option',
				'default' => '',
			) );
			$wp_customize->add_control( 'homeland_hide_testimonials', array(
				'label' => __( 'Hide Testimonials?', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_testimonials_section',
				'description' => __('This will hide testimonials box in homepage only', 'homeland'),
				'choices' => array(
					'true' => __( 'Yes', 'homeland' ),
					'' => __( 'No', 'homeland' ),
				)
			) );

			// Limit
			$wp_customize->add_setting('homeland_testi_limit', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_testi_limit', array(
			 	'label' => __('Number of testimonials display', 'homeland'),
			 	'section' => 'homeland_testimonials_section',
			 	'type' => 'text',
			));

			// Welcome Header Title
			$wp_customize->add_setting('homeland_testi_header', array(
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_testi_header', array(
			 	'label' => __('Testimonials Header Title', 'homeland'),
			 	'section' => 'homeland_testimonials_section',
			 	'type' => 'text',
			));

			// Background Image
			$wp_customize->add_setting( 'homeland_testimonials_bgimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_testimonials_bgimage',
					array(
						'label' => __( 'Background Image', 'homeland' ),
						'section' => 'homeland_testimonials_section',
						'description' => __('Upload background image for testimonials in homepage', 'homeland')
					)
				)
			);

			// Overlay Color
			$wp_customize->add_setting( 'homeland_testi_overlay', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_testi_overlay',
					array(
						'label' => __( 'Overlay Color', 'homeland' ),
						'section' => 'homeland_testimonials_section',
					)
				)
			);
?>