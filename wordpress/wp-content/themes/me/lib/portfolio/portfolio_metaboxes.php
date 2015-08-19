<?php

// Add the Meta Box
function add_custom_meta_box() {
    add_meta_box(
		'custom_meta_box', // $id
		__('Add more content to the item','me_theme'), // $title
		'show_custom_meta_box', // $callback
		'portfolio', // $page
		'normal', // $context
		'high'); // $priority
}
add_action('add_meta_boxes', 'add_custom_meta_box');

// Field Array
$prefix = 'custom_';
$custom_meta_fields = array(

	array(
		'label'	=> __('Repeatable','me_theme'),
		'desc'	=> __('A description for the field.','me_theme'),
		'id'	=> $prefix.__('repeatable','me_theme'),
		'type'	=> 'repeatable'
	),
	array(
		'label'	=> __('Vimeo video','me_theme'),
		'desc'	=> __('Vimeo embed code','me_theme'),
		'id'	=> $prefix.'vimeo',
		'type'	=> 'vimeo'
	),
	array(
		'label'	=> __('Youtube video','me_theme'),
		'desc'	=> __('Youtube embed code','me_theme'),
		'id'	=> $prefix.'youtube',
		'type'	=> 'youtube'
	),
	array(
		'label'	=> __('Link to the project','me_theme'),
		'desc'	=> __('Link to the project','me_theme'),
		'id'	=> $prefix.'project_link',
		'type'	=> 'project_link'
	)
);


// The Callback
function show_custom_meta_box() {
	global $custom_meta_fields, $post;
	// Use nonce for verification
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
	
	// Begin the field table and loop
	echo '<table class="form-table">';
	foreach ($custom_meta_fields as $field) {

		$meta = get_post_meta($post->ID, $field['id'], true);

                switch($field['type']) {
                          case 'repeatable':
  			  echo	'<tr><td>';
				echo '<p><strong>';
                                echo __('Slider images','me_theme');
                                echo '</strong></p>';
                                echo '<a class="repeatable-add button" href="#">';
				echo __('Add new image','me_theme');
                                echo '</a>';
                                echo '<ul id="'.$field['id'].'-repeatable" class="custom_repeatable" style="margin-top: 15px;">';
						$i = 0;
						if ($meta) {
							foreach($meta as $row) {
								echo '<li>
                                                                          <input type="text" name="'.$field['id'].'['.$i.']" id="'.$field['id'].'" class="image_select_field" value="'.$row.'" size="42" style="margin-right: 10px;" />';

                                                                          echo '<a class="button image_select" href="#" style="margin-right: 10px;">';
                                                                          echo __('Select image','me_theme');
                                                                          echo '</a>';

                                                                          echo '<a class="repeatable-remove button" href="#">';
                                                                          echo __('Remove image','me_theme');
                                                                          echo '</a></li>';

								$i++;
							}
						} else {
							echo '<li>
                                                                  <input type="text" name="'.$field['id'].'['.$i.']" id="'.$field['id'].'" class="image_select_field" value="" size="42" style="margin-right: 10px;" />';

                                                                  echo '<a class="button image_select" href="#" style="margin-right: 10px;">';
                                                                  echo __('Select image','me_theme');
                                                                  echo '</a>';

                                                                  echo '<a class="repeatable-remove button" href="#">';
                                                                  echo __('Remove image','me_theme');
                                                                  echo '</a></li>';
						}
						echo '</ul>';
                         echo '</td></tr>';
                         break;
                         
                         //Vimeo embed code
                         case 'vimeo':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="57" rows="4" style="width: 100%;">'.$meta.'</textarea>
                                   <br /><span class="description">'.$field['desc'].'</span>';
                              echo '</td></tr>';
                         break;
                         
                         //Youtube embed code
                         case 'youtube':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="57" rows="4" style="width: 100%;">'.$meta.'</textarea>
                                   <br /><span class="description">'.$field['desc'].'</span>';
                              echo '</td></tr>';
                         break;
                         
                         //Youtube embed code
                         case 'project_link':
                              echo '<tr><td>';
                              echo '<p><strong>'.$field['label'].'</strong></p>';
                              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" style="width: 100%;"/>';
                              echo '</td></tr>';
                         break;

                }//end switch
                echo '</tr>';
	} // end foreach
	echo '</table>'; // end table
}

// Save the Data
function save_custom_meta($post_id) {
    global $custom_meta_fields;
	
	// verify nonce
	if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__))) 
		return $post_id;
	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $post_id;
	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id))
			return $post_id;
		} elseif (!current_user_can('edit_post', $post_id)) {
			return $post_id;
	}
	
	// loop through fields and save the data
	foreach ($custom_meta_fields as $field) {
		if($field['type'] == 'tax_select') continue;
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	} // enf foreach

}
add_action('save_post', 'save_custom_meta');

?>