<?php
	global $homeland_thumbnail_size;
	$homeland_blog_excerpt = esc_attr( get_option('homeland_blog_excerpt') );
?>

<article id="post-<?php the_ID(); ?>" <?php sanitize_html_class( post_class('blist clear') ); ?>>
	<div class="blog-action">
		<ul class="clear">
			<li><i class="fa fa-calendar"></i><?php the_time(get_option('date_format')); ?></li>
			<li><i class="fa fa-user"></i><?php the_author_meta( 'display_name' ); ?></li>
			<li><i class="fa fa-folder-o"></i><?php the_category(', ') ?></li>
			<li><i class="fa fa-comment"></i><a href="<?php the_permalink(); ?>#comments"><?php comments_number( __( 'No Comments', 'homeland' ), __( 'One Comment', 'homeland' ), __( '% Comments', 'homeland' ) ); ?></a></li>				
		</ul>			
	</div>

	<div class="blog-list-desc">
		<div class="blog-text">
			<?php the_title( '<h4><a href="' . get_permalink() . '">', '</a></h4>' ); ?>
		</div>

		<div class="blog-mask">
			<?php 
				if ( post_password_required() ) :
					echo "<div class='password-protect-thumb password-blog'><i class='fa fa-lock fa-2x'></i></div>";
				else :
					// Video Post Format
					if ( ( function_exists( 'get_post_format' ) && 'video' == get_post_format( $post->ID ))) :
						get_template_part( 'includes/post-format/format', 'video' );
					
					// Gallery Post Format	
					elseif ( ( function_exists( 'get_post_format' ) && 'gallery' == get_post_format($post->ID ))) :
						$homeland_thumbnail_size = 'homeland_theme_large';
						get_template_part( 'includes/post-format/format', 'gallery' );

					// Audio Post Format
					elseif ( ( function_exists( 'get_post_format' ) && 'audio' == get_post_format( $post->ID ))) :
						get_template_part( 'includes/post-format/format', 'audio' );

					// Image Post Format
					else :
						$homeland_thumbnail_size = 'homeland_theme_large';
						get_template_part( 'includes/post-format/format', 'image' );
					endif;	
				endif;
			?>		
		</div>
		<?php if(!empty( $homeland_blog_excerpt )) : the_excerpt(); endif; ?>
	</div>	

</article>