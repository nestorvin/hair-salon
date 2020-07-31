

<div class="container">


  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php the_title( $before = '<h1 class="mt-5 text-center" >', $after = '</h1>' ); ?>

    <div class="row">

        <div class="col-12 mx-auto">
          <?php the_content(); ?>
        </div>

    </div>

  </article>
</div>


