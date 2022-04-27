<?php
/*
==================
include scripts
==================
*/
function dafina_script_enqueue()
{
  //css

  wp_enqueue_style(
    "customstyle",
    get_template_directory_uri() . "/assets/css/source.css",
    [],
    "1.0.0",
    "all"
  );
  wp_enqueue_style(
    "tailwind",
    get_template_directory_uri() . "/assets/css/dist/output.css",
    [],
    "3.0.24",
    "all"
  );

  //js
  wp_enqueue_script(
    "customjs",
    get_template_directory_uri() . "/assets/js/dafina.js",
    [],
    "1.0.0",
    true
  );

  wp_enqueue_script("jquery");
}
add_action("wp_enqueue_scripts", "dafina_script_enqueue");

/*
==================
Activate menus
==================
*/
function dafina_theme_setup()
{
  add_theme_support("menus");
  register_nav_menu("primary", "Primary Header Navigation");
  register_nav_menu("secondary", "Footer Navigation");
}
add_action("init", "dafina_theme_setup");

/*
==================
Theme support functions
==================
*/
add_theme_support("custom-background");
add_theme_support("custom-header");
add_theme_support("post-thumbnails");
add_theme_support("post-formats", ["aside", "image", "video"]);

/*
==================
sidebar functions
==================
*/

function dafina_widget_setup()
{
  register_sidebar([
    "name" => "Sidebar",
    "id" => "sidebar-1",
    "class" => "custom",
    "description" => "Standard Sidebar",
    "before_title" => '<h2 class="widget-title subheading heading-size-3">',
    "after_title" => "</h2>",
    "before_widget" => '<div class="widget %2$s"><div class="widget-content">',
    "after_widget" => "</div></div>",
  ]);
}
add_action("widgets_init", "dafina_widget_setup");
