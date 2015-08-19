<?php
function custom_theme_setup() {
  
    load_theme_textdomain('me_theme', get_template_directory() . '/lang');

}
add_action('after_theme_setup', 'custom_theme_setup');
?>