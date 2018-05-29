<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

class Widget_Social_Media extends WP_Widget {

	function __construct() {
		$widget_ops = array( 'description' => __( 'Social links', 'lastimosa' ) );
		parent::__construct( false, __( 'Social Media', 'lastimosa' ), $widget_ops );
	}

	function widget( $args, $instance ) {
		extract( $args );
		$params = array();

		foreach ( $instance as $key => $value ) {
			$params[ $key ] = $value;
		}

		$title = $before_title . $params['title'] . $after_title;
		unset( $params['widget-title'] );

		$filepath = dirname( __FILE__ ) . '/views/widget.php';

		$instance      = $params;
		$before_widget = str_replace( 'class="', 'class="social-media ', $before_widget );

		if ( file_exists( $filepath ) ) {
			include( $filepath );
		}
	}

	function update( $new_instance, $old_instance ) {
		$instance = wp_parse_args( (array) $new_instance, $old_instance );

		return $instance;
	}

	function form( $instance ) {

		$instance = wp_parse_args( (array) $instance, array( 'number' => '', 'title' => '' ) );
		$number   = esc_attr( $instance['number'] );
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title', 'lastimosa' ); ?> </label>
			<input type="text" name="<?php echo $this->get_field_name( 'title' ); ?>"
						 value="<?php echo esc_attr( $instance['title'] ); ?>" class="widefat"
						 id="<?php $this->get_field_id( 'title' ); ?>"/>
		</p>
		<p>Click <a href="<?php echo admin_url( 'themes.php?page=fw-settings#fw-options-tab-tab_social'); ?>" target="_blank">here</a> to add or modify Social Media profiles.</p>
	<?php
	}
}
