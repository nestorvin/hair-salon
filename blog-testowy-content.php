<?php get_template_part('blog-content', get_post_format()); ?>


<article <?php post_class(); ?>>
                    <header class="entry-header">

                        <?php the_title(sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink())), '</a></h1>'); ?>
                        <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>

                    </header>

                    <div class="col-xs-12 col-sm-4">

                        <div class="thumbnail-img"><?php the_post_thumbnail(); ?></div>

                    </div>
                    <div class="col-xs-12 col-sm-8">

                        <?php the_content(); ?>

                    </div>

                </article>

                
        <div class="col-xs-12 col-sm-4">
            <?php get_sidebar(); ?>
        </div>


        
        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6
            );
            $query = new WP_Query($args);

            $columns = array('12', '6', '6', '4', '4', '4');
            $id_column = 0;
            
            if ($query->have_posts()) :

                while ($query->have_posts()) : $query->the_post();
                
                $column_col = $columns[$id_column];
            ?>


                    <div class='col-xs-<?php echo $column_col ?>'>

                        <?php the_post_thumbnail(); ?>


                    </div>

            <?php
                    $id_column++;
                endwhile;

            endif;
            ?>