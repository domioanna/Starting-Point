<section id="intro">
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
 		<h1 class="page-title">
    		<?php the_title(); ?>
		</h1>

		<p class="lead">
			Intro
  		</p>
  		
  		<?php endwhile; // end of the loop. ?>   
	</div>
</section>