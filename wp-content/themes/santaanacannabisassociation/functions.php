<?php

require get_template_directory() . '/inc/function-admin.php';
require get_template_directory() . '/inc/enqueue.php';

register_sidebar(array(
  'name' => 'Footer Section 1',
  'id' => __('footer-section-1')
));

register_sidebar(array(
  'name' => 'Footer Section 2',
  'id' => __('footer-section-2')
));

register_sidebar(array(
  'name' => 'Footer Section 3',
  'id' => __('footer-section-3')
));

register_sidebar(array(
  'name' => 'Footer Section 4',
  'id' => __('footer-section-4')
));

register_sidebar(array(
  'name' => '2nd Right Sidebar'
));

register_sidebar(array(
  'name' => 'Sidebar'
));
