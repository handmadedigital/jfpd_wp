<?php get_header()?>

<div id="single_page">

  <?php while(have_posts()):the_post();?>
    <div class="blog-title" style="background: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id( $post->ID )); ?>); background-position: center; background-size: cover;">
        <h2><?php the_title()?></h2>
    </div>
    <div class="content-section-wrapper">
      <div class="content-wrapper">
        <?php the_content();?>
      </div>


      <div class="sidebar-wrapper">
        <?php get_sidebar()?>
      </div>
    </div>


  <?php endwhile;?>

</div>
<?php get_footer()?>
