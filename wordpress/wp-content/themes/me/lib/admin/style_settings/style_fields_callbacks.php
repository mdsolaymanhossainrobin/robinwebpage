<?php

//Body font
function body_font_callback() {
      $options = get_option('body_font');
      echo "<select name='body_font'>";
      if (!$options) {
          echo '<option value="Open Sans">Open Sans</option>';
      }
      if ($options) {
          echo "<option value='$options'>$options</option>";
      }
      echo '
           <optgroup label="Sans Serif style">
                     <option value="Abel">Abel</option>
                     <option value="Andika">Andika</option>
                     <option value="Antic">Antic</option>
                     <option value="arial">Arial</option>
                     <option value="Arimo">Arimo</option>
                     <option value="Asap">Asap</option>
                     <option value="Gudea">Gudea</option>
                     <option value="Cabin">Cabin</option>
                     <option value="Cantarell">Cantarell</option>
                     <option value="Didact Gothic">Didact gothic</option>
                     <option value="Droid Sans">Droid Sans</option>
                     <option value="Electrolize">Electrolize</option>
                     <option value="Josefin Sans">Josefin Sans</option>
                     <option value="Lato">Lato</option>
                     <option value="Lekton">Lekton</option>
                     <option value="Maven Pro">Maven Pro</option>
                     <option value="Michroma">Michroma</option>
                     <option value="Muli">Muli</option>
                     <option value="Nobile">Nobile</option>
                     <option value="Numans">Numans</option>
                     <option value="Nunito">Nunito</option>
                     <option value="PT Sans">PT Sans</option>
                     <option value="Quattrocento Sans">Quattrocento Sans</option>
                     <option value="Quicksand">Quicksand</option>
                     <option value="Questrial">Questrial</option>
                     <option value="Rationale">Rationale</option>
                     <option value="Terminal Dosis">Terminal Dosis</option>
                     <option value="verdana">Verdana</option>
           </optgroup>
           <optgroup label="Serif style">
                     <option value="Alice" label="Alice">Alice</option>
                     <option value="Alike Angular" label="Alike">Alike</option>
                     <option value="Andada" label="Andada">Andada</option>
                     <option value="Arapey" label="Arapey">Arapey</option>
                     <option value="Arvo" label="Arvo">Arvo</option>
                     <option value="Alegreya SC" label="Alegreya">Alegreya</option>
                     <option value="Bitter" label="Bitter">Bitter</option>
                     <option value="Brawler" label="Brawler">Brawler</option>
                     <option value="Cardo" label="Cardo">Cardo</option>
                     <option value="Copse" label="Copse">Copse</option>
                     <option value="Crimson Text" label="Crimson text">Crimson text</option>
                     <option value="Fanwood Text" label="Fanwood text">Fanwood text</option>
                     <option value="Fjord One" label="Fjord one">Fjord one</option>
                     <option value="Gentium Basic" label="Gentium basic">Gentium basic</option>
                     <option value="EB Garamond" label="EB Garamond">EB Garamond</option>
                     <option value="Goudy Bookletter 1911" label="Goudy Bookletter 1911">Goudy Bookletter 1911</option>
                     <option value="Linden Hill" label="Linden Hill">Linden Hill</option>
                     <option value="Lusitana" label="Lusitana">Lusitana</option>
                     <option value="Lustria" label="Lustria">Lustria</option>
                     <option value="Mate" label="Mate">Mate</option>
                     <option value="Merriweather" label="Merriweather">Merriweather</option>
                     <option value="Petrona" label="Petrona">Petrona</option>
                     <option value="Podkova" label="Podkova">Podkova</option>
                     <option value="Poly" label="Poly">Poly</option>
                     <option value="Prata" label="Prata">Prata</option>
                     <option value="Quattrocento" label="Quattrocento">Quattrocento</option>
           </optgroup>
      ';
      echo '</select>';
}

