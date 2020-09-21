<?php get_header(); ?>

    <div class="container pt-5 pb-5">

        <div class="row">
            <div class="col-lg-9">

                <h1><?php single_cat_title(); ?></h1>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class=blog-post>
                            <div class="card mb-4">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <?php if ( has_post_thumbnail()) : ?>

                                                <img src="<?php the_post_thumbnail_url('smallest'); ?>" class="img-fluid rounded-circle">

                                            <?php else: ?>

                                                <img src="<?php bloginfo ('template_directory');?>/assets/images/about.jpg" alt="" class="img-fluid rounded-circle">

                                            <?php  endif; ?>
                                            <div class="mt-2 justify-content-center">
                                                <p><?php the_author();?></p>
                                                <p><?php the_date();?></p>

                                            </div>
                                    
                                                

                                                

                                        </div>
                                        <div class="col-lg-10">
                                            <h3><?php the_title(); ?></h3>
                                
                                            <?php the_excerpt(); ?>
                                            <a href="<?php the_permalink();?>" class="btn btn-success">Read more</a>
                                        </div>

                                    </div>
            
                                </div>
                            </div>   
                        </div>     
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