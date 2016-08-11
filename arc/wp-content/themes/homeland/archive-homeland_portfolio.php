<?php 
	get_header(); 

	$homeland_num_portfolio = esc_attr( get_option('homeland_num_portfolio') );
	$homeland_page_nav = esc_attr( get_option('homeland_pnav') );
	$homeland_portfolio_order = esc_attr( get_option('homeland_portfolio_order') );
	$homeland_portfolio_orderby = esc_attr( get_option('homeland_portfolio_orderby') );
	$homeland_portfolio_tax_layout = esc_attr( get_option('homeland_portfolio_tax_layout') );
	$homeland_hide_portfolio_archive_advance_search = esc_attr( get_option('homeland_hide_portfolio_archive_advance_search') );

	// Taxonomy Dynamic Classes
	if($homeland_portfolio_tax_layout == "Right Sidebar") :
		$homeland_portfolio_main_class = "left-container";
		$homeland_portfolio_sidebar_class = "sidebar";
		$homeland_portfolio_inside_class = "property-list property-four-cols property-grid-sidebar clear";
	elseif($homeland_portfolio_tax_layout == "Left Sidebar") :
		$homeland_portfolio_main_class = "left-container right";
		$homeland_portfolio_sidebar_class = "sidebar left";
		$homeland_portfolio_inside_class = "property-list property-four-cols property-grid-sidebar clear";
	else :
		$homeland_portfolio_main_class = "theme-fullwidth";
		$homeland_portfolio_inside_class = "property-three-cols";
	endif;

	if(empty($homeland_hide_portfolio_archive_advance_search)) : homeland_advance_search(); endif;

	$args_wp = array( 
		'post_type' => 'homeland_portfolio', 
		'orderby' => $homeland_portfolio_orderby, 
		'order' => $homeland_portfolio_order, 
		'posts_per_page' => $homeland_num_portfolio, 
		'paged' => $paged
	);
	$wp_query = new WP_Query( $args_wp );
?>

	<!-- Archive Portfolio -->
	<section class="theme-pages">
		<div class="inside clear">
			<div class="<?php echo $homeland_portfolio_main_class; ?>">
				<?php homeland_get_portfolio_category(); ?>
				
				<div class="<?php echo $homeland_portfolio_inside_class; ?>">
					<?php if ($wp_query->have_posts()) : ?>
						<div class="grid cs-style-3 masonry">	
							<ul class="clear">
								<?php
									if($homeland_portfolio_tax_layout == "Right Sidebar" || $homeland_portfolio_tax_layout == "Left Sidebar") :
										for($homeland_i = 1; $wp_query->have_posts(); $homeland_i++) {
											$wp_query->the_post();			
											$homeland_columns = 3;	
											$homeland_class = 'property-cols masonry-item ';
											$homeland_class .= ($homeland_i % $homeland_columns == 0) ? 'last' : '';

											get_template_part( 'loop', 'portfolio-sidebar' );
										}
									else :
										for($homeland_i = 1; $wp_query->have_posts(); $homeland_i++) {
											$wp_query->the_post();			
											$homeland_columns = 3;	
											$homeland_class = 'portfolio-cols masonry-item ';
											$homeland_class .= ($homeland_i % $homeland_columns == 0) ? 'last' : '';

											get_template_part( 'loop', 'portfolio' );
										}
									endif;
								?>
							</ul>
						</div>
					<?php	endif; ?>	
				</div>
				<?php 
					if($homeland_page_nav =="Next Previous Link") : 
						homeland_next_previous(); 
					else : homeland_pagination();  
					endif; 
				?>
			</div>

			<?php if($homeland_portfolio_tax_layout == "Right Sidebar" || $homeland_portfolio_tax_layout == "Left Sidebar") : ?>
				<div class="<?php echo $homeland_portfolio_sidebar_class; ?>"><?php get_sidebar(); ?></div>
			<?php endif; ?>
		</div>
	</section>

<?php get_footer(); ?>