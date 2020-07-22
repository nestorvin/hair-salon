<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title($sep = ''); ?></title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <?php


    if (have_posts()) :

        while (have_posts()) : the_post(); ?>


            <header class="post-header mx-auto mb-5 d-flex justify-content-center align-items-center" style="background-image: url(<?php header_image(); ?>);">







                <!-- ------------------- -->

                <nav class="navbar navbar-expand-md navbar-dark" role="navigation">
                    <div class="container">
                        <!-- ------------------------------ -->
                        <!-- Logo -->
                        <a class="navbar-brand" href="#">Logo</a>
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

                        <button class="appointment ">Umów się</button>
                    </div>
                </nav>

                <!-- ------------------- -->




                <?php the_title($before = '<h1 class="post-h1">', $after = '</h1>'); ?>

            </header>
            <div class="container post-container">

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php
                    $content = the_content();
                    ?>

                </article>
            </div>
    <?php


        endwhile;

    endif;



    ?>
    <?php get_footer(); ?>