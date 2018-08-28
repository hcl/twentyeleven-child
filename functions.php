<?php
	if (!function_exists('twentyeleven_content_nav')):
		function twentyeleven_content_nav( $html_id ) {
			global $wp_query;
			if ( $wp_query->max_num_pages > 1 ) : ?>
				<nav id="<?php echo esc_attr( $html_id ); ?>">
					<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
				</nav><!-- #nav-above -->
			<?php endif;
		}
	endif;

	function text_autospace_js () {
		wp_register_script('text-autospace', get_stylesheet_directory_uri().'/js/text-autospace.min.js');
		wp_enqueue_script('text-autospace');
	}
	add_action('wp_enqueue_scripts','text_autospace_js');