<?php

function slider_settings_page() {
?>
    <div class="wrap">

         <form method="post" action="options.php">

               <?php settings_fields('slider_setting'); ?>
               <?php do_settings_sections('slider_settings'); ?>

               <input type="submit" class="button-primary" value="<?php _e('Save Changes','me_theme') ?>" />

         </form>

    </div>

    <?php


}

add_action('admin_init','slider_settings');
function slider_settings() {

         /*
         REGISTER OPTIONS
         */
         register_setting('slider_setting','slider_animation');
         register_setting('slider_setting','slider_direction');
         register_setting('slider_setting','slider_slideshow');
         register_setting('slider_setting','slider_speed');
         register_setting('slider_setting','slider_animation_speed');
         register_setting('slider_setting','slider_direction_nav');
         register_setting('slider_setting','slider_control_nav');
         register_setting('slider_setting','slider_keyboard_nav');
         register_setting('slider_setting','slider_mousewheel');
         register_setting('slider_setting','slider_randomize');
         register_setting('slider_setting','slider_start');

         /*
         DEFINE SECTIONS
         */
         add_settings_section( 'slider_section', __('Slider settings','me_theme'), 'slider_section_callback', 'slider_settings' );

         /*
         DEFINE FIELDS
         */
         add_settings_field( 'slider_animation', __('Select your animation type','me_theme'), 'slider_animation_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_direction', __('Select the sliding direction','me_theme'), 'slider_direction_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_slideshow', __('Animate slider automatically','me_theme'), 'slider_slideshow_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_speed', __('Slideshow speed','me_theme'), 'slider_speed_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_animation_speed', __('Slideshow speed','me_theme'), 'slider_animation_speed_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_direction_nav', __('Allow Prev/Next buttons?','me_theme'), 'slider_direction_nav_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_control_nav', __('ControlNav?','me_theme'), 'slider_control_nav_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_keyboard_nav', __('Allow keyboard navigation?','me_theme'), 'slider_keyboard_nav_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_mousewheel', __('Allow mousewheel navigation?','me_theme'), 'slider_mousewheel_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_randomize', __('Randomize slide order?','me_theme'), 'slider_randomize_callback', 'slider_settings', 'slider_section' );
         add_settings_field( 'slider_start', __('Slide to start','me_theme'), 'slider_start_callback', 'slider_settings', 'slider_section' );

}

require_once('slider_section_callbacks.php');
require_once('slider_field_callbacks.php');

?>