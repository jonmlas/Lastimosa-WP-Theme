<?php if (!defined('FW')) die('Forbidden');

class FW_Shortcode_Image_Gallery extends FW_Shortcode
{
	protected function _render($atts, $content = null, $tag = '')
	{
		//fw_print($atts['image_gallery']['style']);
		
		if (!isset($atts['image_gallery']['style'])) {
			return $this->get_error_msg();
		}

		$view_path = $this->locate_path('/views/' . $atts['image_gallery']['style'] . '.php');
		
		if ($atts['image_gallery']['style'] == 'grid') :
			$atts = $atts['image_gallery']['grid'];
		elseif ($atts['image_gallery']['style'] == 'masonry'):
			$atts = $atts['image_gallery']['masonry'];
		endif;
		$view = fw_render_view($view_path,
			array('atts' => $atts)
		);
		return $view;

	}

	private function get_error_msg()
	{
		return '<b>Something went wrong :(</b>';
	}
}