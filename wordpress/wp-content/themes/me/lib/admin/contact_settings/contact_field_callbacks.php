<?php

//Contact email
function email_address_callback() {
      $options = get_option('contact_email');
      echo "<input type='text' name='contact_email' value='$options' size='60' />";
}

//Contact text
function contact_text_callback() {
      $options = get_option('contact_text');
      echo "<textarea name='contact_text' cols='38' rows='3'>$options</textarea>";
}

//Contact address
function contact_address_callback() {
      $options = get_option('contact_address');
      echo "<input type='text' name='contact_address' value='$options' size='60' />";
}

//Contact Phone
function contact_phone_callback() {
      $options = get_option('contact_phone');
      echo "<input type='text' name='contact_phone' value='$options' size='60' />";
}

//Name label (contact form)
function contact_form_name_callback() {
      $options = get_option('contact_form_name');
      echo "<input type='text' name='contact_form_name' value='$options' size='60' />";
}

//Email label (contact form)
function contact_form_email_label_callback() {
      $options = get_option('contact_form_email_label');
      echo "<input type='text' name='contact_form_email_label' value='$options' size='60' />";
}

//Message label (contact form)
function contact_form_message_label_callback() {
      $options = get_option('contact_form_message_label');
      echo "<input type='text' name='contact_form_message_label' value='$options' size='60' />";
}

//Send button label
function send_button_label_callback() {
      $options = get_option('send_button_label');
      echo "<input type='text' name='send_button_label' value='$options' size='60' />";
}

//Missing name (contact form)
function missing_name_callback() {
      $options = get_option('missing_name');
      echo "<input type='text' name='missing_name' value='$options' size='60' />";
}

//Missing mail (contact form)
function missing_mail_callback() {
      $options = get_option('missing_mail');
      echo "<input type='text' name='missing_mail' value='$options' size='60' />";
}

//Invalid mail (contact form)
function invalid_mail_callback() {
      $options = get_option('invalid_mail');
      echo "<input type='text' name='invalid_mail' value='$options' size='60' />";
}

//Missing message (contact form)
function missing_message_callback() {
      $options = get_option('missing_message');
      echo "<input type='text' name='missing_message' value='$options' size='60' />";
}

//Error message color
function error_message_color_callback() {
         $options = get_option('error_message_color');
         if (!$options){
         echo "<input id='error_message_color' type='text' size='36' name='error_message_color' value='#990000' />";
         }
         if ($options){
         echo "<input id='error_message_color' type='text' size='36' name='error_message_color' value='$options' />";
         }
         echo "<a id='error_message_color_button' class='button'>";
         echo __('Choose color','me_theme');
         echo "</a>";
         echo "
         <script type='text/javascript'>
         jQuery('#error_message_color_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#error_message_color').val('#' + hex);
	      }
         });
         </script>
         ";
}

//Contact subject
function contact_subject_callback() {
      $options = get_option('contact_subject');
      echo "<input type='text' name='contact_subject' value='$options' size='60' />";
}

//Thank you message
function thank_you_text_callback() {
      $options = get_option('thank_you_text');
      echo "<input type='text' name='thank_you_text' value='$options' size='60' />";
}

//Facebook url
function facebook_url_callback() {
      $options = get_option('facebook_url');
      echo "<input type='text' name='facebook_url' value='$options' size='60' />";
}

//Facebook tooltip
function facebook_tooltip_callback() {
      $options = get_option('facebook_tooltip');
      echo "<input type='text' name='facebook_tooltip' value='$options' size='60' />";
}

//Twitter url
function twitter_url_callback() {
      $options = get_option('twitter_url');
      echo "<input type='text' name='twitter_url' value='$options' size='60' />";
}

//Twitter tooltip
function twitter_tooltip_callback() {
      $options = get_option('twitter_tooltip');
      echo "<input type='text' name='twitter_tooltip' value='$options' size='60' />";
}

//Rss url
function rss_url_callback() {
      $options = get_option('rss_url');
      echo "<input type='text' name='rss_url' value='$options' size='60' />";
}

//Rss tooltip
function rss_tooltip_callback() {
      $options = get_option('rss_tooltip');
      echo "<input type='text' name='rss_tooltip' value='$options' size='60' />";
}

//Dribble url
function dribble_url_callback() {
      $options = get_option('dribble_url');
      echo "<input type='text' name='dribble_url' value='$options' size='60' />";
}

//Dribble tooltip
function dribble_tooltip_callback() {
      $options = get_option('dribble_tooltip');
      echo "<input type='text' name='dribble_tooltip' value='$options' size='60' />";
}

//Skype url
function skype_address_callback() {
      $options = get_option('skype_address');
      echo "<input type='text' name='skype_address' value='$options' size='60' />";
}

//Skype tooltip
function skype_tooltip_callback() {
      $options = get_option('skype_tooltip');
      echo "<input type='text' name='skype_tooltip' value='$options' size='60' />";
}

//Youtube url
function youtube_url_callback() {
      $options = get_option('youtube_url');
      echo "<input type='text' name='youtube_url' value='$options' size='60' />";
}

//Youtube tooltip
function youtube_tooltip_callback() {
      $options = get_option('youtube_tooltip');
      echo "<input type='text' name='youtube_tooltip' value='$options' size='60' />";
}

//Vimeo url
function vimeo_url_callback() {
      $options = get_option('vimeo_url');
      echo "<input type='text' name='vimeo_url' value='$options' size='60' />";
}

//Vimeo tooltip
function vimeo_tooltip_callback() {
      $options = get_option('vimeo_tooltip');
      echo "<input type='text' name='vimeo_tooltip' value='$options' size='60' />";
}

//LinkedIn url
function linkedin_url_callback() {
      $options = get_option('linkedin_url');
      echo "<input type='text' name='linkedin_url' value='$options' size='60' />";
}

//LinkedIn tooltip
function linkedin_tooltip_callback() {
      $options = get_option('linkedin_tooltip');
      echo "<input type='text' name='linkedin_tooltip' value='$options' size='60' style='margin-bottom: 30px;' />";
}

?>