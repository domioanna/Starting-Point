<?php

// ================================================================================
// Initial
// ================================================================================
 
// returns WordPress subdirectory if applicable
  function wp_base_dir() 
  {
    preg_match('!(https?://[^/|"]+)([^"]+)?!', site_url(), $matches);
  
    return (count($matches) === 3)  ? end($matches) : "";
  }


// Define helper constants
  $get_theme_name = explode('/themes/', get_template_directory());


// define constants
  define('WP_BASE',                   wp_base_dir());
  define('THEME_NAME',                next($get_theme_name));
  define('RELATIVE_PLUGIN_PATH',      str_replace(site_url() . '/', '', plugins_url()));
  define('FULL_RELATIVE_PLUGIN_PATH', WP_BASE . '/' . RELATIVE_PLUGIN_PATH);
  define('RELATIVE_CONTENT_PATH',     str_replace(site_url() . '/', '', content_url()));
  define('THEME_PATH',                RELATIVE_CONTENT_PATH . '/themes/' . THEME_NAME);

  
// initial setup
  function startingpoint_setup() 
  {
    // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
      register_nav_menus(array(
        'primary_navigation' => __('Primary Navigation', 'startingpoint'),
        ));

    // Add post thumbnails
      add_theme_support('post-thumbnails');      
  }

//
  add_action('after_setup_theme', 'startingpoint_setup');