<section class="image-square right">

	<div class="col-md-6 image">
		<div class="background-image-holder fadeIn">
			<?php the_post_thumbnail('full'); ?>
		</div>
	</div>
	
	<div class="col-md-6 col-md-offset-1 content">
		<?php 
			the_title('<h3>', '</h3>'); 
			the_excerpt();
		?>
		<a href="<?php the_permalink(); ?>" class="btn btn--primary"><?php esc_html_e('Read More', 'foundry'); ?></a>
	</div>

</section>