//Body font size
function body_font_size_callback() {
         $options = get_option('body_font_size');
         echo "<select name='body_font_size'>";
         if ( !get_option('body_font_size') ){
            echo "<option value='15px' selected='selected'>15px</option>";
            }
         if ( get_option('body_font_size') ){
            echo "<option value='$options'>$options</option>";
            }
         echo '
         <option value="12px">8px</option>
         <option value="12px">9px</option>
         <option value="12px">10px</option>
         <option value="12px">11px</option>
         <option value="12px">12px</option>
         <option value="13px">13px</option>
         <option value="14px">14px</option>
         <option value="15px">15px</option>
         <option value="16px">16px</option>
         <option value="17px">17px</option>
         <option value="18px">18px</option>
         <option value="19px">19px</option>
         <option value="20px">20px</option>
         <option value="21px">21px</option>
         <option value="22px">22px</option>
         ';
         echo "</select>";
}

//Body font color
function body_color_callback() {
         $options = get_option('body_font_color');
         if (!$options){
         echo "<input id='body_font_color' type='text' size='36' name='body_font_color' value='#666666' />";
         }
         if ($options){
         echo "<input id='body_font_color' type='text' size='36' name='body_font_color' value='$options' />";
         }
         echo "<a id='body_color_button' class='button'>";
         echo __('Choose color','me_theme');
         echo "</a>";
         echo "
         <script type='text/javascript'>
         jQuery('#body_color_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#body_font_color').val('#' + hex);
	      }
         });
         </script>
         ";
}

//Link color
function link_color_callback() {
         $options = get_option('link_color');
         if (!$options){
         echo "<input id='link_color' type='text' size='36' name='link_color' value='#990000' />";
         }
         if ($options){
         echo "<input id='link_color' type='text' size='36' name='link_color' value='$options' />";
         }
         echo "<a id='link_color_button' class='button'>";
         echo __('Choose color','me_theme');
         echo "</a>";
         echo "
         <script type='text/javascript'>
         jQuery('#link_color_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#link_color').val('#' + hex);
	      }
         });
         </script>
         ";
}

