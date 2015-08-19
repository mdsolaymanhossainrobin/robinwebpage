<?php
/*
DEFINE METABOXES
*/
add_action( 'add_meta_boxes', 'slider_link_metabox' );
add_action( 'add_meta_boxes', 'slider_caption_metabox' );
function slider_link_metabox() { add_meta_box( 'slider_link_id', __('Link (optional)','me_theme'), 'slider_link_metabox_callback', 'me_slider', 'normal', 'default' ); }
function slider_caption_metabox() { add_meta_box( 'slider_caption_id', __('Caption (optional)','me_theme'), 'slider_caption_metabox_callback', 'me_slider', 'normal', 'high' ); }

/*
METABOX CALLBACKS
*/
function slider_link_metabox_callback() {
     global $post;
     $values = get_post_custom( $post->ID );
     $text = isset( $values['slider_link_metabox'] ) ? esc_attr( $values['slider_link_metabox'][0] ) : '';

     wp_nonce_field( 'slider_link_nonce', 'meta_box_nonce' );

     echo "<input type='text' name='slider_link_metabox' value='$text' style='width: 100%;' />";
}

function slider_caption_metabox_callback() {
     global $post;
     $values = get_post_custom( $post->ID );
     $text = isset( $values['slider_caption_metabox'] ) ? esc_attr( $values['slider_caption_metabox'][0] ) : '';

     wp_nonce_field( 'slider_caption_nonce', 'meta_box_nonce2' );

     echo "<input type='text' name='slider_caption_metabox' value='$text' style='width: 100%;' />";
}

/*
SAVE METABOX DATAS
*/
add_action( 'save_post', 'slider_link_metabox_save' );
function slider_link_metabox_save( $post_id ) {

    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'slider_link_nonce' ) ) return;

    if( !current_user_can( 'edit_post' ) ) return;

    if( isset( $_POST['slider_link_metabox'] ) )
    
    update_post_meta( $post_id, 'slider_link_metabox', $_POST['slider_link_metabox'] );

}
add_action( 'save_post', 'slider_caption_metabox_save' );
function slider_caption_metabox_save( $post_id ) {

    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    if( !isset( $_POST['meta_box_nonce2'] ) || !wp_verify_nonce( $_POST['meta_box_nonce2'], 'slider_caption_nonce' ) ) return;

    if( !current_user_can( 'edit_post' ) ) return;

    if( isset( $_POST['slider_caption_metabox'] ) )
    
    update_post_meta( $post_id, 'slider_caption_metabox', $_POST['slider_caption_metabox'] );

}

?>