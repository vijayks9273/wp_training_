<?php
/**
 * Plugin Name: Plugin Myplugin
 */

function post_type_myplugin()
{
   register_post_type(
       'Testimonialmyplugin',
       array(
           'labels'  => array(
               'name'    => 'Testimonial',
           ),
           'rewrite' => array(
               'slug' => 'testimonial',
               'pages' => true,
               'feeds' => true,
           ),
           'public'      => true,
           'has_archive' => true,
       )
   );
   register_post_type(
       'Eventsmyplugin',
       array(
           'labels'  => array(
               'name'    => 'Events', 
           ),
           'rewrite' => array(
               'slug' => 'events',
               'pages' => true,
               'feeds' => true,
           ),
           'public'      => true,
           'has_archive' => true,
       )
   );
}
add_action('init', 'post_type_myplugin');