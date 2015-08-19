<?php

//slider post type
function slider_post_type() {
         
         $labels = array(
                'name' => __('Slider','me_theme'),
                'singular_name' => __('me_slider','me_theme'),
                'rewrite' => array(
                            'slug' => __( 'me_slider','me_theme')
                            ),
                'add_new' => __('Add Slide','me_theme'),
                'add_new_item' => __('Add New Slide','me_theme'),
                'edit_item' => __('Edit Slide','me_theme'),
                'new_item' => __('New Slide','me_theme'),
                'view_item' => __('Preview Slider','me_theme'),
                'not_found' => __('No Slides Found','me_theme'),
                'not_found_in_trash' => __('No Slides Found In Trash','me_theme'),
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
         
         register_post_type(__( 'me_slider','me_theme'), $args);
}
//END: slider_post_type

// slider_messages
function slider_messages($messages)
{
    $messages[__( 'me_slider' )] =
        array(
            0 => '',
            1 => sprintf(__('Slider Updated.','me_theme'), esc_url(get_permalink($post_ID))),
            2 => __('Custom Field Updated.','me_theme'),
            3 => __('Custom Field Deleted.','me_theme'),
            4 => __('Slider Updated.','me_theme'),
            5 => isset($_GET['revision']) ? sprintf( __('Slide Restored To Revision From %s','me_theme'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
            6 => sprintf(__('Slide Published.','me_theme'), esc_url(get_permalink($post_ID))),
            7 => __('Slide Saved.','me_theme'),
            8 => sprintf(__('Slide Submitted.','me_theme'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
            9 => sprintf(__('Slide Scheduled For: <strong>%1$s</strong>.','me_theme'), date_i18n( __( 'M j, Y @ G:i' ), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
            10 => sprintf(__('Slide Draft Updated.','me_theme'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
        );
    return $messages;

} // END: slider_messages

//add submenu item for the slider settings
function slider_settings_menu() {

         add_submenu_page('edit.php?post_type=me_slider', __( 'Slider settings','me_theme'), __( 'Settings','me_theme'), 'manage_options', 'slider_settings', 'slider_settings_page');

}

//Get the thumbnail
function slider_thumbnail($post_ID) {
    $slider_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($slider_thumbnail_id) {
        $slider_thumbnail_img = wp_get_attachment_image_src($slider_thumbnail_id, 'featured_preview');
        return $slider_thumbnail_img[0];
    }  
}

//Modify admin columns
function slider_edit_columns($columns){
        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => __('Slide title','me_theme'),
            "thumb" => __('Preview image','me_theme'),
        );
  
        return $columns;  
}

//Content for admin columns
function slider_custom_columns($column){
        global $post;  
        switch ($column)  
        {
            case "thumb":
                $slider_thumb = slider_thumbnail($post_ID);
                     if ($slider_thumb) {
                        echo '<img src="' . $slider_thumb . '" width="55" />';
                     }
            break;
        }  
}

add_action( 'init', 'slider_post_type' );
add_action('admin_menu', 'slider_settings_menu');
add_filter( 'slider_updated_messages', 'slider_messages' );
add_filter('manage_me_slider_posts_columns', 'slider_edit_columns');
add_action('manage_me_slider_posts_custom_column', 'slider_custom_columns', 10, 2);

require_once('slider_settings.php');
require_once('slider_metaboxes.php');

?>