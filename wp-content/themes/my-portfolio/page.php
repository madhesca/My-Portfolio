<?php
get_header(); 


while(have_posts()) {
	the_post(); ?>

	<article class="post page">
		
		<h2><?php the_title(); ?></h2>
		<p><?php the_content(); ?></p>


	</article>


	
<div class="menu-icon">
					<i class="fa fa-bars fa 2-2x"></i>
				</div>
<?php }





get_footer();

 ?>