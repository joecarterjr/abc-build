<!-- main content start -->
<div class="mainwrap blog <?php if(is_front_page()) echo 'home' ?> <?php if(!ragnar_globals('use_fullwidth')) echo 'sidebar' ?> grid">
	<div class="main clearfix">		
		<div class="content blog">
			<div id="pmc-tabs">
				<div class="pmc-tabs">
					<div id="tabs-1" >
					<?php  get_template_part('category_grid_latest','latest-post'); ?>
					</div>
				</div>
			</div>		
			<div class="infinity-more"><?php esc_html_e('Load more posts','ragnar-lite'); ?></div>
			<div class="infinity-more nomore"><?php esc_html_e('No more posts to load!','ragnar-lite'); ?></div>
				<div class="navi-grid">
	<?php
		get_template_part('includes/wp-pagenavi','navigation');
		if(function_exists('ragnar_wp_pagenavi')) { ragnar_wp_pagenavi(); }
	?>
	</div>
		</div>
		<!-- sidebar -->
		<?php if(!ragnar_globals('use_fullwidth')) { ?>
			<?php if(is_active_sidebar( 'ragnar_sidebar')) { ?>
				<div class="sidebar">	
					<?php dynamic_sidebar( 'ragnar_sidebar' ); ?>
				</div>
			<?php } ?>
		<?php } ?>
	</div>
</div>											
