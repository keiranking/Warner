<div class="blog-post article">
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

  <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  <div class="publication">
    <?php
      echo reading_time().' min read &nbsp;&bullet;&nbsp; ';
      $link = get_post_meta($post->ID, 'Publication Link', true);
      if ($link) {
        $pub = get_post_meta($post->ID, 'Publication', true);
        $date = get_post_meta($post->ID, 'Publication Date', true);
        echo '<a target="_blank" href="'.$link.'">Published in '.$pub.' on '.$date.'</a>';
      } else {
        echo the_time('j M Y');
      }
    ?>
  </div>

  <?php
    if ( has_post_thumbnail() ) {
      the_post_thumbnail();
    }
  ?>

  <div class="content">
    <?php
      // the_content();
      echo apply_filters('the_content', str_replace('<!--more-->', '', $post->post_content));
    ?>
  </div>
</div><!-- /.blog-post -->
