     <!---*** PORTFOLIO ITEM ***--->
     <?php
     while ( have_posts() ) : the_post();
     
           $content = get_the_content();
           if ( $content )
              {
              require_once(ME_LIB . '/portfolio/portfolio_item.php');
              }
              else
                   {
                   require_once(ME_LIB . '/portfolio/portfolio_item_full.php');
                   }

     endwhile;
     ?>
     <!---*** END PORTFOLIO ITEM ***--->