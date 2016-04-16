<?php get_header(); ?>
<section id="about" class="s-about">
    <div class="container">
        <div class="row">
            <div class=col-md-6>
                <div class="title-section">
                    <h2><?php echo get_cat_name(2); ?></h2>
                    <div class="description"><?php echo category_description(2); ?></div>
                </div>
            </div>
            <?php if (have_posts() ) : query_posts('p=4');
                while (have_posts()) : the_post(); ?>
                    <div class=col-md-6>
                        <?php the_content(); ?>
                        <a class="s-about-btn">Read More</a>
                    </div>


                <? endwhile; endif; wp_reset_query(); ?>
        </div>
    </div>
</section>

<section id="Services" class="s-services">
    <div class="container">
        <div class="title-section">
            <h2><?php echo get_cat_name(3); ?></h2>
            <div class="description"><?php echo category_description(2); ?></div>
        </div>
        <div class="row">

            <?php if (have_posts() ) : query_posts('cat=3');
                while (have_posts()) : the_post(); ?>
            <div class="col-md-6 col-sm-6 servises-item">
            <div class="icon-box">
                <?php the_post_thumbnail(array(93, 61)); ?>
            </div>
            <h4> <?php the_title(); ?></h4>
            <?php the_content(); ?>

        </div>

                <? endwhile; endif; wp_reset_query(); ?>







        </div>
        <a class="services-btn">View More</a>

    </div>

</section>

<section id="Clients" class="s-clients">
    <div class="container">
        <div class="title-section">
            <h2>Clients</h2>
            <div class="description">Whats our client says</div>
        </div>
        <div class="row">
            <ul class="filter">
                <li>
                    <div class="col-md-4  s-clients-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and industry
                            Lorem Ipsum has been the industry's standard dummy text. </p>
                        <div class="people-box">
                             <a href="images/team-0.jpg" class="popup"><img src="<?php echo get_template_directory_uri(); ?>/images/people1.png" alt="Alt"></a>
                            <div class="first-name">Krishnan Unni</div>
                            <div class="professional">Designation</div>
                        </div>
                    </div>
                    <div class="col-md-4 s-clients-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and industry
                            Lorem Ipsum has been the industry's standard dummy text. </p>
                        <div class="people-box">
                            <a href="images/team-0.jpg" class="popup"><img src="<?php echo get_template_directory_uri(); ?>/images/people1.png" alt="Alt"></a>
                            <div class="first-name">Krishnan Unni</div>
                            <div class="professional">Designation</div>
                        </div>
                    </div>
                    <div class="col-md-4 s-clients-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and industry
                            Lorem Ipsum has been the industry's standard dummy text. </p>
                        <div class="people-box">
                            <a href="images/team-0.jpg" class="popup"><img src="<?php echo get_template_directory_uri(); ?>/images/people1.png" alt="Alt"></a>
                            <div class="first-name">Krishnan Unni</div>
                            <div class="professional">Designation</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="col-md-4  s-clients-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and industry
                            Lorem Ipsum has been the industry's standard dummy text. </p>
                        <div class="people-box">
                            <a href="images/team-0.jpg" class="popup"><img src="<?php echo get_template_directory_uri(); ?>/images/people1.png" alt="Alt"></a>
                            <div class="first-name">Krishnan Unni</div>
                            <div class="professional">Designation</div>
                        </div>
                    </div>
                    <div class="col-md-4 s-clients-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and industry
                            Lorem Ipsum has been the industry's standard dummy text. </p>
                        <div class="people-box">
                            <a href="images/team-0.jpg" class="popup"><img src="<?php echo get_template_directory_uri(); ?>/images/people1.png" alt="Alt"></a>
                            <div class="first-name">Krishnan Unni</div>
                            <div class="professional">Designation</div>
                        </div>
                    </div>
                    <div class="col-md-4 s-clients-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and industry
                            Lorem Ipsum has been the industry's standard dummy text. </p>
                        <div class="people-box">
                            <a href="images/team-0.jpg" class="popup"><img src="<?php echo get_template_directory_uri(); ?>/images/people1.png" alt="Alt"></a>
                            <div class="first-name">Krishnan Unni</div>
                            <div class="professional">Designation</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="col-md-4  s-clients-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and industry
                            Lorem Ipsum has been the industry's standard dummy text. </p>
                        <div class="people-box">
                            <a href="images/team-0.jpg" class="popup"><img src="<?php echo get_template_directory_uri(); ?>/images/people1.png" alt="Alt"></a>
                            <div class="first-name">Krishnan Unni</div>
                            <div class="professional">Designation</div>
                        </div>
                    </div>
                    <div class="col-md-4 s-clients-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and industry
                            Lorem Ipsum has been the industry's standard dummy text. </p>
                        <div class="people-box">
                            <a href="images/team-0.jpg" class="popup"><img src="<?php echo get_template_directory_uri(); ?>/images/people1.png" alt="Alt"></a>
                            <div class="first-name">Krishnan Unni</div>
                            <div class="professional">Designation</div>
                        </div>
                    </div>
                    <div class="col-md-4 s-clients-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and industry
                            Lorem Ipsum has been the industry's standard dummy text. </p>
                        <div class="people-box">
                            <a href="images/team-0.jpg" class="popup"><img src="<?php echo get_template_directory_uri(); ?>/images/people1.png" alt="Alt"></a>
                            <div class="first-name">Krishnan Unni</div>
                            <div class="professional">Designation</div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="news" class="s-news">
    <div class="container">
        <div class="title-section">
            <h2>News</h2>
            <div class="description">From Our Blog</div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="meta">
                    <ul>
                        <li class="meta-first">30
                            <span>Oct-2015</span>

                        </li>
                        <li class="meta-second">
                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                            <span class="comment">8- Com</span>
                        </li>
                        <li class="meta-last">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <span class="comment">16- View</span>
                        </li>
                    </ul>
                </div>

                <div class="main-news-conten">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/news-image.jpg" alt="alt">
                    <h4 class="title-blog-news">Blog Heading</h4>
                    <p class="news-description">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy...</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="item-post">
                    <h4 class="title-blog-news">Blog Heading</h4>
                    <span class="date">30 - Oct - 2015</span>
                    <p class="news-description">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy...</p>
                </div>
                <div class="item-post">
                    <h4 class="title-blog-news">Blog Heading</h4>
                    <span class="date">30 - Oct - 2015</span>
                    <p class="news-description">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy...</p>
                </div>
                <a class="news-btn">View More</a>
            </div>

        </div>
    </div>
</section>
<section id="partners" class="s-partners">
    <div class="container">
        <div class="title-section">
            <h2>Partners</h2>
            <div class="description">Our Great Partners</div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="slider-two">
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/client-1.png"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/client-2.png"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/client-3.png"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/client-4.png"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/client-5.png"></div>
                    <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/client-6.png"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>