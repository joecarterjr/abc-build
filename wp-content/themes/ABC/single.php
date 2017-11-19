<?php get_header(); ?>
	<div class="content">
<?php


				while ( have_posts() ) : the_post();
				
				?>
<div class="blog-post">
	<div class="blog-post-image"><?php echo get_the_post_thumbnail( $page->ID, 'medium', $attr );  ?></div>
	<h2><?php the_title(); ?></h1>
			<p cass="postedDate">Posted <?php the_time('m/d/Y') ?> by <?php the_author(); ?></p>

	<div class="blog-post-content"><?php the_content();?></div>



</div>
<?php 
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
  
  
	</div>
<?php get_footer(); ?>


