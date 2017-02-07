<?php

/*
  ===============
    ADMIN PAGE
  ===============
*/

function basetheme_add_admin_page() {

  /* Generate Theme Options Page*/
  add_menu_page( 'basetheme Theme Options', 'Theme Options', 'manage_options', 'basetheme-options', 'basetheme_theme_create_page', 'dashicons-admin-customizer', 110 );

}

  add_action( 'admin_menu', 'basetheme_add_admin_page' );

//Activate custom settings
	add_action( 'admin_init', 'basetheme_custom_settings' );

function basetheme_custom_settings() {
  register_setting('basetheme-settings-group', 'light_logo' );
  register_setting('basetheme-settings-group', 'first_name' );
  register_setting('basetheme-settings-group', 'last_name' );
  register_setting('basetheme-settings-group', 'twitter_handle' );
  register_setting('basetheme-settings-group', 'facebook_handle' );
  register_setting('basetheme-settings-group', 'instagram_handle' );

  add_settings_section( 'basetheme-header-options', 'Header Options', 'basetheme_header_options', 'basetheme-options');

  add_settings_field('header-light-logo', 'Light Logo', 'basetheme_header_light_logo', 'basetheme-options', 'basetheme-header-options' );
  add_settings_field('header-name', 'Full Name', 'basetheme_header_name', 'basetheme-options', 'basetheme-header-options' );
  add_settings_field('header-twitter', 'Twitter Handle', 'basetheme_header_twitter', 'basetheme-options', 'basetheme-header-options' );
  add_settings_field('header-facebook', 'Facebook Handle', 'basetheme_header_facebook', 'basetheme-options', 'basetheme-header-options' );
  add_settings_field('header-instagram', 'Instagram Handle', 'basetheme_header_instagram', 'basetheme-options', 'basetheme-header-options' );

}

function basetheme_header_options() {
  echo 'Customize you settings below';
}

function basetheme_header_light_logo() {
  $lightLogo = esc_attr( get_option('light_logo') );
  echo '<input type="button" class="button button-secondary" value="Upload Light Logo" id="uploadLightLogo" /> <br/> <img id="lightLogoPreview" src="'.$lightLogo.'"/><input id="lightLogoValue" type="hidden" name="light_logo" value="' .$lightLogo. '"/>' ;
}

function basetheme_header_name() {
  $firstName = esc_attr( get_option('first_name') );
  $lastName = esc_attr( get_option('last_name') );
  echo '<input type="text" name="first_name" value="' .$firstName. '" placeholder="First Name"/>
  <input type="text" name="last_name" value="' .$lastName. '" placeholder="Last Name"/>';

}

function basetheme_header_twitter() {
  $twitter = esc_attr( get_option('twitter_handle') );
  echo '<input type="text" name="twitter_handle" value="' .$twitter. '" placeholder="Twitter Handle"/>';
}

function basetheme_header_facebook() {
  $facebook = esc_attr( get_option('facebook_handle') );
  echo '<input type="text" name="facebook_handle" value="' .$facebook. '" placeholder="Facebook Handle"/>';
}

function basetheme_header_instagram() {
  $instagram = esc_attr( get_option('instagram_handle') );
  echo '<input type="text" name="instagram_handle" value="' .$instagram. '" placeholder="Instagram Handle"/>';
}

function basetheme_theme_create_page() {
  require_once( get_template_directory() . '/inc/templates/basetheme-admin.php');
}

function basetheme_theme_settings_page() {

}
