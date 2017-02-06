<!doctype html>
<html>
<?php
  $logo = esc_attr( get_option( 'light_logo'));
?>
<head>
  <meta charset="utf-8" />
  <title><?php bloginfo('title') ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
  <script type="text/javascript" src="https://sacannabis.org/wp-content/themes/testtheme/js/particle.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js">

  </script>

  <?php wp_head() ?>
</head>
<nav>
  <div class="top-bar-wrapper">
    <div class="top-bar">
      <div class="top-bar-left">
          Meaningful Tagline Here
      </div>

      <div class="top-bar-right">
          A: 202 Park Avenue, New York  /  P: +1(323)777-4565
      </div>
    </div>

  </div>
  <div class="floating-header-wrapper">
    <div class="floating-header">
      <div class="header-left">
        <img class="header-logo" src="<?php print $logo ?>" alt="">
      </div>

      <div class="header-right">
        <?php wp_nav_menu();?>
      </div>
    </div>

  </div>
</nav>

<div id="container">
