<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#navi" data-offset="85">
  
    
    <header id="header">   
        <div class="container">
            <div class="row">
                <nav id="navi" class="navbar navbar-expand-lg w-100 justify-content-between">
                    <div class="navbar-brand">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src($custom_logo_id , 'full');
                    ?>
                    <img class="logo img-fluid" src="<?php echo $image[0]; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" draggable="false">
                </a> 
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <?php 
                        wp_nav_menu( 
                            array( 
                                'theme_location' => 'main', 
                                'container' => 'div', 
                                'container_id'    => 'main-nav',
                                'container_class' => 'collapse navbar-collapse justify-content-end',
                                'menu_class' => 'navbar-nav site_header_menu',
                                'menu_id' => 'menu-principal',
                                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                                'walker'          => new wp_bootstrap_navwalker()
                            ) 
                        ); 
                    ?>
                </nav>
            </div>
        </div>          
    </header>

    <?php if ( is_front_page()){ ?>
    <div id="hero">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="w-100">
                    <h1 class="wow fadeInDown" data-wow-delay="1s" data-wow-duration="2s"><?php the_field('home_title'); ?></h1>
                    <span class="powered wow fadeInDown" data-wow-delay="2s" data-wow-duration="2s"><?php the_field('home_subtitle'); ?></span>
                    <div class="scroll wow fadeInUp" data-wow-delay="3s" data-wow-duration="1s">
                        <span>Scroll Down</span>
                        <a href="#content" class="nav-link">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <?php } ?>
    
    <div id="content">

