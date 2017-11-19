<?php get_header(); ?>
	<div class="content">
<?php
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
 <!--   <div class="catName">
				<a href="<?php print get_category_link( $category->term_id ); ?>">  <?php print $category->name ; ?></a>
			</div> -->
			<div class="catImage">
				<a href="<?php print get_category_link( $category->term_id ); ?>"> <img src="/wp-content/category-images/<?php echo $category->term_id ?>.jpg"  alt="<?php echo $category->name; ?>"></a>			</div>
			</div>
<?php
	
	}


	 $args = array(
	'sort_order' => 'RANDOM',
	'sort_column' => 'post_title',
	'child_of' => 2,
	'number' => '',
	'post_type' => 'page',
	'post_status' => 'publish'
); 
$pages = get_pages($args); 
 $count =1; 
 
 
// print "Category Stuff</div>"; 
 foreach ( $pages as $page ) {
	 
	 
	
	
	 $attr = array(
	'title'   => $page->post_title,
);

#print_r($page);
if ($count ==5){
 
 if ( is_active_sidebar( 'home-tweets' ) ) : ?>
			<?php endif;  
 
 }?>
 

  <div class="work">
<a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo get_the_post_thumbnail( $page->ID, $size, $attr );  ?></a>
  </div>
  
 
  
  <?php
 $count = $count +1;
  }
?>  
  
  </div>
	</div>
<?php get_footer(); ?>



 