<?php
namespace WpPluginBoilerplate\Plugin {
	/**
	 * The main class.
	 *
	 * @since 1.0.0
	 */
	class wpPluginBoilerplate {
		/**
		 * Holds the singleton instance.
		 *
		 * @since 1.0.0
		 *
		 * @var wpPluginBoilerplate\wpPluginBoilerplate
		 */
		private static $instance;

		/**
		 * Returns singleton main class instance.
		 *
		 * @since 1.0.0
		 *
		 * @return wpPluginBoilerplate The instance.
		 */
		public static function instance() {
			if ( null === self::$instance || ! self::$instance instanceof self ) {
				self::$instance = new self();
				self::$instance->init();
			}

			return self::$instance;
		}

		/**
		 * Initializes the plugin.
		 * 
		 * @since 1.0.0
		 *
		 * @return void
		 */
		private function init() {
			$this->constants();

			require WP_PLUGIN_BOILERPLATE_DIR . '/vendor/autoload.php';
			new Admin\Admin();
		}

		/**
		 * Sets all plugin constants.
		 *
		 * @since 1.0.0
		 *
		 * @return void
		 */
		function constants() {
			$headers = [
				'name'    => 'Plugin Name',
				'version' => 'Version'
			];

			$pluginInfo = get_file_data( WP_PLUGIN_BOILERPLATE_FILE, $headers );

			$constants = [
				'WP_PLUGIN_BOILERPLATE_URL'     => plugin_dir_url( WP_PLUGIN_BOILERPLATE_FILE ),
				'WP_PLUGIN_BOILERPLATE_NAME'    => $pluginInfo['name'],
				'WP_PLUGIN_BOILERPLATE_VERSION' => $pluginInfo['version']
			];

			foreach ( $constants as $name => $value ) {
				if ( ! defined( $name ) ) {
					define( $name, $value );
				}
			}
		}
	}
};

namespace {

	/**
	 * Returns singleton main class instance.
	 *
	 * @return wpPluginBoilerplate The instance.
	 */
	function wpb() {
		return \WpPluginBoilerplate\Plugin\wpPluginBoilerplate::instance();
	}
}