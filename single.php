<?php get_header(); ?>

      <div class="row mx-1">
        <div class="col-xl-6 col-lg-7 col-md-9">
          <?php
          if (have_posts()):
            while (have_posts()):
              the_post();
              echo '<div class="row">';
              if (in_category('286')) { // Design
                get_template_part('content-code', get_post_format());
              } elseif (in_category('285')) { // Code
                get_template_part('content-design', get_post_format());
              } elseif (in_category('30') || in_category('284') || in_category('2') || in_category('9')) { // Opinion, Essay, Film Review, Theatre Review
                get_template_part('content-article', get_post_format());
              } else {
                get_template_part('content-single', get_post_format());
              }
              echo '</div><!--/.row-->';
            endwhile;
          endif;
          ?>

        </div><!-- /.blog-main -->
      </div><!-- /.row -->

<?php get_footer(); ?>
