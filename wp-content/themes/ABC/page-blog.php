<?php get_header(); ?>
	<div class="content">
	<?php $args = array(
	'posts_per_page'   => 5,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => '',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'post_status'      => 'publish',
	'suppress_filters' => true 
);
#$posts_array = get_posts( $args );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); 


//print_r($post);?>

<div class="blog-post">
	<div class="blog-post-image"><?php echo get_the_post_thumbnail( $page->ID );  ?></div>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<p cass="postedDate">Posted <?php the_time('m/d/Y') ?> by <?php the_author(); ?></p>
	<div class="blog-post-content"><?php the_content();?></div>



</div>
<?php endforeach; 
wp_reset_postdata();?>
  





  
	</div>
<?php get_footer(); ?>



 