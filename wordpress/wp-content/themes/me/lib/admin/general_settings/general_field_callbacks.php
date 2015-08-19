<?php

//Logo margin
function logo_margin_callback() {

      $options = get_option('logo_margin');
      echo "<select name='logo_margin'>";
      echo "<option value='$options' selected='selected'>$options</option>
            <option value='0'>0</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            <option value='6'>6</option>
            <option value='7'>7</option>
            <option value='8'>8</option>
            <option value='9'>9</option>
            <option value='10'>10</option>
            <option value='11'>11</option>
            <option value='12'>12</option>
            <option value='13'>13</option>
            <option value='14'>14</option>
            <option value='15'>15</option>
            <option value='16'>16</option>
            <option value='17'>17</option>
            <option value='18'>18</option>
            <option value='19'>19</option>
            <option value='20'>20</option>
            <option value='21'>21</option>
            <option value='22'>22</option>
            <option value='23'>23</option>
            <option value='24'>24</option>
            <option value='25'>25</option>
            <option value='26'>26</option>
            <option value='27'>27</option>
            <option value='28'>28</option>
            <option value='29'>29</option>
            <option value='30'>30</option>
            <option value='31'>31</option>
            <option value='32'>32</option>
            <option value='33'>33</option>
            <option value='34'>34</option>
            <option value='35'>35</option>
            <option value='36'>36</option>
            <option value='37'>37</option>
            <option value='38'>38</option>
            <option value='39'>39</option>
            <option value='40'>40</option>
            <option value='41'>41</option>
            <option value='42'>42</option>
            <option value='43'>43</option>
            <option value='44'>44</option>
            <option value='45'>45</option>
            <option value='46'>46</option>
            <option value='47'>47</option>
            <option value='48'>48</option>
            <option value='49'>49</option>
            <option value='50'>50</option>";
      echo "</select>";
      echo '<label for="logo_margin">';
      echo __('in pixels','me_theme');
      echo '</label>';

}

//Logo url
function logo_url_callback() {
      $options = get_option('logo_url');
      $logo_button_text = __('Select Image','me_theme');
      echo "<input id='logo_url' type='text' size='36' name='logo_url' value='$options' class='image_select_field'/>";
      echo "<a id='logo_url_button' class='button image_select'>$logo_button_text</a>";
      //echo "<input id='logo_url_button' type='button' value='$logo_button_text' />";
}

//Logo alt text
function logo_alt_callback() {
      $options = get_option('logo_alt');
      echo "<input type='text' size='36' name='logo_alt' value='$options' />";
}

//Shortcut icon url
function shortcut_icon_callback() {
      $options = get_option('shortcut_icon');
      $shortcut_button_text = __('Select Image','me_theme');
      echo "<input id='shortcut_icon' type='text' size='36' name='shortcut_icon' value='$options' class='image_select_field' />";
      echo "<a id='shortcut_icon_button' class='button image_select'>$shortcut_button_text</a>";
}

//Touch icon 1 url 
function touch_icon1_callback() {
      $options = get_option('touch_icon1');
      $touchicon_button_text = __('Select Image','me_theme');
      echo "<input id='touch_icon1' type='text' size='36' name='touch_icon1' value='$options' class='image_select_field'/>";
      echo "<a id='touch_icon1_button' class='button image_select'>$touchicon_button_text</a>";
      echo '<br /><span class="description">';
      echo __('Touch icon for iPhone and iPod touch. Recommended resolution is 57x57 pixels.','me_theme');
      echo '</span>';
}

//Touch icon 2 url
function touch_icon2_callback() {
      $options = get_option('touch_icon2');
      $touchicon_button_text = __('Select Image','me_theme');
      echo "<input id='touch_icon2' type='text' size='36' name='touch_icon2' value='$options' class='image_select_field'/>";
      echo "<a id='touch_icon2_button' class='button image_select'>$touchicon_button_text</a>";
      echo '<br /><span class="description">';
      echo __('Touch icon for iPad. Recommended resolution is 72x72 pixels.','me_theme');
      echo '</span>';
}

//Touch icon 3 url
function touch_icon3_callback() {
      $options = get_option('touch_icon3');
      $touchicon_button_text = __('Select Image','me_theme');
      echo "<input id='touch_icon3' type='text' size='36' name='touch_icon3' value='$options' class='image_select_field'/>";
      echo "<a id='touch_icon3_button' class='button image_select'>$touchicon_button_text</a>";
      echo '<br /><span class="description">';
      echo __('Touch icon for high-resolution iPhone and iPod touch. Recommended resolution is 114x114 pixels.','me_theme');
      echo '</span>';
}

