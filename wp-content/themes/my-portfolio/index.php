<?php

get_header(); 


while(have_posts()) {
	the_post(); ?>

	<article class="blog-post">
		
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p><?php the_content(); ?></p>


	</article>


	

<?php }





get_footer();


 ?>

