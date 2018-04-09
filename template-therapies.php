<?php
/**
 * Template Name: Therapies List Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/carousel', 'carousel'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  <br />
  <?php //get_template_part('templates/location-filter', 'location-filter'); ?>

<div class="therapies_list">
  <div class="row">
        <?php
          $therapies_args = array(
            'post_type' => 'therapies',
            'posts_per_page' => -1,
          );
          $therapies_query = new WP_Query($therapies_args);

          if ( $therapies_query->have_posts() ) {

            // Insert connected locations here
            ?>


            <?php foreach ($therapies_query->posts as $therapy) { ?>

              <?php
                $connected_locations = get_posts( array(
                    'connected_type' => 'locations_to_therapies',
                    'connected_items' => get_the_ID(),
                    'nopaging' => true,
                    'suppress_filters' => false
                ) );
              ?>

              
                <div class="col-md-4 <?php foreach ($connected_locations as $location) { 
                  echo $location->post_name . "_therapy "; 
                } ?>">

                  <div class="page-item">
                    <?php if( isset($thmb_src[0]) ) { ?>
                      <img src="<?php echo $thmb_src[0]; ?>" alt="<?php echo $therapy->post_title; ?>" />
                    <?php } else { ?>
                      <img src="<?= esc_url(home_url('/')); ?>/wp-content/uploads/2018/01/Osteo2017.087-1.jpg" alt="<?php echo $therapy->post_title; ?>" />
                    <?php } ?>
                    <div class="info">
                     <h3><?php echo $therapy->post_title; ?></h3>
                      <a href="<?php echo $therapy->guid; ?>" class="btn">Read more &#9658;</a>
                    </div>
                  </div>

                 </div>

            <?php } ?>

            <?php
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
