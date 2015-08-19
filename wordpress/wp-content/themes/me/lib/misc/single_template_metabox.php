<?php

//Add custom metabox
add_action( 'add_meta_boxes', 'single_template_metabox' );
function single_template_metabox() {

         add_meta_box( 'single_template_id', __('Select page template','me_theme'), 'single_template_metabox_callback', 'post', 'side', 'default' );

}

//Custom meta box callback
function single_template_metabox_callback() {
     global $post;
     $values = get_post_custom( $post->ID );
     $text = isset( $values['single_template_metabox'] ) ? esc_attr( $values['single_template_metabox'][0] ) : '';

     wp_nonce_field( 'single_template_metabox_nonce', 'meta_box_nonce' );

     if ($text){
        if ( $text == "single_sidebar" )
           {
           echo "<select name='single_template_metabox'>";
           echo "<option value='$text' selected='selected'>";
           echo __('Post with sidebar','me_theme');
           echo "</option>";
           echo "<option value='single_full'>";
           echo __('Post without sidebar','me_theme');
           echo "</option>";
           echo "</select>";
           }
        if ( $text == "single_full" )
           {
           echo "<select name='single_template_metabox'>";
           echo "<option value='$text' selected='selected'>";
           echo __('Post without sidebar','me_theme');
           echo "</option>";
           echo "<option value='single_sidebar'>";
           echo __('Post with sidebar','me_theme');
           echo "</option>";
           echo "</select>";
           }

     }

     if (!$text){
         echo "<select name='single_template_metabox'>";
         echo "<option value='single_full' selected='selected'>";
         echo __('Post without sidebar','me_theme');
         echo "</option>";
         echo "<option value='single_sidebar'>";
         echo __('Post with sidebar','me_theme');
         echo "</option>";
         echo "</select>";
     }

}

//Save metabox data
add_action( 'save_post', 'single_template_metabox_save' );
function single_template_metabox_save( $post_id ) {

    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'single_template_metabox_nonce' ) ) return;

    if( !current_user_can( 'edit_post' ) ) return;

    if( isset( $_POST['single_template_metabox'] ) )
    
    update_post_meta( $post_id, 'single_template_metabox', wp_kses( $_POST['single_template_metabox'], $allowed ) );

}

?>