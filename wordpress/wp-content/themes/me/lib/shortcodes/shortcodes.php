<?php

/*  IMAGE SHORTCODES
==================================================*/

//Image frame1
add_shortcode('image_frame1', 'image_frame1_callback');
function image_frame1_callback( $atts, $content = null ) {
   extract(shortcode_atts(array(
        'src' => '',
    ), $atts));
   return '<div class="image_frame full_width">
                <img src="' . $src . '" />
           </div>';
}

//Image frame2
add_shortcode('image_frame2', 'image_frame2_callback');
function image_frame2_callback( $atts, $content = null ) {
   extract(shortcode_atts(array(
        'src' => '',
        'title' => '',
    ), $atts));
   return '<div class="image_frame full_width">
                <img src="' . $src . '" />
                <h4 class="image_title">'.$title.'</h4>
           </div>';
}

//Image frame3
add_shortcode('image_frame3', 'image_frame3_callback');
function image_frame3_callback( $atts, $content = null ) {
   extract(shortcode_atts(array(
        'src' => '',
        'title' => '',
    ), $atts));
   return '<div class="image_frame full_width">
                <img src="' . $src . '" />
                <h4 class="image_title">'.$title.'</h4>
                <div class="image_description">
                '.$content.'
                </div>
           </div>';
}

/*  VIDEO SHORTCODES
==================================================*/

//Youtube video
add_shortcode('youtube', 'youtube_video');
function youtube_video($atts, $content=null) {
    extract(shortcode_atts(array(
        'id'      => '',
    ), $atts));
    return '<div class="video"><iframe width="740" src="http://www.youtube.com/embed/'.$id.'?rel=0" frameborder="0" allowfullscreen></iframe></div>';
}

//Youtube video frame1
add_shortcode('youtube_frame1', 'youtube_frame_callback1');
function youtube_frame_callback1($atts, $content=null) {
   extract(shortcode_atts(array(
        'id' => '',
    ), $atts));
   return '<div class="image_frame full_width">
                <iframe width="740" src="http://www.youtube.com/embed/'.$id.'?rel=0" frameborder="0" allowfullscreen></iframe>
           </div>';

}

//Youtube video frame2
add_shortcode('youtube_frame2', 'youtube_frame_callback2');
function youtube_frame_callback2($atts, $content=null) {
    extract(shortcode_atts(array(
        'id' => '',
        'title' => '',
    ), $atts));
   return '<div class="image_frame full_width">
                <iframe width="740" src="http://www.youtube.com/embed/'.$id.'?rel=0" frameborder="0" allowfullscreen></iframe>
                <h4 class="image_title">'.$title.'</h4>
           </div>';
}

//Youtube video frame3
add_shortcode('youtube_frame3', 'youtube_frame_callback3');
function youtube_frame_callback3($atts, $content=null) {
    extract(shortcode_atts(array(
        'id' => '',
        'title' => '',
    ), $atts));
   return '<div class="image_frame full_width">
                <iframe width="740" src="http://www.youtube.com/embed/'.$id.'?rel=0" frameborder="0" allowfullscreen></iframe>
                <h4 class="image_title">'.$title.'</h4>
                <div class="image_description">
                '.$content.'
                </div>
           </div>';
}

//Vimeo video
add_shortcode('vimeo', 'vimeo_video');
function vimeo_video($atts, $content=null) {
    extract(shortcode_atts(array(
        'id'      => '',
    ), $atts));
    return '<div class="video"><iframe src="http://player.vimeo.com/video/'.$id.'?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="740" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>';
}

//Vimeo video frame1
add_shortcode('vimeo_frame1', 'vimeo_frame1_callback');
function vimeo_frame1_callback($atts, $content=null) {
    extract(shortcode_atts(array(
        'id' => '',
    ), $atts));
   return '<div class="image_frame full_width"">
                <iframe src="http://player.vimeo.com/video/'.$id.'?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="740" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
           </div>';
}

