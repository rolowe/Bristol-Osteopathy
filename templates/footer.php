
<div class="footer-menu">
  <div class="container">
    <?php
      if (has_nav_menu('footer')) :
        wp_nav_menu(['theme_location' => 'footer']);
      endif;
    ?>
  </div>
</div>

<footer>
  <div class="container">
    &copy; 2017 <a href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>
