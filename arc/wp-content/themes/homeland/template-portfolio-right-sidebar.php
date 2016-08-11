<?php
/*
	Template Name: Portfolio - Right Sidebar
*/
?>

<?php 
	get_header(); 

	$homeland_advance_search = get_post_meta( $post->ID, 'homeland_advance_search', true );
	$homeland_num_portfolio = esc_attr( get_option('homeland_num_portfolio') );
	$homeland_page_nav = esc_attr( get_option('homeland_pnav') );
	$homeland_portfolio_order = esc_attr( get_option('homeland_portfolio_order') );
	$homeland_portfolio_orderby = esc_attr( get_option('homeland_portfolio_orderby') );

	if(empty($homeland_advance_search)) : homeland_advance_search(); endif;
?>

	<!-- Portfolio List -->
	<section class="theme-pages">
		<div class="inside clear">
			<div class="left-container">
				<?php homeland_get_portfolio_category(); ?>
				<div class="property-list property-four-cols property-grid-sidebar clear">
					<?php
						homeland_get_home_pagination(); // modify in functions.php

						// displays page contents
						if (have_posts()) : 
							while (have_posts()) : the_post(); 
								the_content(); 								
							endwhile; 
						endif;
						
						$args_wp = array( 
							'post_type' => 'homeland_portfolio', 
							'orderby' => $homeland_portfolio_orderby, 
							'order' => $homeland_portfolio_order, 
							'posts_per_page' => $homeland_num_portfolio, 
							'paged' => $paged
						);
						$wp_query = new WP_Query( $args_wp );

						if ($wp_query->have_posts()) : ?>

							<!-- Portfolio List -->
							<div class="grid cs-style-3 masonry">	
								<ul class="clear">
									<?php
										for($homeland_i = 1; $wp_query->have_posts(); $homeland_i++) {
											$wp_query->the_post();			
											$homeland_columns = 3;	
											$homeland_class = 'property-cols masonry-item ';
											$homeland_class .= ($homeland_i % $homeland_columns == 0) ? 'last' : '';
											get_template_part( 'loop', 'portfolio-sidebar' );
										}
									?>
								</ul>
							</div><?php	
						endif;
					?>	
				</div>
				<?php 
					if( $homeland_page_nav == "Next Previous Link" ) : 
						homeland_next_previous();  // modify in functions.php
					else : homeland_pagination(); // modify in functions.php
					endif; 
				?>
			</div>

			<!-- Sidebar -->
			<div class="sidebar"><?php get_sidebar(); ?></div>
		</div>
	</section>

<?php get_footer(); ?>