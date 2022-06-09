<?php
   	// style appliying
wp_enqueue_style( 'style', get_stylesheet_uri() );
    
// logo creation
function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 30,
        'width'                => 30,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );

}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
// creating  menus
function custom_new_menu()
{
    register_nav_menus(
        array(
            'header' => 'Header Menu',
            'footer' => 'Footer Menu',
        )
    );
}
add_action('init', 'custom_new_menu');
// creating  custom post
function custom_post_type()
{
    register_post_type(
        'vtproducts',
        array(
            'labels'  => array(
                'name'    => 'Products',

            ),
            'rewrite' => array(
                'slug' => 'items',
                'pages' => true,
                'feeds' => true,

            ),
            'public'      => true,
            'has_archive' => true,
        )
    );
    register_taxonomy(
        'product_category',
        array('vtproducts'),
        array(
            'labels' => array(
                'name'    =>  'Product Categories',
            ),

            'hierarchical' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'productcategory'),
        ),
       
    );
}
add_action('init', 'custom_post_type');
add_theme_support( 'post-thumbnails' );
add_post_type_support( 'vtproducts', 'thumbnail' );
set_post_thumbnail_size( 450, 450 ); // 50 pixels wide by 50 pixels tall, resize mode
// side bar registration
function sample_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'sample'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'sample'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'sample_widgets_init');




