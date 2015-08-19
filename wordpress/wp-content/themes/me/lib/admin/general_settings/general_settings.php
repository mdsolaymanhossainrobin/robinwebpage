<?php
//theme_settings_page ( display general settings )
function theme_settings_page() {

    require_once('tabs.php'); ?>

    <div class="wrap">
    
         <form method="post" action="options.php">

               <?php settings_fields('general_settings'); ?>
               <?php do_settings_sections('theme_settings'); ?>

               <input type="submit" class="button-primary" value="<?php _e('Save Changes','me_theme') ?>" style="margin-bottom: 40px;"/>

         </form>

    </div>

    <?php


}

add_action('admin_init','general_settings');
function general_settings() {

         /*
         REGISTER OPTIONS
         */
         register_setting('general_settings','logo_margin');
         register_setting('general_settings','logo_url');
         register_setting('general_settings','logo_alt');
         register_setting('general_settings','shortcut_icon');
         register_setting('general_settings','touch_icon1');
         register_setting('general_settings','touch_icon2');
         register_setting('general_settings','touch_icon3');
         register_setting('general_settings','touch_icon4');
         
         register_setting('general_settings','multipage_nav');

         register_setting('general_settings','intro_text');
         
         register_setting('general_settings','disable_slider');
         
         register_setting('general_settings','disable_portfolio');
         register_setting('general_settings','disable_services');
         register_setting('general_settings','disable_about');
         register_setting('general_settings','disable_contact');
         
         register_setting('general_settings','portfolio_title');
         register_setting('general_settings','portfolio_more_info');
         register_setting('general_settings','portfolio_link');
         register_setting('general_settings','services_title');
         register_setting('general_settings','about_title');
         register_setting('general_settings','contact_title');

         register_setting('general_settings','analytics_code');

         /*
         DEFINE SECTIONS
         */
         add_settings_section( 'logo_section', __('Logo settings','me_theme'), 'logo_settings_callback', 'theme_settings' );
         //add_settings_section( 'multipage_section', __('Multipage navigation','me_theme'), 'multipage_section_callback', 'theme_settings' );
         add_settings_section( 'intro_section', __('Introduction text','me_theme'), 'intro_section_callback', 'theme_settings' );
         add_settings_section( 'sections_section', __('Disable sections on the homepage','me_theme'), 'sections_section_callback', 'theme_settings' );
         add_settings_section( 'specific_section', __('Section specific settings','me_theme'), 'specific_section_callback', 'theme_settings' );
         add_settings_section( 'analytics_section', __('Google Analyitics','me_theme'), 'analytics_section_callback', 'theme_settings' );

         /*
         DEFINE FIELDS
         */
         add_settings_field( 'logo_margin', __('Distance from the top','me_theme'), 'logo_margin_callback', 'theme_settings', 'logo_section' );
         add_settings_field( 'logo_url', __('Your logo','me_theme'), 'logo_url_callback', 'theme_settings', 'logo_section' );
         add_settings_field( 'logo_alt', __('Logo alt text','me_theme'), 'logo_alt_callback', 'theme_settings', 'logo_section' );
         add_settings_field( 'shortcut_icon', __('Shortcut icon','me_theme'), 'shortcut_icon_callback', 'theme_settings', 'logo_section' );
         add_settings_field( 'touch_icon1', __('Touch icon 1','me_theme'), 'touch_icon1_callback', 'theme_settings', 'logo_section' );
         add_settings_field( 'touch_icon2', __('Touch icon 2','me_theme'), 'touch_icon2_callback', 'theme_settings', 'logo_section' );
         add_settings_field( 'touch_icon3', __('Touch icon 3','me_theme'), 'touch_icon3_callback', 'theme_settings', 'logo_section' );
         add_settings_field( 'touch_icon4', __('Touch icon 4','me_theme'), 'touch_icon4_callback', 'theme_settings', 'logo_section' );

         //add_settings_field( 'multipage_nav', __('Allow multipage navigation','me_theme'), 'multipage_nav_callback', 'theme_settings', 'multipage_section' );

         add_settings_field( 'intro_text', __('Here you can add an introduction to your site','me_theme'), 'intro_text_callback', 'theme_settings', 'intro_section' );

         add_settings_field( 'disable_slider', __('Disable slider','me_theme'), 'disable_slider_callback', 'theme_settings', 'sections_section' );
         add_settings_field( 'disable_portfolio', __('Disable portfolio','me_theme'), 'disable_portfolio_callback', 'theme_settings', 'sections_section' );
         add_settings_field( 'disable_services', __('Disable services','me_theme'), 'disable_services_callback', 'theme_settings', 'sections_section' );
         add_settings_field( 'disable_about', __('Disable about','me_theme'), 'disable_about_callback', 'theme_settings', 'sections_section' );
         add_settings_field( 'disable_contact', __('Disable contact','me_theme'), 'disable_contact_callback', 'theme_settings', 'sections_section' );
         
         add_settings_field( 'portfolio_title', __('Portfolio section title','me_theme'), 'portfolio_title_callback', 'theme_settings', 'specific_section' );
         add_settings_field( 'portfolio_more_info', __('Portfolio "i" button tooltip','me_theme'), 'portfolio_more_info_callback', 'theme_settings', 'specific_section' );
         add_settings_field( 'portfolio_link', __('Portfolio link button tooltip','me_theme'), 'portfolio_link_callback', 'theme_settings', 'specific_section' );
         add_settings_field( 'services_title', __('Services section title','me_theme'), 'services_title_callback', 'theme_settings', 'specific_section' );
         add_settings_field( 'about_title', __('About section title','me_theme'), 'about_title_callback', 'theme_settings', 'specific_section' );
         add_settings_field( 'contact_title', __('Contact section title','me_theme'), 'contact_title_callback', 'theme_settings', 'specific_section' );
         
         add_settings_field( 'analytics_code', __('Paste your analyitics tracking code into this textarea','me_theme'), 'analytics_code_callback', 'theme_settings', 'analytics_section' );

}//END: general_settings()

/*
CALLBACKS
*/
require_once('general_section_callbacks.php');
require_once('general_field_callbacks.php');

?>