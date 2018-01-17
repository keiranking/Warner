<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <?php wp_head(); ?>
  </head>

  <body>

    <div class="blog-masthead">
        <nav class="blog-nav sticky-top">
          <a class="blog-nav-item active" href="<?php echo get_site_url(); ?>">Home</a>
          <a class="blog-nav-item" href="<?php echo get_site_url(); ?>/design">Design</a>
          <a class="blog-nav-item" href="<?php echo get_site_url(); ?>/code">Code</a>
          <a class="blog-nav-item dropdown-toggle" href="#" id="writing" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Writing
          </a>
          <div class="dropdown-menu" aria-labelledby="writing">
            <a class="dropdown-item" href="<?php echo get_site_url(); ?>/opinion">Columns</a>
            <a class="dropdown-item" href="<?php echo get_site_url(); ?>/essay">Essays</a>
            <a class="dropdown-item" href="<?php echo get_site_url(); ?>/film-reviews">Film Reviews</a>
            <a class="dropdown-item" href="<?php echo get_site_url(); ?>/theatre-reviews">Theatre Reviews</a>
            <a class="dropdown-item disabled" href="#">Plays</a>
            <a class="dropdown-item" href="<?php echo get_site_url(); ?>/lastcall"><span class="dropdown-sub-item">Last Call</span></a>
            <a class="dropdown-item" href="<?php echo get_site_url(); ?>/blacke"><span class="dropdown-sub-item">Mr & Mrs Blacke</span></a>
            <a class="dropdown-item" href="<?php echo get_site_url(); ?>/taboo"><span class="dropdown-sub-item">Taboo</span></a>
          </div>
        </nav>
    </div>

    <div class="container">

      <!-- <div class="blog-header">
        <h1 class="blog-title"><a href="<?php /* echo get_bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); */ ?></a></h1>
      </div> -->
