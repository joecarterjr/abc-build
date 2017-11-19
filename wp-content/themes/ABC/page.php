<?php


get_header();


setup_postdata($post);


 ?>
	<div class="content">
	<?php the_content(); ?>
	<?php 
	// If this isn't on th sketchbook pag
	if ($post->ID != 7){
	
	abc_get_projects($post->ID); 
	}
	?>
	
	</div>
	<?php get_footer(); ?>
