<?php
get_header(); 


while(have_posts()) {
	the_post(); ?>

	<article class="post page">
		
		<h2><?php the_title(); ?></h2>
		<p><?php the_content(); ?></p>


	</article>


	

<?php }





get_footer();

 ?>