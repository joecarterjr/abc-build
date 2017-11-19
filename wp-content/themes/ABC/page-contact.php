<?php
setup_postdata($post);

get_header(); ?>
	<div class="content">

	<?php the_content(); ?>
	</div>
	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
			<div id="sidebar" class="" role="complementary">
				<?php dynamic_sidebar( 'sidebar1' ); ?>
			</div>
		<?php endif; ?>
	<?php get_footer(); ?>
