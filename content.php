<article <?php post_class(); ?>>

<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>

<?php the_content(); ?>


</article>