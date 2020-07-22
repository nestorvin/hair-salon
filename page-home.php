<?php get_header(); ?>
<article>
    <h1 class="text-center my-5">Nasze usługi</h1>

    <div class="container mt-4">
        <div class="row mb-5">

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

                        <a class="card-anchor" target="blank" href="<?php echo esc_url(get_permalink()); ?>"></a>
                        <div class="img-card-container mx-auto">

                            <?php

                            if (has_post_thumbnail()) :
                                the_post_thumbnail(array('class' => 'card-img '));
                            endif;
                            ?>

                        </div>

                        <div class="card-body">

                            <?php the_title('<h5 class="card-title">', '</h5>'); ?>

                            <p class="card-text">
                                <?php echo wp_trim_words(get_the_content(), 20);
                                ?>
                            </p>
                        </div>

                    </div>


            <?php


                endwhile;

            endif;
            wp_reset_postdata();
            ?>

        </div>
    </div>
</article>
<?php get_footer(); ?>