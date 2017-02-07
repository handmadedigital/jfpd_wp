<?php

/*
  =============================
     Admin Enqueue Functions
  =============================
*/

function basetheme_load_admin_scripts( $hook ) {
  if('toplevel_page_basetheme-options' != $hook ) {
    return;
  }
  wp_register_style( 'basetheme_admin', get_template_directory_uri() . '/css/basetheme.admin.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'basetheme_admin');

  wp_enqueue_media();

  wp_register_script( 'basetheme-admin-script', get_template_directory_uri() . '/js/basetheme.admin.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'basetheme-admin-script' );
}

add_action('admin_enqueue_scripts', 'basetheme_load_admin_scripts');
