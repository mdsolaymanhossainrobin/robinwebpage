<?php get_header(); ?>

     </div>
     <!--* END HEADER *-->

     <!--* CONTENT *-->
     <div id="content">
     
          <?php if ( have_posts() ) : ?>

          <?php while ( have_posts() ) : the_post(); ?>
          
                <?php if ( is_archive() || is_search() ) : ?>
                      <?php the_excerpt(); ?>
                <?php else : ?>
                      <?php the_content(); ?>
                <?php endif; ?>

          <?php endwhile; ?>

          <?php else : ?>
          
                <h1><?php _e('Not Found','me_theme'); ?></h1>

                <p>
                   <?php _e('Sorry, but there are no results for the requested archive.','me_theme'); ?>
                </p>

          <?php endif; ?>
     
<?php get_footer(); ?>