  



  <?php
    // Query Child Pages
    $child_args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => $post->ID,
        'order'          => 'ASC'
     );

    $child_query = new WP_Query( $child_args );

    if ($child_query->post_count != 0) {

      echo '<div class="more_information">';
        echo "<h2>More information</h2>";

        echo "<div class='row'>";

          foreach ($child_query->posts as $child_page) {
            echo "<div class='child_page col-md-6'>";
              
              if (get_the_post_thumbnail( $child_page->ID, 'thumbnail' )) {
                echo "<a href='" .$child_page->guid. "'>" . get_the_post_thumbnail( $child_page->ID, 'thumbnail' ) . "</a>"; 
              } else {
                echo "<a href='" .$child_page->guid. "'>" . get_the_post_thumbnail( $page->ID, 'thumbnail' ) . "</a>";
              }
              echo "<h3><a href='" .$child_page->guid. "'>" . $child_page->post_title . "</a></h3>";
              echo "<p>" . $child_page->post_excerpt . "..</p>";
            echo "</div>";
          }

        echo '</div>';

      echo '</div>';

    }

    wp_reset_postdata();
  ?>

</div>