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

<div class="container section_wrapper">
  <div class="row clearfix">
    <div class="column third">
      <!-- Your Content -->
      <div class="single-image solid-border">
        <img width="100%" src="<?php the_field('intro_image'); ?>" alt="">
      </div>

    </div>
    <div class="column two-thirds">

      <h1><?php the_field('intro_title'); ?></h1>
      <p><?php the_field('intro_text'); ?></p>
      <!-- Your Content -->
    </div>
  </div>
</div>

<div class="container cta-banner-wrapper full">
  <div class="row clearfix">
    <div class="column two-thirds">
      <!-- Your Content -->
      <h2 class="tagline_text"><?php the_field('cta_tag_line'); ?></h2>

    </div>
    <div class="column third">
      <!-- Your Content -->
      <a href="<?php the_field('cta_button_url'); ?>" class="btn btn-outline right"><?php the_field('cta_button_text'); ?></a>
    </div>
  </div>
</div>

<div style="background-image: url(<?php the_field('ways_to_book_background'); ?>); background-size: cover; background-attachment: fixed;" class="container section_wrapper icon-columns-wrapper full">
  <div class="row clearfix">
    <div class="column full">
      <!-- Your Content -->
      <h1 class="columns-title"><?php the_field('ways_to_book_title'); ?></h1>
    </div>
    <div class="row clearfix">
      <!-- Your Content -->
      <?php
        // check if the repeater field has rows of data
        if( have_rows('icon_column') ):

         	// loop through the rows of data
          while ( have_rows('icon_column') ) : the_row();?>
            <div class="column fourth">
              <!-- Your Content -->
              <div class="icon-circle-outline">
                <span class="fa <?php the_sub_field('icon_type'); ?>"></span>
              </div>
              <div class="icons-text">
                <?php the_sub_field('icon_text'); ?>
              </div>
            </div>
          <?php endwhile;

        else :?>
        <?php endif;
      ?>
      <div class="column third">

      </div>

    </div>
  </div>
</div>

<div class="container price-table-wrapper section_wrapper full">
  <div class="full">
    <!-- Your Content -->
    <h1 class="price-table-title"><?php the_field('price_table_title'); ?></h1>
    <h2 class="price-table-tagline"><?php the_field('price_table_tagline'); ?></h2>
  </div>

  <div class="row vertical-align-wrapper clearfix">
    <!-- Your Content -->
    <?php
      // check if the repeater field has rows of data
      if( have_rows('price_table_column') ):

       	// loop through the rows of data
        while ( have_rows('price_table_column') ) : the_row();?>
          <div class="column vertical-align-item third">
            <!-- Your Content -->
            <div class="price-table-column">
              <h1 class="column-title"><?php the_sub_field('column_title'); ?></h1>
              <p class="column-price"><span>$</span><span><?php the_sub_field('column_price'); ?></span><span>Month</span></p>
              <ul class="column-list-items">
                <?php
                  // check if the repeater field has rows of data
                  if( have_rows('column_list_items')):

                    // loop through the rows of data
                    while ( have_rows('column_list_items') ) : the_row(); ?>
                      <li><i class="fa fa-check-circle" aria-hidden="true"></i>
                          <?php the_sub_field('list_item_text'); ?>
                      </li>
                    <?php endwhile;

                  else :?>

                  <?php endif;
                ?>
              </ul>
              <a href="<?php the_sub_field('button_url'); ?>" class="btn btn-outline"><?php the_sub_field('button_text'); ?></a>
            </div>
          </div>
        <?php endwhile;

      else :?>

      <?php endif;
    ?>
  </div>

</div>


<div id="container">

  <?php while(have_posts()):the_post();?>

    <?php the_content();?>

  <?php endwhile;?>

</div>

<?php get_footer()?>
