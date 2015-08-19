<?php

function slider_animation_callback(){
      
      $options = get_option('slider_animation');
      if (!$options){
         echo "<select name='slider_animation'>";
         echo "<option value='slide' selected='selected'>";
         echo __('Slide','me_theme');
         echo "</option>";
         echo "<option value='fade'>";
         echo __('Fade','me_theme');
         echo "</option>";
         echo "</select>";
      }
      if ($options){
         echo "<select name='slider_animation'>";
         echo "<option value='$options' selected='selected'>$options</option>";
         if ($options == 'slide'){
            echo "<option value='fade'>";
            echo __('Fade','me_theme');
            echo "</option>";
         }
         if ($options == 'fade'){
            echo "<option value='slide'>";
            echo __('Slide','me_theme');
            echo "</option>";
         }
      }


}

function slider_direction_callback(){
      
      $options = get_option('slider_direction');
      echo "<select name='slider_direction'>";
      echo "<option value='$options' selected='selected'>$options</option>";
      echo "<option value='horizontal'>";
      echo __('Horizontal','me_theme');
      echo "</option>";
      echo "<option value='vertical'>";
      echo __('Vertical','me_theme');
      echo "</option>";
      echo "</select>";


}

function slider_slideshow_callback() {
      $options = get_option('slider_slideshow');
      if (!$options) {
         echo "<select name='slider_slideshow'>";
         echo "<option value='true' selected='selected'>";
         echo __('true','me_theme');
         echo "</option>";
         echo "<option value='false'>";
         echo __('false','me_theme');
         echo "</option>";
         echo "</select>";
      }
      if ($options) {
         echo "<select name='slider_slideshow'>";
         echo "<option value='$options' selected='selected'>$options</option>";
              if ($options == 'false'){
                  echo "<option value='true'>";
                  echo __('true','me_theme');
                  echo "</option>";
              }
              if ($options == 'true'){
                  echo "<option value='false'>";
                  echo __('false','me_theme');
                  echo "</option>";
              }
         echo "</select>";
      }

}

function slider_speed_callback() {
      $options = get_option('slider_speed');
      if (!$options) {
         echo "<input type='text' name='slider_speed' value='7000' />";
         echo '<label for="slider_speed">';
         echo __('Set the speed of the slideshow cycling, in milliseconds','me_theme');
         echo '</label>';
      }
      if ($options) {
         echo "<input type='text' name='slider_speed' value='$options' />";
         echo '<label for="slider_speed">';
         echo __('Set the speed of the slideshow cycling, in milliseconds','me_theme');
         echo '</label>';
      }

}

function slider_animation_speed_callback() {
      $options = get_option('slider_animation_speed');
      if (!$options) {
         echo "<input type='text' name='slider_animation_speed' value='600' />";
         echo '<label for="slider_animation_speed">';
         echo __('Set the speed of animations, in milliseconds','me_theme');
         echo '</label>';
      }
      if ($options) {
         echo "<input type='text' name='slider_animation_speed' value='$options' />";
         echo '<label for="slider_animation_speed">';
         echo __('Set the speed of animations, in milliseconds','me_theme');
         echo '</label>';
      }

}

function slider_direction_nav_callback() {
      $options = get_option('slider_direction_nav');
      if (!$options) {
         echo "<select name='slider_direction_nav'>";
         echo "<option value='true' selected='selected'>";
         echo __('true','me_theme');
         echo "</option>";
         echo "<option value='false'>";
         echo __('false','me_theme');
         echo "</option>";
         echo "</select>";
      }
      if ($options) {
         echo "<select name='slider_direction_nav'>";
         echo "<option value='$options' selected='selected'>$options</option>";
              if ($options == 'false'){
                  echo "<option value='true'>";
                  echo __('true','me_theme');
                  echo "</option>";
              }
              if ($options == 'true'){
                  echo "<option value='false'>";
                  echo __('false','me_theme');
                  echo "</option>";
              }
         echo "</select>";
      }
}

