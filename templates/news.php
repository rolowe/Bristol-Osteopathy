
<section class="news">

<div class="row">

  <div class="col-md-6">
    <h3><a href="<?= esc_url(home_url('/')); ?>category/news/">News</a></h3>

    <div class="news-carousel">
      
        <?php
          $news_args = array(
            'posts_per_page' => 3,
            'category_name' => 'news',
          );
          $news_query = new WP_Query($news_args);
          if ( $news_query->have_posts() ) {
            while ( $news_query->have_posts() ) {
            $news_query->the_post();
              ?>
                <div class="news-item">
                  <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <?php the_excerpt(); ?>
                </div>
            <?php }
            wp_reset_postdata();
          }
        ?>

    </div>
  </div>



  <div class="col-md-6">
    <h3><a href="<?= esc_url(home_url('/')); ?>category/blog/">Blog</a></h3>

      <div class="blog-carousel">
          <?php
            $blog_args = array(
              'posts_per_page' => 3,
              'category_name' => 'blog',
            );
            $blog_query = new WP_Query($blog_args);
            if ( $blog_query->have_posts() ) {
              while ( $blog_query->have_posts() ) {
              $blog_query->the_post();
              ?>
                <div class="news-item">
                  <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <?php the_excerpt(); ?>
                </div>

              <?php }
              wp_reset_postdata();
            }
          ?>
      </div>
  </div>
  
 </div>

</section>
