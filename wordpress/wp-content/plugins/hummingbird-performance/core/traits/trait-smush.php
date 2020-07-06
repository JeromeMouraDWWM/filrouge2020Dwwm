<?php
/**
 * Smush trait.
 *
 * @since 2.4.0
 * @package Hummingbird\Core
 */

namespace Hummingbird\Core\Traits;

/**
 * Trait Smush
 */
trait Smush {
	/**
	 * Variable used to distinguish between versions of Smush.
	 * Sets true if the Pro version is installed. False in all other cases.
	 *
	 * @var bool $is_smush_pro
	 */
	public $is_smush_pro = false;

	/**
	 * Check if Smush is installed.
	 *
	 * @return bool
	 */
	public function is_smush_installed() {
		if ( ! function_exists( 'get_plugins' ) ) {
			include_once ABSPATH . 'wp-admin/includes/plugin.php';
		}

		$plugins = get_plugins();
		if ( array_key_exists( 'wp-smush-pro/wp-smush.php', $plugins ) ) {
			$this->is_pro = true;
		}

		return array_key_exists( 'wp-smush-pro/wp-smush.php', $plugins ) || array_key_exists( 'wp-smushit/wp-smush.php', $plugins );
	}

	/**
	 * Check if Smush is active.
	 *
	 * @return bool
	 */
	public function is_smush_enabled() {
		if ( ! function_exists( 'is_plugin_active' ) ) {
			include_once ABSPATH . 'wp-admin/includes/plugin.php';
		}

		return is_plugin_active( 'wp-smush-pro/wp-smush.php' ) || is_plugin_active( 'wp-smushit/wp-smush.php' );
	}

	/**
	 * Checks whether the Smush can be configured on a site or not.
	 *
	 * @return bool
	 */
	public function is_smush_configurable() {
		// If single site return true.
		if ( ! is_multisite() || is_network_admin() ) {
			return true;
		}

		$networkwide = get_site_option( 'wp-smush-networkwide' );
		return '0' !== $networkwide && false !== $networkwide;
	}
}
