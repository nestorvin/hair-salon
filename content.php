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