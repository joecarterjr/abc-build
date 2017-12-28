	<?php 
	add_filter( 'shortcode_atts_gallery', 'ragnar_gallery_latest' );
	function ragnar_gallery_latest( $out )
	{
		remove_filter( current_filter(), __FUNCTION__ );
		$out['size'] = 'ragnar-news';
		return $out;
	}	
	$counter = 0;
	?>
	<?php if (have_posts()) : ?>
	
	<?php while (have_posts()) : the_post(); ?>
	<?php if(is_sticky(get_the_id())) { ?>
	<div class="ragnar_sticky">
	<?php } ?>
	<?php
	$counter  ++;
	$postmeta = get_post_custom(get_the_id()); 
	if( $counter % 2 == 0 ) {$last = 'last';} else {$last = '';}
	
	?>
		
	
	<?php
	if ( has_post_format( 'gallery' , get_the_id())) { 
	?>
	<div class="slider-category grid-category <?php echo esc_attr($last) ?>">
		
		<div class="blogpostcategory">			
			<a class="overdefultlink" href="<?php the_permalink() ?>">
			<div class="overdefult">
			</div>
			</a>

			<div class="blogimage">	
				<div class="loading"></div>		
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php esc_attr_e('Permanent Link to','ragnar-lite')?> <?php the_title_attribute(); ?>"><?php echo ragnar_getImage(get_the_id(), 'ragnar-postBlock'); ?></a>
			</div>
		<?php get_template_part('includes/boxes/loopBlogGrid','single'); ?>
		</div>
	</div>
	<?php } 
	if ( has_post_format( 'video' , get_the_id())) { ?>
	<div class="slider-category grid-category <?php echo esc_attr($last) ?>">
	
		<div class="blogpostcategory">			
			<?php
			
			if(!empty($postmeta["video_post_url"][0])) {
				echo wp_oembed_get(esc_url($postmeta["video_post_url"][0]));
			} ?>
			<?php get_template_part('includes/boxes/loopBlogGrid','single'); ?>
		</div>
		
	</div>
	<?php } 
	if ( has_post_format( 'link' , get_the_id())) {
		$counter--;continue;
	} 	
	if ( has_post_format( 'quote' , get_the_id())) {?>
	<div class="quote-category grid-category <?php echo esc_attr($last) ?>">
		<div class="blogpostcategory">				
			<?php get_template_part('includes/boxes/loopBlogQuote','single'); ?>								
		</div>
	</div>
	
	<?php 
	} 			
	?>
	<?php if ( has_post_format( 'audio' , get_the_id())) {
		$counter--;continue;
	}
	?>					
	
	
	<?php if ( !get_post_format() ) {?>

	<?php if(ragnar_getImage(get_the_id(), 'ragnar-postBlock') != '') { ?>
	<div class="blogpostcategory grid-category <?php echo esc_attr($last) ?>">					

			<a class="overdefultlink" href="<?php the_permalink() ?>">
			<div class="overdefult">
			</div>
			</a>

			<div class="blogimage">	
				<div class="loading"></div>		
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php esc_attr_e('Permanent Link to','ragnar-lite')?> <?php the_title_attribute(); ?>"><?php echo ragnar_getImage(get_the_id(), 'ragnar-postBlock'); ?></a>
			</div>
			<?php get_template_part('includes/boxes/loopBlogGrid','single'); ?>
	</div>
	<?php } else {$counter--;continue;}?>
	
	<?php } ?>		
	<?php if(is_sticky()) { ?>
		</div>
	<?php } ?>
	
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
				
	<?php endif; ?>

