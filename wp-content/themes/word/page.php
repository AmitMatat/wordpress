	
<?php
	get_header();

	if(have_posts()):
	while(have_posts()):the_post();
?>
	<article class="post">
	
	
	<nav class="site_nav children_links clearfix">
	<?php
	if(get_top_ancestor_id()>=1){
		echo '<span class="parent_link"><a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a></span>';
	}
	?>
	
	<ul>
			<?php 
	$args=array(
		'child_of'=>get_top_ancestor_id(),
		'title_li'=>''
	);
	
	wp_list_pages($args); 
	


			?>
		</ul>
		</nav> 
	<h2><?php the_title(); ?></h2>	
	<?php the_content(); ?>
	</article>
<?php
	endwhile;
	else:
		echo '<p>No content</p>';
	endif;
	get_footer();
?>
