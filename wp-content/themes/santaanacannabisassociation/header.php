<!doctype html>
<html>
<?php
  $logo = esc_attr( get_option( 'light_logo'));
?>
<head>
  <meta charset="utf-8" />
  <title><?php bloginfo('title') ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
  <link rel="stylesheet" href="https://sacannabis.org/wp-content/themes/jfpdetails/css/responsive-nav.css" />

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"> </script>
  <script type="text/javascript" src="/wp-content/themes/jfpdetails/js/particle.js"></script>
  <script type="text/javascript" src="/wp-content/themes/jfpdetails/app.js"></script>

  <?php wp_head() ?>
</head>
<nav>
  <div class="floating-header-wrapper">
    <div class="floating-header">
      <div class="header-left">
        <img class="header-logo" src="<?php print $logo ?>" alt="">
      </div>

      <div class="header-right">
        <div id="desktop_menu">
          <?php wp_nav_menu();?>
        </div>

        <div id="mobile_menu" class="menu-section">
          <div class="menu-toggle">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
          </div>
          <nav id="mobile_nav">
        		<ul role="navigation" class="hidden">
        			<?php wp_nav_menu(array('items_wrap' => '%3$s')); ?>
        		</ul>
        	</nav>
        </div>
      </div>
    </div>

  </div>
</nav>

<div id="container">
