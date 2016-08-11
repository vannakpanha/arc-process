<?php
	/*-------------------------------
	Property Amenities Widget
	-------------------------------*/
	
	class homeland_Widget_Property_Amenities extends WP_Widget {
	
		function homeland_Widget_Property_Amenities() {		
			$widget_ops = array('classname' => 'homeland_widget-property-amenities', 'description' => __('Custom widget for property amenities', 'homeland'));	
			parent::__construct('PropertyAmenities', __('Homeland: Search By Amenities', 'homeland'), $widget_ops);		
		}
	
		function widget($args, $instance) {		
			extract($args);		
			$title = apply_filters('widget_title', $instance['title']);		
			if (empty($title)) $title = false;
					
				$instance_follow_bdesc = array();

				echo $before_widget;	
				if ($title) {						
					echo $before_title;
					echo $title;
					echo $after_title;						
				}				

				?>	

				<!--PROPERTY AMENITIES LIST-->
				<ul>
					<?php
						global $homeland_advance_search_page_url;
						
						$args = array( 
							'taxonomy' => 'homeland_property_amenities', 
							'hierarchical' => 1, 
							'hide_empty' => 0,
							'order' => 'ASC', 
							'orderby' => 'title',
							'pad_counts' => true 
						);		

						$homeland_amenities = get_categories($args);	
											
					  	foreach($homeland_amenities as $homeland_category) { 
					  		echo '<li><a href="' . $homeland_advance_search_page_url . '?amenities='. $homeland_category->slug . '" title="' . sprintf( __( "View all posts in %s", 'homeland' ), $homeland_category->name ) . '" ' . '>' . $homeland_category->name.'</a>&nbsp;('. $homeland_category->count .')</li>';
					  	} 
					?>
				</ul>

				<?php
					echo $after_widget.'';				
				}
			
				function update($new_instance, $old_instance) {				
					$instance = $old_instance;				
					$instance['title'] = strip_tags($new_instance['title']);
					return $instance;				
				}
			
				function form($instance) {				
					$title = isset($instance['title']) ? esc_attr($instance['title']) : '';												
					
				?>
					<p><label for="<?php echo $this -> get_field_id('title'); ?>"><?php _e('Title', 'homeland'); ?></label>
					<input class="widefat" id="<?php echo $this -> get_field_id('title'); ?>" name="<?php echo $this -> get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
					<div>	
						<small><i><?php esc_attr( _e( 'Property Amenities will automatically display', 'homeland' ) ); ?></i></small>	
					</div>
		<?php
				}			
		}

		function homeland_widgets_property_amenities() {			
			register_widget('homeland_Widget_Property_Amenities');			
		}
		add_action('widgets_init', 'homeland_widgets_property_amenities');
?>