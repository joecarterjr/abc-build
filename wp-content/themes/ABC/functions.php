<?php
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

if ( ! function_exists( 'abc_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function abc_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	//set_post_thumbnail_size( 100%, 100%, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'abc' ),
		'social'  => __( 'Social Links Menu', 'abc' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	}
endif; // abc_setup
add_action( 'after_setup_theme', 'abc_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function abc_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Social List', 'abc' ),
		'id'            => 'social-list',
		'description'   => __( 'Add Social Buttons', 'abc' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	
	register_sidebar( array(
		'name'          => __( 'Home Page Twitter', 'abc' ),
		'id'            => 'home-tweets',
		'description'   => __( 'Tweets for the homepage', 'abc' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
		register_sidebar( array(
		'name'          => __( 'Sidebar', 'abc' ),
		'id'            => 'sidebar1',
		'description'   => __( 'Sidebar on Subpages', 'abc' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Left Footer Area', 'abc' ),
		'id'            => 'footer1',
		'description'   => __( 'Left Side of the Footerbar', 'abc' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Right Footer Area', 'abc' ),
		'id'            => 'footer2',
		'description'   => __( 'Right side of the Footerbar', 'abc' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => __( 'Sidebar2', 'abc' ),
		'id'            => 'sidebar2',
		'description'   => __( 'About Page Sidebar', 'abc' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'abc_widgets_init' );





/**
 * Display descriptions in main navigation.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function abc_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}








function abc_get_projects($currentpageID){

	$args = array(
		'sort_order' => 'DESC',
		'sort_column' => 'post_title',
		'child_of' => 2,
	//	'number' => '10',
		'post_type' => 'page',
		'post_status' => 'publish'
	); 
	$count ="1";
	$pages = get_pages($args); 
	
	
//	print $currentpageID;
		 foreach ( $pages as $page ) {
		 
		
		 
			 				
//			print "<div style='width:100%; float:left;'><hr> Count: ".$count ." <br /> Current ID : ".$currentpageID ."<br> Page Name: ".$page->post_title ."<br> Page ID: ".$page->ID ."</div>"; 
			
			//print_r($page);
			 $paginationPages[$count] = array(
				'id'=>$page->ID,
				'text'=>$page->post_title,
				'image'=> get_the_post_thumbnail( $page->ID, $size, $attr ),
				'link' => get_page_link( $page->ID )
			
			
			
			);
			
			if (!empty($getNext)){
				 $pagination['next']=$paginationPages[$count];
				 $getNext=false;
				 //print "Next";

			 }
			 if($currentpageID == $page->ID){
			 	$previousCount = $count-1;
				 $pagination['previous']=$paginationPages[$previousCount];
				 $getNext =true;
//print "<div style='width:100%; float:left;'><pre>".$paginationPages[$previousCount]."</pre></div>"; 			
 }
			
			
			$count = $count+1;
			
			
			//print $page->ID;
	}
	
	if(empty($pagination['previous'])){
			$pagination['previous']=$paginationPages[count($paginationPages)];
				
	}
	if(empty($pagination['next'])){
			$pagination['next']=$paginationPages[1];
				
	}
//print_r($paginationPages);
	?>
	
	<div class='projectPagination'>
		<div class="previousProject">
			<div class="projectName">
				<a href="<?php echo $pagination['previous']['link']; ?>">  <<  <?php echo $pagination['previous']['text'];?></a>
			</div>
			<div class="projectImage">
				<?php echo $pagination['previous']['image']; ?>
			</div>
				
		</div>
		<div class="nextProject">
			<div class="projectName2">
				<a href="<?php echo $pagination['next']['link']; ?>">  <?php echo  $pagination['next']['text']." >> ";?></a>
			</div>
			<div class="projectImage">
				<?php echo $pagination['next']['image'];  ?>
			</div>
		</div>
	</div>
		<?php
		
		//print "Next Project".$currentID . " -- ". next_post_link(); 	
	
}

?>
