<!DOCTYPE >
<html dir="rtl" <?php language_attributes(); ?>>	

<head>
	<meta charset="<?php bloginfo('charset'); ?> " >
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="conteiner">	
<!--site-header -->
<header class="site-header">
	
	<!-- header sherce -->
	<div class="hd-search">
		<?php get_search_form(); ?>
	</div>
	
	<h1><a href="<?php echo home_url(); ?>"><img src="http://localhost/wordpress/wp-content/uploads/2014/11/logo_temp.png" /></a></h1>
	<h5><? //php bloginfo('description'); ?></h5>
	
	<?php if(is_page(9)){ ?>
		amit amit amit aimt amit
	<?php } ?>
	
	<nav class="site_nav">
		
		<?php
		$args=array(
			'theme_location' => 'primary'
		);
		
		?>
		<div class="manu">
		<?php wp_nav_menu($args); ?>
	</div></nav>
</header>
