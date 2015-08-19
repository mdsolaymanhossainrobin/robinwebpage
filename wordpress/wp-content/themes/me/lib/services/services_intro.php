<?php

function services_intro_menu() {

         add_submenu_page('edit.php?post_type=service', __( 'Intro text','me_theme'), __( 'Overall description','me_theme'), 'manage_options', 'services_intro', 'services_intro_page');

}

add_action('admin_menu', 'services_intro_menu');


function services_intro_page() {

    ?>
    <div class="wrap">

         <form method="post" action="options.php">

               <?php settings_fields('services_intro'); ?>
               <?php do_settings_sections('services_intro'); ?>

               <input type="submit" class="button-primary" value="<?php _e('Save Changes','me_theme') ?>" />

         </form>

    </div>
    <?php
}

add_action('admin_init','services_intro');
function services_intro() {

         /*
         REGISTER OPTION
         */
         register_setting('services_intro','services_intro');

         /*
         DEFINE SECTION
         */
         add_settings_section( 'services_intro_section', __('Overall description','me_theme'), 'services_intro_section_callback', 'services_intro' );

         /*
         DEFINE FIELD
         */
         add_settings_field( 'services_intro', __('You can write an overall description about all of your services. This text will be shown under the page title.','me_theme'), 'services_intro_callback', 'services_intro', 'services_intro_section' );


}

function services_intro_section_callback(){}

function services_intro_callback(){
         $options = get_option('services_intro');
         echo "<textarea name='services_intro' rows='4' cols='70'>$options</textarea>";
}

?>