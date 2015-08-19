<?php
function my_admin_scripts() {

         wp_enqueue_script('jquery-ui-sortable');
         wp_enqueue_script('media-upload');
         wp_enqueue_script('thickbox');
         wp_register_script('portfolio', get_template_directory_uri().'/lib/portfolio/portfolio.js', array('jquery','media-upload','thickbox'));
         wp_enqueue_script('portfolio');
         wp_enqueue_script('colorpicker2', get_template_directory_uri().'/lib/admin/colorpicker/js/colorpicker.js');
         wp_register_script('media-box', get_template_directory_uri() .'/lib/misc/media-box.js', array('jquery','media-upload','thickbox'));
         wp_enqueue_script('media-box');
}

function my_admin_styles() {

         wp_enqueue_style('thickbox');
         wp_enqueue_style('colorpicker', get_template_directory_uri().'/lib/admin/colorpicker/css/colorpicker.css');
         wp_enqueue_style('admin_styles', get_template_directory_uri().'/lib/admin/admin_styles.css');


}

add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles');
?>