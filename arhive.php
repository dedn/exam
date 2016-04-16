<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
    <section class="blog-s">
        <div class="container">
            <div class="title-section">
                <h2><?php echo get_cat_name(5); ?></h2>
                <div class="description"><?php echo category_description(5); ?></div>
            </div>
            <div class="row">
                <?php if (have_posts() ) : query_posts('cat=5');
                    while (have_posts()) : the_post(); ?>

                        <div class="col-md-12 servises-item">

                            <article>
                                <div class="authot"><img src="<?php echo get_template_directory_uri(); ?>/images/author.png" alt="alt"></div>
                                <h3 class="title-blo-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="meta-blog-post">
                                    <span class="posted-by">Posted by: <?php the_author(); ?></span>
                                    <span class="posted-date"><?php the_time('F, j, Y'); ?> </span>
                                </div>
                                <?php the_post_thumbnail(array(1024, 334)); ?>
                                <?php the_content('Continue Reading','<a class="blog-btn" href="#">Read More</a>');  ?>
                                <div class="social-blok-post">
                                    <a href="#" class="twitter-blog"><i class="fa fa-twitter fa-2x"></i></a>
                                    <a href="#" class="facebook-blog"><i class="fa fa-facebook fa-2x"></i></a>
                                    <a href="#" class="google-blog"><i class="fa fa-google-plus fa-2x  "></i></a>

                                </div>

                            </article>
                        </div>


                    <? endwhile; endif; wp_reset_query(); ?>



            </div>
        </div>
    </section>
<?php get_footer();?>