<?php
/*
Template Name: Testimonials - Fullwidth
*/
?>

<?php 
	get_header();

	$homeland_advance_search = get_post_meta( $post->ID, 'homeland_advance_search', true );
	$homeland_page_nav = esc_attr( get_option('homeland_pnav') );

	if(empty($homeland_advance_search)) : homeland_advance_search(); endif;
?>

	<!-- Testimonials List -->
	<section class="theme-pages">
		<div class="inside clear">		
			<div class="theme-fullwidth testi-fullwidth">
				<?php
					if (have_posts()) : 
						while (have_posts()) : the_post(); 
							the_content(); 								
						endwhile; 
					endif;
				?>
				<div class="services-container clear">
					<?php
						$args = array( 
							'post_type' => 'homeland_testimonial', 
							'posts_per_page' => 10, 
							'paged' => $paged 
						);
						$wp_query = new WP_Query( $args );	

						if ($wp_query->have_posts()) : 
							for($homeland_i = 1; $wp_query->have_posts(); $homeland_i++) {
								$wp_query->the_post();	
								$homeland_position = esc_attr( get_post_meta($post->ID, 'homeland_position', true) );
								$homeland_columns = 2;	
								$homeland_class = 'testi-page-list clear ';
								$homeland_class .= ($homeland_i % $homeland_columns == 0) ? 'last' : '';
								?>
								<div id="post-<?php the_ID(); ?>" <?php sanitize_html_class(post_class($homeland_class)); ?>>
									<?php 
										if ( has_post_thumbnail() ) : the_post_thumbnail('homeland_theme_thumb'); 
										endif; 
									?>	
									<div class="testi-desc">
										<?php 
											the_title( '<h4>', '</h4>' ); 
											echo "<h5>" . $homeland_position . "</h5>";
											the_content();
										?>
									</div>
								</div><?php
							}
						endif;
					?>
				</div>
				<?php 
					if( $homeland_page_nav == "Next Previous Link" ) : 
						homeland_next_previous(); // modify in functions.php
					else : homeland_pagination(); // modify in functions.php 
					endif; 
				?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>