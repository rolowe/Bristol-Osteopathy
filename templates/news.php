
<section class="news">


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
              $id = get_the_ID();
                ?>

                  <div class="news-item">
                      <div class="row">
                          <div class="col-md-5">
                            <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail( $id, 'medium' ); ?></a>
                          </div>
                          <div class="col-md-7">
                            <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <?php the_excerpt(); ?>
                          </div>
                      </div>
                  </div>

              <?php }
              wp_reset_postdata();
            }
          ?>

      
    </div>

</section>