function slider_control_nav_callback() {
      $options = get_option('slider_control_nav');
      if (!$options) {
         echo "<select name='slider_control_nav'>";
         echo "<option value='true'>";
         echo __('true','me_theme');
         echo "</option>";
         echo "<option value='false' selected='selected'>";
         echo __('false','me_theme');
         echo "</option>";
         echo "</select>";
      }
      if ($options) {
         echo "<select name='slider_control_nav'>";
         echo "<option value='$options' selected='selected'>$options</option>";
              if ($options == 'false'){
                  echo "<option value='true'>";
                  echo __('true','me_theme');
                  echo "</option>";
              }
              if ($options == 'true'){
                  echo "<option value='false'>";
                  echo __('false','me_theme');
                  echo "</option>";
              }
         echo "</select>";
      }
      echo '<label for="slider_control_nav">';
      echo __('Create navigation for paging control of each clide?','me_theme');
      echo '</label>';
}

function slider_keyboard_nav_callback() {
      $options = get_option('slider_keyboard_nav');
      if (!$options) {
         echo "<select name='slider_keyboard_nav'>";
         echo "<option value='true' selected='selected'>";
         echo __('true','me_theme');
         echo "</option>";
         echo "<option value='false'>";
         echo __('false','me_theme');
         echo "</option>";
         echo "</select>";
      }
      if ($options) {
         echo "<select name='slider_keyboard_nav'>";
         echo "<option value='$options' selected='selected'>$options</option>";
              if ($options == 'false'){
                  echo "<option value='true'>";
                  echo __('true','me_theme');
                  echo "</option>";
              }
              if ($options == 'true'){
                  echo "<option value='false'>";
                  echo __('false','me_theme');
                  echo "</option>";
              }
         echo "</select>";
      }
}

function slider_mousewheel_callback() {
      $options = get_option('slider_mousewheel');
      if (!$options) {
         echo "<select name='slider_mousewheel'>";
         echo "<option value='true'>";
         echo __('true','me_theme');
         echo "</option>";
         echo "<option value='false' selected='selected'>";
         echo __('false','me_theme');
         echo "</option>";
         echo "</select>";
      }
      if ($options) {
         echo "<select name='slider_mousewheel'>";
         echo "<option value='$options' selected='selected'>$options</option>";
              if ($options == 'false'){
                  echo "<option value='true'>";
                  echo __('true','me_theme');
                  echo "</option>";
              }
              if ($options == 'true'){
                  echo "<option value='false'>";
                  echo __('false','me_theme');
                  echo "</option>";
              }
         echo "</select>";
      }
}

function slider_randomize_callback() {
      $options = get_option('slider_randomize');
      if (!$options) {
         echo "<select name='slider_randomize'>";
         echo "<option value='true'>";
         echo __('true','me_theme');
         echo "</option>";
         echo "<option value='false' selected='selected'>";
         echo __('false','me_theme');
         echo "</option>";
         echo "</select>";
      }
      if ($options) {
         echo "<select name='slider_randomize'>";
         echo "<option value='$options' selected='selected'>$options</option>";
              if ($options == 'false'){
                  echo "<option value='true'>";
                  echo __('true','me_theme');
                  echo "</option>";
              }
              if ($options == 'true'){
                  echo "<option value='false'>";
                  echo __('false','me_theme');
                  echo "</option>";
              }
         echo "</select>";
      }
}

function slider_start_callback() {
      $options = get_option('slider_start');
      if (!$options) {
         echo "<input type='text' name='slider_start' value='0' />";
         echo "<label for='slider_start'>";
         echo __('The slide that the slider should start on. 0 = first slide.','me_theme');
         echo "</label>";
      }
      if ($options) {
         echo "<input type='text' name='slider_start' value='$options' />";
         echo "<label for='slider_start'>";
         echo __('The slide that the slider should start on. 0 = first slide.','me_theme');
         echo "</label>";
      }
}

?>