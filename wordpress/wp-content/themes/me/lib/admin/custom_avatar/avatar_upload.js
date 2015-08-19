jQuery(document).ready(function() {

     jQuery('#custom_avatar_button').click(function() {
               formfield = jQuery('#custom_avatar').attr('name');
               tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
               return false;
     });

     window.send_to_editor = function(html) {
               imgurl = jQuery('img',html).attr('src');
               jQuery('#custom_avatar').val(imgurl);
               tb_remove();
               return false;
     }

});