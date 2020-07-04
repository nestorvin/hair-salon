<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <title>Hair salon</title>
  <?php wp_head(); ?>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #96aa37;">
    <a class="navbar-brand" href="#"><i class="fas fa-skiing"></i> Skoki.pl</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Start <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Zawody
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Historia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Zdjęcia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Wywiady</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Kontakt</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Wyszukaj" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" style="background:white;color:black" type="submit">Znajdź</button>
      </form>
    </div>
  </nav>


  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">


      <?php

      $args = array(
        'post_type' => 'page',
        'post__in' => array(49, 139)
      );
      $query = new WP_Query($args);

      if ($query->have_posts()) :
        $display_active = 0;
        while ($query->have_posts()) : $query->the_post(); ?>

          <div class="carousel-item <?php if ($display_active == 0) echo 'active' ?>" data-interval="4000">

            <!-- <img src="http://localhost/wordpress/wp-content/uploads/2018/06/beautiful-bouquet-bridal-247295.jpg" class="d-block w-100" style="height:70vh" alt="..."> -->
            <?php the_post_thumbnail( array('class' => 'slider') ); ?>

            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Nulla vitae elit libero, um.wwwww</p>
            </div>

          </div>

      <?php
          $display_active++;
        endwhile;

      endif;
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