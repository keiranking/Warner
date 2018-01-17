<?php
/*
Template Name: Play
*/
  get_header(); ?>

      <div class="row">

        <div class="col-lg-7 col-md-9 col-sm-12">
          <?php
          if (have_posts()):
            while (have_posts()):
              the_post();
              get_template_part('content', get_post_format());
            endwhile;
          endif;
          ?>

        </div><!-- /.blog-main -->

      </div><!-- /.row -->

<?php get_footer(); ?>
