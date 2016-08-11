<?php
/*
	Template Name: Sitemap
*/
?>

<?php 
	get_header(); 

	$homeland_advance_search = get_post_meta( $post->ID, 'homeland_advance_search', true );
	$homeland_all_agents = esc_attr( get_option('homeland_all_agents') );

	if(empty($homeland_advance_search)) : homeland_advance_search(); endif;
?>

	<!-- Sitemap -->
	<section class="theme-pages">
		<div class="inside clear">
			<div class="theme-fullwidth">
				<?php
					if (have_posts()) : 
						while (have_posts()) : the_post(); 
							the_content(); 								
						endwhile; 
					endif;
				?>

				<div class="clear">
					<div class="sitemap">
						<h3><?php _e( 'Pages', 'homeland' ); ?></h3>
						<?php
							$args = array(
								'authors'      => '',
								'child_of'     => 0,
								'date_format'  => get_option('date_format'),
								'depth'        => 0,
								'echo'         => 1,
								'exclude'      => '',
								'include'      => '',
								'link_after'   => '',
								'link_before'  => '',
								'post_type'    => 'page',
								'post_status'  => 'publish',
								'show_date'    => '',
								'sort_column'  => 'menu_order, post_title',
								'title_li'     => '', 
								'walker'       => ''
							);
						?>
						<ul><?php wp_list_pages( $args ); ?></ul>
					</div>

					<div class="sitemap">
						<h3><?php _e( 'Blog Post', 'homeland' ); ?></h3>
						<?php
							$args = array( 'post_type' => 'post' );
							$wp_query = new WP_Query( $args ); ?>
							<ul>
								<?php 
									while($wp_query->have_posts()) : 
										$wp_query->the_post();
										the_title( '<li><a href="' . get_permalink() . '">', '</a></li>' );
							    	endwhile; 
								?>
							</ul>

						<h3><?php _e( 'Archives', 'homeland' ); ?></h3>
						<?php
							$args = array(
								'type'            => 'monthly',
								'limit'           => '',
								'format'          => 'html', 
								'before'          => '',
								'after'           => '',
								'show_post_count' => false,
								'echo'            => 1,
								'order'           => 'DESC'
							);
						?>
						<ul><?php wp_get_archives( $args ); ?></ul>

						<h3><?php _e( 'Blog Categories', 'homeland' ); ?></h3>
						<?php
							$args = array(
								'show_option_all'    => '',
								'orderby'            => 'name',
								'order'              => 'ASC',
								'style'              => 'list',
								'show_count'         => 0,
								'hide_empty'         => 1,
								'use_desc_for_title' => 1,
								'child_of'           => 0,
								'feed'               => '',
								'feed_type'          => '',
								'feed_image'         => '',
								'exclude'            => '',
								'exclude_tree'       => '',
								'include'            => '',
								'hierarchical'       => 1,
								'title_li'           => '',
								'show_option_none'   => __('No categories', 'homeland'),
								'number'             => null,
								'echo'               => 1,
								'depth'              => 0,
								'current_category'   => 0,
								'pad_counts'         => 0,
								'taxonomy'           => 'category',
								'walker'             => null
							);
						?>
						<ul><?php wp_list_categories( $args ); ?></ul>
					</div>

					<div class="sitemap">
						<h3><?php _e( 'Property Type', 'homeland' ); ?></h3>
						<?php
							$args = array(
								'show_option_all'    => '',
								'orderby'            => 'name',
								'order'              => 'ASC',
								'style'              => 'list',
								'show_count'         => 0,
								'hide_empty'         => 1,
								'use_desc_for_title' => 1,
								'child_of'           => 0,
								'feed'               => '',
								'feed_type'          => '',
								'feed_image'         => '',
								'exclude'            => '',
								'exclude_tree'       => '',
								'include'            => '',
								'hierarchical'       => 1,
								'title_li'           => '',
								'show_option_none'   => __('No property types', 'homeland'),
								'number'             => null,
								'echo'               => 1,
								'depth'              => 0,
								'current_category'   => 0,
								'pad_counts'         => 0,
								'taxonomy'           => 'homeland_property_type',
								'walker'             => null
								);
						?>
						<ul><?php wp_list_categories( $args ); ?></ul>

						<h3><?php _e( 'Property Status', 'homeland' ); ?></h3>
						<?php
							$args = array(
								'show_option_all'    => '',
								'orderby'            => 'name',
								'order'              => 'ASC',
								'style'              => 'list',
								'show_count'         => 0,
								'hide_empty'         => 1,
								'use_desc_for_title' => 1,
								'child_of'           => 0,
								'feed'               => '',
								'feed_type'          => '',
								'feed_image'         => '',
								'exclude'            => '',
								'exclude_tree'       => '',
								'include'            => '',
								'hierarchical'       => 1,
								'title_li'           => '',
								'show_option_none'   => __('No property status', 'homeland'),
								'number'             => null,
								'echo'               => 1,
								'depth'              => 0,
								'current_category'   => 0,
								'pad_counts'         => 0,
								'taxonomy'           => 'homeland_property_status',
								'walker'             => null
							);
						?>
						<ul><?php wp_list_categories( $args ); ?></ul>

						<h3><?php _e( 'Property Location', 'homeland' ); ?></h3>
						<?php
							$args = array(
								'show_option_all'    => '',
								'orderby'            => 'name',
								'order'              => 'ASC',
								'style'              => 'list',
								'show_count'         => 0,
								'hide_empty'         => 1,
								'use_desc_for_title' => 1,
								'child_of'           => 0,
								'feed'               => '',
								'feed_type'          => '',
								'feed_image'         => '',
								'exclude'            => '',
								'exclude_tree'       => '',
								'include'            => '',
								'hierarchical'       => 1,
								'title_li'           => '',
								'show_option_none'   => __('No property location', 'homeland'),
								'number'             => null,
								'echo'               => 1,
								'depth'              => 0,
								'current_category'   => 0,
								'pad_counts'         => 0,
								'taxonomy'           => 'homeland_property_location',
								'walker'             => null
							);
						?>
						<ul><?php wp_list_categories( $args ); ?></ul>
					</div>

					<div class="sitemap">
						<h3><?php _e( 'Properties', 'homeland' ); ?></h3>
						<?php
							$args = array( 'post_type' => 'homeland_properties' );
							$wp_query = new WP_Query( $args ); ?>
							<ul>
								<?php 
									while ( $wp_query->have_posts() ) : 
										$wp_query->the_post();
										the_title( '<li><a href="' . get_permalink() . '">', '</a></li>' );			
							    	endwhile; 
								?>
							</ul>
					</div>

					<div class="sitemap last">
						<?php
							if(empty($homeland_all_agents)) : ?>
								<h3><?php _e( 'Agents', 'homeland' ); ?></h3>
								<?php
									$args = array(
										'orderby' => 'post_count', 
										'order' => 'DESC', 
										'role' => 'contributor' 
									);
							    	$homeland_agents = get_users($args); 
							   ?>
						    	<ul>
						    		<?php
								    	foreach ($homeland_agents as $homeland_user) :
									    	global $wpdb;
												$homeland_post_author = $homeland_user->ID;
												$homeland_count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts WHERE post_author = $homeland_post_author AND post_type IN ('homeland_properties') and post_status = 'publish'" ); ?>
												<li>
													<a href="<?php echo esc_url( get_author_posts_url( $homeland_user->ID ) ); ?>">
														<?php echo $homeland_user->display_name; ?>
													</a>
												</li><?php
											endforeach;	
										?>
						    	</ul><?php
							endif;
						?>
						
					  <h3><?php _e( 'Services', 'homeland' ); ?></h3>
						<?php
							$args = array( 'post_type' => 'homeland_services' );
							$wp_query = new WP_Query( $args ); ?>
							<ul>
								<?php 
									while ( $wp_query->have_posts() ) : 
										$wp_query->the_post();
										the_title( '<li><a href="' . get_permalink() . '">', '</a></li>' );
							    	endwhile; 
								?>
							</ul>
					</div>
				</div>					
			</div>
		</div>
	</section>

<?php get_footer(); ?>