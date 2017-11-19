<?php get_header(); ?>
	<div class="content">
	<div class="breadcrumb"><a href="/work">< All Work</a></div>
<?php

$category_id = get_cat_id( single_cat_title("",false) );
//print_r($cur_cat_id);
$catArgs = array(
  'orderby' => 'name',
  'order' => 'ASC',
  'exclude'                  => '4',
  'child_of'                 => '9',
  );
  echo "<div class='cats'>";
$categories = get_categories($catArgs);
  foreach($categories as $category) { 
	  if ($category_id == $category->term_id){$class="class ='activeCat'";}else{$class="";}
	  echo "<div class='catProject'>";
    ?>
  <!--  <div class="catName">
				<a href="<?php print get_category_link( $category->term_id ); ?>">  <?php print $category->name ; ?></a>
			</div> -->
			<div class="catImage">
				<a href="<?php print get_category_link( $category->term_id ); ?>"> <img src="/wp-content/category-images/<?php echo $category->term_id ?>.jpg"  alt="<?php echo $category->name; ?>"></a>			</div>
			</div>

<?php
	
	}
	
	?><?php
		
//print $category_id;	

 
$args = array ( 'category' => $category_id, 'posts_per_page' => 5);


//print_r($args);
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post);
 ?>
 <div class="work">
<a href="<?php echo get_page_link( $post->ID ); ?>"><?php echo get_the_post_thumbnail( $post->ID, $size, $attr );  ?></a>
  </div>
  
<?php endforeach; ?>
	</div>
	  </div>
	<?php get_footer(); ?>
