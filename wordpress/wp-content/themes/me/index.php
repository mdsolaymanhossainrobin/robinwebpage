<?php get_header(); ?>

     </div>
     <!--* END HEADER *-->

     <!--* CONTENT *-->
     <div id="content">

          <!-- BLOG POSTS -->
          <div class="blog_posts">
               <?php if ( ! have_posts() ) : ?>

                     <h1><?php echo __('Not Found', 'me_theme'); ?></h1>

                     <p>
                     <?php echo __('Sorry, but there are no results for the requested archive.', 'me_theme'); ?>
                     </p>

               <?php endif; ?>

               <?php while ( have_posts() ) : the_post(); ?>
               <!-- Blog post -->
               <div class="post">
                    
                    <!-- Post title -->
                    <div class="post_title">
                         <h3>
                             <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                         </h3>
                    </div>

                    <div class="post_container">

                         <!-- Metas -->
                         <div class="post_meta">
                              <ul>
                              <li class="post_date"><?php echo get_the_date(); ?></li>
                              <li class="post_author">
                                  <div class="author_avatar">
                                       <?php if ( get_the_author_meta( 'custom_avatar', $user->ID ) ) : ?>
                                             <img src="<?php echo esc_attr( get_the_author_meta( 'custom_avatar', $user->ID ) ); ?>" alt="" />
                                       <?php else : ?>
                                             <?php echo get_avatar( $comment->comment_author_email, $size = '50'); ?>
                                       <?php endif; ?>
                                  </div>

                                  <div class="author_name">
                                       <?php the_author(); ?>
                                  </div>
                              </li>
                              <!-- Dissolve This comment to show category on the blog pages
                              <li class="post_category">
                                  <?php the_category(', '); ?>
                              </li>
                              -->
                              <li class="post_comments">
                                  <?php comments_popup_link( __( 'Leave a comment', 'me_theme'), __( '1 Comment', 'me_theme'), __( '% Comments', 'me_theme') ); ?>
                              </li>
                              </ul>
                         </div>
                         <!-- End Metas -->

                         <!-- Post teaser -->
                         <div class="post_teaser">
                              <!-- Image -->
                              <?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) :  ?>
                                    <a href="<?php the_permalink(); ?>">
                                       <?php the_post_thumbnail('post'); ?>
                                    </a>
                              <?php endif; ?>

                              <?php if ( is_archive() || is_search() ) : ?>
                                    <?php the_excerpt(); ?>
                              <?php else : ?>
                                    <?php the_content( '<div class="read_more_container">Read more</div>' ); ?>
                              <?php endif; ?>

                         </div>
                         <!-- End Post teaser -->

                    <div class="clear"></div>
                    </div>

               </div>
               <!-- End Post -->
               <?php endwhile; ?>

          </div>
          <!-- END BLOG POSTS -->

          <!-- PAGINATION -->
          <?php if ( $wp_query->max_num_pages > 1 ) : ?>
                <div class="pagination_container">
                <ul class="pagination">
                    <li id="newer-posts"><?php previous_posts_link(''); ?></li>
                    <li id="older-posts"><?php next_posts_link(''); ?></li>
                </ul>
          </div>
          <div class="clear"></div>
          <?php endif; ?>
          <!-- END PAGINATION -->

<?php get_footer(); ?>