//Menu font family
function menu_font_callback() {
      $options = get_option('menu_font');
      echo "<select name='menu_font'>";
      if (!get_option('menu_font')) {
         echo '<option value="Andada">Andada</option>';
      }
      if (get_option('menu_font')) {
         echo "<option value='$options' selected='selected'>$options</option>";
      }
      echo '<optgroup label="Sans Serif style">
                      <option value="Abel">Abel</option>
                      <option value="AftaSans">Afta Sans</option>
                      <option value="AndikaBasic">Andika Basic</option>
                      <option value="Antic">Antic</option>
                      <option value="Arimo">Arimo</option>
                      <option value="Asap">Asap</option>
                      <option value="AurulentSans">Aurulent Sans</option>
                      <option value="Bebas">Bebas</option>
                      <option value="BebasNeue">BebasNeue</option>
                      <option value="BonvenoCF">BonvenoCF</option>
                      <option value="Cabin">Cabin</option>
                      <option value="Cantarell">Cantarell</option>
                      <option value="Capsuula">Capsuula</option>
                      <option value="DidactGothic">Didact Gothic</option>
                      <option value="DroidSans">Droid Sans</option>
                      <option value="Electrolize">Electrolize</option>
                      <option value="Enigmatic">Enigmatic</option>
                      <option value="Existence_Light">Existence Light</option>
                      <option value="Gudea">Gudea</option>
                      <option value="JosefinSans">Josefin Sans</option>
                      <option value="Juice">Juice</option>
                      <option value="Lato">Lato</option>
                      <option value="LeagueGothic">League Gothic</option>
                      <option value="Lekton">Lekton</option>
                      <option value="MavenPro">Maven Pro</option>
                      <option value="Michroma">Michroma</option>
                      <option value="Nobile">Nobile</option>
                      <option value="Numans">Numans</option>
                      <option value="Nunito">Nunito</option>
                      <option value="OpenSans">OpenSans</option>
                      <option value="QuattrocentoSans">Quattrocento Sans</option>
                      <option value="Questrial">Questrial</option>
                      <option value="Quicksand_Book">Quicksand Book</option>
                      <option value="Quicksand_Light">Quicksand Light</option>
                      <option value="Rationale">Rationale</option>
                      <option value="Rawengulk_Sans">Rawengulk Sans</option>
                      <option value="Terminal_Dosis">Terminal Dosis</option>
                      <option value="TexGyreAdventor">TexGyreAdventor</option>
                      <option value="Titillium_Thin">Titillium Thin</option>
                      <option value="Titillium_Light">Titillium Light</option>
                      <option value="Titillium_Regular">Titillium Regular</option>
            </optgroup>
            <optgroup label="Serif style">
                      <option value="Alegreya">Alegreya</option>
                      <option value="Alice">Alice</option>
                      <option value="Andada">Andada</option>
                      <option value="Arapey">Arapey</option>
                      <option value="Arvo">Arvo</option>
                      <option value="Bitter">Bitter</option>
                      <option value="Brawler">Brawler</option>
                      <option value="Cardo">Cardo</option>
                      <option value="Charis">Charis</option>
                      <option value="Copse">Copse</option>
                      <option value="CrimsonText">Crimson Text</option>
                      <option value="EB_Garamond">EB Garamond</option>
                      <option value="FanWood_Text">FanWood Text</option>
                      <option value="Fjord">Fjord</option>
                      <option value="Gentium">Gentium</option>
                      <option value="Goudy">Goudy</option>
                      <option value="LindenHill">LindenHill</option>
                      <option value="Linux_Libertine">Linux_Libertine</option>
                      <option value="Lusitana">Lusitana</option>
                      <option value="Lustria">Lustria</option>
                      <option value="Mate">Mate</option>
                      <option value="Petrona">Petrona</option>
                      <option value="Podkova">Podkova</option>
                      <option value="Poly">Poly</option>
                      <option value="Prata">Prata</option>
                      <option value="Quattrocento">Quattrocento</option>
                      <option value="Unna">Unna</option>
            </optgroup>
      ';
      echo "</select>";
}

//Menu font size
function menu_font_size_callback() {
         $options = get_option('menu_font_size');
         echo "<select name='menu_font_size'>";
         if ( !get_option('menu_font_size') ){
            echo "<option value='16px' selected='selected'>16px</option>";
            }
         if ( get_option('menu_font_size') ){
            echo "<option value='$options'>$options</option>";
            }
         echo '
         <option value="12px">12px</option>
         <option value="13px">13px</option>
         <option value="14px">14px</option>
         <option value="15px">15px</option>
         <option value="16px">16px</option>
         <option value="17px">17px</option>
         <option value="18px">18px</option>
         <option value="19px">19px</option>
         <option value="20px">20px</option>
         <option value="21px">21px</option>
         <option value="22px">22px</option>
         <option value="23px">23px</option>
         <option value="24px">24px</option>
         <option value="25px">25px</option>
         <option value="26px">26px</option>
         <option value="27px">27px</option>
         <option value="28px">28px</option>
         <option value="29px">29px</option>
         <option value="30px">30px</option>
         ';
         echo "</select>";
}

//Menu color
function menu_font_color_callback() {
         $options = get_option('menu_font_color');
         if (!$options){
         echo "<input id='menu_font_color' type='text' size='36' name='menu_font_color' value='#272727' />";
         }
         if ($options){
         echo "<input id='menu_font_color' type='text' size='36' name='menu_font_color' value='$options' />";
         }
         echo "<a id='menu_color_button' class='button'>";
         echo __('Choose color','me_theme');
         echo "</a>";
         echo "
         <script type='text/javascript'>
         jQuery('#menu_color_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#menu_font_color').val('#' + hex);
	      }
         });
         </script>
         ";
}

