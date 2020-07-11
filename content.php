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
          <?php the_post_thumbnail(array('class' => 'card-img mx-auto'));
          endif;
          ?>
          <div class="card-body">
            <?php the_title($before = '<h5 class = card-title>', $after = '</h5>');
            ?>
            <p class="card-text">
              <?php echo wp_trim_words(get_the_content(), 20);
              ?>
            </p>
          </div>

        </div>


    <?php


      endwhile;

    endif;
    ?>

  </div>
</div>
