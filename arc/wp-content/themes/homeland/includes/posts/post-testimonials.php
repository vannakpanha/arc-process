<?php
	/*-------------------------------
	Custom Post Type: Testimonials
	-------------------------------*/	
	
	if ( ! function_exists( 'homeland_testimonial_post_type' ) ) :
		function homeland_testimonial_post_type() {

			$labels = array(
				'name'               => __( 'Testimonials', 'homeland' ),
				'singular_name'      => __( 'Testimonial', 'homeland' ),
				'menu_name'          => __( 'Testimonials', 'homeland' ),
				'name_admin_bar'     => __( 'Testimonials', 'homeland' ),
				'add_new'            => __( 'Add New', 'homeland' ),
				'add_new_item'       => __( 'Add New Testimonial', 'homeland' ),
				'new_item'           => __( 'New Testimonial', 'homeland' ),
				'edit_item'          => __( 'Edit Testimonial', 'homeland' ),
				'view_item'          => __( 'View Testimonial', 'homeland' ),
				'all_items'          => __( 'All Testimonials', 'homeland' ),
				'search_items'       => __( 'Search Testimonials', 'homeland' ),
				'parent_item_colon'  => __( 'Parent Testimonials:', 'homeland' ),
				'not_found'          => __( 'No testimonials found.', 'homeland' ),
				'not_found_in_trash' => __( 'No testimonials found in Trash.', 'homeland' )
			);

			$args = array(
				'labels'             => $labels,
			  'description'        => __( 'Description.', 'homeland' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => __( 'testimonial-item', 'homeland' ), 'with_front' => TRUE ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'menu_icon' 				 => 'dashicons-editor-quote',		
				'supports'           => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
			);

			register_post_type( 'homeland_testimonial', $args );
		}
	endif;
	add_action( 'init', 'homeland_testimonial_post_type' );
	

	/*----------------------------
	MetaBoxes
	----------------------------*/

	if ( ! function_exists( 'homeland_testimonial_meta' ) ) :
		function homeland_testimonial_meta() {
			global $post;

			$homeland_position = sanitize_text_field( get_post_meta($post->ID, 'homeland_position', true) ); ?>
			<div class="mabuc-form-wrap">	
				<div class="mabuc-tab-content current">
					<ul>
						<li>
							<label for="homeland_position"><?php _e( 'Position', 'homeland' ); ?></label>
							<input name="homeland_position" type="text" id="homeland_position" value="<?php echo esc_attr( $homeland_position ); ?>" /> <br>
							<span class="desc"><?php _e( 'Provide a user position', 'homeland' ); ?></span>
						</li>
					</ul>
				</div>			
			</div><?php	
		}
	endif;


	/*----------------------------
	Custom Columns
	----------------------------*/

	if ( ! function_exists( 'homeland_edit_testimonial_columns' ) ) :
		function homeland_edit_testimonial_columns( $columns ) {
			$columns = array(
				'cb' 				=> '<input type="checkbox" />',
				'title' 		=> __( 'Name', 'homeland' ),	
				'position' 	=> __( 'Position', 'homeland' ),	
				'thumbnail' => __( 'Thumbnail', 'homeland' ),
				'date' 			=> __( 'Date', 'homeland' )
			);
			return $columns;
		}
	endif;
	add_filter( 'manage_edit-homeland_testimonial_columns', 'homeland_edit_testimonial_columns' ) ;
	

	if ( ! function_exists( 'homeland_manage_testimonial_columns' ) ) :
		function homeland_manage_testimonial_columns( $column ) {
			global $post;

			$homeland_position = get_post_meta( $post->ID, 'homeland_position', true );

			switch($column) {
				case 'position' : 
    			echo $homeland_position;
    		break;

				case 'thumbnail' : 
    			echo the_post_thumbnail( array(80,80) );
    		break;
				
				default :
				break;
			}
		}
	endif;
	add_action('manage_homeland_testimonial_posts_custom_column', 'homeland_manage_testimonial_columns', 10, 2);


	/*----------------------------
	Save and Update
	----------------------------*/
	
	if ( ! function_exists( 'homeland_custom_posts_testimonial' ) ) :
		function homeland_custom_posts_testimonial(){
			add_meta_box(
				"homeland_testimonial_meta", 
				__( 'Testimonial Options', 'homeland' ), 
				"homeland_testimonial_meta", 
				"homeland_testimonial", 
				"normal", 
				"low"
			);
		}	
	endif;
	add_action( 'add_meta_boxes', 'homeland_custom_posts_testimonial' );


	if ( ! function_exists( 'homeland_custom_posts_save_testimonial' ) ) :
		function homeland_custom_posts_save_testimonial( $post_id ){
			if ((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || (defined('DOING_AJAX') && DOING_AJAX)) return;
			if ( 'page' == isset($_POST['post_type']) ) { if ( !current_user_can( 'edit_page', $post_id ) ) return;
			} else { if ( !current_user_can( 'edit_post', $post_id ) ) return; }
			
			$homeland_fields = array( 'homeland_position' );

			foreach ($homeland_fields as $homeland_value) :
				if( isset($homeland_value) ) :

				  $homeland_new = false;
				  $homeland_old = get_post_meta( $post_id, $homeland_value, true );

				  if ( isset( $_POST[$homeland_value] ) ) :
			    	$homeland_new = $_POST[$homeland_value];
				 	endif;

				  if ( isset( $homeland_new ) && '' == $homeland_new && $homeland_old ) :
				    delete_post_meta( $post_id, $homeland_value, $homeland_old );
				  elseif ( false === $homeland_new || !isset( $homeland_new ) ) :
				  	delete_post_meta( $post_id, $homeland_value, $homeland_old );
				  elseif ( isset( $homeland_new ) && $homeland_new != $homeland_old ) :
				  	update_post_meta( $post_id, $homeland_value, $homeland_new );
				 	elseif ( ! isset( $homeland_old ) && isset( $homeland_new ) ) :
				    add_post_meta( $post_id, $homeland_value, $homeland_new );
				  endif;

				endif;
			endforeach;	
		}	
	endif;
	add_action('save_post', 'homeland_custom_posts_save_testimonial');
?>