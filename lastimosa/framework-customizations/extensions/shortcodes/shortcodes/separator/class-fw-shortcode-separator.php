<?php if (!defined('FW')) die('Forbidden');

class FW_Shortcode_Separator extends FW_Shortcode
{
	protected function _render($atts, $content = null, $tag = '')
	{
		if (!isset($atts['style']['view'])) {
			return $this->get_error_msg();
		}
		
		$view_path = $this->locate_path('/views/' . $atts['style']['view'] . '.php');
		if (($atts['style']['view']) == 'default' ) {
		return fw_render_view($view_path,
			array('width' => $atts['style']['default']['width'],
				  'color' => $atts['style']['default']['color'],
				  'thickness' => $atts['style']['default']['thickness'],
				  'margin_top' => $atts['style']['default']['margin_top'],
				  'margin_bottom' => $atts['style']['default']['margin_bottom'],)
			);
		}
		else {
			return fw_render_view($view_path,
				array('height' => $atts['style']['whitespace']['height'])
			);
		}
	}

	private function get_error_msg()
	{
		return '<b>Something went wrong :(</b>';
	}
}