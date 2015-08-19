<?php

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );
add_theme_support( 'automatic-feed-links' );

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

if ( function_exists('add_theme_support') )
{
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 200 );
}

?>