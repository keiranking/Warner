<div class="blog-post project">
  <!-- <div class="col-md-8"> -->
  <h5 class="label">
    <?php
      $category = get_the_category();
      if($category[0]) {
        echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
      }
      $dept = get_post_meta($post->ID, 'Department', true);
      if ($dept) {
        echo '<span class="dept">'.$dept.' Dept.</span>';
      }
    ?>
  </h5>

  <h2 class="title"><?php the_title(); ?></h2>
  <?php
    $subtitle = get_post_meta($post->ID, 'Subtitle', true);
    if ($subtitle) {
      echo '<h3 class="subtitle">'.$subtitle.'.</h3>';
    }
  ?>

  <div class="content">
    <?php // Show featured image
      if ( has_post_thumbnail() ) {
        the_post_thumbnail();
      }
    ?>
    <?php // Generate color swatches from post metadata
      $palette = get_post_meta($post->ID, 'Palette', true);
      if ($palette) {
        echo '<div class="palette">';
        $colors = explode(',', str_replace(' ', '', $palette));
        for($i = 0, $size = count($colors); $i < $size; ++$i) {
          echo '<div class="color" style="background-color: #'.$colors[$i].'"></div>';
        }
        echo '</div>';
      }
    ?>

    <?php the_content(); ?>

    <?php
      $project = get_post_meta($post->ID, 'Project Link', true);
      if ($project) {
        echo '<div class="links">';
        echo '<a class="try-me" target="_blank" href="'.$project.'">See it in action</a>';
        echo '</div>';
      }
    ?>
  </div>
    <!-- </div> -->

</div><!-- /.blog-post -->
