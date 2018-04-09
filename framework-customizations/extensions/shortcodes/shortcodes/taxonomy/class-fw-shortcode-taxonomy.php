<?php if (!defined('FW')) die('Forbidden');

class FW_Shortcode_Taxonomy extends FW_Shortcode
{
	protected function _render($atts, $content = null, $tag = '')
	{
		if (!isset($atts['taxonomy'])) {
			return $this->get_error_msg();
		}
		$view_path = $this->locate_path('/views/' . $atts['taxonomy'] . '.php');
		return fw_render_view($view_path);
	}

	private function get_error_msg()
	{
		return '<b>Something went wrong :(</b>';
	}
}