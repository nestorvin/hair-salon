<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <title>Hair salon</title>
    <?php wp_head(); ?>
</head>
<body>
  <nav>
  

  <?php wp_nav_menu(array(
  'theme_location'=>'primary',
  // 'menu_class' => 
  )); ?>

  </nav>


<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="1000">

      <img src="<?php header_image(); ?>" class="d-block w-100" id="here321"  alt="...">
      <div class="carousel-caption d-none d-md-block">

        <h5>Third slide label</h5>
        <p>Nulla vitae elit libero, um.wwwww</p>
      </div>
    </div>
    <div class="carousel-item" data-interval="1000">
      <img src="" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" >
      <!-- Wordpress Admin Panel -->
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      <!-- Wordpress Admin Panel -->
      </div>
    </div>
    <div class="carousel-item" data-interval="1000">
      <img src="#" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <!-- Wordpress Admin Panel -->
        <h5>Second slide label</h5>
        <p>a pharetra augue mollis interdum.</p>
      <!-- Wordpress Admin Panel -->
      </div>
    </div>
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

  
