<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class AIAA_Plugin {

	/**
	 * Loader instance
	 */
	protected $loader;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->load_dependencies();
	}

	/**
	 * Load required files
	 */
	private function load_dependencies() {

		require_once AIAA_PLUGIN_PATH . 'includes/class-loader.php';
		require_once AIAA_PLUGIN_PATH . 'includes/class-activator.php';
		require_once AIAA_PLUGIN_PATH . 'includes/class-deactivator.php';

		require_once AIAA_PLUGIN_PATH . 'includes/class-settings.php';
		require_once AIAA_PLUGIN_PATH . 'includes/class-database.php';
		require_once AIAA_PLUGIN_PATH . 'includes/class-helper.php';

		require_once AIAA_PLUGIN_PATH . 'includes/class-gemini.php';
		require_once AIAA_PLUGIN_PATH . 'includes/class-chat.php';
		require_once AIAA_PLUGIN_PATH . 'includes/class-booking.php';
		require_once AIAA_PLUGIN_PATH . 'includes/class-slots.php';
		require_once AIAA_PLUGIN_PATH . 'includes/class-email.php';

		require_once AIAA_PLUGIN_PATH . 'includes/class-api.php';
		require_once AIAA_PLUGIN_PATH . 'includes/class-ajax.php';

		$this->loader = new AIAA_Loader();
	}

	/**
	 * Run plugin
	 */
	public function run() {

		// Admin hooks
		$this->loader->add_action( 'admin_menu', $this, 'register_admin_menu' );

		// Frontend hooks
		$this->loader->add_action( 'wp_enqueue_scripts', $this, 'enqueue_assets' );

		// Init API routes
		$this->loader->add_action( 'rest_api_init', $this, 'init_api' );

		$this->loader->run();
	}

	/**
	 * Admin menu
	 */
	public function register_admin_menu() {
		// We will build this later
	}

	/**
	 * Assets
	 */
	public function enqueue_assets() {
		// Frontend scripts/styles later
	}

	/**
	 * REST API init
	 */
	public function init_api() {
		// API routes later
	}
}