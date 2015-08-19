     <!--* SLIDER *-->
     <div id="slider_wrapper">

          <div id="slider">

               <ul class="slides">

               <?php $wpbp = new WP_Query(array(  'post_type' => 'me_slider', 'posts_per_page' =>'-1' ) ); ?>
               <?php if ($wpbp->have_posts()) :  while ($wpbp->have_posts()) : $wpbp->the_post(); ?>
                     
                     <li>
                         <?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) :  ?>

                               <?php $values = get_post_custom( $post->ID ); ?>
                               <?php $text = isset( $values['slider_link_metabox'] ) ? esc_attr( $values['slider_link_metabox'][0] ) : ''; ?>
                               <?php if ($text != '') : ?>
                                     <a href="<?php echo $text; ?>">
                                     <?php  the_post_thumbnail('me_slider'); ?>
                                     </a>
                               <?php endif; ?>
                               <?php if ($text == '') : ?>
                                     <?php  the_post_thumbnail('me_slider'); ?>
                               <?php endif; ?>
                               
                               <?php $values = get_post_custom( $post->ID ); ?>
                               <?php $text = isset( $values['slider_caption_metabox'] ) ? esc_attr( $values['slider_caption_metabox'][0] ) : ''; ?>
                               <?php if ($text != '') : ?>
                                     <p class="flex-caption">
                                     <?php echo $text; ?>
                                     </p>
                               <?php endif; ?>

                         <?php endif; ?>
                     </li>
               
               <?php endwhile; endif; ?>
               <?php wp_reset_query(); ?>
               </ul>

          </div>

     </div>
     <!--* END SLIDER *-->