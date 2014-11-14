<?php  
	function css(){
		wp_enqueue_style('style',get_stylesheet_uri());
	}
	add_action('wp_enqueue_scripts','css');
	
	// nav Menus
	register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __('Footer Menu'),
	));
	
	// get_top_ancestor_id
	function get_top_ancestor_id(){
		
		global $post;
		
		if($post->post_parent){
			$ancestor=array_reverse(get_post_ancestors($post->ID));
			return $ancestor[0];
		}
		return $post->ID;
	};
	
	function amitSetup(){
		//add featured image support
		add_theme_support('post-thumbnails');
		add_image_size('small_thumb',180,120,true);
		add_image_size('banner-image',920,210,array('left','top'));
		
		
	};
	add_action('after_setup_theme','amitSetup');
?>