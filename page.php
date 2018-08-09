<?php 
	get_header();
	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); 	
?>	
	<div class="faq_sec">
		<div class="container">
			<h2><?php the_title();?></h2>
			<p><?php the_content();?></p>
		</div>
	</div>
    <?php endwhile;
	endif;
	?>
	<?php get_footer();?>