<?php
  /**
  * The main template file
  *
  * This is the most generic template file in a WordPress theme
  * and one of the two required files for a theme (the other being style.css).
  * It is used to display a page when nothing more specific matches a query.
  * E.g., it puts together the home page when no home.php file exists.
  *
  * @link http://www.keiranking.com
  *
  * @package Keiran King
  * @subpackage KK
  * @since 1.0
  * @version 1.0
  */
  get_header(); ?>

      <div class="row mx-1">
        <div class="blog-main col-xl-6 col-lg-7 col-md-9">
          <?php
          if (have_posts()):
            while (have_posts()):
              the_post();
              echo '<div class="row">';
              if (!in_category('27')) { // External Sources
                if (in_category('286')) { // Design
                  get_template_part('content-code', get_post_format());
                } elseif (in_category('285')) { // Code
                  get_template_part('content-design', get_post_format());
                } elseif (in_category('30') || in_category('284') || in_category('2') || in_category('9')) { // Opinion, Essay, Film Review, Theatre Review
                  get_template_part('content-article', get_post_format());
                } else {
                  get_template_part('content-single', get_post_format());
                }
              }
              echo '</div><!--/.row-->';
            endwhile;
            ?>
            <nav>
            	<ul class="pager">
            		<li><?php next_posts_link( 'Older posts' ); ?></li>
            		<li><?php previous_posts_link( 'Newer posts' ); ?></li>
            	</ul>
            </nav>
            <?php
          endif;
          ?>

        </div><!-- /.blog-main -->
      </div><!-- /.row -->

<?php get_footer(); ?>
