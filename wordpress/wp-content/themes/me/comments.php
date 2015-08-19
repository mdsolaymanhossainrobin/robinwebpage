<?php if ( post_password_required() ) : ?>
      <p><?php _e('This post is password protected. Enter the password to view comments.','me_theme') ?></p>
<?php endif; ?>

<?php
function mytheme_comment($comment, $args, $depth){
$GLOBALS['comment'] = $comment;
?>

  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

      <div id="comment-<?php comment_ID(); ?>">

      <div class="comment_author">
           <?php if ( get_the_author_meta( 'custom_avatar', $user->ID ) ) : ?>
                 <img src="<?php echo esc_attr( get_the_author_meta( 'custom_avatar', $user->ID ) ); ?>" alt="" />
           <?php else : ?>
                 <?php echo get_avatar( $comment->comment_author_email, $size = '50'); ?>
           <?php endif; ?>
           <p><?php comment_author_link() ?></p>
      </div>
                            
      <div class="comment_content">
           
           <div class="comment_meta">
                <ul>
                <li><?php comment_date('M d, Y'); ?></li>
                <li class="reply_container">
                <div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div>
                </li>
                <li class="edit_container"><?php edit_comment_link(__('edit','me_theme'),' ','') ?></li>
                </ul>
           <div class="clear"></div>
           </div>
           
           <div class="comment_text">
                <?php comment_text() ?>
           </div>

      </div>
      <div class="clear"></div>
      
      </div>


<?php
}//end mytheme_comment

if ( have_comments() ) : ?>

<div class="comments" id="comments">

     <div class="single_title">
          <h3>
              <span><?php _e('comments','me_theme') ?></span>
          </h3>
     </div>

     <ul class="commentlist">
	 <?php wp_list_comments('callback=mytheme_comment'); ?>
     </ul>

     <div id="comments_pagination">
          <?php paginate_comments_links(); ?>
     </div>
     <div class="clear"></div>

</div>

<?php else: ?>
<h4><?php _e('No comments','me_theme'); ?></h4>
<?php endif; ?>

<?php if ( ! comments_open() ) : ?>
    <h4><?php _e('Comments are closed.','me_theme'); ?></h4>
<?php else: ?>

               <!-- Comment form -->
               <div class="leave_reply">
               
                    <div class="single_title">
                         <h3>
                             <span><?php _e('leave a reply','me_theme') ?></span>
                         </h3>
                    </div>

                    <div id="respond">

                         <div id="cancel_reply_container">
                              <?php cancel_comment_reply_link(); ?>
                         </div>
                         
                         <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	                       <div id="login_to_container">
                                    <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>" id="login_to_comment"><?php _e('You must be  logged in to post a comment.','me_theme'); ?></a>
                               </div>
                         <?php else : ?>

                         <?php if ( $user_ID ) : ?>
	                       <p id="logged_in">
                               <?php _e('Logged in as','me_theme'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account"><?php _e('Log out »','me_theme'); ?></a>
                               </p>
                         <?php endif; ?>

                         <form action="<?php bloginfo('url'); ?>/wp-comments-post.php" method="post" id="commentform">

                               <?php if ( !$user_ID ) : ?>
                               <input type="text" id="author_name" value="<?php echo get_option('contact_form_name'); ?>" name="author" onfocus="if(this.value == this.defaultValue) this.value = ''">
                               <input type="text" id="author_email" value="<?php echo get_option('contact_form_email_label'); ?>" name="email" onfocus="if(this.value == this.defaultValue) this.value = ''">
                               <input type="text" id="author_url" value="<?php echo __('WEBSITE (optional)','me_theme'); ?>" name="url">
                               <?php endif; ?>

                               <textarea rows="7" cols="60" name="comment" id="comment_content"><?php echo get_option('contact_form_message_label'); ?></textarea>

                               <div id="comment_button_container">
                                    <button type="submit" id="comment_button"><?php _e('Go', 'me_theme'); ?> <?php comment_id_fields(); ?> </button>
                               </div>
                               <?php do_action('comment_form', $post->ID); ?>
                         </form>
                         <?php endif; ?>

                    </div>

               </div>
               <div class="clear"></div>
               <!-- End Comment form -->

<?php endif; ?>