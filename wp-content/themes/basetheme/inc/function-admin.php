<?php

/*
  ===============
    ADMIN PAGE
  ===============
*/

function dreamer_add_admin_page() {

  /* Generate Theme Options Page*/
  add_menu_page( 'Dreamer Theme Options', 'Theme Options', 'manage_options', 'dreamer-options', 'dreamer_theme_create_page', 'dashicons-admin-customizer', 110 );

}

  add_action( 'admin_menu', 'dreamer_add_admin_page' );

//Activate custom settings
	add_action( 'admin_init', 'dreamer_custom_settings' );

function dreamer_custom_settings() {
  register_setting('dreamer-settings-group', 'light_logo' );
  register_setting('dreamer-settings-group', 'first_name' );
  register_setting('dreamer-settings-group', 'last_name' );
  register_setting('dreamer-settings-group', 'twitter_handle' );
  register_setting('dreamer-settings-group', 'facebook_handle' );
  register_setting('dreamer-settings-group', 'instagram_handle' );

  add_settings_section( 'dreamer-header-options', 'Header Options', 'dreamer_header_options', 'dreamer-options');

  add_settings_field('header-light-logo', 'Light Logo', 'dreamer_header_light_logo', 'dreamer-options', 'dreamer-header-options' );
  add_settings_field('header-name', 'Full Name', 'dreamer_header_name', 'dreamer-options', 'dreamer-header-options' );
  add_settings_field('header-twitter', 'Twitter Handle', 'dreamer_header_twitter', 'dreamer-options', 'dreamer-header-options' );
  add_settings_field('header-facebook', 'Facebook Handle', 'dreamer_header_facebook', 'dreamer-options', 'dreamer-header-options' );
  add_settings_field('header-instagram', 'Instagram Handle', 'dreamer_header_instagram', 'dreamer-options', 'dreamer-header-options' );

}

function dreamer_header_options() {
  echo 'Customize you settings below';
}

function dreamer_header_light_logo() {
  $lightLogo = esc_attr( get_option('light_logo') );
  echo '<input type="button" class="button button-secondary" value="Upload Light Logo" id="uploadLightLogo" /> <br/> <img id="lightLogoPreview" src="'.$lightLogo.'"/><input id="lightLogoValue" type="hidden" name="light_logo" value="' .$lightLogo. '"/>' ;
}

function dreamer_header_name() {
  $firstName = esc_attr( get_option('first_name') );
  $lastName = esc_attr( get_option('last_name') );
  echo '<input type="text" name="first_name" value="' .$firstName. '" placeholder="First Name"/>
  <input type="text" name="last_name" value="' .$lastName. '" placeholder="Last Name"/>';

}

function dreamer_header_twitter() {
  $twitter = esc_attr( get_option('twitter_handle') );
  echo '<input type="text" name="twitter_handle" value="' .$twitter. '" placeholder="Twitter Handle"/>';
}

function dreamer_header_facebook() {
  $facebook = esc_attr( get_option('facebook_handle') );
  echo '<input type="text" name="facebook_handle" value="' .$facebook. '" placeholder="Facebook Handle"/>';
}

function dreamer_header_instagram() {
  $instagram = esc_attr( get_option('instagram_handle') );
  echo '<input type="text" name="instagram_handle" value="' .$instagram. '" placeholder="Instagram Handle"/>';
}

function dreamer_theme_create_page() {
  require_once( get_template_directory() . '/inc/templates/dreamer-admin.php');
}

function dreamer_theme_settings_page() {

}
