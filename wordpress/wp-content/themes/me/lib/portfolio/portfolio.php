<?php

//porfolio_post_type
function portfolio_post_type() {
         
         $labels = array(
                 'name' => __( 'Portfolio','me_theme'),
                 'singular_name' => __('Portfolio','me_theme'),
                 'rewrite' => array(
                              'slug' => __( 'portfolio','me_theme')
                              ),
                 'add_new' => __('Add Item', 'me_theme'),
                 'add_new_item' => __('Add New Item','me_theme'),
                 'edit_item' => __('Edit Portfolio Item','me_theme'),
                 'new_item' => __('New Portfolio Item','me_theme'),
                 'view_item' => __('Preview item','me_theme'),
                 'search_items' => __('Search Portfolio','me_theme'),
                 'not_found' => __('No Portfolio Items Found','me_theme'),
                 'not_found_in_trash' => __('No Portfolio Items Found In Trash','me_theme'),
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

         register_post_type(__( 'portfolio','me_theme'), $args);

}//END: porfolio_post_type

// portfolio_messages
function portfolio_messages($messages)
{  
    $messages[__( 'portfolio' )] =  
        array(  
            0 => '',  
            1 => sprintf(__('Portfolio Updated. <a href="%s">View portfolio</a>','me_theme'), esc_url(get_permalink($post_ID))),
            2 => __('Custom Field Updated.','me_theme'),
            3 => __('Custom Field Deleted.','me_theme'),
            4 => __('Portfolio Updated.','me_theme'),
            5 => isset($_GET['revision']) ? sprintf( __('Portfolio Restored To Revision From %s','me_theme'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
            6 => sprintf(__('Portfolio Published. <a href="%s">View Portfolio</a>','me_theme'), esc_url(get_permalink($post_ID))),
            7 => __('Portfolio Saved.','me_theme'),
            8 => sprintf(__('Portfolio Submitted. <a target="_blank" href="%s">Preview Portfolio</a>','me_theme'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
            9 => sprintf(__('Portfolio Scheduled For: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Portfolio</a>','me_theme'), date_i18n( __( 'M j, Y @ G:i' ), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
            10 => sprintf(__('Portfolio Draft Updated. <a target="_blank" href="%s">Preview Portfolio</a>','me_theme'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
        );  
    return $messages;  
  
} // END: portfolio_messages

// portfolio_filter
function portfolio_filter()  
{  
    register_taxonomy(
        __( 'filter','me_theme' ),
        array(__( 'portfolio','me_theme' )),
        array(
            'hierarchical' => true,
            'label' => __( 'Categories','me_theme' ),
            'singular_label' => __( 'Filter','me_theme' ),
            'rewrite' => array(
                'slug' => 'filter',
                'hierarchical' => true
            )  
        )  
    );  
} // END: portfolio_filter

//Get the thumbnail
function portfolio_thumbnail($post_ID) {
    $portfolio_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($portfolio_thumbnail_id) {
        $portfolio_thumbnail_img = wp_get_attachment_image_src($portfolio_thumbnail_id, 'featured_preview');
        return $portfolio_thumbnail_img[0];
    }  
}

//Modify admin columns
function portfolio_edit_columns($columns){
        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => __('Project name','me_theme'),
            "category" => __('Category','me_theme'),
            "thumb" => __('Thumbnail','me_theme'),
        );
  
        return $columns;  
}

//Content for admin columns
function portfolio_custom_columns($column){
        global $post;  
        switch ($column)  
        {  
            case "category":
                echo get_the_term_list($post->ID, 'filter', '', ', ','');
                break;
            case "thumb":
                $portfolio_thumb = portfolio_thumbnail($post_ID);
                     if ($portfolio_thumb) {
                        echo '<img src="' . $portfolio_thumb . '" width="55" />';
                     }
            break;
        }  
}

add_action( 'init', 'portfolio_post_type' );
add_action( 'init', 'portfolio_filter', 0 );
add_filter( 'post_updated_messages', 'portfolio_messages' );
add_filter('manage_portfolio_posts_columns', 'portfolio_edit_columns');
add_action('manage_portfolio_posts_custom_column', 'portfolio_custom_columns', 10, 2);
require_once('portfolio_metaboxes.php');

?>