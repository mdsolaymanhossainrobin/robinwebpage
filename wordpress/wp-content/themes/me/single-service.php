<?php get_header(); ?>

          <?php require_once(ME_MISC . '/multi_page_navigation.php'); ?>

     </div>
     <!--* END HEADER *--

     <!--* SERVICES *-->
     <div id="services" style="margin-top: 50px;">

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
          
<?php get_footer(); ?>