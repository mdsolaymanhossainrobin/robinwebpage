    <!-- SlideTo button-->
    <?php if ( !(checked(1, get_option('disable_slider'), false) && checked(1, get_option('disable_portfolio'), false)) ) : ?>
    <a href="#services" class="scroll_down"></a>
    <?php endif; ?>

    <!--* SERVICES *-->
     <div id="services">

          <!-- TITLE -->
          <?php if ( !(checked(1, get_option('disable_slider'), false) && checked(1, get_option('disable_portfolio'), false)) ) : ?>
          <div class="title">
               <h2>
                   <?php if ( !get_option('services_title') ) : ?>
                   <span>services</span>
                   <?php endif; ?>
                   <?php if ( get_option('services_title') ) : ?>
                   <span><?php echo get_option('services_title'); ?></span>
                   <?php endif; ?>
               </h2>
          </div>
          <?php endif; ?>
          
          <!-- SERVICES INTRO -->
          <?php if ( get_option('services_intro') ) : ?>
          <div class="services_intro">
               <p>
               <?php echo get_option('services_intro'); ?>
               </p>
          </div>
          <?php endif; ?>
          
          <!-- SERVICE BLOCKS -->  
          <div id="service_blocks">
               
               <?php $wpbp = new WP_Query(array(  'post_type' => 'service', 'posts_per_page' =>'-1' ) ); ?>
               <?php if ($wpbp->have_posts()) :  while ($wpbp->have_posts()) : $wpbp->the_post(); ?>
               <div class="service">

                    <!-- Icon ( big circle )-->
                    <?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) :  ?>
                    <div class="icon_container">
                         <div class="icon">
                              <?php  the_post_thumbnail('service'); ?>
                         </div>
                    </div>
                    <?php endif; ?>

                    <!-- Service title -->
                    <h3><?php echo get_the_title();  ?></h3>
                    
                    <!-- Short description -->
                    <?php $values = get_post_custom( $post->ID ); ?>
                    <?php $text = isset( $values['descripition_metabox'] ) ? esc_attr( $values['descripition_metabox'][0] ) : ''; ?>
                    <p>
                    <?php echo $text; ?>
                    </p>

               </div>
               <?php endwhile; endif; ?>
               <?php wp_reset_query(); ?>
          
          <div class="clear"></div>
          </div>
          <!-- END:SERVICE BLOCKS -->

     </div>
     <!--* END SERVICES *-->