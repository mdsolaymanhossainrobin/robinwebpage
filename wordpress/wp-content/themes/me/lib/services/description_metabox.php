<?php

//Add custom metabox
add_action( 'add_meta_boxes', 'description_metabox' );
function description_metabox() {

         add_meta_box( 'service_description_id', __('Description','me_theme'), 'description_metabox_callback', 'service', 'normal', 'high' );

}

//Custom meta box callback
function description_metabox_callback() {
     global $post;
     $values = get_post_custom( $post->ID );
     $text = isset( $values['descripition_metabox'] ) ? esc_attr( $values['descripition_metabox'][0] ) : '';

     wp_nonce_field( 'descripition_metabox_nonce', 'meta_box_nonce' );

     echo "<textarea name='descripition_metabox' style='width: 100%; height: 100px;'>$text</textarea>";
}

//Save metabox data
add_action( 'save_post', 'description_metabox_save' );
function description_metabox_save( $post_id ) {

    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'descripition_metabox_nonce' ) ) return;

    if( !current_user_can( 'edit_post' ) ) return;
    
    $allowed = array(
        'a' => array(
            'href' => array()
        ),
        'p',
        'strong'
    );
    
    if( isset( $_POST['descripition_metabox'] ) )
    
    update_post_meta( $post_id, 'descripition_metabox', wp_kses( $_POST['descripition_metabox'], $allowed ) );

}

?>