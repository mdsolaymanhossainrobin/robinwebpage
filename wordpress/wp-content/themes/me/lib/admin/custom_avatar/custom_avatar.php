<?php

add_action( 'show_user_profile', 'custom_avatar' );
add_action( 'edit_user_profile', 'custom_avatar' );
function custom_avatar( $user ) { ?>

        <h3><?php _e('Custom avatar','me_theme') ?></h3>

	<table class="form-table">
	       <tr>
	           <th><label for="custom_avatar"><?php _e('Custom avatar url','me_theme') ?></label></th>

                   <td>
	           <input type="text" name="custom_avatar" id="custom_avatar" class="image_select_field" value="<?php echo esc_attr( get_the_author_meta( 'custom_avatar', $user->ID ) ); ?>" style="width: 300px;" />
	           <a id='custom_avatar_button' class='button image_select'><?php _e('Select image','me_theme') ?></a>
                   </td>
	       </tr>
	</table>
	<?php
}

add_action( 'personal_options_update', 'save_custom_avatar' );
add_action( 'edit_user_profile_update', 'save_custom_avatar' );
function save_custom_avatar( $user_id ) {
	if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }
	update_user_meta($user_id, 'custom_avatar', $_POST['custom_avatar'] );
}

?>