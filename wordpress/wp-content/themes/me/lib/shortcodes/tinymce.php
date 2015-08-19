<?php
$wp_include = "../wp-load.php";
$i = 0;
while (!file_exists($wp_include) && $i++ < 10) {
  $wp_include = "../$wp_include";
}
require($wp_include);
?>
<!html>

<head><title></title>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
<script type="text/javascript">
<?php require_once('tinymce_lang.php'); ?>
</script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lib/shortcodes/tinymce_handler.js"></script>

</head>

<body>
      
      <h3 style="text-align: center; margin-bottom: 10px;"><?php _e('Shortcodes','me_theme'); ?></h3>
      <table>
             <tbody>
                    <tr>
                        <td>
                        Image/Video
                        </td>

                        <td>
                            <select name="media_shortcodes" id="media_shortcodes">
                                    <optgroup label="Images">
                                              <option value="image_frame1"><?php _e('Image frame','me_theme'); ?></option>
                                              <option value="image_frame2"><?php _e('Image frame with title','me_theme'); ?></option>
                                              <option value="image_frame3"><?php _e('Image frame witht title and description','me_theme'); ?></option>
                                    </optgroup>
                                    <optgroup label="Youtube">
                                              <option value="youtube"><?php _e('Youtube video','me_theme');  ?></option>
                                              <option value="youtube_frame1"><?php _e('Youtube video frame','me_theme'); ?></option>
                                              <option value="youtube_frame2"><?php _e('Youtube video frame with title','me_theme'); ?></option>
                                              <option value="youtube_frame3"><?php _e('Youtube video frame with title and description','me_theme'); ?></option>
                                    </optgroup>
                                    <optgroup label="Vimeo">
                                              <option value="vimeo"><?php _e('Vimeo video','me_theme'); ?></option>
                                              <option value="vimeo_frame1"><?php _e('Vimeo video frame','me_theme'); ?></option>
                                              <option value="vimeo_frame2"><?php _e('Vimeo video frame with title','me_theme'); ?></option>
                                              <option value="vimeo_frame3"><?php _e('Vimeo video frame with title and description','me_theme'); ?></option>
                                    </optgroup>
                                    <optgroup label="List styles">
                                              <option value="check"><?php _e('Check','me_theme'); ?></option>
                                              <option value="remove"><?php _e('Remove','me_theme'); ?></option>
                                              <option value="settings"><?php _e('Settings','me_theme'); ?></option>
                                              <option value="user"><?php _e('User','me_theme'); ?></option>
                                              <option value="add"><?php _e('Add','me_theme'); ?></option>
                                              <option value="undo"><?php _e('Undo','me_theme'); ?></option>
                                              <option value="redo"><?php _e('Redo','me_theme'); ?></option>
                                              <option value="speech"><?php _e('Speech bubble','me_theme'); ?></option>
                                              <option value="attention"><?php _e('Attention','me_theme'); ?></option>
                                              <option value="telephone"><?php _e('Telephone','me_theme'); ?></option>
                                              <option value="locked"><?php _e('Lock','me_theme'); ?></option>
                                              <option value="mail"><?php _e('Mail','me_theme'); ?></option>
                                    </optgroup>
                                    <optgroup label="Headings">
                                              <option value="h1"><?php _e('h1','me_theme'); ?></option>
                                              <option value="h2"><?php _e('h2','me_theme'); ?></option>
                                              <option value="h3"><?php _e('h3','me_theme'); ?></option>
                                              <option value="h4"><?php _e('h4','me_theme'); ?></option>
                                              <option value="h5"><?php _e('h5','me_theme'); ?></option>
                                              <option value="h6"><?php _e('h6','me_theme'); ?></option>
                                    </optgroup>
                                    <optgroup label="Columns">
                                              <option value="full"><?php _e('1/1','me_theme'); ?></option>
                                              <option value="one_half"><?php _e('1/2','me_theme'); ?></option>
                                              <option value="one_half_last"><?php _e('1/2 last','me_theme'); ?></option>
                                              <option value="one_third"><?php _e('1/3','me_theme'); ?></option>
                                              <option value="one_third_last"><?php _e('1/3 last','me_theme'); ?></option>
                                              <option value="two_third"><?php _e('2/3','me_theme'); ?></option>
                                              <option value="two_third_last"><?php _e('2/3 last','me_theme'); ?></option>
                                              <option value="one_fourth"><?php _e('1/4','me_theme'); ?></option>
                                              <option value="one_fourth_last"><?php _e('1/4 last','me_theme'); ?></option>
                                              <option value="two_fourth"><?php _e('2/4','me_theme'); ?></option>
                                              <option value="two_fourth_last"><?php _e('2/4 last','me_theme'); ?></option>
                                              <option value="three_fourth"><?php _e('3/4','me_theme'); ?></option>
                                              <option value="three_fourth_last"><?php _e('3/4 last','me_theme'); ?></option>
                                              <option value="one_fifth"><?php _e('1/5','me_theme'); ?></option>
                                              <option value="one_fifth_last"><?php _e('1/5 last','me_theme'); ?></option>
                                              <option value="two_fifth"><?php _e('2/5','me_theme'); ?></option>
                                              <option value="two_fifth_last"><?php _e('2/5 last','me_theme'); ?></option>
                                              <option value="three_fifth"><?php _e('3/5','me_theme'); ?></option>
                                              <option value="three_fifth_last"><?php _e('3/5 last','me_theme'); ?></option>
                                              <option value="four_fifth"><?php _e('4/5','me_theme'); ?></option>
                                              <option value="four_fifth_last"><?php _e('4/5 last','me_theme'); ?></option>
                                    </optgroup>
                            </select>
                        </td>

                        <td>
                            <a href="javascript:GalleryTiny.insert(GalleryTiny.e)" class="button"><?php _e('Insert','me_theme'); ?></a>
                        </td>
                    </tr>
             </tbody>
      </table>

</body>

</html>