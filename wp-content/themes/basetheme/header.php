<!doctype html>
<html>
<?php
  $logo = esc_attr( get_option( 'light_logo'));
?>
<head>
  <meta charset="utf-8" />
  <title><?php bloginfo('title') ?></title>

  <!-- Style Sheets-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
  <link rel="stylesheet" href="http://localhost/jfpd_wp/wp-content/themes/basetheme/css/responsive-nav.css" />
  <link rel="stylesheet" href="http://localhost/jfpd_wp/wp-content/themes/basetheme/css/normalize.css" />
  <link rel="stylesheet" href="http://localhost/jfpd_wp/wp-content/themes/basetheme/css/grid.css" />
  <link rel="stylesheet" href="http://localhost/jfpd_wp/wp-content/themes/basetheme/css/sections-styles.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"> </script>

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
