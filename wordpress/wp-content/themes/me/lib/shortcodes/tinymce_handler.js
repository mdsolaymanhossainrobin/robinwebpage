var GalleryTiny = {
    e: '',
    init: function(e) {
        GalleryTiny.e = e;
        tinyMCEPopup.resizeToInnerSize();
    },
    insert: function createGalleryShortcode(e) {
        //Get the value from the select element
        var shortcode = document.getElementById('media_shortcodes').value;
        
        /*---- IMAGES ----*/

        //Image frame
        if (shortcode == "image_frame1"){
            output = '[image_frame1 src="' + image_frame_text + '"]';
        }
        
        //Image frame with title
        if (shortcode == "image_frame2"){
            output = '[image_frame2 src="' + image_frame_text + '" title="' + image_title_text + '"]';
        }
        
        //Image frame with title
        if (shortcode == "image_frame3"){
            output = '[image_frame3 src="' + image_frame_text + '" title="' + image_title_text + '"]' + image_description_text + '[/image_frame3]';
        }

        /*---- YOUTUBE VIDEOS ----*/
        //Youtube video player
        if (shortcode == "youtube"){
            output = '[youtube id="' + video_id_text + '"]';
        }
        
        //Youtube video player frame
        if (shortcode == "youtube_frame1"){
            output = '[youtube_frame1 id="' + video_id_text + '"]';
        }

        //Youtube video player frame with title
        if (shortcode == "youtube_frame2"){
            output = '[youtube_frame2 id="' + video_id_text + '" title="' + video_title_text + '"]';
        }
        
        //Youtube video player frame with title and description
        if (shortcode == "youtube_frame3"){
            output = '[youtube_frame3 id="' + video_id_text + '" title="' + video_title_text + '"]' + video_description_text + '[/youtube_frame3]';
        }
        
        /*---- VIMEO VIDEOS ----*/
        //Vimeo video player
        if (shortcode == "vimeo"){
            output = '[vimeo id="' + video_id_text + '"]';
        }
        
        //Vimeo video player frame
        if (shortcode == "vimeo_frame1"){
            output = '[vimeo_frame1 id="' + video_id_text + '"]';
        }

        //Vimeo video player frame with title
        if (shortcode == "vimeo_frame2"){
            output = '[vimeo_frame2 id="' + video_id_text + '" title="' + video_title_text + '"]';
        }
        
        //Vimeo video player frame with title
        if (shortcode == "vimeo_frame3"){
            output = '[vimeo_frame3 id="' + video_id_text + '" title="' + video_title_text + '"]' + video_description_text + '[/vimeo_frame3]';
        }
        
        /*---- LISTS ----*/

        //Check
        if (shortcode == "check"){
            output = "[check_list]<ul>\r<li>" + list_item_text + " #1</li>\r<li>" + list_item_text + " #2</li>\r<li>" + list_item_text + " #3</li>\r</ul>[/check_list]";
        }
        
        //Check
        if (shortcode == "remove"){
            output = "[remove_list]<ul>\r<li>" + list_item_text + " #1</li>\r<li>" + list_item_text + " #2</li>\r<li>" + list_item_text + " #3</li>\r</ul>[/remove_list]";
        }
        
        //Settings
        if (shortcode == "settings"){
            output = "[settings_list]<ul>\r<li>" + list_item_text + " #1</li>\r<li>" + list_item_text + " #2</li>\r<li>" + list_item_text + " #3</li>\r</ul>[/settings_list]";
        }
        
        //User list
        if (shortcode == "user"){
            output = "[user_list]<ul>\r<li>" + list_item_text + " #1</li>\r<li>" + list_item_text + " #2</li>\r<li>" + list_item_text + " #3</li>\r</ul>[/user_list]";
        }
        
        //Cross list
        if (shortcode == "add"){
            output = "[cross_list]<ul>\r<li>" + list_item_text + " #1</li>\r<li>" + list_item_text + " #2</li>\r<li>" + list_item_text + " #3</li>\r</ul>[/cross_list]";
        }
        
        //Undo list
        if (shortcode == "undo"){
            output = "[undo_list]<ul>\r<li>" + list_item_text + " #1</li>\r<li>" + list_item_text + " #2</li>\r<li>" + list_item_text + " #3</li>\r</ul>[/undo_list]";
        }
        
        //Redo list
        if (shortcode == "redo"){
            output = "[redo_list]<ul>\r<li>" + list_item_text + " #1</li>\r<li>" + list_item_text + " #2</li>\r<li>" + list_item_text + " #3</li>\r</ul>[/redo_list]";
        }
        
        //Speech list
        if (shortcode == "speech"){
            output = "[speech_list]<ul>\r<li>" + list_item_text + " #1</li>\r<li>" + list_item_text + " #2</li>\r<li>" + list_item_text + " #3</li>\r</ul>[/speech_list]";
        }
        
        //Attentions
        if (shortcode == "attention"){
            output = "[attention_list]<ul>\r<li>" + list_item_text + " #1</li>\r<li>" + list_item_text + " #2</li>\r<li>" + list_item_text + " #3</li>\r</ul>[/attention_list]";
        }
        
        //Telephone number list
        if (shortcode == "telephone"){
            output = "[telephone_list]<ul>\r<li>" + list_item_text + " #1</li>\r<li>" + list_item_text + " #2</li>\r<li>" + list_item_text + " #3</li>\r</ul>[/telephone_list]";
        }
        
        //Lock list
        if (shortcode == "locked"){
            output = "[lock_list]<ul>\r<li>" + list_item_text + " #1</li>\r<li>" + list_item_text + " #2</li>\r<li>" + list_item_text + " #3</li>\r</ul>[/lock_list]";
        }
        
        //Mail list
        if (shortcode == "mail"){
            output = "[mail_list]<ul>\r<li>" + list_item_text + " #1</li>\r<li>" + list_item_text + " #2</li>\r<li>" + list_item_text + " #3</li>\r</ul>[/mail_list]";
        }
        
        /*---- HEADINGS ----*/
        
        if (shortcode == "h1"){
            output = "[h1]" + heading_text + "[/h1]";
        }
        
        if (shortcode == "h2"){
            output = "[h2]" + heading_text + "[/h2]";
        }
        
        if (shortcode == "h3"){
            output = "[h3]" + heading_text + "[/h3]";
        }
        
        if (shortcode == "h4"){
            output = "[h4]" + heading_text + "[/h4]";
        }
        
        if (shortcode == "h5"){
            output = "[h5]" + heading_text + "[/h5]";
        }
        
        if (shortcode == "h6"){
            output = "[h6]" + heading_text + "[/h6]";
        }

        /*---- COLUMNS ----*/
        
        // 1/1 (full width)
        if (shortcode == "full"){
            output = "[full]" + column_text + "[/full]";
        }
        
        // 1/2
        if (shortcode == "one_half"){
            output = "[one_half]" + column_text + "[/one_half]";
        }
        
        // 1/2 last
        if (shortcode == "one_half_last"){
            output = "[one_half_last]" + column_text + "[/one_half_last]";
        }
        
        // 1/3
        if (shortcode == "one_third"){
            output = "[one_third]" + column_text + "[/one_third]";
        }
        
        // 1/3 last
        if (shortcode == "one_third_last"){
            output = "[one_third_last]" + column_text + "[/one_third_last]";
        }
        
        // 2/3
        if (shortcode == "two_third"){
            output = "[two_third]" + column_text + "[/two_third]";
        }
        
        // 2/3 last
        if (shortcode == "two_third_last"){
            output = "[two_third_last]" + column_text + "[/two_third_last]";
        }
        
        // 1/4
        if (shortcode == "one_fourth"){
            output = "[one_fourth]" + column_text + "[/one_fourth]";
        }
        
        // 1/4 last
        if (shortcode == "one_fourth_last"){
            output = "[one_fourth_last]" + column_text + "[/one_fourth_last]";
        }
        
        // 2/4
        if (shortcode == "two_fourth"){
            output = "[two_fourth]" + column_text + "[/two_fourth]";
        }
        
        // 2/4 last
        if (shortcode == "two_fourth_last"){
            output = "[two_fourth_last]" + column_text + "[/two_fourth_last]";
        }
        
        // 3/4
        if (shortcode == "three_fourth"){
            output = "[three_fourth]" + column_text + "[/three_fourth]";
        }
        
        // 3/4 last
        if (shortcode == "three_fourth_last"){
            output = "[three_fourth_last]" + column_text + "[/three_fourth_last]";
        }
        
        // 1/5
        if (shortcode == "one_fifth"){
            output = "[one_fifth]" + column_text + "[/one_fifth]";
        }
        
        // 1/5 last
        if (shortcode == "one_fifth_last"){
            output = "[one_fifth_last]" + column_text + "[/one_fifth_last]";
        }
        
        // 2/5
        if (shortcode == "two_fifth"){
            output = "[two_fifth]" + column_text + "[/two_fifth]";
        }
        
        // 2/5 last
        if (shortcode == "two_fifth_last"){
            output = "[two_fifth_last]" + column_text + "[/two_fifth_last]";
        }
        
        // 3/5
        if (shortcode == "three_fifth"){
            output = "[three_fifth]" + column_text + "[/three_fifth]";
        }
        
        // 3/5 last
        if (shortcode == "three_fifth_last"){
            output = "[three_fifth_last]" + column_text + "[/three_fifth_last]";
        }
        
        // 4/5
        if (shortcode == "four_fifth"){
            output = "[four_fifth]" + column_text + "[/four_fifth]";
        }
        
        // 4/5 last
        if (shortcode == "four_fifth_last"){
            output = "[four_fifth_last]" + column_text + "[/four_fifth_last]";
        }


        tinyMCEPopup.execCommand('mceReplaceContent', false, output);
        tinyMCEPopup.close();
    }
}
tinyMCEPopup.onInit.add(GalleryTiny.init, GalleryTiny);