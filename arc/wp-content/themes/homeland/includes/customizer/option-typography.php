<?php
	// General Panel
	$wp_customize->add_panel( 'homeland_typography_panel', array(
		'title' => __( 'Typography', 'homeland' ),
		'priority' => 122
	));

	  // Main Section
		$wp_customize->add_section('homeland_typo_main_section', array(
			'title' => __('Main', 'homeland'),
			'panel' => 'homeland_typography_panel',
		));

			// Font Family
			$wp_customize->add_setting( 'homeland_theme_font', array(
				'type' => 'option',
				'default' => 'Default',
			) );
			$wp_customize->add_control( 'homeland_theme_font', array(
				'label' => __( 'Select your theme Font Family', 'homeland' ),
				'type' => 'select',
				'section' => 'homeland_typo_main_section',
				'choices' => array(
					'Default' => __( 'Default', 'homeland' ),
					'Abel' => 'Abel',
					'Alegreya Sans' => 'Alegreya Sans',
					'Archivo Narrow' => 'Archivo Narrow',
					'Arimo' => 'Arimo',
					'Armata' => 'Armata',
					'Asap' => 'Asap',
					'Bitter' => 'Bitter',
					'Cabin' => 'Cabin',
					'Cambay' => 'Cambay',
					'Cambo' => 'Cambo',
					'Carrois Gothic' => 'Carrois Gothic',
					'Catamaran' => 'Catamaran',
					'Comfortaa' => 'Comfortaa',
					'Crimson Text' => 'Crimson Text',
					'Didact Gothic' => 'Didact Gothic',
					'Dosis' => 'Dosis',
					'Droid Sans' => 'Droid Sans',
					'Duru Sans' => 'Duru Sans',
					'EB Garamond' => 'EB Garamond',
					'Exo' => 'Exo',
					'Fira Sans' => 'Fira Sans',
					'Gafata' => 'Gafata',
					'Gudea' => 'Gudea',
					'Glegoo' => 'Glegoo',
					'Hind' => 'Hind',
					'Inconsolata' => 'Inconsolata',
					'Istok Web' => 'Istok Web',
					'Josefin Sans' => 'Josefin Sans',
					'Karla' => 'Karla',
					'Kreon' => 'Kreon',
					'Lato' => 'Lato',
					'Lora' => 'Lora',
					'Merriweather' => 'Merriweather',
					'Monda' => 'Monda',
					'Montserrat' => 'Montserrat',
					'Muli' => 'Muli',
					'News Cycle' => 'News Cycle',
					'Nixie One' => 'Nixie One',
					'Nobile' => 'Nobile',
					'Noticia Text' => 'Noticia Text',
					'Noto Sans' => 'Noto Sans',
					'Open Sans' => 'Open Sans',
					'Oswald' => 'Oswald',
					'Oxygen' => 'Oxygen',
					'PT Sans' => 'PT Sans',
					'Poiret One' => 'Poiret One',
					'Pontano Sans' => 'Pontano Sans',
					'Poppins' => 'Poppins',
					'Puritan' => 'Puritan',
					'PT Serif' => 'PT Serif',
					'Quattrocento Sans' => 'Quattrocento Sans',
					'Questrial' => 'Questrial',
					'Quicksand' => 'Quicksand',
					'Rajdhani' => 'Rajdhani',
					'Raleway' => 'Raleway',
					'Ruda' => 'Ruda',
					'Source Sans Pro' => 'Source Sans Pro',
					'Sintony' => 'Sintony',
					'Slabo' => 'Slabo',
					'Titillium Web' => 'Titillium Web',
					'Ubuntu' => 'Ubuntu',
					'Varela Round' => 'Varela Round',
					'Voces' => 'Voces',
					'Work Sans' => 'Work Sans'
				)
			) );

			// Body Font Size 
			$wp_customize->add_setting('homeland_body_font_size', array(
				'default' => '12',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_body_font_size', array(
			 	'label' => __('Body Font Size', 'homeland'),
			 	'section' => 'homeland_typo_main_section',
			 	'type' => 'text',
			));

			// Line Height
			$wp_customize->add_setting('homeland_body_line_height', array(
				'default' => '24',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_body_line_height', array(
			 	'label' => __('Line Height', 'homeland'),
			 	'section' => 'homeland_typo_main_section',
			 	'type' => 'text',
			));

			// Homepage Header
			$wp_customize->add_setting('homeland_homepage_header_font_size', array(
				'default' => '24',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_homepage_header_font_size', array(
			 	'label' => __('Homepage Header Font Size', 'homeland'),
			 	'section' => 'homeland_typo_main_section',
			 	'type' => 'text',
			));

			// Page Top Header
			$wp_customize->add_setting('homeland_page_top_header_font_size', array(
				'default' => '36',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_page_top_header_font_size', array(
			 	'label' => __('Page Top Header Font Size', 'homeland'),
			 	'section' => 'homeland_typo_main_section',
			 	'type' => 'text',
			));

			// Page Top Subtitle Header
			$wp_customize->add_setting('homeland_page_top_subtitle_font_size', array(
				'default' => '12',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_page_top_subtitle_font_size', array(
			 	'label' => __('Page Top Subtitle Font Size', 'homeland'),
			 	'section' => 'homeland_typo_main_section',
			 	'type' => 'text',
			));

			// Page Content Header
			$wp_customize->add_setting('homeland_page_content_header_font_size', array(
				'default' => '22',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_page_content_header_font_size', array(
			 	'label' => __('Page Content Header Font Size', 'homeland'),
			 	'section' => 'homeland_typo_main_section',
			 	'type' => 'text',
			));

			// Sidebar Header
			$wp_customize->add_setting('homeland_sidebar_header_font_size', array(
				'default' => '16',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_sidebar_header_font_size', array(
			 	'label' => __('Sidebar Header Font Size', 'homeland'),
			 	'section' => 'homeland_typo_main_section',
			 	'type' => 'text',
			));

			// Footer Header
			$wp_customize->add_setting('homeland_footer_font_size', array(
				'default' => '20',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field',
			));

			$wp_customize->add_control('homeland_footer_font_size', array(
			 	'label' => __('Footer Header Font Size', 'homeland'),
			 	'section' => 'homeland_typo_main_section',
			 	'type' => 'text',
			));


		// Color Scheme Section
		$wp_customize->add_section('homeland_color_scheme_section', array(
			'title' => __('Color Schemes', 'homeland'),
			'panel' => 'homeland_typography_panel',
		));

			// Global Theme Color
			$wp_customize->add_setting( 'homeland_global_color', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_global_color',
					array(
						'label' => __( 'Global Theme Color', 'homeland' ),
						'section' => 'homeland_color_scheme_section',
					)
				)
			);

			// Top Header Background Color
			$wp_customize->add_setting( 'homeland_top_header_bg_color', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_top_header_bg_color',
					array(
						'label' => __( 'Top Header Background Color', 'homeland' ),
						'section' => 'homeland_color_scheme_section',
					)
				)
			);

			// Menu Text Color
			$wp_customize->add_setting( 'homeland_menu_text_color', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_menu_text_color',
					array(
						'label' => __( 'Menu Text Color', 'homeland' ),
						'section' => 'homeland_color_scheme_section',
					)
				)
			);

			// Menu Text Current Color
			$wp_customize->add_setting( 'homeland_menu_text_color_active', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_menu_text_color_active',
					array(
						'label' => __( 'Menu Text Current Color', 'homeland' ),
						'section' => 'homeland_color_scheme_section',
					)
				)
			);

			// Menu Background Color
			$wp_customize->add_setting( 'homeland_menu_bg_color', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_menu_bg_color',
					array(
						'label' => __( 'Menu Background Color', 'homeland' ),
						'section' => 'homeland_color_scheme_section',
					)
				)
			);

			// Header Text Color
			$wp_customize->add_setting( 'homeland_header_text_color', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_header_text_color',
					array(
						'label' => __( 'Header Text Color', 'homeland' ),
						'section' => 'homeland_color_scheme_section',
					)
				)
			);

			// Sidebar Header Text Color
			$wp_customize->add_setting( 'homeland_sidebar_text_color', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_sidebar_text_color',
					array(
						'label' => __( 'Sidebar Header Text Color', 'homeland' ),
						'section' => 'homeland_color_scheme_section',
					)
				)
			);

			// Button Text Color
			$wp_customize->add_setting( 'homeland_button_text_color', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_button_text_color',
					array(
						'label' => __( 'Button Text Color', 'homeland' ),
						'section' => 'homeland_color_scheme_section',
					)
				)
			);

			// Button Background Color
			$wp_customize->add_setting( 'homeland_button_bg_color', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_button_bg_color',
					array(
						'label' => __( 'Button Background Color', 'homeland' ),
						'section' => 'homeland_color_scheme_section',
					)
				)
			);

			// Button Hover Color
			$wp_customize->add_setting( 'homeland_button_bg_hover_color', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_button_bg_hover_color',
					array(
						'label' => __( 'Button Hover Color', 'homeland' ),
						'section' => 'homeland_color_scheme_section',
					)
				)
			);

			// Footer Header Text Color
			$wp_customize->add_setting( 'homeland_footer_text_color', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_footer_text_color',
					array(
						'label' => __( 'Footer Header Text Color', 'homeland' ),
						'section' => 'homeland_color_scheme_section',
					)
				)
			);

			// Footer Background Color
			$wp_customize->add_setting( 'homeland_footer_bg_color', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_footer_bg_color',
					array(
						'label' => __( 'Footer Background Color', 'homeland' ),
						'section' => 'homeland_color_scheme_section',
					)
				)
			);

			// Sliding Bar Background Color
			$wp_customize->add_setting( 'homeland_slide_top_bg_color', array(
				'type' => 'option',
				'default' => '',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_slide_top_bg_color',
					array(
						'label' => __( 'Sliding Bar Background Color', 'homeland' ),
						'section' => 'homeland_color_scheme_section',
					)
				)
			);
?>