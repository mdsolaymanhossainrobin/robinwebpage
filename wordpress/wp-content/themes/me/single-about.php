<?php get_header(); ?>

          <?php require_once(ME_MISC . '/multi_page_navigation.php'); ?>

     <!--* ABOUT *-->
     <div id="about" style="margin-top: 50px;">

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

<?php get_footer(); ?>