<?php
class My_Adv_Cat_Widget extends WP_Widget {
 
    // Create widget
    public function __construct() {
        parent::__construct(
            'My_Adv_Cat_Widget', // Base ID
            'My Advanced Cat Widget', // Name
            array( 'description' => 'This is my advanced cat widget.') // Arguments
        );
    }
 
    // Front-End Display of the Widget
    public function widget( $args, $instance ) {
		//print_r($instance);
        // Saved widget options
        $title   = $instance['title'];
        $catName = $instance['cat_name'];
        $catAge  = $instance['cat_age'];
        $favToy  = $instance['fav_toy'];
        $desc    = apply_filters( 'widget_textarea', empty( $instance['description'] ) ? '' : $instance['description'], $instance );
 
        // Display information
        echo '<div class="my-widget block">';
            if ( !empty( $title ) ) {
                echo '<h3>' . $title . '</h3>';
            }
            if ( !empty( $catName ) ) {
                echo '<p><strong>Name:</strong> ' . $catName . '<br />';
            }
            if ( !empty( $catAge ) ) {
                echo '<strong>Age:</strong> ' . $catAge . '<br />';
            }
            if ( !empty( $favToy ) ) {
                echo '<strong>Favourite Toy:</strong> ' . $favToy . '</p>';
            }
            if ( !empty( $desc ) ) {
                echo wpautop( $desc );
            }
        echo '</div>';
    }
 
    // Back-end form of the Widget
    public function form( $instance ) {
        // Check for values
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        if ( isset( $instance[ 'cat_name' ] ) ) {
            $catName = $instance[ 'cat_name' ];
        }
        if ( isset( $instance[ 'cat_age' ] ) ) {
            $catAge = $instance[ 'cat_age' ];
        }
        if ( isset( $instance[ 'fav_toy' ] ) ) {
            $favToy = $instance[ 'fav_toy' ];
        }
        if ( isset( $instance[ 'description' ] ) ) {
            $desc = $instance[ 'description' ];
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'cat_name' ); ?>">Name:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'cat_name' ); ?>" name="<?php echo $this->get_field_name( 'cat_name' ); ?>" type="text" value="<?php echo esc_attr( $catName ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'cat_age' ); ?>">Age:</label>
            <select class="widefat" id="<?php echo $this->get_field_id('cat_age'); ?>" name="<?php echo $this->get_field_name('cat_age'); ?>">
                <?php
                    $options = array( '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20' );
                    foreach ( $options as $option ) {
                        echo '<option value="' . $option . '" id="' . $option . '"', $catAge == $option ? ' selected="selected"' : '', '>' . $option . '</option>';
                    }
                ?>
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'fav_toy' ); ?>">Favourite Toy:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'fav_toy' ); ?>" name="<?php echo $this->get_field_name( 'fav_toy' ); ?>" type="text" value="<?php echo esc_attr( $favToy ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'description' ); ?>">Description:</label>
            <textarea class="widefat" id="<?php echo $this->get_field_id('description'); ?>" name="<?php echo $this->get_field_name('description'); ?>" rows="16" cols="20"><?php echo $desc; ?></textarea>
        </p>
    <?php
    }
 
    // Sanitize and return the safe form values
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title']       = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['cat_name']    = ( !empty( $new_instance['cat_name'] ) ) ? strip_tags( $new_instance['cat_name'] ) : '';
        $instance['cat_age']     = ( !empty( $new_instance['cat_age'] ) ) ? strip_tags( $new_instance['cat_age'] ) : '';
        $instance['fav_toy']     = ( !empty( $new_instance['fav_toy'] ) ) ? strip_tags( $new_instance['fav_toy'] ) : '';
        if ( current_user_can('unfiltered_html') ) {
            $instance['description'] =  $new_instance['description'];
        } else {
            $instance['description'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['description']) ) );
        }
 
        return $instance;
    }
}
 
// Register widget
add_action( 'widgets_init', function(){
     register_widget( 'My_Adv_Cat_Widget' );
});
?>