<?php get_header(); ?>

          <?php require_once(ME_MISC . '/multi_page_navigation.php'); ?>

     </div>
     <!--* END HEADER *-->

     <!--* CONTENT *-->
     <div id="content">

          <!-- MAIN CONTENT -->
          <?php while ( have_posts() ) : the_post(); ?>
          
          <?php
          $values = get_post_custom( $post->ID );
          $text = isset( $values['single_template_metabox'] ) ? esc_attr( $values['single_template_metabox'][0] ) : '';
          if ($text) :
             if ( $text == "single_sidebar" ) :
          ?>
          <div id="main">
          <?php endif; endif; ?>

          <div class="blog_posts">
               <!-- Post -->
               <div class="post">

                    <!-- Post title -->
                    <div class="post_title">
                         <h3>
                             <?php the_title(); ?>
                         </h3>
                    </div>

                    <div class="post_container">
                         
                         <div class="single_meta_container">
                              <div class="single_meta">
                                   <ul>
                                       <li><?php the_date(); ?></li>
                                       <li class="separator">|</li>
                                       <li><?php the_author(); ?></li>
                                       <li class="separator">|</li>
                                       <li><?php the_category(', '); ?></li>
                                       <li class="separator">|</li>
                                       <li><a href=""><?php comments_popup_link( __( 'Leave a comment','me_theme'), __( '1 Comment','me_theme'), __( '% Comments','me_theme') ); ?></a></li>
                                   </ul>
                              </div>
                              <div class="clear"></div>
                         </div>

                         <!-- Post content -->
                         <div class="post_content">

                              <?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) :  ?>
                                    <div class="single_thumb">
                                         <?php the_post_thumbnail('post'); ?>
                                    </div>
                                    <div class="clear"></div>
                              <?php endif; ?>

                              <?php if ( is_archive() || is_search() ) : ?>
                                    <?php the_excerpt(); ?>
                              <?php else : ?>
                                    <div class="post_content">
                                    <?php the_content(''); ?>
                                    </div>
                              <?php endif; ?>

                         </div>
                         <div class="clear"></div>
                         <!-- End Post content -->

                    <div class="clear"></div>
                    </div>

               </div>
               <!-- End First post -->
               
               <!-- Comments -->
               <?php comments_template( '', true ); ?>
               <!-- Comments -->

          </div>

          <?php
          $values = get_post_custom( $post->ID );
          $text = isset( $values['single_template_metabox'] ) ? esc_attr( $values['single_template_metabox'][0] ) : '';
          if ($text) :
             if ( $text == "single_sidebar" ) :
          ?>
          <!-- END MAIN CONTENT -->
          </div>
          <?php endif; endif; ?>

          <?php
          $values = get_post_custom( $post->ID );
          $text = isset( $values['single_template_metabox'] ) ? esc_attr( $values['single_template_metabox'][0] ) : '';
          if ($text) :
             if ( $text == "single_sidebar" ) :
          ?>
          <!-- SIDEBAR -->
          <div id="sidebar">

               <!-- Recent posts -->
               <?php dynamic_sidebar('Sidebar'); ?>

          </div>
          <!-- END SIDEBAR -->
          <?php endif; endif; ?>

          <div class="clear"></div>
          <?php endwhile; ?>

<?php get_footer(); ?>