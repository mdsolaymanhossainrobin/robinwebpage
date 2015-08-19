<?php

function contact_settings_page() {

    require_once('tabs.php'); ?>

    <div class="wrap">

         <form method="post" action="options.php">

               <?php settings_fields('contact_setting'); ?>
               <?php do_settings_sections('contact_settings'); ?>

               <input type="submit" class="button-primary" value="<?php _e('Save Changes','me_theme') ?>" style="margin-bottom: 40px;" />

         </form>

    </div>

    <?php

}

add_action('admin_init','contact_settings');
function contact_settings() {
         
         /*
         REGISTER OPTIONS
         */
         register_setting('contact_setting','contact_email');
         register_setting('contact_setting','contact_text');
         register_setting('contact_setting','contact_address');
         register_setting('contact_setting','contact_phone');
         register_setting('contact_setting','contact_form_name');
         register_setting('contact_setting','contact_form_email_label');
         register_setting('contact_setting','contact_form_message_label');
         register_setting('contact_setting','send_button_label');
         register_setting('contact_setting','missing_name');
         register_setting('contact_setting','missing_mail');
         register_setting('contact_setting','invalid_mail');
         register_setting('contact_setting','missing_message');
         register_setting('contact_setting','error_message_color');
         register_setting('contact_setting','contact_subject');
         register_setting('contact_setting','thank_you_text');
         register_setting('contact_setting','facebook_url');
         register_setting('contact_setting','facebook_tooltip');
         register_setting('contact_setting','twitter_url');
         register_setting('contact_setting','twitter_tooltip');
         register_setting('contact_setting','rss_url');
         register_setting('contact_setting','rss_tooltip');
         register_setting('contact_setting','dribble_url');
         register_setting('contact_setting','dribble_tooltip');
         register_setting('contact_setting','skype_address');
         register_setting('contact_setting','skype_tooltip');
         register_setting('contact_setting','youtube_url');
         register_setting('contact_setting','youtube_tooltip');
         register_setting('contact_setting','vimeo_url');
         register_setting('contact_setting','vimeo_tooltip');
         register_setting('contact_setting','linkedin_url');
         register_setting('contact_setting','linkedin_tooltip');

         /*
         DEFINE SECTIONS
         */
         add_settings_section( 'contact_section', __('Contact information','me_theme'), 'contact_section_callback', 'contact_settings' );
         add_settings_section( 'contact_form_section', __('Contact form settings','me_theme'), 'contact_form_callback', 'contact_settings' );
         add_settings_section( 'contact_social_section', __('Social media','me_theme'), 'contact_social_callback', 'contact_settings' );

         /*
         DEFINE FIELDS
         */
         add_settings_field( 'contact_email', __('Your email address','me_theme'), 'email_address_callback', 'contact_settings', 'contact_section' );
         add_settings_field( 'contact_text', __('Additional information','me_theme'), 'contact_text_callback', 'contact_settings', 'contact_section' );
         add_settings_field( 'contact_address', __('Address','me_theme'), 'contact_address_callback', 'contact_settings', 'contact_section' );
         add_settings_field( 'contact_phone', __('Your telephone number','me_theme'), 'contact_phone_callback', 'contact_settings', 'contact_section' );
         
         add_settings_field( 'contact_form_name', __('Name label','me_theme'), 'contact_form_name_callback', 'contact_settings', 'contact_form_section' );
         add_settings_field( 'contact_form_email_label', __('Email label','me_theme'), 'contact_form_email_label_callback', 'contact_settings', 'contact_form_section' );
         add_settings_field( 'contact_form_message_label', __('Message label','me_theme'), 'contact_form_message_label_callback', 'contact_settings', 'contact_form_section' );
         add_settings_field( 'send_button_label', __('Send button label','me_theme'), 'send_button_label_callback', 'contact_settings', 'contact_form_section' );

         add_settings_field( 'missing_name', __('Missing name warning','me_theme'), 'missing_name_callback', 'contact_settings', 'contact_form_section' );
         add_settings_field( 'missing_mail', __('Missing email warning','me_theme'), 'missing_mail_callback', 'contact_settings', 'contact_form_section' );
         add_settings_field( 'invalid_mail', __('Invalid email warning','me_theme'), 'invalid_mail_callback', 'contact_settings', 'contact_form_section' );
         add_settings_field( 'missing_message', __('Missing message warning','me_theme'), 'missing_message_callback', 'contact_settings', 'contact_form_section' );
         add_settings_field( 'error_message_color', __('Error message color','me_theme'), 'error_message_color_callback', 'contact_settings', 'contact_form_section' );
         add_settings_field( 'contact_subject', __('Email subject','me_theme'), 'contact_subject_callback', 'contact_settings', 'contact_form_section' );
         add_settings_field( 'thank_you_text', __('Thank you message','me_theme'), 'thank_you_text_callback', 'contact_settings', 'contact_form_section' );

         add_settings_field( 'facebook_url', __('Facebook page url','me_theme'), 'facebook_url_callback', 'contact_settings', 'contact_social_section' );
         add_settings_field( 'facebook_tooltip', __('Facebook icon tooltip','me_theme'), 'facebook_tooltip_callback', 'contact_settings', 'contact_social_section' );
         add_settings_field( 'twitter_url', __('Twitter url','me_theme'), 'twitter_url_callback', 'contact_settings', 'contact_social_section' );
         add_settings_field( 'twitter_tooltip', __('Twitter icon tooltip','me_theme'), 'twitter_tooltip_callback', 'contact_settings', 'contact_social_section' );
         add_settings_field( 'rss_url', __('Rss url','me_theme'), 'rss_url_callback', 'contact_settings', 'contact_social_section' );
         add_settings_field( 'rss_tooltip', __('Rss icon tooltip','me_theme'), 'rss_tooltip_callback', 'contact_settings', 'contact_social_section' );
         add_settings_field( 'dribble_url', __('Dribble profile url','me_theme'), 'dribble_url_callback', 'contact_settings', 'contact_social_section' );
         add_settings_field( 'dribble_tooltip', __('Dribble icon tooltip','me_theme'), 'dribble_tooltip_callback', 'contact_settings', 'contact_social_section' );
         add_settings_field( 'skype_address', __('Skype address','me_theme'), 'skype_address_callback', 'contact_settings', 'contact_social_section' );
         add_settings_field( 'skype_tooltip', __('Skype icon tooltip','me_theme'), 'skype_tooltip_callback', 'contact_settings', 'contact_social_section' );
         add_settings_field( 'youtube_url', __('Youtube channel','me_theme'), 'youtube_url_callback', 'contact_settings', 'contact_social_section' );
         add_settings_field( 'youtube_tooltip', __('Youtube icon tooltip','me_theme'), 'youtube_tooltip_callback', 'contact_settings', 'contact_social_section' );
         add_settings_field( 'vimeo_url', __('Vimeo channel','me_theme'), 'vimeo_url_callback', 'contact_settings', 'contact_social_section' );
         add_settings_field( 'vimeo_tooltip', __('Vimeo icon tooltip','me_theme'), 'vimeo_tooltip_callback', 'contact_settings', 'contact_social_section' );
         add_settings_field( 'linkedin_url', __('LinkedIn profile url','me_theme'), 'linkedin_url_callback', 'contact_settings', 'contact_social_section' );
         add_settings_field( 'linkedin_tooltip', __('LinkedIn icon tooltip','me_theme'), 'linkedin_tooltip_callback', 'contact_settings', 'contact_social_section' );
         }

/*
CALLBACKS
*/
require_once('contact_section_callbacks.php');
require_once('contact_field_callbacks.php');
?>