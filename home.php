<?php
/**
 * Index
 */
get_header();
?>
<h1 style="text-align:center ;">RECENT POSTS</h1>
<div style="margin-top: 100px;"></div>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        the_title('<h1>', '</h1>');
        if ( has_post_thumbnail() ) :
            the_post_thumbnail();
    endif;
        the_excerpt();
        printf('<a href="%s" > Read more</a>', get_permalink());
    endwhile;
endif;
$args = array(
    'post_type' => 'vtproducts',
);
?>
<!-- products -->
<h1 style="text-align:center ;">PRODUCTS</h1>   
<div style="margin-top: 100px;"></div>
<?php
$query = new WP_Query($args);
// The Loop
if ( is_front_page() && is_home() ) :
while ($query->have_posts()) {
    $query->the_post();
    echo '<h2>' . get_the_title() . '</h2>';
    if ( has_post_thumbnail() ) :
        the_post_thumbnail();
endif;   
    the_excerpt();
    printf('<a href="%s" > Read more</a>', get_permalink()); 
}
endif;
?>
<div style="margin-top:50px;"></div>
<?php
get_sidebar();
get_footer();