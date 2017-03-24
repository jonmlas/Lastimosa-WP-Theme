<?php if (!defined('FW')) die('Forbidden');

class FW_Shortcode_Events extends FW_Shortcode
{
	protected function _render($atts, $content = null, $tag = '')
	{
		//$test = fw_get_db_ext_settings_option('events','event');
		//fw_print($test);
		
		if (!isset($atts['events']['style'])) {
			return $this->get_error_msg();
		}

		$view_path = $this->locate_path('/views/' . $atts['events']['style'] . '.php');
		
		if ($atts['events']['style'] == 'default') :
			$atts = $atts['events']['grid'];
			$view = fw_render_view($view_path,
				array('images' => $atts['images']
			));
		/*elseif ($atts['events']['style'] == 'masonry'):
			$atts = $atts['events']['masonry'];
			$view = fw_render_view($view_path,
				array('images' => $atts['images']
			)); */
		endif;
		
		return $view;

	}

	private function get_error_msg()
	{
		return '<b>Something went wrong :(</b>';
	}
}

