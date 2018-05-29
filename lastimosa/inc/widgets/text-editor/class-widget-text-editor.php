<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Tranquility - the highest manifestation of power!' ); }

class Widget_Text_Editor extends WP_Widget {

	/**
	 * Widget constructor.
	 */
	private $options;
	private $prefix;
	function __construct() {
		
		$widget_ops = array( 'description' => __( 'WP Visual Editor', 'lastimosa' ) );
		$control_ops = array( 'width' => 800, 'height' => 600 );
		parent::__construct( false, __( 'Text Editor', 'lastimosa' ), $widget_ops, $control_ops );
		
		$this->options = array(
			'title' => array(
					'type' => 'text',
					'label' => __('Title', 'lastimosa'),
			),
			'text' => array(
				'type'   => 'wp-editor',
				//'teeny'  => false, //Whether to output the minimal editor configuration used in PressThis
				'reinit' => true,
				'label'  => __( 'Content', 'lastimosa' ),
				'desc'   => __( 'Enter content for this texblock', 'lastimosa' ),
				'tinymce' => true, //Load TinyMCE, can be used to pass settings directly to TinyMCE using an array. Default: true
				'size' => 'large',
				'editor_height' => 425, //The height to set the editor in pixels. If set, will be used instead of textarea_rows. 
				//'editor_type' => 'tinymce',
				'wpautop' => true, //Whether to use wpautop for adding in paragraphs. Note that the paragraphs are added automatically when wpautop is false.
				'value' => ''
			),
		);
		$this->prefix = 'text_editor';
		//$this->print_widget_added_javascript();
	}

	function widget( $args, $instance ) {
		extract( $args );
		$params = array();

		foreach ( $instance as $key => $value ) {
			$params[ $key ] = $value;
		}

		$title = $before_title . $params['title'] . $after_title;
		$filepath = dirname( __FILE__ ) . '/views/widget.php';

		$instance = $params;

		if ( file_exists( $filepath ) ) {
				include( $filepath );
		}
	}

	function update( $new_instance, $old_instance ) {
			return fw_get_options_values_from_input(
					$this->options,
					FW_Request::POST(fw_html_attr_name_to_array_multi_key($this->get_field_name($this->prefix)), array())
			);
	}

	function form( $values ) {

		$prefix = $this->get_field_id($this->prefix);
		$id = 'fw-widget-options-'. $prefix;

		echo '<div class="fw-force-xs fw-theme-admin-widget-wrap" id="'. esc_attr($id) .'">';
		echo fw()->backend->render_options($this->options, $values, array(
				'id_prefix' => $prefix .'-',
				'name_prefix' => $this->get_field_name($this->prefix),
		));
		echo '</div>';
		$this->print_widget_javascript();
		return $values;
	}
	
	private function print_widget_added_javascript() {
			?><script type="text/javascript">
					jQuery(function($) {
						var timeoutId;
						$(document).on('widget-updated widget-added', function(){
								clearTimeout(timeoutId);
								timeoutId = setTimeout(function(){ // wait a few milliseconds for html replace to finish
									fwEvents.trigger('fw:options:init', { $elements: $widget });
								}, 100);
							});
						});
			</script><?php
	}
	
	/*
	 * Initialize options after saving.
	 */
	private function print_widget_javascript() {
			?><script type="text/javascript">
					jQuery(function($) {
						let timeoutAddId;
						$(document).on('widget-added', function(ev, $widget){
							clearTimeout(timeoutAddId);
							timeoutAddId = setTimeout(function(){ // wait a few milliseconds for html replace to finish
								$widget.find('form input[type="submit"]').click();
							}, 300);
						});
						let timeoutUpdateId;
						$(document).on('widget-updated', function(ev, $widget){
							clearTimeout(timeoutUpdateId);
							timeoutUpdateId = setTimeout(function(){ // wait a few milliseconds for html replace to finish
								fwEvents.trigger('fw:options:init', { $elements: $widget });
							}, 100);
						});
					});
			</script><?php
	}
}