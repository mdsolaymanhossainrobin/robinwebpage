<?php 
/* 
   Template Name: Portfolio page
*/ 
?>
  
    <?php get_header(); ?>
    
          <?php require_once(ME_MISC . '/multi_page_navigation.php'); ?>
          
     </div>
     <!--* END HEADER *-->
  
    <!--* PORTFOLIO *-->
    <div id="portfolio" style="margin-top: 50px;">

         <!-- FILTER -->
         <div id="filter_wrapper">

              <ul id="portfolioFilter">

                   <li class="active"><a href="#" class="all"><?php _e('All projects','me_theme'); ?></a></li>
                   
                   <?php
                   $terms = get_terms('filter', $args);
                   $count = count($terms);
                   $i=0;
                   if ($count > 0) {
                      foreach ($terms  as $term) {
                      $i++;
                      $term_list  .= '<li><a href="#" class="'.  $term->slug .'">' . $term->name . '</a></li>';
  
                      if ($count  != $i)
                         {
                         $term_list .= '';
                         }
                         else
                         {
                         $term_list .= '';
                         }
                      }
                   echo $term_list;
                   }
                   ?>
                   
              </ul>

         </div>
         <div class="clear"></div>

         <!-- CONTAINER: ITEM DETAILS -->
         <div class="item_container"></div>
         
         <div id="portfolio_loading">
              <img src="<?php bloginfo('template_directory'); ?>/images/ajax-loader.gif" alt="" />
         </div>

         <!-- CONTAINER: PORTFOLIO ITEMS -->
         <div id="portfolio_items">

              <ul class="sortablePortfolio">
  
              <?php $wpbp = new WP_Query(array(  'post_type' => 'portfolio', 'posts_per_page' =>'-1' ) ); ?>
              <?php if ($wpbp->have_posts()) :  while ($wpbp->have_posts()) : $wpbp->the_post(); ?>
              <?php $terms = get_the_terms(  get_the_ID(), 'filter' ); ?>

              <li data-id="id-<?php echo  $count; ?>" data-type="<?php foreach ($terms as $term) { echo  strtolower(preg_replace('/\s+/', '-', $term->slug)). ''; } ?>">

                  <div class="item_content">
                       <!-- Image -->
                       <?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) :  ?>
                             <?php  the_post_thumbnail('portfolio'); ?>
                       <?php endif; ?>
                       
                       <div class="hidden">
                            <div class="hidden_content">
                                 
                                 <!-- Item title -->
                                 <p><?php echo get_the_title();  ?></p>
                                 
                                 <!-- Link to the external item page ( loaded by ajax ) -->
                                 <a href="<?php the_permalink(); ?>" class="information"></a>
                                 
                                 <!-- Link to the site -->
                                 <?php
                                 global $custom_meta_fields, $post;

                                 foreach ($custom_meta_fields as $field) {
                                         
                                         $project_link = get_post_meta($post->ID, 'custom_project_link', true);
                                         
                                         if ($field['type'] == 'project_link') {
                                            if ($project_link) {
                                            echo '<a href="';
                                            echo $project_link;
                                            echo '" class="link" target="_blank"></a>';
                                            }
                                         }

                                 }
                                 ?>


                            </div>
                       </div>
                  </div>
              
              </li>

              <?php $count++; ?>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>

              </ul>

         </div>
         <!-- END CONTAINER: PORTFOLIO ITEMS -->
  
    </div>
    <!--* END: PORTFOLIO *-->
  
<?php  get_footer(); ?>