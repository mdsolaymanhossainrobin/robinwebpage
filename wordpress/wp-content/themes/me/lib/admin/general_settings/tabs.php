<?php

    echo '<h2 class="nav-tab-wrapper">';


    echo '<a class="nav-tab  nav-tab-active" href="?page=theme_settings">';
    echo __('General settings','me_theme');
    echo '</a>';


    echo '<a class="nav-tab" href="?page=style_settings">';
    echo __('Styling','me_theme');
    echo '</a>';

    echo '<a class="nav-tab" href="?page=contact_settings">';
    echo __('Contact settings','me_theme');
    echo '</a>';

    echo '</h2>';

?>