<?php
  /*
  Template name: Sidebar Right
  */
?>

<?php  get_template_part('partials/head');  ?>

<?php  get_template_part('partials/header'); ?>

<div class="container">
  <div class="row">
    
    <div class="span9">
      <?php  get_template_part('partials/content', 'page'); ?>
    </div>

    <div class="span3">
      <?php  get_template_part('partials/sidebar', 'right'); ?>
    </div>

</div>

<?php  get_template_part('partials/footer'); ?>