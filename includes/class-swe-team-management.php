<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://sanjaywebexpert.com
 * @since      1.0.0
 *
 * @package    Swe_Team_Management
 * @subpackage Swe_Team_Management/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Swe_Team_Management
 * @subpackage Swe_Team_Management/includes
 * @author     Sanjay Sharma <sanjayraghusharma@gmail.com>
 */
class Swe_Team_Management {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Swe_Team_Management_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'SWE_TEAM_MANAGEMENT_VERSION' ) ) {
			$this->version = SWE_TEAM_MANAGEMENT_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'swe-team-management';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Swe_Team_Management_Loader. Orchestrates the hooks of the plugin.
	 * - Swe_Team_Management_i18n. Defines internationalization functionality.
	 * - Swe_Team_Management_Admin. Defines all hooks for the admin area.
	 * - Swe_Team_Management_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-swe-team-management-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-swe-team-management-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-swe-team-management-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-swe-team-management-public.php';

		$this->loader = new Swe_Team_Management_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Swe_Team_Management_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Swe_Team_Management_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Swe_Team_Management_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
		
		/* Register SWE Team Management post type */
		$this->loader->add_action( 'init', $plugin_admin, 'swe_team_management_register_post_type' );
		
		/* Admin Bar Menu*/
		$this->loader->add_action('admin_bar_menu', $plugin_admin, 'wp_admin_bar_shortlink_menu',90);
		
		/* Feature Image Note */
		$this->loader->add_filter( 'admin_post_thumbnail_html', $plugin_admin, 'gs_team_img_size_note' );
		
		/*  Add Custom Column in Team listing */
		$this->loader->add_action( 'manage_sweteammngent_posts_columns', $plugin_admin, 'swe_team_managment_add_columns' );
		
		/*  manage Column in Team listing */
		$this->loader->add_action( 'manage_sweteammngent_posts_custom_column', $plugin_admin, 'swe_team_mng_all_colmns' );
		
		$this->loader->add_action('wp_ajax_swe_team_reset_action', $plugin_admin, 'swe_team_reset_setting_func');
		$this->loader->add_action('wp_ajax_nopriv_swe_team_reset_action', $plugin_admin, 'swe_team_reset_setting_func');
		
	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Swe_Team_Management_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
		$this->loader->add_shortcode('swe-team', $plugin_public, 'swe_team_shortcode_func');
		$this->loader->add_shortcode('swe-team-grid-view', $plugin_public, 'swe_team_grid_view_shortcode_func');

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Swe_Team_Management_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
