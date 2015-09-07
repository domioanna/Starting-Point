<?php while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php 

	// The Query
	$args = array(
		'cat' => 3
	);

	$the_query = new WP_Query( $args );

	if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<article class="row">
		<div class="col-md-3">
			<h2><?php the_title(); ?></h2>
			<p>
				Posted: <?php the_time('F j, Y'); ?>
			</p>
		</div>
		<div class="col-md-9">
			<?php 
			if ( has_post_thumbnail() ) 
			{
				echo "<p>";
				the_post_thumbnail('large',  array('class' => 'img-responsive img-thumbnail'));
				echo "</p>";
			}
			?>
  			<?php the_content(); ?>
		</div>
	</article>

	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

	<?php else:  ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
  
<?php endwhile; // end of the loop. ?>   
