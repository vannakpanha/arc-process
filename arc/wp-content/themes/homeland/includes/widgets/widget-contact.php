<?php
	/*-------------------------------
	Contact Info Widget
	-------------------------------*/
	
	class homeland_Widget_Contact extends WP_Widget {
	
		function homeland_Widget_Contact() {			
			$widget_ops = array('classname' => 'homeland_widget-contact-info', 'description' => __('Custom widget for contact information', 'homeland'));	
			parent::__construct('Contact', __('Homeland: Contact Information', 'homeland'), $widget_ops);		
		}

		function widget($args, $instance) {		
			extract($args);		
			$title = apply_filters('widget_title', $instance['title']);		
			if (empty($title)) $title = false;
				$instance_homeland_contact_address = array();
				$instance_homeland_contact_phone = array();
				$instance_homeland_contact_email = array();				
				$instance_homeland_contact_website = array();				

				$homeland_contact_address = 'homeland_contact_address';
				$instance_homeland_contact_address = isset($instance[$homeland_contact_address]) ? esc_attr($instance[$homeland_contact_address]) : '';
				$homeland_contact_phone = 'homeland_contact_phone';
				$instance_homeland_contact_phone = isset($instance[$homeland_contact_phone]) ? esc_attr($instance[$homeland_contact_phone]) : '';
				$homeland_contact_email = 'homeland_contact_email';
				$instance_homeland_contact_email = isset($instance[$homeland_contact_email]) ? esc_attr($instance[$homeland_contact_email]) : '';			
				$homeland_contact_website = 'homeland_contact_website';
				$instance_homeland_contact_website = isset($instance[$homeland_contact_website]) ? esc_attr($instance[$homeland_contact_website]) : '';				

				echo $before_widget;					
				if ($title) {						
					echo $before_title;
					echo $title;
					echo $after_title;						
				}
				
				?>

				<!-- Contact Info -->
				<ul>
					<?php
						if(!empty($instance_homeland_contact_address)) : ?>
							<li class="clear">
								<i class="fa fa-map-marker fa-lg"></i>
								<label><?php echo stripslashes($instance_homeland_contact_address); ?></label>
							</li><?php
						endif;

						if(!empty($instance_homeland_contact_phone)) : ?>
							<li class="clear">
								<i class="fa fa-mobile fa-lg"></i>
								<label><?php echo $instance_homeland_contact_phone; ?></label>
							</li><?php
						endif;

						if(!empty($instance_homeland_contact_email)) : ?>
							<li class="clear">
								<i class="fa fa-envelope-o fa-lg"></i>
								<label>
									<a href="mailto:<?php echo $instance_homeland_contact_email; ?>"><?php echo $instance_homeland_contact_email; ?></a>
								</label>
							</li><?php
						endif;

						if(!empty($instance_homeland_contact_website)) : ?>
							<li class="clear">
								<i class="fa fa-laptop fa-lg"></i>
								<label>
									<a href="<?php echo $instance_homeland_contact_website; ?>" target="_blank"><?php echo $instance_homeland_contact_website; ?></a>
								</label>
							</li><?php
						endif;
					?>
				</ul>

				<?php
					echo $after_widget.'';				
				}
			
				function update($new_instance, $old_instance) {				
					$instance = $old_instance;				
					$instance['title'] = strip_tags($new_instance['title']);
					$instance['homeland_contact_address'] = strip_tags($new_instance['homeland_contact_address']);		
					$instance['homeland_contact_phone'] = strip_tags($new_instance['homeland_contact_phone']);
					$instance['homeland_contact_email'] = strip_tags($new_instance['homeland_contact_email']);	
					$instance['homeland_contact_website'] = strip_tags($new_instance['homeland_contact_website']);	

					return $instance;			
				}
			
				function form($instance) {				
					$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
					$instance_homeland_contact_address = array();
					$instance_homeland_contact_phone = array();
					$instance_homeland_contact_email = array();					
					$instance_homeland_contact_website = array();					

					$homeland_contact_address = 'homeland_contact_address';
					$instance_homeland_contact_address = isset($instance[$homeland_contact_address]) ? esc_attr($instance[$homeland_contact_address]) : '';		
					$homeland_contact_phone = 'homeland_contact_phone';
					$instance_homeland_contact_phone = isset($instance[$homeland_contact_phone]) ? esc_attr($instance[$homeland_contact_phone]) : '';
					$homeland_contact_email = 'homeland_contact_email';
					$instance_homeland_contact_email = isset($instance[$homeland_contact_email]) ? esc_attr($instance[$homeland_contact_email]) : '';
					$homeland_contact_website = 'homeland_contact_website';
					$instance_homeland_contact_website = isset($instance[$homeland_contact_website]) ? esc_attr($instance[$homeland_contact_website]) : '';
				?>
					<p><label for="<?php echo $this -> get_field_id('title'); ?>"><?php _e('Title', 'homeland'); ?></label>
					<input class="widefat" id="<?php echo $this -> get_field_id('title'); ?>" name="<?php echo $this -> get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
					<div>			
						<div>							
							<p><label for="<?php echo $this -> get_field_id($homeland_contact_address); ?>"><?php _e( 'Address', 'homeland' ); ?></label>
							<textarea class="widefat" type="text" id="<?php echo $this -> get_field_id($homeland_contact_address); ?>" name="<?php echo $this -> get_field_name($homeland_contact_address); ?>"><?php echo $instance_homeland_contact_address; ?></textarea>
							</p>	
							<p><label for="<?php echo $this -> get_field_id($homeland_contact_phone); ?>"><?php _e( 'Phone', 'homeland' ); ?></label>
							<input class="widefat" type="text" id="<?php echo $this -> get_field_id($homeland_contact_phone); ?>" name="<?php echo $this -> get_field_name($homeland_contact_phone); ?>" value="<?php echo $instance_homeland_contact_phone; ?>">		
							</p>
							<p><label for="<?php echo $this -> get_field_id($homeland_contact_email); ?>"><?php _e( 'Email', 'homeland' ); ?></label>
							<input class="widefat" type="text" id="<?php echo $this -> get_field_id($homeland_contact_email); ?>" name="<?php echo $this -> get_field_name($homeland_contact_email); ?>" value="<?php echo $instance_homeland_contact_email; ?>">		
							</p>			
							<p><label for="<?php echo $this -> get_field_id($homeland_contact_website); ?>"><?php _e( 'Website', 'homeland' ); ?></label>
							<input class="widefat" type="text" id="<?php echo $this -> get_field_id($homeland_contact_website); ?>" name="<?php echo $this -> get_field_name($homeland_contact_website); ?>" value="<?php echo $instance_homeland_contact_website; ?>">		
							</p>														
						</div>			
					</div>
		<?php
				}			
		}

		function homeland_widgets_contact() {			
			register_widget('homeland_Widget_Contact');			
		}
		add_action('widgets_init', 'homeland_widgets_contact');
?>