<?php
function import($file) {

		require_once(ABSPATH . 'wp-admin/includes/file.php');
		WP_Filesystem();
		global $wp_filesystem;
		$file_contents = $wp_filesystem->get_contents( $file );	
		$import_data = json_decode( $file_contents, true );
		$options_to_import = $import_data['options']['of_options_pmc'];
		$options_to_import_widget_text = $import_data['options']['widget_text'];
		$options_to_import_sb_instagram_settings = $import_data['options']['sb_instagram_settings'];			
		
		$option_value = maybe_unserialize( $options_to_import );
		$sb_instagram_settings =  maybe_unserialize( $options_to_import_sb_instagram_settings );	
		$option_value_widget_text = maybe_unserialize( $options_to_import_widget_text );
		
		delete_option( 'of_options_pmc' );
		add_option( 'of_options_pmc', $option_value, '', 'no' );

		delete_option( 'widget_text' );
		add_option( 'widget_text', $option_value_widget_text, '', 'no' );			

		delete_option( 'sb_instagram_settings' );
		add_option( 'sb_instagram_settings', $sb_instagram_settings, '', 'no' );
	
}