//Hidden menu background color
function hidden_menu_background_callback() {
         $options = get_option('hidden_menu_background');
         if (!$options){
         echo "<input id='hidden_menu_background' type='text' size='36' name='hidden_menu_background' value='#272727' />";
         }
         if ($options){
         echo "<input id='hidden_menu_background' type='text' size='36' name='hidden_menu_background' value='$options' />";
         }
         echo "<a id='hidden_menu_background_button' class='button'>";
         echo __('Choose color','me_theme');
         echo "</a>";
         echo "
         <script type='text/javascript'>
         jQuery('#hidden_menu_background_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#hidden_menu_background').val('#' + hex);
	      }
         });
         </script>
         ";
}

//Hidden menu font color
function hidden_menu_color_callback() {
         $options = get_option('hidden_menu_color');
         if (!$options){
         echo "<input id='hidden_menu_color' type='text' size='36' name='hidden_menu_color' value='#F8F8F8' />";
         }
         if ($options){
         echo "<input id='hidden_menu_color' type='text' size='36' name='hidden_menu_color' value='$options' />";
         }
         echo "<a id='hidden_menu_color_button' class='button'>";
         echo __('Choose color','me_theme');
         echo "</a>";
         echo "
         <script type='text/javascript'>
         jQuery('#hidden_menu_color_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#hidden_menu_color').val('#' + hex);
	      }
         });
         </script>
         ";
}

//Background color
function background_color_callback() {
         $options = get_option('background_color');
         if ($options){
         echo "<input id='background_color' type='text' size='36' name='background_color' value='$options' />";
         }
         if (!$options){
         echo "<input id='background_color' type='text' size='36' name='background_color' value='#F8F8F8' />";
         }
         echo "<a id='background_color_button' class='button'>";
         echo __('Choose color','me_theme');
         echo "</a>";
         echo "
         <script type='text/javascript'>
         jQuery('#background_color_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#background_color').val('#' + hex);
	      }
         });
         </script>
         ";
}

//Line color
function line_color_callback() {
         $options = get_option('line_color');
         if ($options){
         echo "<input id='line_color' type='text' size='36' name='line_color' value='$options' />";
         }
         if (!$options){
         echo "<input id='line_color' type='text' size='36' name='line_color' value='#CCCCCC' />";
         }
         echo "<a id='line_color_button' class='button'>";
         echo __('Choose color','me_theme');
         echo "</a>";
         echo "
         <script type='text/javascript'>
         jQuery('#line_color_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#line_color').val('#' + hex);
	      }
         });
         </script>
         ";
}

