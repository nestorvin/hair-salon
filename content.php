<h1 class="text-center my-5">Nasze usługi</h1>

<div class="container mt-4">
  <div class="row">

    <?php

    $args = array(
      'post_type' => 'post',
      'post__in' => array(211, 137, 213)
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post();
    ?>

        <div class="card-deck card-item col-12 col-md-4 text-center mx-auto">

            <?php if (has_post_thumbnail()) : ?>
              <div class="img-container mx-auto">
            <?php the_post_thumbnail(array('class' => 'card-img mx-auto'));
            endif;
            ?>
            </div>
            <div class="card-body">
              <?php the_title($before = '<h5 class = card-title>', $after = '</h5>');
              echo wp_trim_words(get_the_content(), 20);
              ?>
              <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
            </div>

        </div>


    <?php


      endwhile;

    endif;
    ?>

  </div>
</div>

<div class="vh-100"></div>
<div class="xexe">XXX</div>