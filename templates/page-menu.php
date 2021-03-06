<div class="row">

<?php
// check if the repeater field has rows of data
if( have_rows('home_menu') ):

    while ( have_rows('home_menu') ) : the_row();

        $page = get_sub_field('page');
        $thmb_src = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), 'large' );
      ?>



        <div class="col-md-4">
        <h3 class="item_name"><a href="<?php echo $page->guid; ?>"><?php echo $page->post_title; ?></a></h3>


            <div class="page-item">
              <?php if( isset($thmb_src[0]) ) { ?>
                <a href="<?php echo $page->guid; ?>"><img src="<?php echo $thmb_src[0]; ?>" alt="<?php echo $page->post_title; ?>" /></a>
              <?php } else { ?>
                <a href="<?php echo $page->guid; ?>"><img src="http://www.fillmurray.com/200/120" alt="<?php echo $page->post_title; ?>" /></a>
              <?php } ?>
              <div class="info">
                <?php if ($page->post_excerpt != "") { ?>
                  <p><?php echo $page->post_excerpt; ?></p>
                <?php } else { ?>
                  <p><?php echo wp_trim_words( get_the_content(), 25, '...' ); ?></p>
                <?php } ?>
                <a href="<?php echo $page->guid; ?>" class="btn">Read more &#9658;</a>
              </div>
            </div>

        </div>



      <?php
    endwhile;
else :
    // no rows found
endif;
?>

</div>
