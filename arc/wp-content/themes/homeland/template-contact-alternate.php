<?php
/*
Template Name: Contact 2
*/
?>

<?php 
	get_header(); 

	$homeland_hide_gmap = esc_attr( get_option('homeland_hide_gmap') );
	$homeland_phone_number = esc_attr( get_option('homeland_phone_number') );
	$homeland_fax = esc_attr( get_option('homeland_fax') );
	$homeland_contact_address = stripslashes( get_option('homeland_contact_address') );
	$homeland_email_address = esc_attr( get_option('homeland_email_address') );
	$homeland_working_hours = esc_attr( get_option('homeland_working_hours') );
	$homeland_subtitle = esc_attr( get_post_meta( $post->ID, "homeland_subtitle", true ) );
?>
	<div class="contact-alt-background">
		<div class="inside clear">
			<div class="contact-info-alt clear">
				<?php
					if(!empty($homeland_ptitle)) : echo '<h2>' . $homeland_ptitle . '</h2>';
					else : the_title('<h2>', '</h2>'); endif; 

					if(!empty($homeland_subtitle)) : 
						echo '<p>' . stripslashes ( $homeland_subtitle ) . '</p>';
					endif;

					if(!empty($homeland_contact_address)) : ?>
						<label class="contact-address"><span><?php esc_attr( _e( 'Address', 'homeland' ) ); echo ":"; ?></span> <?php echo $homeland_contact_address; ?></label><?php
					endif;
					if(!empty($homeland_working_hours)) : ?>
						<label class="working-hours"><span><?php esc_attr( _e( 'Working Hours', 'homeland' ) ); echo ":"; ?></span> <?php echo $homeland_working_hours; ?></label><?php
					endif;
					if(!empty($homeland_phone_number)) : ?>
						<label class="phone-number"><span><?php esc_attr( _e( 'Phone', 'homeland' ) ); echo ":"; ?></span> <?php echo $homeland_phone_number; ?></label><?php
					endif;
					if(!empty($homeland_email_address)) : ?>
						<label class="email-address"><span><?php esc_attr( _e( 'Email', 'homeland' ) ); echo ":"; ?></span> <a href="mailto: <?php echo $homeland_email_address; ?>"><?php echo $homeland_email_address; ?></a></label><?php
					endif;
					if(!empty($homeland_fax)) : ?>
						<label class="contact-fax"><span><?php esc_attr( _e( 'Fax', 'homeland' ) ); echo ":"; ?></span> <?php echo $homeland_fax; ?></label><?php
					endif;
				?>
			</div>
			<?php if( empty( $homeland_hide_gmap ) ) : ?>
				<section id="map"></section>
			<?php endif; ?>
		</div>
	</div>
	<section class="theme-pages">
		<div class="inside">
			<!-- Contact Form -->
			<div class="contact-form">
				<?php
					if (have_posts()) : 
						while (have_posts()) : the_post(); 
							the_content(); 								
						endwhile; 
					endif;
				?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>