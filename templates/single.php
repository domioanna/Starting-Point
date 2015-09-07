<?php
  /*
  Template name: Default Template
  */
?>

<?php  get_template_part('partials/head');  ?>

<?php  get_template_part('partials/header'); ?>

<section id="content">
	<div class="container">
<?php  get_template_part('partials/content', 'post'); ?>
	</div>
</section>

<?php  get_template_part('partials/footer'); ?>