jQuery(document).ready(function() {

        jQuery('.image_select').click(function() {
        formfield = jQuery(this).siblings('.image_select_field');
        tb_show('', 'media-upload.php?type=image&TB_iframe=true');
        window.send_to_editor = function(html) {
            imgurl = jQuery('img',html).attr('src');
            classes = jQuery('img', html).attr('class');
            id = classes.replace(/(.*?)wp-image-/, '');
            formfield.val(imgurl);
            tb_remove();
        }
        return false;
        });

});