     <div class="item">
          
          <!-- Close button -->
          <a href="#" class="close_full"></a>

          <!-- SLIDER -->
          <div class="slideshow_wrapper_full">

                    <?php
                    global $custom_meta_fields, $post;

                    foreach ($custom_meta_fields as $field) {
                              
                              $youtube_content = get_post_meta($post->ID, 'custom_youtube', true);
                              $vimeo_content = get_post_meta($post->ID, 'custom_vimeo', true);
                              $slider_content = get_post_meta($post->ID, 'custom_repeatable', true);
                              
                              if ($field['type'] == 'youtube') {
                                  if ($youtube_content) {
                                     echo '<div class="item_video">';
                                     echo $youtube_content;
                                     echo '</div>';
                                  }
                              }

                              if ($field['type'] == 'vimeo' && !$youtube_content) {
                                  if ($vimeo_content) {
                                     echo '<div class="item_video">';
                                     echo $vimeo_content;
                                     echo '</div>';
                                  }
                              }

                              if ($field['type'] == 'repeatable' && !$youtube_content && !$vimeo_content) {
                                 if ($slider_content) {
                                         $i = 0;
                                         echo '<div class="slideshow">';
                                         echo '<ul class="slides">';
                                         foreach($slider_content as $row) {
                                                       echo '<li>';
                                                       echo '<img src="'.$row.'" alt="" />';
                                                       echo '</li>';
                                                       $i++;
                                                       }
                                         echo '</ul>';
                                         echo '</div>';
                                         }
                              }
                        } // end foreach
                        ?>
          </div>
          <!-- END SLIDER -->

     <div class="clear"></div>
     </div>