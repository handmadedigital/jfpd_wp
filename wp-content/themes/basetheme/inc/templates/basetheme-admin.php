<h1>Theme Options</h1>
<p>Custom Theme Options</p>
<?php settings_errors(); ?>
<form class="custom-thme-options" action="options.php" method="post">
  <?php settings_fields( 'basetheme-settings-group' ); ?>
  <?php do_settings_sections('basetheme-options') ?>

  <?php submit_button(); ?>
</form>
