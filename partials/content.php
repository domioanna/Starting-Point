<div class="row">
<div class="col-md-12">
<?php while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>
  
<?php endwhile; // end of the loop. ?>   
</div>
</div>