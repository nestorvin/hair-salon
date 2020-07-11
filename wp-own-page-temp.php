<?php

/*
    Template Name: wp query trianing
*/

get_header(); ?>
<div class="container">
    <div class="row text-center scale mx-auto">

        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6
        );
        $query = new WP_Query($args);

        $columns = array('12 mt-3', '6', '6', '4', '4', '4');
        $id_column = 0;

        if ($query->have_posts()) :

            while ($query->have_posts()) : $query->the_post();

                $column_col = $columns[$id_column];
        ?>
                <?php if (has_post_thumbnail()) :
                    $urlImg = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                endif; ?>

                <div class='col-<?php echo $column_col ?> blog-item'>
                    <div class="blog-element" style='background-image: url(<?php echo $urlImg ?>)'>



                    </div>
                </div>
        <?php
                $id_column++;
            endwhile;

        endif;
        ?>

        <!-- <div class="col-12">Full size</div>
            <div class="col-6">Half size</div>
            <div class="col-6">Half size</div>
            <div class="col-4">Third size</div>
            <div class="col-4">Third size</div>
            <div class="col-4">Third size</div> -->

    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>

</html>