//Vimeo video frame2
add_shortcode('vimeo_frame2', 'vimeo_frame2_callback');
function vimeo_frame2_callback($atts, $content=null) {
    extract(shortcode_atts(array(
        'id' => '',
        'title' => '',
    ), $atts));
   return '<div class="image_frame full_width"">
                <iframe src="http://player.vimeo.com/video/'.$id.'?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="740" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                <h4 class="image_title">'.$title.'</h4>
           </div>';
}

//Vimeo video frame
add_shortcode('vimeo_frame3', 'vimeo_frame3_callback');
function vimeo_frame3_callback($atts, $content=null) {
    extract(shortcode_atts(array(
        'id' => '',
        'title' => '',
    ), $atts));
   return '<div class="image_frame full_width">
                <iframe src="http://player.vimeo.com/video/'.$id.'?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="740" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                <h4 class="image_title">'.$title.'</h4>
                <div class="image_description">
                '.$content.'
                </div>
           </div>';
}

/*  LIST STYLES
==================================================*/
add_shortcode('check_list', 'check_list_callback');
function check_list_callback( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="check">', do_shortcode($content));
	return $content;
	
}

add_shortcode('remove_list', 'remove_list_callback');
function remove_list_callback( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="remove">', do_shortcode($content));
	return $content;
	
}

add_shortcode('cross_list', 'add_list_callback');
function add_list_callback( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="add">', do_shortcode($content));
	return $content;
	
}

add_shortcode('undo_list', 'undo_list_callback');
function undo_list_callback( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="undo">', do_shortcode($content));
	return $content;

}

add_shortcode('redo_list', 'redo_list_callback');
function redo_list_callback( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="redo">', do_shortcode($content));
	return $content;
	
}

add_shortcode('speech_list', 'speech_list_callback');
function speech_list_callback( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="speech">', do_shortcode($content));
	return $content;
	
}

add_shortcode('attention_list', 'attention_list_callback');
function attention_list_callback( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="attention">', do_shortcode($content));
	return $content;
	
}

add_shortcode('settings_list', 'settings_list_callback');
function settings_list_callback( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="settings">', do_shortcode($content));
	return $content;
	
}

add_shortcode('user_list', 'user_list_callback');
function user_list_callback( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="user">', do_shortcode($content));
	return $content;
	
}

add_shortcode('telephone_list', 'telephone_list_callback');
function telephone_list_callback( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="telephone">', do_shortcode($content));
	return $content;
	
}

add_shortcode('lock_list', 'lock_list_callback');
function lock_list_callback( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="locked">', do_shortcode($content));
	return $content;
	
}

add_shortcode('mail_list', 'mail_list_callback');
function mail_list_callback( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="mail">', do_shortcode($content));
	return $content;
	
}

/*  HEADINGS
==================================================*/
add_shortcode('h1', 'h1_heading');
function h1_heading( $atts, $content = null ) {
   return '<h1>' . do_shortcode($content) . '</h1>';
}

add_shortcode('h2', 'h2_heading');
function h2_heading( $atts, $content = null ) {
   return '<h2>' . do_shortcode($content) . '</h2>';
}

add_shortcode('h3', 'h3_heading');
function h3_heading( $atts, $content = null ) {
   return '<h3>' . do_shortcode($content) . '</h3>';
}

add_shortcode('h4', 'h4_heading');
function h4_heading( $atts, $content = null ) {
   return '<h4>' . do_shortcode($content) . '</h4>';
}

add_shortcode('h5', 'h5_heading');
function h5_heading( $atts, $content = null ) {
   return '<h5>' . do_shortcode($content) . '</h5>';
}

add_shortcode('h6', 'h6_heading');
function h6_heading( $atts, $content = null ) {
   return '<h6>' . do_shortcode($content) . '</h6>';
}

/*  COLUMNS
==================================================*/
add_shortcode('full', 'full_column');
function full_column( $atts, $content = null ) {
   return '<div class="full">' . do_shortcode($content) . '</div>';
}

add_shortcode('one_half', 'one_half_column');
function one_half_column( $atts, $content = null ) {
   return '<div class="one_half">' . do_shortcode($content) . '</div>';
}

