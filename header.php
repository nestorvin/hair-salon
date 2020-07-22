<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div id="carouselExampleFade" class="carousel slide carousel-fade position-relative" data-ride="carousel">

      <nav class="navbar navbar-expand-md navbar-dark" role="navigation">
        <div class="container">
          <!-- ------------------------------ -->
          <!-- Logo -->
          <a class="navbar-brand" href="#">
            <?php
            if (function_exists('the_custom_logo')) :
              the_custom_logo();
            endif;
            ?>
          </a>
          <!-- ------------------------------ -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
            <span class="navbar-toggler-icon"></span>
          </button>

          <?php
          wp_nav_menu(array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse justify-content-end ',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          ));
          ?>
          <!-- Popup with appoinment call numbers -->
          <?php get_sidebar(); ?>
        </div>
      </nav>

      <div class="carousel-inner">

        <?php

        $args = array(
          'post_type' => 'page',
          'post__in' => array(264, 139)
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
          $display_active = 0;
          while ($query->have_posts()) : $query->the_post(); ?>

            <?php if (has_post_thumbnail()) :
              $urlImg = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));

            endif; ?>

            <div class="carousel-item slider <?php if ($display_active == 0) echo 'active' ?>" style="background-image:url(<?php echo $urlImg ?>)" data-interval="4000">

              <div class="carousel-caption d-none d-md-flex flex-column align-items-start mb-5">
                <?php the_title($before = '<h5 class = slider-title>', $after = '</h5>');

                ?>
                <p class="slider-text">
                  <?php
                  echo wp_trim_words(get_the_content(), 10);
                  ?>
                </p>
                <a class="slider-btn" target="blank" href="<?php echo esc_url(get_permalink()); ?>">Zobacz więcej</a>

              </div>

            </div>

        <?php
            $display_active++;
          endwhile;

        endif;
        wp_reset_postdata();
        ?>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </header>