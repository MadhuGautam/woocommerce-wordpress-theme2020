<?php get_header(); ?>

    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-lg-9">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="blog-post">
                    <?php if ( has_post_thumbnail()) : ?>

                        <img src="<?php the_post_thumbnail_url('post_image'); ?>" class="img-fluid mb-5">

                    <?php  endif; ?>

                    <h2 class="blog-post-title"><?php the_title(); ?></h2>
                    <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
                     <?php the_content(); ?>
                </div><!-- /.blog-post -->
                <?php
                endwhile; endif;
                ?>
            </div>
            <div class="col-lg-3">
                <div class="position-sticky" >
                    <?php dynamic_sidebar('blog-sidebar'); ?>
                </div>
            </div>

        </div>
    </div>
<?php get_footer();  ?>