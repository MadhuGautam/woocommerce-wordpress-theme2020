<?php get_header(); ?>

    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-lg-9">
                   
                    
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="blog-post">
                        <h1><?php the_title(); ?></h1>
                        <?php if ( has_post_thumbnail()) : ?>

                            <img src="<?php the_post_thumbnail_url('post_image'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-5">

                        <?php  endif; ?>

                        <?php the_content(); ?>
                    </div><!-- /.blog-post -->
                    <?php
                    endwhile; else: endif;
                    ?>

                </div>
                <div class="col-lg-3">
                            <div class="position-sticky" >
                                <?php get_sidebar(); ?>
                            </div>
                       
                </div>

            </div>
 

        </div>
    </div>    

<?php get_footer();  ?> 