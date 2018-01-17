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
      // } else {
      //   echo '<span class="dept">'.the_time('M Y').'</span>';
      }
      ?>
  </h5>

  <h2 class="title"><?php the_title(); ?></h2>

  <div class="content">
    <?php the_content(); ?>
    <?php
      if ( has_post_thumbnail() ) {
        the_post_thumbnail();
      }
    ?>
    <div class="links">
      <?php
        $github = get_post_meta($post->ID, 'GitHub Link', true);
        $project = get_post_meta($post->ID, 'Project Link', true);
        if ($project) {
          echo '<a class="button-dark" target="_blank" href="'.$project.'">Try it now</a>';
        }
        if ($github) {
          echo '<a class="button" target="_blank" href="'.$github.'">View on Github</a>';
        }
      ?>
    </div>
  </div>
    <!-- </div> -->

</div><!-- /.blog-post -->
