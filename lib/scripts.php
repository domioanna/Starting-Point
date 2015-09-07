<?php

// ================================================================================
// Scripts & Styles
// ================================================================================

function js_footer_loader() 
{
  // wp_deregister_script('jquery');
  wp_enqueue_script('bootstrap.min.js', get_template_directory_uri() . '/assets/js/vendor/bootstrap.js', true,'1.0' . rand(100000,999999), true );
  wp_enqueue_script('plugins.js', get_template_directory_uri() . '/assets/js/plugins.js', true,'1.0' . rand(100000,999999) , true );
  wp_enqueue_script('main.js',   get_template_directory_uri() . '/assets/js/main.js', true,'1.0' . rand(100000,999999), true );
}

add_action('wp_enqueue_scripts', 'js_footer_loader');

function less_script()
{
  echo "\n  <!-- Le less css --> \n";
  css_parse( 'minified.css.php');
}

add_action('wp_head', 'less_script');

function css_parse( $file_name ) 
{
  echo "    <link rel='stylesheet' href='" . get_template_directory_uri() . "/assets/css/" . $file_name . "' type='text/css' media='all'>\n";
}
