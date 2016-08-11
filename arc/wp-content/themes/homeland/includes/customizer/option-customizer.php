<?php
	function homeland_theme_customizer($wp_customize){

		include get_template_directory() . '/includes/customizer/option-general.php';
		include get_template_directory() . '/includes/customizer/option-typography.php';
		include get_template_directory() . '/includes/customizer/option-background.php';
		include get_template_directory() . '/includes/customizer/option-header.php';
		include get_template_directory() . '/includes/customizer/option-advance-search.php';
		include get_template_directory() . '/includes/customizer/option-agents.php';
		include get_template_directory() . '/includes/customizer/option-footer.php';
		include get_template_directory() . '/includes/customizer/option-home.php';
		include get_template_directory() . '/includes/customizer/option-properties.php';
		include get_template_directory() . '/includes/customizer/option-blog.php';
		include get_template_directory() . '/includes/customizer/option-portfolio.php';
		include get_template_directory() . '/includes/customizer/option-services.php';
		include get_template_directory() . '/includes/customizer/option-contact.php';
		include get_template_directory() . '/includes/customizer/option-other-pages.php';
		include get_template_directory() . '/includes/customizer/option-forum.php';

	}

	add_action('customize_register', 'homeland_theme_customizer');


	/* Sanitize callback for textarea */

	if ( ! function_exists( 'homeland_textarea' ) ) :
		function homeland_textarea( $homeland_text ) {
	    return $homeland_text;
		}
	endif;
?>