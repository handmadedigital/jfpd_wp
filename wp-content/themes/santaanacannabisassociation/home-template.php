<?php
/**
* Template Name: Home Page
*/
?>

<?php get_header()?>

<div id="particle-canvas" style="background: url('<?php the_field('banner_background'); ?>'); background-size: cover;">
    <div class="banner-content">
      <h1 style="color:#fff;"><?php the_field('banner_title'); ?></h1>
      <p style="color:#fff;"><?php the_field('banner_tagline'); ?></p>
      <button class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline vc_btn3-color-white">Book Now</button>
    </div>

    <div class="overlay"></div>
</div>

<div id="container">

  <?php while(have_posts()):the_post();?>

    <?php the_content();?>

  <?php endwhile;?>

</div>

<?php get_footer()?>
