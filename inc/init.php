<?php if ( ! defined( 'ABSPATH' ) ) die( 'Direct access forbidden.' );

/**
 * This function defines the theme constants
 */
function lastimosa_constants() {

	//* Define Directory Location Constants
	define( 'PARENT_DIR', get_template_directory() );
	define( 'CHILD_DIR', get_stylesheet_directory() );
	define( 'LASTIMOSA_INC_DIR', PARENT_DIR . '/inc' );
	define( 'LASTIMOSA_CHILD_INC_DIR', CHILD_DIR . '/inc' );
	define( 'LASTIMOSA_JS_DIR', LASTIMOSA_INC_DIR . '/js' );
	define( 'LASTIMOSA_CSS_DIR', LASTIMOSA_INC_DIR . '/css' );
	define( 'LASTIMOSA_WIDGETS_DIR', LASTIMOSA_INC_DIR . '/widgets' );

	//* Define URL Location Constants
	define( 'PARENT_URL', get_template_directory_uri() );
	define( 'CHILD_URL', get_stylesheet_directory_uri() );
	define( 'LASTIMOSA_INC_URL', PARENT_URL . '/inc' );
	define( 'LASTIMOSA_CHILD_INC_URL', CHILD_URL . '/inc' );
	define( 'LASTIMOSA_JS_URL', LASTIMOSA_INC_URL . '/js' );
	define( 'LASTIMOSA_CLASSES_URL', LASTIMOSA_INC_URL . '/classes' );
	define( 'LASTIMOSA_CSS_URL', LASTIMOSA_INC_URL . '/css' );
	define( 'LASTIMOSA_WIDGETS_URL', LASTIMOSA_INC_URL . '/widgets' );

}
class Theme_Includes
{
	private static $rel_path = null;

	private static $include_isolated_callable;

	private static $initialized = false;

	public static function init()
	{
		if (self::$initialized) {
			return;
		} else {
			self::$initialized = true;
		}

		/**
		 * Include a file isolated, to not have access to current context variables
		 */
		self::$include_isolated_callable = create_function('$path', 'include $path;');

		/**
		 * Both frontend and backend
		 */
		{
			self::include_child_first('/helpers-unyson.php');
			self::include_child_first('/helpers-option.php');
			self::include_child_first('/helpers-structure.php');
			self::include_child_first('/helpers.php');
			self::include_child_first('/hooks.php');
			self::include_child_first('/page-meta.php');
			self::include_child_first('/template-tags.php');
			self::include_child_first('/wp-sass/wp-sass.php');
			self::include_child_first('/wp_bootstrap_navwalker.php');
			self::include_all_child_first('/includes');

			add_action('init', array(__CLASS__, '_action_init'));
			add_action('widgets_init', array(__CLASS__, '_action_widgets_init'));
		}

		/**
		 * Only frontend
		 */
		if (!is_admin()) {
			add_action('wp_enqueue_scripts', array(__CLASS__, '_action_enqueue_scripts'),
				20 // Include later to be able to make wp_dequeue_style|script()
			);
		}else{
			self::include_child_first('/static-admin.php');
		}
	}

	private static function get_rel_path($append = '')
	{
		if (self::$rel_path === null) {
			self::$rel_path = '/'. basename(dirname(__FILE__));
		}

		return self::$rel_path . $append;
	}

	private static function include_all_child_first($dir_rel_path)
	{
		$paths = array();

		if (is_child_theme()) {
			$paths[] = self::get_child_path($dir_rel_path);
		}

		$paths[] = self::get_parent_path($dir_rel_path);

		foreach ($paths as $path) {
			if ($files = glob($path .'/*.php')) {
				foreach ($files as $file) {
					self::include_isolated($file);
				}
			}
		}
	}

	/**
	 * @param string $dirname 'foo-bar'
	 * @return string 'Foo_Bar'
	 */
	private static function dirname_to_classname($dirname) {
		$class_name = explode('-', $dirname);
		$class_name = array_map('ucfirst', $class_name);
		$class_name = implode('_', $class_name);

		return $class_name;
	}

	public static function get_parent_path($rel_path)
	{
		return get_template_directory() . self::get_rel_path($rel_path);
	}

	public static function get_child_path($rel_path)
	{
		if (!is_child_theme()) {
			return null;
		}

		return get_stylesheet_directory() . self::get_rel_path($rel_path);
	}

	public static function include_isolated($path)
	{
		call_user_func(self::$include_isolated_callable, $path);
	}

	public static function include_child_first($rel_path)
	{
		if (is_child_theme()) {
			$path = self::get_child_path($rel_path);

			if (file_exists($path)) {
				self::include_isolated($path);
			}
		}

		{
			$path = self::get_parent_path($rel_path);

			if (file_exists($path)) {
				self::include_isolated($path);
			}
		}
	}

	/**
	 * @internal
	 */
	public static function _action_enqueue_scripts()
	{
		self::include_child_first('/static.php');
	}
	

	/**
	 * @internal
	 */
	public static function _action_init()
	{
		self::include_child_first('/menus.php');
		self::include_child_first('/posts.php');
		if(is_admin()) {
			self::include_child_first('/optimization.php');
		}
	}

	/**
	 * @internal
	 */
	public static function _action_widgets_init()
	{
		{
			$paths = array();

			if (is_child_theme()) {
				$paths[] = self::get_child_path('/widgets');
			}

			$paths[] = self::get_parent_path('/widgets');
		}

		$included_widgets = array();

		foreach ($paths as $path) {
			$dirs = glob($path .'/*', GLOB_ONLYDIR);

			if (!$dirs) {
				continue;
			}

			foreach ($dirs as $dir) {
				$dirname = basename($dir);

				if (isset($included_widgets[$dirname])) {
					// this happens when a widget in child theme wants to overwrite the widget from parent theme
					continue;
				} else {
					$included_widgets[$dirname] = true;
				}

				self::include_isolated($dir .'/class-widget-'. $dirname .'.php');

				$widget_class = 'Widget_' . self::dirname_to_classname( $dirname );
				if ( class_exists( $widget_class ) ) {
					register_widget( $widget_class );
				}

			}
		}
	}
}

Theme_Includes::init();