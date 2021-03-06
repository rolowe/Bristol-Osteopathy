<?php
/**
 * Template Name: FAQs Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/carousel', 'carousel'); ?>

  <?php get_template_part('templates/content', 'page'); ?>

  <div id="accordion">

    <?php
      $faq_args = array(
          'post_type' => 'faqs'
      );
      $faq_query = new WP_Query( $faq_args );
    ?>

    <?php if ( $faq_query->have_posts() ) : while ( $faq_query->have_posts() ) : $faq_query->the_post(); ?>

        <h4 class="accordion-toggle"><?php echo the_title(); ?></h4>
        <div class="accordion-content">
            <?php echo the_content(); ?>
        </div>

    <?php endwhile; else : ?>
        <p>There are no FAQs :( </p>
    <?php endif; wp_reset_postdata(); ?>


  <?php endwhile; ?>

  </div>

  <div class="page_content">
    <div class="secondary_content">
      <?php echo the_field('secondary_content'); ?>
    </div>
  </div>

  <?php //get_template_part('templates/news', 'news'); ?>
