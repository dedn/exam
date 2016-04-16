<?php
remove_action('wp_head', 'rsd_link');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','wp_generator');
show_admin_bar(false);

add_theme_support('post-thumbnails');

function blog_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'social_links_facebook' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_section( 'links' , array(
        'title'      => __( 'Social Links', 'classikblog' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_facebook', array(
        'label'        => __( 'Facebok', 'classikblog' ),
        'section'    => 'links',
        'settings'   => 'social_links_facebook',
    ) ) );

    //twitter
    $wp_customize->add_setting( 'social_links_twitter' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_section( 'links' , array(
        'title'      => __( 'Social Links', 'classikblog' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_twitter', array(
        'label'        => __( 'Twitter', 'classikblog' ),
        'section'    => 'links',
        'settings'   => 'social_links_twitter',
    ) ) );

    //google
    $wp_customize->add_setting( 'social_links_google' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_section( 'links' , array(
        'title'      => __( 'Social Links', 'classikblog' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_google', array(
        'label'        => __( 'Google', 'classikblog' ),
        'section'    => 'links',
        'settings'   => 'social_links_google',
    ) ) );


    $wp_customize->add_setting( 'social_links_linkedin' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_section( 'links' , array(
        'title'      => __( 'Social Links', 'classikblog' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_linkedin', array(
        'label'        => __( 'Linkedin', 'classikblog' ),
        'section'    => 'links',
        'settings'   => 'social_links_linkedin',
    ) ) );

}
add_action( 'customize_register', 'blog_customize_register' );


//Menu
register_nav_menu ('menu','Main menu');