//Heading font family
function heading_font_callback() {
      $options = get_option('heading_font');
      echo "<select name='heading_font'>";
      if (!$options) {
          echo '<option value="Fjord One">Fjord one</option>';
      }
      if ($options) {
          echo "<option value='$options'>$options</option>";
      }
      echo '
           <optgroup label="Sans Serif style">
                     <option value="Abel">Abel</option>
                     <option value="Andika">Andika</option>
                     <option value="Antic">Antic</option>
                     <option value="Arimo">Arimo</option>
                     <option value="Asap">Asap</option>
                     <option value="Gudea">Gudea</option>
                     <option value="Cabin">Cabin</option>
                     <option value="Cantarell">Cantarell</option>
                     <option value="Didact Gothic">Didact gothic</option>
                     <option value="Droid Sans">Droid Sans</option>
                     <option value="Electrolize">Electrolize</option>
                     <option value="Josefin Sans">Josefin Sans</option>
                     <option value="Lato">Lato</option>
                     <option value="Lekton">Lekton</option>
                     <option value="Maven Pro">Maven Pro</option>
                     <option value="Michroma">Michroma</option>
                     <option value="Muli">Muli</option>
                     <option value="Nobile">Nobile</option>
                     <option value="Numans">Numans</option>
                     <option value="Nunito">Nunito</option>
                     <option value="PT Sans">PT Sans</option>
                     <option value="Quattrocento Sans">Quattrocento Sans</option>
                     <option value="Quicksand">Quicksand</option>
                     <option value="Questrial">Questrial</option>
                     <option value="Rationale">Rationale</option>
                     <option value="Terminal Dosis">Terminal Dosis</option>
           </optgroup>
           <optgroup label="Serif style">
                     <option value="Alice" label="Alice">Alice</option>
                     <option value="Alike Angular" label="Alike">Alike</option>
                     <option value="Andada" label="Andada">Andada</option>
                     <option value="Arapey" label="Arapey">Arapey</option>
                     <option value="Arvo" label="Arvo">Arvo</option>
                     <option value="Alegreya SC" label="Alegreya">Alegreya</option>
                     <option value="Bitter" label="Bitter">Bitter</option>
                     <option value="Brawler" label="Brawler">Brawler</option>
                     <option value="Cardo" label="Cardo">Cardo</option>
                     <option value="Copse" label="Copse">Copse</option>
                     <option value="Crimson Text" label="Crimson text">Crimson text</option>
                     <option value="Fanwood Text" label="Fanwood text">Fanwood text</option>
                     <option value="Fjord One" label="Fjord one">Fjord one</option>
                     <option value="Gentium Basic" label="Gentium basic">Gentium basic</option>
                     <option value="EB Garamond" label="EB Garamond">EB Garamond</option>
                     <option value="Goudy Bookletter 1911" label="Goudy Bookletter 1911">Goudy Bookletter 1911</option>
                     <option value="Linden Hill" label="Linden Hill">Linden Hill</option>
                     <option value="Lusitana" label="Lusitana">Lusitana</option>
                     <option value="Lustria" label="Lustria">Lustria</option>
                     <option value="Mate" label="Mate">Mate</option>
                     <option value="Merriweather" label="Merriweather">Merriweather</option>
                     <option value="Petrona" label="Petrona">Petrona</option>
                     <option value="Podkova" label="Podkova">Podkova</option>
                     <option value="Poly" label="Poly">Poly</option>
                     <option value="Prata" label="Prata">Prata</option>
                     <option value="Quattrocento" label="Quattrocento">Quattrocento</option>
           </optgroup>
      ';
      echo '</select>';
}

//Line color
function heading_color_callback() {
         $options = get_option('heading_color');
         if ($options){
         echo "<input id='heading_color' type='text' size='36' name='heading_color' value='$options' />";
         }
         if (!$options){
         echo "<input id='heading_color' type='text' size='36' name='heading_color' value='' />";
         }
         echo "<a id='heading_color_button' class='button'>";
         echo __('Choose color','me_theme');
         echo "</a>";
         echo "
         <script type='text/javascript'>
         jQuery('#heading_color_button').ColorPicker({
               color: '$options',
               onShow: function (colpkr) {
                       jQuery(colpkr).fadeIn(500);
                       return false;
               },
               onHide: function (colpkr) {
                       jQuery(colpkr).fadeOut(500);
                       return false;
               },
               onChange: function (hsb, hex, rgb) {
                         jQuery('input#heading_color').val('#' + hex);
	      }
         });
         </script>
         ";
}

