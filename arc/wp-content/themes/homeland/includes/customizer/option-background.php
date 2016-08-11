<?php
	// Background Panel
	$wp_customize->add_panel( 'homeland_background_panel', array(
		'title' => __( 'Background', 'homeland' ),
		'priority' => 123
	));

	  // Main Section
		$wp_customize->add_section('homeland_background_main_section', array(
			'title' => __('Main', 'homeland'),
			'panel' => 'homeland_background_panel',
		));

			// Background Type
			$wp_customize->add_setting( 'homeland_bg_type', array(
				'type' => 'option',
				'default' => 'Color',
			) );
			$wp_customize->add_control( 'homeland_bg_type', array(
				'label' => __( 'Select Background Type', 'homeland' ),
				'type' => 'radio',
				'section' => 'homeland_background_main_section',
				'choices' => array(
					'Color' => __( 'Color', 'homeland' ),
					'Pattern' => __( 'Pattern', 'homeland' ),
					'Image' => __( 'Image', 'homeland' ),
				)
			) );

			// Background Color
			$wp_customize->add_setting( 'homeland_bg_color', array(
				'type' => 'option',
				'default' => 'FFF',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'homeland_bg_color',
					array(
						'label' => __( 'Background Color', 'homeland' ),
						'description' => __('Fill this field if you select color for your background type', 'homeland'),
						'section' => 'homeland_background_main_section',
					)
				)
			);

			// Theme Pattern
			$wp_customize->add_setting( 'homeland_pattern', array(
				'type' => 'option',
				'default' => 'Select Pattern',
			) );
			$wp_customize->add_control( 'homeland_pattern', array(
				'label' => __( 'Select your theme background patterns', 'homeland' ),
				'type' => 'select',
				'description' => __('Fill this field if you select pattern for your background type', 'homeland'),
				'section' => 'homeland_background_main_section',
				'choices' => array(
					'Default' => __( 'Select Pattern', 'homeland' ),
					'Symphony' => 'Symphony',
					'Contemporary China' => 'Contemporary China',
					'Eight Horns' => 'Eight Horns',
					'Swirl' => 'Swirl',
					'Mini Waves' => 'Mini Waves',
					'Skulls' => 'Skulls',
					'Pentagon' => 'Pentagon',
					'Halftone' => 'Halftone',
					'Giftly' => 'Giftly',
					'Food' => 'Food',
					'Sprinkles' => 'Sprinkles',
					'Geometry' => 'Geometry',
					'Dimension' => 'Dimension',
					'Pixel Weave' => 'Pixel Weave',
					'Hoffman' => 'Hoffman',
					'Gray Lines' => 'Gray Lines',
					'Noise Lines' => 'Noise Lines',
					'Tiny Grid' => 'Tiny Grid',
					'Bullseye' => 'Bullseye',
					'Gray Paper' => 'Gray Paper',
					'Norwegian Rose' => 'Norwegian Rose',
					'Subtle Net' => 'Subtle Net',
					'Polyester Lite' => 'Polyester Lite',
					'Absurdity' => 'Absurdity',
					'White Bed Sheet' => 'White Bed Sheet',
					'Subtle Stripes' => 'Subtle Stripes',
					'Light Mesh' => 'Light Mesh',
					'Rough Diagonal' => 'Rough Diagonal',
					'Arabesque' => 'Arabesque',
					'Stack Circles' => 'Stack Circles',
					'Hexellence' => 'Hexellence',
					'White Texture' => 'White Texture',
					'Concrete Wall' => 'Concrete Wall',
					'Brush Aluminum' => 'Brush Aluminum',
					'Groovepaper' => 'Groovepaper',
					'Diagonal Noise' => 'Diagonal Noise',
					'Rocky Wall' => 'Rocky Wall',
					'Whitey' => 'Whitey',
					'Bright Squares' => 'Bright Squares',
					'Freckles' => 'Freckles',
					'Wallpaper' => 'Wallpaper',
					'Project Paper' => 'Project Paper',
					'Cubes' => 'Cubes',
					'Washi' => 'Washi',
					'Dot Noise' => 'Dot Noise',
					'xv' => 'xv',
					'Little Plaid' => 'Little Plaid',
					'Old Wall' => 'Old Wall',
					'Connect' => 'Connect',
					'Ravenna' => 'Ravenna',
					'Smooth Wall' => 'Smooth Wall',
					'Tapestry' => 'Tapestry',
					'Psychedelic' => 'Psychedelic',
					'Scribble Light' => 'Scribble Light',
					'GPlay' => 'GPlay',
					'Lil Fiber' => 'Lil Fiber',
					'First Aid' => 'First Aid',
					'Frenchstucco' => 'Frenchstucco',
					'Light Wool' => 'Light Wool',
					'Gradient Squares' => 'Gradient Squares',
					'Escheresque' => 'Escheresque',
					'Climpek' => 'Climpek',
					'Lyonnette' => 'Lyonnette',
					'Gray Floral' => 'Gray Floral',
					'Reticular Tissue' => 'Reticular Tissue',
					'Confectionary' => 'Confectionary',
					'Dark Sharp Edges' => 'Dark Sharp Edges',
					'Subtle White Feathers' => 'Subtle White Feathers',
					'Tileable Wood' => 'Tileable Wood',
					'Pineapple Cut' => 'Pineapple Cut'
				)
			) );

			// Background Image
			$wp_customize->add_setting( 'homeland_default_bgimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_default_bgimage',
					array(
						'label' => __( 'Background Image', 'homeland' ),
						'description' => __( 'Fill this field if you select image for your background type', 'homeland' ),
						'section' => 'homeland_background_main_section',
					)
				)
			);


		// Images Section
		$wp_customize->add_section('homeland_background_image_section', array(
			'title' => __('Images', 'homeland'),
			'panel' => 'homeland_background_panel',
			'description' => __('Add your background images here', 'homeland')
		));

			// Archive Image
			$wp_customize->add_setting( 'homeland_archive_bgimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_archive_bgimage',
					array(
						'label' => __( 'Archive Image', 'homeland' ),
						'section' => 'homeland_background_image_section',
						'description' => __('Upload archive background image for archive page', 'homeland')
					)
				)
			);

			// Taxonomy Image
			$wp_customize->add_setting( 'homeland_taxonomy_bgimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_taxonomy_bgimage',
					array(
						'label' => __( 'Taxonomy Image', 'homeland' ),
						'section' => 'homeland_background_image_section',
						'description' => __('Upload taxonomy background image for taxonomy page', 'homeland')
					)
				)
			);

			// Agent Image
			$wp_customize->add_setting( 'homeland_agent_bgimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_agent_bgimage',
					array(
						'label' => __( 'Agent Image', 'homeland' ),
						'section' => 'homeland_background_image_section',
						'description' => __('Upload agent background image for agent single page', 'homeland')
					)
				)
			);

			// Search Image
			$wp_customize->add_setting( 'homeland_search_bgimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_search_bgimage',
					array(
						'label' => __( 'Search Image', 'homeland' ),
						'section' => 'homeland_background_image_section',
						'description' => __('Upload search background image for search page', 'homeland')
					)
				)
			);

			// Attachment Image
			$wp_customize->add_setting( 'homeland_attachment_bgimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_attachment_bgimage',
					array(
						'label' => __( 'Attachment Image', 'homeland' ),
						'section' => 'homeland_background_image_section',
						'description' => __('Upload attachment background image for attachment page', 'homeland')
					)
				)
			);

			// Page not found Image
			$wp_customize->add_setting( 'homeland_notfound_bgimage', array(
				'type' => 'option',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'homeland_notfound_bgimage',
					array(
						'label' => __( 'Page not found Image', 'homeland' ),
						'section' => 'homeland_background_image_section',
						'description' => __('Upload 404 not found background image for 404 page', 'homeland')
					)
				)
			);
?>