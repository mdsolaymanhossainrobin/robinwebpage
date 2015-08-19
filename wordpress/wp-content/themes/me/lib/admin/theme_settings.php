<?php
//add the above defined menus to the admin
add_action("admin_menu", "me_admin_menus");

function me_admin_menus() {
    //add "Me settings" to the menu
    add_menu_page( __( 'Theme settings','me_theme'), __( 'Theme settings','me_theme'), 'manage_options', 'theme_settings', 'theme_settings_page');
    //Styling submenu
    add_submenu_page('theme_settings', __( 'Edit styles','me_theme'), __( 'Styling','me_theme'), 'manage_options', 'style_settings', 'style_settings_page');
    //Contact settings submenu
    add_submenu_page('theme_settings', __( 'Contact settings','me_theme'), __( 'Contact settings','me_theme'), 'manage_options', 'contact_settings', 'contact_settings_page');
}

require_once('general_settings/general_settings.php');
require_once('style_settings/style_settings.php');
require_once('contact_settings/contact_settings.php');

