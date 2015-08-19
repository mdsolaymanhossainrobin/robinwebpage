          <!-- NAVIGATION -->
          <div id="navigation">

               <!-- Menu items -->
               <?php wp_nav_menu(
                     array(
                     'theme_location'  => 'multi',
                     'container'       => false,
                     'container_id'    => '',
                     'menu_class'      => 'menu'
                     )
               ); ?>

          </div>
          <div class="clear"></div>
          
          <!-- HIDDEN NAVIGATION -->
               <div id="hidden_menu">
                    <!-- Container for the list and the select -->
                    <div id="hidden_items">
                         <!-- Normal size menu -->
                         <?php wp_nav_menu(
                               array(
                               'theme_location'  => 'multi',
                               'container'       => false,
                               'container_id'    => '',
                               'menu_class'      => 'hidden_menu',
                               'depth'           => 1,
                               )
                         ); ?>
                    </div>
               </div>