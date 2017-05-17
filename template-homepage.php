<?php
/**
 * Template Name: Homepage Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/carousel', 'carousel'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/locations', 'locations'); ?>
  <?php get_template_part('templates/page-menu', 'page-menu'); ?>
  <?php get_template_part('templates/testimonial', 'testimonial'); ?>

<div class="row">
  <div class="col-md-4">Col 1</div>
  <div class="col-md-4">Col 2</div>
  <div class="col-md-4">Col 3</div>
 </div>

<?php endwhile; ?>
