
<section class="news">

<div class="row">
  <div class="col-md-6">
    <div class="news-item">
    <h3>News</h3>
    <?php
      $news_args = array(
        'posts_per_page' => 1,
        'category_name' => 'news',
      );
      $news_query = new WP_Query($news_args);
      if ( $news_query->have_posts() ) {
        while ( $news_query->have_posts() ) {
        $news_query->the_post();
          ?>
            <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
          <?php
            the_excerpt();
        }
        wp_reset_postdata();
      }
    ?>
    </div>
  </div>
  <div class="col-md-6">
    <div class="news-item">
    <h3>Blog</h3>
    <?php
      $blog_args = array(
        'posts_per_page' => 1,
        'category_name' => 'blog',
      );
      $blog_query = new WP_Query($blog_args);
      if ( $blog_query->have_posts() ) {
        while ( $blog_query->have_posts() ) {
        $blog_query->the_post();
        ?>
          <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
        <?php
          the_excerpt();
        }
        wp_reset_postdata();
      }
    ?>
  </div>
  </div>
 </div>

</section>