//Intro font family
function intro_font_callback() {
      $options = get_option('intro_font');
      echo "<select name='intro_font'>";
      if (!$options) {
          echo '<option value="inherited">';
          echo __('Inherited','me_theme');
          echo '</option>';
      }
      if ($options) {
          echo "<option value='$options'>$options</option>";
      }
           echo '<option value="inherited">';
           echo __('Inherited','me_theme');
           echo '</option>
           <optgroup label="Sans Serif style">
                     <option value="Abel">Abel</option>
                     <option value="Andika">Andika</option>
                     <option value="Antic">Antic</option>
                     <option value="Arimo">Arimo</option>
                     <option value="Asap">Asap</option>
                     <option value="Gudea">Gudea</option>
                     <option value="Cabin">Cabin</option>
                     <option value="Cantarell">Cantarell</option>
                     <option value="Didact Gothic">Didact gothic</option>
                     <option value="Droid Sans">Droid Sans</option>
                     <option value="Electrolize">Electrolize</option>
                     <option value="Josefin Sans">Josefin Sans</option>
                     <option value="Lato">Lato</option>
                     <option value="Lekton">Lekton</option>
                     <option value="Maven Pro">Maven Pro</option>
                     <option value="Michroma">Michroma</option>
                     <option value="Muli">Muli</option>
                     <option value="Nobile">Nobile</option>
                     <option value="Numans">Numans</option>
                     <option value="Nunito">Nunito</option>
                     <option value="PT Sans">PT Sans</option>
                     <option value="Quattrocento Sans">Quattrocento Sans</option>
                     <option value="Quicksand">Quicksand</option>
                     <option value="Questrial">Questrial</option>
                     <option value="Rationale">Rationale</option>
                     <option value="Terminal Dosis">Terminal Dosis</option>
           </optgroup>
           <optgroup label="Serif style">
                     <option value="Alice" label="Alice">Alice</option>
                     <option value="Alike Angular" label="Alike">Alike</option>
                     <option value="Andada" label="Andada">Andada</option>
                     <option value="Arapey" label="Arapey">Arapey</option>
                     <option value="Arvo" label="Arvo">Arvo</option>
                     <option value="Alegreya SC" label="Alegreya">Alegreya</option>
                     <option value="Bitter" label="Bitter">Bitter</option>
                     <option value="Brawler" label="Brawler">Brawler</option>
                     <option value="Cardo" label="Cardo">Cardo</option>
                     <option value="Copse" label="Copse">Copse</option>
                     <option value="Crimson Text" label="Crimson text">Crimson text</option>
                     <option value="Fanwood Text" label="Fanwood text">Fanwood text</option>
                     <option value="Fjord One" label="Fjord one">Fjord one</option>
                     <option value="Gentium Basic" label="Gentium basic">Gentium basic</option>
                     <option value="EB Garamond" label="EB Garamond">EB Garamond</option>
                     <option value="Goudy Bookletter 1911" label="Goudy Bookletter 1911">Goudy Bookletter 1911</option>
                     <option value="Linden Hill" label="Linden Hill">Linden Hill</option>
                     <option value="Lusitana" label="Lusitana">Lusitana</option>
                     <option value="Lustria" label="Lustria">Lustria</option>
                     <option value="Mate" label="Mate">Mate</option>
                     <option value="Merriweather" label="Merriweather">Merriweather</option>
                     <option value="Petrona" label="Petrona">Petrona</option>
                     <option value="Podkova" label="Podkova">Podkova</option>
                     <option value="Poly" label="Poly">Poly</option>
                     <option value="Prata" label="Prata">Prata</option>
                     <option value="Quattrocento" label="Quattrocento">Quattrocento</option>
           </optgroup>
      ';
      echo '</select>';
      echo "<label for='intro_font'>";
      echo __('Inherited from the headings by default.','me_theme');
      echo "</label>";
}

//Intro font size
function intro_font_size_callback() {
         $options = get_option('intro_font_size');
         echo "<select name='intro_font_size'>";
         if ( !$options ){
            echo "<option value='19px' selected='selected'>19px</option>";
            }
         if ( $options ){
            echo "<option value='$options'>$options</option>";
            }
         echo '
         <option value="12px">12px</option>
         <option value="13px">13px</option>
         <option value="14px">14px</option>
         <option value="15px">15px</option>
         <option value="16px">16px</option>
         <option value="17px">17px</option>
         <option value="18px">18px</option>
         <option value="19px">19px</option>
         <option value="20px">20px</option>
         <option value="21px">21px</option>
         <option value="22px">22px</option>
         <option value="23px">23px</option>
         <option value="24px">24px</option>
         <option value="25px">25px</option>
         <option value="26px">26px</option>
         <option value="27px">27px</option>
         <option value="28px">28px</option>
         <option value="29px">29px</option>
         <option value="30px">30px</option>
         ';
         echo "</select>";
}

