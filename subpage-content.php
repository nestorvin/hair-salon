<?php get_header(); ?>
<div class="container">

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php the_title( sprintf('<h1 class="text-center my-5"> <a href="%s"> ', esc_url( get_permalink() ), '</a></h1>') ) ?>

    <div class="row">

      <?php if (has_post_thumbnail()) : ?>

        <div class="col-xs-12">
          <div class="thumbnail"><?php the_post_thumbnail('medium', ['class' => 'float-left mr-3']); ?></div>
          <?php the_content(); ?>

        </div>



      <?php else : ?>

        <div class="col-xs-12 mx-auto">
          <?php the_content(); ?>
        </div>

      <?php endif; ?>
    </div>

  </article>
</div>


