    <!-- SlideTo button-->
    <?php if ( !(checked(1, get_option('disable_slider'), false) && checked(1, get_option('disable_portfolio'), false) && checked(1, get_option('disable_services'), false)) ) : ?>
    <a href="#about" class="scroll_down"></a>
    <?php endif; ?>
    
     <!--* ABOUT *-->
     <div id="about">

          <!-- TITLE -->
          <?php if ( !(checked(1, get_option('disable_slider'), false) && checked(1, get_option('disable_portfolio'), false) && checked(1, get_option('disable_services'), false)) ) : ?>
          <div class="title">
               <h2>
                   <?php if ( !get_option('about_title') ) : ?>
                   <span><?php _e('about me', 'me_theme'); ?></span>
                   <?php endif; ?>
                   <?php if ( get_option('about_title') ) : ?>
                   <span><?php echo get_option('about_title'); ?></span>
                   <?php endif; ?>
               </h2>
          </div>
          <?php endif; ?>
          
          <?php $wpbp = new WP_Query(array(  'post_type' => 'about', 'posts_per_page' =>'-1' ) ); ?>
          <?php if ($wpbp->have_posts()) :  while ($wpbp->have_posts()) : $wpbp->the_post(); ?>
          <!-- ABOUT IMAGE -->
          <div class="about_image">
               <?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) :  ?>
                     <?php  the_post_thumbnail('about'); ?>
               <?php endif; ?>
          </div>
          
          <h3><?php echo get_the_title();  ?></h3>

          <?php the_content(); ?>

          <?php endwhile; endif; ?>
          <?php wp_reset_query(); ?>

     </div>
     <!--* END ABOUT *-->