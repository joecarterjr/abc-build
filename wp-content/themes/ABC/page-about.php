<?php

setup_postdata($post);
get_header(); ?>
	<div class="content">

	<?php the_content(); ?>
	<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>
			<div id="sidebar" class="" role="complementary">
				<?php dynamic_sidebar( 'sidebar2' ); ?>
			</div>
		<?php endif; ?>
	</div>
	<?php get_footer(); ?>