//Touch icon 4 url
function touch_icon4_callback() {
      $options = get_option('touch_icon4');
      $touchicon_button_text = __('Select Image','me_theme');
      echo "<input id='touch_icon4' type='text' size='36' name='touch_icon4' value='$options' class='image_select_field'/>";
      echo "<a id='touch_icon4_button' class='button image_select'>$touchicon_button_text</a>";
      echo '<br /><span class="description">';
      echo __('Touch icon for high-resolution iPad. Recommended resolution is 144x144 pixels.','me_theme');
      echo '</span>';
}

//Multipage navigation
function multipage_nav_callback() {
     $options = checked(1, get_option('multipage_nav'), false);
     echo '<input type="checkbox" id="multipage_nav" name="multipage_nav" value="1" ' . $options . ' style="margin-right: 10px;"/>';
     echo '<label for="multipage_nav">';
     echo __('Enable this option, if you would like to use more than one pages on your website.','me_theme');
     echo '</label>';
}

//Intro text
function intro_text_callback() {
      $options = get_option('intro_text');
      echo "<textarea name='intro_text' cols='60' rows='2'>$options</textarea>";
}

//Disable slider
function disable_slider_callback() {
     $options = checked(1, get_option('disable_slider'), false);
     echo '<input type="checkbox" id="disable_slider" name="disable_slider" value="1" ' . $options . '/>';
}

//Disable portfolio
function disable_portfolio_callback() {
     $options = checked(1, get_option('disable_portfolio'), false);
     echo '<input type="checkbox" id="disable_portfolio" name="disable_portfolio" value="1" ' . $options . '/>';
}

//Disable services
function disable_services_callback() {
     $options = checked(1, get_option('disable_services'), false);
     echo '<input type="checkbox" id="disable_services" name="disable_services" value="1" ' . $options . '/>';
}

//Disable about
function disable_about_callback() {
     $options = checked(1, get_option('disable_about'), false);
     echo '<input type="checkbox" id="disable_about" name="disable_about" value="1" ' . $options . '/>';
}

//Disable contact
function disable_contact_callback() {
     $options = checked(1, get_option('disable_contact'), false);
     echo '<input type="checkbox" id="disable_contact" name="disable_contact" value="1" ' . $options . '/>';
}

//Portfolio title
function portfolio_title_callback() {
     $options = get_option('portfolio_title');
     if (!$options){
        echo "<input type='text' size='36' name='portfolio_title' value='";
        echo __('our work','me_theme') ;
        echo "'/>";
     }
     if ($options){
        echo "<input type='text' size='36' name='portfolio_title' value='$options' />";
     }
}

//Portfolio more info tooltip
function portfolio_more_info_callback() {
     $options = get_option('portfolio_more_info');
     echo "<input type='text' size='36' name='portfolio_more_info' value='$options' />";

}

//Portfolio link button tooltip
function portfolio_link_callback() {
     $options = get_option('portfolio_link');
     echo "<input type='text' size='36' name='portfolio_link' value='$options' />";
}

//Services title
function services_title_callback() {
     $options = get_option('services_title');
     if (!$options){
        echo "<input type='text' size='36' name='services_title' value='";
        echo __('services','me_theme') ;
        echo "'/>";
     }
     if ($options){
        echo "<input type='text' size='36' name='services_title' value='$options' />";
     }
}

//About title
function about_title_callback() {
     $options = get_option('about_title');
     if (!$options){
        echo "<input type='text' size='36' name='about_title' value='";
        echo __('about me','me_theme') ;
        echo "'/>";
     }
     if ($options){
        echo "<input type='text' size='36' name='about_title' value='$options' />";
     }
}

//Contact title
function contact_title_callback() {
     $options = get_option('contact_title');
     if (!$options){
        echo "<input type='text' size='36' name='contact_title' value='";
        echo __('contact','me_theme') ;
        echo "'/>";
     }
     if ($options){
        echo "<input type='text' size='36' name='contact_title' value='$options' />";
     }
}

//Analytics code
function analytics_code_callback() {
      $options = get_option('analytics_code');
      echo "<textarea name='analytics_code' cols='60' rows='10' style='margin-bottom: 30px;'>$options</textarea>";
}
?>