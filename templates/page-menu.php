<?php
// check if the repeater field has rows of data
if( have_rows('home_menu') ):

    while ( have_rows('home_menu') ) : the_row();

        $page = get_sub_field('page');
        $thmb_src = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), 'large' );
      ?>

      <div class="page-item">
        <h3><?php echo $page->post_title; ?></h3>
        <?php if( isset($thmb_src[0]) ) { ?>
          <img src="<?php echo $thmb_src[0]; ?>" alt="<?php echo $page->post_title; ?>" />
        <?php } ?>
        <p><?php echo $page->post_excerpt; ?></p>
        <a href="<?php echo $page->guid; ?>" class="btn">Read more</a>
      </div>

      <?php
    endwhile;
else :
    // no rows found
endif;
?>
