<?php wp_footer(); ?>

<div id="menu-social-footer" class="" role="complementary">
				<?php dynamic_sidebar( 'social-list' ); ?>
			</div>
		
		
		
		<div id="footer-container"><?php if ( is_active_sidebar( 'footer1' ) ) : ?>
			<div id="footer1" class="" role="complementary">
				<?php dynamic_sidebar( 'footer1' ); ?>
			</div>
		<?php endif; ?>

<?php if ( is_active_sidebar( 'footer2' ) ) : ?>
			<div id="footer2" class="" role="complementary">
				<?php dynamic_sidebar( 'footer2' ); ?>
			</div>
		<?php endif; ?>
</div>
</div>

</body>
</html>