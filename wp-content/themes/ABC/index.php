<?php get_header(); ?>
	<div class="content">
	<?php $args = array(
	'sort_order' => 'ASC',
	'sort_column' => 'menu_order',
	'child_of' => 2,
	'number' => '12',
	'post_type' => 'page',
	'post_status' => 'publish'
); 
$pages = get_pages($args); 
 $count =1;  
 foreach ( $pages as $page ) {
 $attr = array(
	'title'   => $page->post_title,
);
//print_r($page);
if ($count ==5){
 
 if ( is_active_sidebar( 'home-tweets' ) ) : ?>
			<div id="home-tweets" class="work-home" role="complementary">
				<?php dynamic_sidebar( 'home-tweets' ); ?>
			</div>
			<?php endif; 
 
 }?>
 
 
  <div class="work-home">
<a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo get_the_post_thumbnail( $page->ID, $size, $attr );  ?></a>
  </div>
  
 
  
  <?php
 $count = $count +1;
  }
?>  
  
  
	</div>
<?php get_footer(); ?>



 