<?php

function about_post_type() {

         $labels = array(
                 'name' => __( 'About','me_theme'),
                 'singular_name' => __('About','me_theme'),
                 'rewrite' => array(
                              'slug' => __( 'about','me_theme')
                              ),
                 'add_new' => _x('Add Person', 'portfolio','me_theme'),
                 'add_new_item' => __('Add New Person','me_theme'),
                 'edit_item' => __('Edit Person','me_theme'),
                 'new_item' => __('New Person','me_theme' ),
                 'view_item' => __('Preview About Section','me_theme' ),
                 'search_items' => __('Search Portfolio','me_theme' ),
                 'not_found' => __('No Persons Found','me_theme' ),
                 'not_found_in_trash' => __('No Persons Found In Trash','me_theme' ),
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
                             'editor',
                             'thumbnail'
                             )
               );

         register_post_type(__( 'about', 'me_theme' ), $args);

}

function about_messages($messages) {

    $messages[__( 'about','me_theme' )] =
        array(
            0 => '',
            1 => sprintf(__('Informations Updated.','me_theme'), esc_url(get_permalink($post_ID))),
            2 => __('Custom Field Updated.','me_theme'),
            3 => __('Custom Field Deleted.','me_theme'),
            4 => __('About Page Updated.','me_theme'),
            5 => isset($_GET['revision']) ? sprintf( __('Person Restored To Revision From %s','me_theme'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
            6 => sprintf(__('About Information Published.','me_theme'), esc_url(get_permalink($post_ID))),
            7 => __('About Information Saved.','me_theme'),
            8 => sprintf(__('About Information Submitted.','me_theme'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
            9 => sprintf(__('About Information Scheduled For: <strong>%1$s</strong>.','me_theme'), date_i18n( __( 'M j, Y @ G:i' ), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
            10 => sprintf(__('About Information Draft Updated.','me_theme'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
        );
    return $messages;

}

//Get the thumbnail
function about_thumbnail($post_ID) {
    $about_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($about_thumbnail_id) {
        $about_thumbnail_img = wp_get_attachment_image_src($about_thumbnail_id, 'featured_preview');
        return $about_thumbnail_img[0];
    }  
}

//Modify admin columns
function about_edit_columns($columns){
        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => __('Title (short intro)','me_theme'),
            "thumb" => __('Profile picture','me_theme'),
        );
  
        return $columns;  
}

//Content for admin columns
function about_custom_columns($column){
        global $post;  
        switch ($column)  
        {
            case "category":
                echo get_the_term_list($post->ID, 'filter', '', ', ','');
                break;
            case "thumb":
                $about_thumb = portfolio_thumbnail($post_ID);
                     if ($about_thumb) {
                        echo '<img src="' . $about_thumb . '" width="55" />';
                     }
            break;
        }  
}

add_action( 'init', 'about_post_type' );
add_filter( 'post_updated_messages', 'about_messages' );

add_filter('manage_about_posts_columns', 'about_edit_columns');
add_action('manage_about_posts_custom_column', 'about_custom_columns', 10, 2);

?>