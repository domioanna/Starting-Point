<?php
  /*
  Template name: Sidebar Left
  */
?>

<?php  get_template_part('partials/head');  ?>

<?php  get_template_part('partials/header'); ?>

<div class="container">
  <div class="row">
    
    <div class="span3">
      <?php  get_template_part('partials/sidebar', 'left'); ?>
    </div>

    <div class="span9">
      <?php  get_template_part('partials/content', 'page'); ?>
    </div>

</div>

<?php  get_template_part('partials/footer'); ?>