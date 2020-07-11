<div class="container mt-4">
    <div class="row">
        <div class="card col-12 col-md-4 text-center">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <i class="fas fa-cut"></i>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
        <div class="card col-12 col-md-4 text-center">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <i class="fas fa-allergies"></i>            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
        <div class="card col-12 col-md-4 text-center">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <i class="fas fa-allergies"></i>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
        </div>
    </div>
</div>

<?php 
$args = array(
        'post_type' => 'post',
        'post__in' => array(49, 139)
      );
      $query = new WP_Query($args);

      if ($query->have_posts()) :
        $display_active = 0;
        while ($query->have_posts()) : $query->the_post(); ?>

          <div class="carousel-item <?php if ($display_active == 0) echo 'active' ?>" data-interval="4000">

            <!-- <img src="http://localhost/wordpress/wp-content/uploads/2018/06/beautiful-bouquet-bridal-247295.jpg" class="d-block w-100" style="height:70vh" alt="..."> -->
            <?php the_post_thumbnail(array('class' => 'slider')); ?>

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


<div class="vh-100"></div>