<?php
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	require_once get_template_directory() . '/wp_bootstrap_pagination.php';
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'MyTema' ),
	) );
	add_theme_support( 'post-thumbnails' ); 
	function set_excerpt_length()
		{
			return 35;	
		}
	add_filter('excerpt_length','set_excerpt_length');	
	
	function wpb_init_widgets($id)
		{
			register_sidebar(array(
				'name'	=>'Sidebar',
				'id'	=>'sidebar',
				'before_widget' =>'<div class="p-3 list_sb">',
				'after_widget' =>'</div>',
				'before_title' =>'<h4><i class="fa fa-caret-right"></i> ',
				'after_title' =>'</h4>'
			));	
		}
	add_action('widgets_init','wpb_init_widgets');	
	function customize_wp_bootstrap_pagination($args) {    
			$args['previous_string'] = 'previous';
			$args['next_string'] = 'next';
			return $args;
		}
	add_filter('wp_bootstrap_pagination_defaults', 'customize_wp_bootstrap_pagination');
?>