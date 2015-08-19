<?php

function style_settings_page() {

    require_once('tabs.php'); ?>

    <div class="wrap">

         <form method="post" action="options.php">

               <?php settings_fields('styles'); ?>
               <?php do_settings_sections('style_settings'); ?>

               <input type="submit" class="button-primary" value="<?php _e('Save Changes','me_theme') ?>" style="margin-bottom: 40px;" />

         </form>

    </div>

    <?php

}

add_action('admin_init','style_settings');
function style_settings() {
         /*
         REGISTER OPTIONS
         */
         register_setting('styles','body_font');
         register_setting('styles','body_font_size');
         register_setting('styles','body_font_color');
         register_setting('styles','link_color');
         register_setting('styles','menu_font');
         register_setting('styles','menu_font_size');
         register_setting('styles','menu_font_color');
         register_setting('styles','hidden_menu_background');
         register_setting('styles','hidden_menu_color');
         register_setting('styles','background_color');
         register_setting('styles','line_color');
         register_setting('styles','heading_font');
         register_setting('styles','heading_color');
         register_setting('styles','intro_font');
         register_setting('styles','intro_font_size');
         register_setting('styles','page_title_font');

         /*
         DEFINE SECTIONS
         */
         add_settings_section( 'general_style_section', '', 'general_style_callback', 'style_settings' );
         
         /*
         DEFINE FIELDS
         */
         add_settings_field( 'body_font', __('Body font','me_theme'), 'body_font_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'body_font_size', __('Body font size','me_theme'), 'body_font_size_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'body_color', __('Body font color','me_theme'), 'body_color_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'link_color', __('Link color','me_theme'), 'link_color_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'menu_font', __('Menu font','me_theme'), 'menu_font_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'menu_font_size', __('Menu font size','me_theme'), 'menu_font_size_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'menu_font_color', __('Menu font color','me_theme'), 'menu_font_color_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'hidden_menu_background', __('Hidden menu background','me_theme'), 'hidden_menu_background_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'hidden_menu_color', __('Hidden menu font color','me_theme'), 'hidden_menu_color_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'background_color', __('Background color','me_theme'), 'background_color_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'line_color', __('Line color','me_theme'), 'line_color_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'heading_font', __('Heading font','me_theme'), 'heading_font_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'heading_color', __('Heading font color','me_theme'), 'heading_color_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'intro_font', __('Intro text font','me_theme'), 'intro_font_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'intro_font_size', __('Intro text font size','me_theme'), 'intro_font_size_callback', 'style_settings', 'general_style_section' );
         add_settings_field( 'page_title_font', __('Page title font','me_theme'), 'page_title_font_callback', 'style_settings', 'general_style_section' );
}

require_once('style_section_callbacks.php');
require_once('style_fields_callbacks.php');

?>