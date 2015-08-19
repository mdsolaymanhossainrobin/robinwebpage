<?php

function service_post_type() {

         $labels = array(
                 'name' => __( 'Services','me_theme'),
                 'singular_name' => __('Services','me_theme'),
                 'rewrite' => array(
                              'slug' => __( 'service','me_theme')
                              ),
                 'add_new' => __('Add Service','me_theme'),
                 'add_new_item' => __('Add New Service','me_theme'),
                 'edit_item' => __('Edit Service','me_theme'),
                 'new_item' => __('New Service','me_theme'),
                 'view_item' => __('Preview Services Section','me_theme'),
                 'search_items' => __('Search Services','me_theme'),
                 'not_found' => __('No Services Found','me_theme'),
                 'not_found_in_trash' => __('No Services Found In Trash','me_theme'),
                 'parent_item_colon' => '',
                 );

         $args = array(
               'labels' => $labels,
               'public' => true,
               'publicly_queryable' => true,
               'show_ui' => true,
               'query_var' => true,
               'rewrite' => true,
               'capability_type' => 'post',
               'hierarchical' => false,
               'menu_position' => 100,
               'supports' => array(
                             'title',
                             'thumbnail'
                             )
               );

         register_post_type(__( 'service', 'me' ), $args);

}

function service_messages($messages) {

    $messages[__( 'service' )] =
        array(
            0 => '',
            1 => sprintf(__('Service Updated.','me_theme'), esc_url(get_permalink($post_ID))),
            2 => __('Custom Field Updated.','me_theme'),
            3 => __('Custom Field Deleted.','me_theme'),
            4 => __('Services Updated.','me_theme'),
            5 => isset($_GET['revision']) ? sprintf( __('Service Restored To Revision From %s','me_theme'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
            6 => sprintf(__('Service Information Published.','me_theme'), esc_url(get_permalink($post_ID))),
            7 => __('Service Information Saved.','me_theme'),
            8 => sprintf(__('Service Information Submitted.','me_theme'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
            9 => sprintf(__('Service Information Scheduled For: <strong>%1$s</strong>.','me_theme'), date_i18n( __( 'M j, Y @ G:i' ), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
            10 => sprintf(__('Service Information Draft Updated.','me_theme'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
        );
    return $messages;

}

//Modify admin columns
function services_edit_columns($columns){
        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => __('Service name','me_theme'),
            "description" => __('Description','me_theme'),
        );
  
        return $columns;  
}

//Content for admin columns
function services_custom_columns($column){
        global $post;  
        switch ($column)  
        {
            case "description":
                $values = get_post_custom( $post->ID );
                $text = isset( $values['descripition_metabox'] ) ? esc_attr( $values['descripition_metabox'][0] ) : '';
                echo $text;
            break;
        }
}

add_action( 'init', 'service_post_type' );
add_filter( 'post_updated_messages', 'service_messages' );
add_filter('manage_service_posts_columns', 'services_edit_columns');
add_action('manage_service_posts_custom_column', 'services_custom_columns', 10, 2);

require_once('description_metabox.php');
require_once('services_intro.php');

?>