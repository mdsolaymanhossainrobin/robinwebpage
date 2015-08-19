<?php 
/* 
   Template Name: Homepage
*/
?>

<?php get_header(); ?>

          <?php require_once(ME_MISC . '/one_page_navigation.php'); ?>

          <!-- INTRO-->
          <?php if (get_option('intro_text')) : ?>
          <div id="intro">
               <p>
               <?php echo get_option('intro_text'); ?>
               </p>
          </div>
          <?php endif; ?>

     </div>
     <!--* END HEADER *-->
     
     <!--* CONTENT *-->
     <div id="content">

     <?php /* Slider, if it isn't disabled */
     if ( !checked(1, get_option('disable_slider'), false) ) :
        require_once(ME_SECTIONS . '/slider_section.php');
     endif;
     ?>

     <?php /* Portfolio, it it isn't disabled */
     if ( !checked(1, get_option('disable_portfolio'), false) ) :
        require_once(ME_SECTIONS . '/portfolio_section.php');
     endif;
     ?>

     <?php /* Services, if it isn't disabled */
     if ( !checked(1, get_option('disable_services'), false) ) :
        require_once(ME_SECTIONS . '/services_section.php');
     endif;
     ?>

     <?php /* "About me", if it isn't disabled */
     if ( !checked(1, get_option('disable_about'), false) ) :
        require_once(ME_SECTIONS . '/about_section.php');
     endif;
     ?>

     <?php /* Contact, if it isn't disabled */
     if ( !checked(1, get_option('disable_contact'), false) ) :
        require_once(ME_SECTIONS . '/contact_section.php');
     endif;
     ?>

<?php  get_footer(); ?>