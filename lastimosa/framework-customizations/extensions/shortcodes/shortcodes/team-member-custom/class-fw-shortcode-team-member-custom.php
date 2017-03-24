<?php if (!defined('FW')) die('Forbidden');

class FW_Shortcode_Team_Member_Custom extends FW_Shortcode
{
	protected function _render($atts, $content = null, $tag = '')
	{
		if (!isset($atts['view'])) {
			return $this->get_error_msg();
		}
		
		$view_path = $this->locate_path('/views/' . $atts['view'] . '.php');
		return fw_render_view($view_path,
			array('image' => $atts['image'],
				  'name' => $atts['name'],
				  'job' => $atts['job'],
				  'desc' => $atts['desc'],
				  'img_style' => $atts['img_style'],)
			);
	}

	private function get_error_msg()
	{
		return '<b>Something went wrong :(</b>';
	}
}