<?php

/*
    Template Name: wp query trianing
*/

get_header(); ?>

<div class="container">
    <div class="row">

            <?php
            $args = array(
                'post_type' => 'page',
                'post__in' => array( 49, 139 )
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :

                while ($query->have_posts()) : $query->the_post(); ?>

                    <?php get_template_part('content', get_post_format()); ?>

            <?php
                endwhile;

            endif;
            ?>
        <div class="col-xs-12 col-sm-4">
            <?php get_sidebar(); ?>
        </div>

    </div>
</div>
</body>

</html>