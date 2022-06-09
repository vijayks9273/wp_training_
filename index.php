<?php
/**
 * Index
 */
get_header();
if (have_posts()) :
    while (have_posts()) :
        if ( has_post_thumbnail() ) :
            the_post_thumbnail();
    endif;
        the_post();
        the_title('<h1>', '</h1>');
        the_excerpt();
        printf('<a href="%s" > Read more</a>', get_permalink());
    endwhile;
endif;
$args = array(
    'post_type' => 'vtproducts',
);
$query = new WP_Query($args);
// The Loop
if ( is_front_page() && is_home() ) :
while ($query->have_posts()) {
    $query->the_post();
    if ( has_post_thumbnail() ) :
        the_post_thumbnail();
endif;
    echo '<h2>' . get_the_title() . '</h2>';   
}
endif;
get_sidebar();
get_footer();
