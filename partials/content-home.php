<?php while ( have_posts() ) : the_post(); ?>

<h2 class="page-title">
	<?php the_title(); ?>
</h2>
  
<?php the_content(); ?>

<?php endwhile; // end of the loop. ?>   
