<?php

/*
  =============================
     Admin Enqueue Functions
  =============================
*/

function dreamer_load_admin_scripts( $hook ) {
  if('toplevel_page_dreamer-options' != $hook ) {
    return;
  }
  wp_register_style( 'dreamer_admin', get_template_directory_uri() . '/css/dreamer.admin.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'dreamer_admin');

  wp_enqueue_media();

  wp_register_script( 'dreamer-admin-script', get_template_directory_uri() . '/js/dreamer.admin.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'dreamer-admin-script' );
}

add_action('admin_enqueue_scripts', 'dreamer_load_admin_scripts');
