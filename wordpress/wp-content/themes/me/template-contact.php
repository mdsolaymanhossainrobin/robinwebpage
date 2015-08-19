<?php 
/* 
   Template Name: Contact page 
*/

get_header(); ?>

          <?php require_once(ME_MISC . '/multi_page_navigation.php'); ?>
          
     </div>
     <!--* END HEADER *-->

    <!--* CONTACT *-->
    <div id="contact" style="margin-top: 50px;">

          <!-- CONTACT FORM -->
          <div id="contact_form">
               
               <!-- Name -->
               <input type="text" name="name" value="<?php echo get_option('contact_form_name'); ?>" id="form-name" />

               <!-- Email -->
               <input type="text" name="mail" value="<?php echo get_option('contact_form_email_label'); ?>" id="form-mail" />

               <!-- Message (textarea) -->
               <textarea name='message' rows="5" cols="62" id="form-message"><?php echo get_option('contact_form_message_label'); ?></textarea>
               
               <!-- Button -->
               <button type="submit" id="button" >
               <?php if ( get_option('send_button_label') ) : ?>
                     <?php echo get_option('send_button_label'); ?>
               <?php endif; ?>
               <?php if ( !get_option('send_button_label') ) : ?>
                     <?php _e('Go','me_theme'); ?>
               <?php endif; ?>
               </button>

               <!--container for the results of mail.php-->
               <div id="result"></div>

          </div>
          <!-- END CONTACT FORM -->

          <!-- CONTACT INFO -->
          <div id="contact_info">
          
               <?php if ( get_option('contact_text') ) : ?>
               <p>
               <?php echo get_option('contact_text'); ?>
               </p>
               <?php endif; ?>
               
               <?php if ( get_option('contact_address') || get_option('contact_phone') || get_option('contact_email') ) : ?>
               <ul>

                   <?php if ( get_option('contact_address') ) : ?>
                   <li><strong><?php _e('Address:','me_theme') ?></strong> <?php echo get_option('contact_address'); ?></li>
                   <?php endif; ?>

                   <?php if ( get_option('contact_phone') ) : ?>
                   <li><strong><?php _e('Phone:','me_theme') ?></strong> <?php echo get_option('contact_phone'); ?></li>
                   <?php endif; ?>

                   <?php if ( get_option('contact_email') ) : ?>
                   <li><strong><?php _e('Email:','me_theme') ?></strong><?php echo get_option('contact_email'); ?></li>
                   <?php endif; ?>

               </ul>
               <?php endif; ?>
               

               <?php if ( get_option('facebook_url') || get_option('twitter_url') || get_option('rss_url') || get_option('dribble_url') || get_option('skype_address') || get_option('youtube_url') || get_option('vimeo_url') || get_option('linkedin_url') ) : ?>
               <ul class="social_icons">

                   <?php if ( get_option('facebook_url') ) : ?>
                   <li id="fb">
                       <a href="<?php echo get_option('facebook_url'); ?>">
                       <img src="<?php bloginfo('template_directory'); ?>/images/social_icons/fb.png" alt="" />
                       </a>
                   </li>
                   <?php endif; ?>

                   <?php if ( get_option('twitter_url') ) : ?>
                   <li id="twitter">
                       <a href="<?php echo get_option('twitter_url'); ?>">
                       <img src="<?php bloginfo('template_directory'); ?>/images/social_icons/twitter.png" alt="" />
                       </a>
                   </li>
                   <?php endif; ?>
                   
                   <?php if ( get_option('rss_url') ) : ?>
                   <li id="rss">
                       <a href="<?php echo get_option('rss_url'); ?>">
                       <img src="<?php bloginfo('template_directory'); ?>/images/social_icons/rss.png" alt="" />
                       </a>
                   </li>
                   <?php endif; ?>
                   
                   <?php if ( get_option('dribble_url') ) : ?>
                   <li id="dribble">
                       <a href="<?php echo get_option('dribble_url'); ?>">
                       <img src="<?php bloginfo('template_directory'); ?>/images/social_icons/dribble.png" alt="" />
                       </a>
                   </li>
                   <?php endif; ?>
                   
                   <?php if ( get_option('skype_address') ) : ?>
                   <li id="skype">
                       <a href="skype:<?php echo get_option('skype_address');?>?add">
                       <img src="<?php bloginfo('template_directory'); ?>/images/social_icons/skype.png" alt="" />
                       </a>
                   </li>
                   <?php endif; ?>
                   
                   <?php if ( get_option('youtube_url') ) : ?>
                   <li id="youtube">
                       <a href="<?php echo get_option('youtube_url'); ?>">
                       <img src="<?php bloginfo('template_directory'); ?>/images/social_icons/youtube.png" alt="" />
                       </a>
                   </li>
                   <?php endif; ?>
                   
                   <?php if ( get_option('vimeo_url') ) : ?>
                   <li id="vimeo">
                       <a href="<?php echo get_option('vimeo_url'); ?>">
                       <img src="<?php bloginfo('template_directory'); ?>/images/social_icons/vimeo.png" alt="" />
                       </a>
                   </li>
                   <?php endif; ?>
                   
                   <?php if ( get_option('linkedin_url') ) : ?>
                   <li id="linked">
                       <a href="<?php echo get_option('linkedin_url'); ?>">
                       <img src="<?php bloginfo('template_directory'); ?>/images/social_icons/linked.png" alt="" />
                       </a>
                   </li>
                   <?php endif; ?>

               </ul>
               <?php endif; ?>

          </div>
          <!-- END CONTACT INFO -->

     <div class="clear"></div>
     </div>
     <!--* END CONTACT *-->

<?php get_footer(); ?>