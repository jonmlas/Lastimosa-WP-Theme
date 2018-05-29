<?php if (!defined('FW')) die('Forbidden');

class FW_Shortcode_Portfolio extends FW_Shortcode
{
	protected function _render( $atts, $content = null, $tag = '' )
	{
		if ( ! isset( $atts['view'] ) ) {
			return $this->get_error_msg();
		}
		if ( $atts['view'] !== 'rand' ) {
			$view_path = $this->locate_path( '/views/' . $atts['view'] . '.php' );
			return fw_render_view( $view_path,
				array( 'atts'	=> $atts )
			);
		} else {
			$views = array( 'style-1', 'style-2', 'style-3' );
			$random_index = mt_rand( 0, count( $views ) - 1 );
			$random_view = $views[$random_index];
			$random_view_path = $this->locate_path( '/views/' . $random_view . '.php' );
			return fw_render_view( $random_view_path );
		}
	}

	private function get_error_msg()
	{
		return '<b>Something went wrong :(</b>';
	}
}