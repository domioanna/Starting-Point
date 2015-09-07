<?php
  /*
  Template name: Blog
  */
?>

<?php  get_template_part('partials/head'); ?>

<?php  get_template_part('partials/header'); ?>

<?php  get_template_part('partials/intro'); ?>

<section id="content">
	<div class="container">
<?php  get_template_part('partials/content', 'blog'); ?>
	</div>
</section>

<?php  get_template_part('partials/footer'); ?>