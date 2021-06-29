<?php

class savinilib_Social_Widget extends WP_Widget {

	function __construct() {

		$widget_ops = array(
			'classname' => 'savinilib-social',
			'description' => esc_html__( 'savinilib theme widget to display social media icons' ,'savinilib' ),
		);
		  parent::__construct( 'savinilib-social', esc_html__( 'savinilib Social Widget','savinilib' ), $widget_ops );
	}

	function widget( $args, $instance ) {
		$title = isset( $instance['title'] ) ? $instance['title'] : esc_html__( 'Follow us' , 'savinilib' );

		echo $args['before_widget'];

		if ( $title ) {
			echo $args['before_title'];
			echo $title;
			echo $args['after_title'];
		}

		/**
	 * Widget Content
	 */
	?>

	<!-- social icons -->
	<div class="social-icons sticky-sidebar-social">


	<?php savinilib_social_icons(); ?>


	</div><!-- end social icons -->


		<?php

		echo $args['after_widget'];
	}


	function form( $instance ) {
		if ( ! isset( $instance['title'] ) ) {
			$instance['title'] = esc_html__( 'Follow us' , 'savinilib' );
		}
	?>

	  <p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title ','savinilib' ) ?></label>

	  <input type="text" value="<?php echo esc_attr( $instance['title'] ); ?>"
						  name="<?php echo $this->get_field_name( 'title' ); ?>"
						  id="<?php $this->get_field_id( 'title' ); ?>"
						  class="widefat" />
	  </p>

		<?php
	}

}

?>
