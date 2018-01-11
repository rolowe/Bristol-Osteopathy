<?php
/**
 * Template Name: Therapies List Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/carousel', 'carousel'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

<div class="therapies_list">
  <div class="row">
        <?php
          $therapies_args = array(
            'post_type' => 'therapies',
          );
          $therapies_query = new WP_Query($therapies_args);

          if ( $therapies_query->have_posts() ) {

            while ( $therapies_query->have_posts() ) {
            $therapies_query->the_post();

            // Insert connected locations here
            ?>


            <div class="col-md-4">

	            <div class="page-item">
	              <?php if( isset($thmb_src[0]) ) { ?>
	                <img src="<?php echo $thmb_src[0]; ?>" alt="<?php echo $page->post_title; ?>" />
	              <?php } else { ?>
	                <img src="http://www.fillmurray.com/200/120" alt="<?php echo $page->post_title; ?>" />
	              <?php } ?>
	              <div class="info">
					<h3><?php the_title(); ?></h3>
	                <a href="<?php echo $page->guid; ?>" class="btn">Read more &#9658;</a>
	              </div>
	            </div>

	        </div>

            <?php }
              wp_reset_postdata();
          }
        ?>
    	</div>
  </div>

  <div class="page_content">
    <div class="secondary_content">
      <?php echo the_field('secondary_content'); ?>
    </div>
  </div>
<?php endwhile; ?>