//Page title font
function page_title_font_callback() {
      $options = get_option('page_title_font');
      echo "<select name='page_title_font' style='margin-bottom: 30px;'>";
      if (!$options) {
         echo '<option value="Andada">Andada</option>';
      }
      if ($options) {
         echo "<option value='$options' selected='selected'>$options</option>";
      }
      echo '<optgroup label="Sans Serif style">
                      <option value="Abel">Abel</option>
                      <option value="AftaSans">Afta Sans</option>
                      <option value="AndikaBasic">Andika Basic</option>
                      <option value="Antic">Antic</option>
                      <option value="Arimo">Arimo</option>
                      <option value="Asap">Asap</option>
                      <option value="AurulentSans">Aurulent Sans</option>
                      <option value="Bebas">Bebas</option>
                      <option value="BebasNeue">BebasNeue</option>
                      <option value="BonvenoCF">BonvenoCF</option>
                      <option value="Cabin">Cabin</option>
                      <option value="Cantarell">Cantarell</option>
                      <option value="Capsuula">Capsuula</option>
                      <option value="DidactGothic">Didact Gothic</option>
                      <option value="DroidSans">Droid Sans</option>
                      <option value="Electrolize">Electrolize</option>
                      <option value="Enigmatic">Enigmatic</option>
                      <option value="Existence_Light">Existence Light</option>
                      <option value="Gudea">Gudea</option>
                      <option value="JosefinSans">Josefin Sans</option>
                      <option value="Juice">Juice</option>
                      <option value="Lato">Lato</option>
                      <option value="LeagueGothic">League Gothic</option>
                      <option value="Lekton">Lekton</option>
                      <option value="MavenPro">Maven Pro</option>
                      <option value="Michroma">Michroma</option>
                      <option value="Nobile">Nobile</option>
                      <option value="Numans">Numans</option>
                      <option value="Nunito">Nunito</option>
                      <option value="OpenSans">OpenSans</option>
                      <option value="QuattrocentoSans">Quattrocento Sans</option>
                      <option value="Questrial">Questrial</option>
                      <option value="Quicksand_Book">Quicksand Book</option>
                      <option value="Quicksand_Light">Quicksand Light</option>
                      <option value="Rationale">Rationale</option>
                      <option value="Rawengulk_Sans">Rawengulk Sans</option>
                      <option value="Terminal_Dosis">Terminal Dosis</option>
                      <option value="TexGyreAdventor">TexGyreAdventor</option>
                      <option value="Titillium_Thin">Titillium Thin</option>
                      <option value="Titillium_Light">Titillium Light</option>
                      <option value="Titillium_Regular">Titillium Regular</option>
            </optgroup>
            <optgroup label="Serif style">
                      <option value="Alegreya">Alegreya</option>
                      <option value="Alice">Alice</option>
                      <option value="Andada">Andada</option>
                      <option value="Arapey">Arapey</option>
                      <option value="Arvo">Arvo</option>
                      <option value="Bitter">Bitter</option>
                      <option value="Brawler">Brawler</option>
                      <option value="Cardo">Cardo</option>
                      <option value="Charis">Charis</option>
                      <option value="Copse">Copse</option>
                      <option value="CrimsonText">Crimson Text</option>
                      <option value="EB_Garamond">EB Garamond</option>
                      <option value="FanWood_Text">FanWood Text</option>
                      <option value="Fjord">Fjord</option>
                      <option value="Gentium">Gentium</option>
                      <option value="Goudy">Goudy</option>
                      <option value="LindenHill">LindenHill</option>
                      <option value="Linux_Libertine">Linux_Libertine</option>
                      <option value="Lusitana">Lusitana</option>
                      <option value="Lustria">Lustria</option>
                      <option value="Mate">Mate</option>
                      <option value="Petrona">Petrona</option>
                      <option value="Podkova">Podkova</option>
                      <option value="Poly">Poly</option>
                      <option value="Prata">Prata</option>
                      <option value="Quattrocento">Quattrocento</option>
                      <option value="Unna">Unna</option>
            </optgroup>
      ';
      echo "</select>";
}



?>