add_shortcode('one_half_last', 'one_half_last_column');
function one_half_last_column( $atts, $content = null ) {
   return '<div class="one_half_last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

add_shortcode('one_third', 'one_third_column');
function one_third_column( $atts, $content = null ) {
   return '<div class="one_third">' . do_shortcode($content) . '</div>';
}

add_shortcode('one_third_last', 'one_third_last_column');
function one_third_last_column( $atts, $content = null ) {
   return '<div class="one_third_last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

add_shortcode('two_third', 'two_third_column');
function two_third_column( $atts, $content = null ) {
   return '<div class="two_third">' . do_shortcode($content) . '</div>';
}

add_shortcode('two_third_last', 'two_third_last_column');
function two_third_last_column( $atts, $content = null ) {
   return '<div class="two_third_last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

add_shortcode('one_fourth', 'one_fourth_column');
function one_fourth_column( $atts, $content = null ) {
   return '<div class="one_fourth">' . do_shortcode($content) . '</div>';
}

add_shortcode('one_fourth_last', 'one_fourth_last_column');
function one_fourth_last_column( $atts, $content = null ) {
   return '<div class="one_fourth_last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

add_shortcode('two_fourth', 'two_fourth_column');
function two_fourth_column( $atts, $content = null ) {
   return '<div class="two_fourth">' . do_shortcode($content) . '</div>';
}

add_shortcode('two_fourth_last', 'two_fourth_last_column');
function two_fourth_last_column( $atts, $content = null ) {
   return '<div class="two_fourth_last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

add_shortcode('three_fourth', 'three_fourth_column');
function three_fourth_column( $atts, $content = null ) {
   return '<div class="three_fourth">' . do_shortcode($content) . '</div>';
}

add_shortcode('three_fourth_last', 'three_fourth_last_column');
function three_fourth_last_column( $atts, $content = null ) {
   return '<div class="three_fourth_last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

add_shortcode('one_fifth', 'one_fifth_column');
function one_fifth_column( $atts, $content = null ) {
   return '<div class="one_fifth">' . do_shortcode($content) . '</div>';
}

add_shortcode('one_fifth_last', 'one_fifth_last_column');
function one_fifth_last_column( $atts, $content = null ) {
   return '<div class="one_fifth_last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

add_shortcode('two_fifth', 'two_fifth_column');
function two_fifth_column( $atts, $content = null ) {
   return '<div class="two_fifth">' . do_shortcode($content) . '</div>';
}

add_shortcode('two_fifth_last', 'two_fifth_last_column');
function two_fifth_last_column( $atts, $content = null ) {
   return '<div class="two_fifth_last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

add_shortcode('three_fifth', 'three_fifth_column');
function three_fifth_column( $atts, $content = null ) {
   return '<div class="three_fifth">' . do_shortcode($content) . '</div>';
}

add_shortcode('three_fifth_last', 'three_fifth_last_column');
function three_fifth_last_column( $atts, $content = null ) {
   return '<div class="three_fifth_last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

add_shortcode('four_fifth', 'four_fifth_column');
function four_fifth_column( $atts, $content = null ) {
   return '<div class="four_fifth">' . do_shortcode($content) . '</div>';
}

add_shortcode('four_fifth_last', 'four_fifth_last_column');
function four_fifth_last_column( $atts, $content = null ) {
   return '<div class="four_fifth_last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

/*  ADD BUTTONS TO TINYMCE
==================================================*/
add_action('init', 'add_tmce_button');
function add_tmce_button() {
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )
   {  
     add_filter('mce_external_plugins', 'add_tmce_plugin');
     add_filter('mce_buttons', 'register_tmce_button');
   }  
}

function register_tmce_button($buttons) {
   array_push($buttons, "magna_shortcodes");
   return $buttons;
}

function add_tmce_plugin($plugin_array) {
   $plugin_array['magna_shortcodes'] = get_bloginfo('template_url') .'/lib/shortcodes/shortcodes.js';
   return $plugin_array;  
}


?>