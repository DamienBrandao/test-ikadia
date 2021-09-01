<?php 

// Load the theme stylesheets

function theme_register_assets() {
    // Déclarer jQuery
    wp_deregister_script( 'jquery' ); // On annule l'inscription du jQuery de WP
    wp_enqueue_script( 
        'jquery', 
        'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 
        false, 
        '3.3.1', 
        true 
    );
    
    // Déclarer popper.js pour Bootstrap
    wp_enqueue_script( 
        'popper', 
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', 
        false, 
        '1.14.7', 
        true 
    );
    
    // Déclarer Bootstrap
    wp_enqueue_script( 
        'bootstrap', 
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', 
        false, 
        '4.3.1', 
        true 
    );
    
    wp_enqueue_style( 
        'bootstrap', 
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
        array(), 
        '4.3.1'
    );
    
    // Déclarer FontAwesome
    wp_enqueue_script( 
        'fontawesome', 
        'https://kit.fontawesome.com/f7123b557f.js'
    );
    
    // Déclarer Animate.css
    wp_enqueue_style( 
        'animate', 
        get_template_directory_uri() . '/assets/css/animate.css', 
        array(), 
        '4.3.1'
    );
    
    // Déclarer Wow
	wp_enqueue_script( 
        'wow', 
        'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', 
        array(), 
        '1.1.2', 
        true
    );
    
    // Déclarer le JS
	wp_enqueue_script( 
        'type', 
        get_template_directory_uri() . '/assets/js/custom.js', 
        array(), 
        '1.0', 
        true
    );
    
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'type',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'theme_register_assets' );

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

register_sidebar( array(
	'id' => 'sidebar',
	'name' => 'Sidebar',
    'before_widget'  => '<div class="sidebar_widget %2$s">',
    'after_widget'  => '</div>',
    'before_title' => '<p class="sidebar_widget_title">',
    'after_title' => '</p>',
) );

// Emplacement des menus
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
    'sidebar' => 'Sidebar'
) );

// Logo depuis le back office
function wpc_theme_support() {
	add_theme_support('custom-logo', array(
		'flex-height' => true,
		'flex-width'  => true,
	));
}
add_action('after_setup_theme','wpc_theme_support');

/**
 * Load custom WordPress nav walker. ScrollSpy
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/assets/inc/wp_bootstrap_navwalker.php');
}