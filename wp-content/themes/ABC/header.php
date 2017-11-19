<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
     <?php wp_enqueue_script("jquery"); ?>
	 <!-- Start of WP Head -->
	 
	 <?php wp_head(); ?>

<!-- End of WP Head -->


        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="/wp-content/themes/ABC/assets/stylesheets/style.css" type="text/css" />
        <script src="/wp-content/themes/ABC/assets/javascript/jquery.slicknav.min.js"></script>
        <script src="/wp-content/themes/ABC/assets/javascript/abc.js"></script>

        
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body <?php body_class(); ?>>
    <div id="headerClick"><a href="/">&nbsp;</a></div>
    	<div id="page" class="container">
	    	<div id="pageHeader">
	    	<div id="header-quote"><p class="quote"><span class="marks">“</span>Design is the fundamental soul of a man-made creation ...<span class="marks">”</span></p>
<p class="quoteName">—Steve Jobs</p></div>
	    	<div id="menu-primary"><a href="/"><img src="/wp-content/themes/ABC/assets/images/smallLogo.png" alt="Anthony Brown Creates Logo"></a><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></div>
		    	<!-- <?php if ( is_active_sidebar( 'social-list' ) ) : ?>
			<div id="menu-social" class="" role="complementary">
				<?php dynamic_sidebar( 'social-list' ); ?>
			</div> --> 
		<?php endif; ?>


	    	</div>