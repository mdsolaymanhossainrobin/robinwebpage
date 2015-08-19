<?php

/* REGISTER SIDEBAR
==================================*/
$args = array(
	'name'          => __('Sidebar','me_theme'),
	'before_widget' => '<div class="sidebar_widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>' );

register_sidebar( $args );

/* FLICKR WIDGET
==================================*/
class flickr_widget extends WP_Widget {

      /*
      REGISTER WIDGET WITH WORDPRESS
      */
      public function flickr_widget() {
             $widget_options = array(
                             'classname' => 'theme_flickr',
                             'description' => __( 'Use this widget, if you would like to display your latest Flickr photos in the sidebar.','me_theme')
                             );
      $this->WP_Widget('flickr_widget', __('Flickr photos','me_theme'), $widget_options);
      }

      /*
      ADMIN WIDGET FORM
      */
      public function form( $instance ) {

      $instance = wp_parse_args( (array) $instance, array( 'title' => '') );
      $title = esc_attr( $instance['title'] );
      $flickr_id = $instance['flickr_id'];
      $count = $instance['count'];
      $display = $instance['display'];

?>
      <p>
      <label for="<?php echo $this->get_field_id('title'); ?>"><?php echo __( 'Title:','me_theme' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
      </p>

      <p>
      <label for="<?php echo $this->get_field_id('flickr_id'); ?>"><?php echo __( 'Flickr ID:','me_theme' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('flickr_id'); ?>" name="<?php echo $this->get_field_name('flickr_id'); ?>" type="text" value="<?php echo $flickr_id; ?>" />
      </p>

      <p>
      <label for="<?php echo $this->get_field_id('count'); ?>"><?php echo __( '# of photos:','me_theme' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" type="text" value="<?php echo $count; ?>" />
      </p>

      <p>
      <label for="<?php echo $this->get_field_id('count'); ?>"><?php echo __( 'Display:','me_theme' ); ?></label>
      <select class="widefat" id="<?php echo $this->get_field_id('display'); ?>" name="<?php echo $this->get_field_name('display'); ?>">
              <option value="latest" <?php echo ($display=='latest')?'selected':''; ?>>Latest</option>
              <option value="random" <?php echo ($display=='random')?'selected':''; ?>>Random</option>
      </select>
      </p>

<?php
      }
	
      /*
      SANITIZE WIDGET FORM VALUES
      */
      public function update( $new_instance, $old_instance ) {
             $instance = $old_instance;
             $instance['title'] = strip_tags($new_instance['title']);
             $instance['flickr_id'] = trim($new_instance['flickr_id']);
             $instance['count'] = (int)trim($new_instance['count']);
             $instance['display'] = trim($new_instance['display']);
             return $instance;
      }

        
      /*
      DISPLAY WIDGET
      */
      public function widget( $args, $instance ) {
             extract( $args );

             $title = $instance['title'];
             $count = $instance['count'];
             $flickr_id = $instance['flickr_id'];
             $display = $instance['display'];

             echo $before_widget;
             if ( $title )
             echo $before_title . $title . $after_title;
             echo show_photos($flickr_id, $count, $display);
             echo $after_widget;
      }
}
add_action('widgets_init', create_function('', 'return register_widget("flickr_widget");'));

function show_photos($id, $count = 6, $display = 'latest') {
	
	$output = '';
	if($count == '') $count = 6;

	$size = 'm';

	if($display == '') $display = 'latest';

	if($id){
		$output .= '<div class="flickr_widget">
                            <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count='.$count.'&amp;display='.$display.'&amp;size='.$size.'&amp;layout=v&amp;source=user&amp;user='.$id.'"></script>
                            <div class="clear">
                            </div>
                            </div>';
	}

	return $output;
}

?>