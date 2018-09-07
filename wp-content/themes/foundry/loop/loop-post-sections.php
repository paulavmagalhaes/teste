<?php 
	global $wp_query;
	
	if ( have_posts() ) : while ( have_posts() ) : the_post();
		
		if( $wp_query->current_post % 2 == 0  ){
			get_template_part('loop/content-post', 'section-left');
		} else {
			get_template_part('loop/content-post', 'section-right');
		}
	
	endwhile;	
	else : 
		
		/**
		 * Display no posts message if none are found.
		 */
		get_template_part('loop/content','none');
		
	endif;
?>

<section>
	<div class="container">
		<?php
			/**
			 * Post pagination, use ebor_pagination() first and fall back to default
			 */
			echo function_exists('ebor_pagination') ? ebor_pagination() : posts_nav_link();
		?>
	</div>
</section>
