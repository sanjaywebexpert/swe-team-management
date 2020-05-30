<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://sanjaywebexpert.com
 * @since      1.0.0
 *
 * @package    Swe_Team_Management
 * @subpackage Swe_Team_Management/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Swe_Team_Management
 * @subpackage Swe_Team_Management/admin
 * @author     Sanjay Sharma <sanjayraghusharma@gmail.com>
 */
class Swe_Team_Management_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		
		/* Metabox Class */
		require_once SWE_TEAM_MANAGEMENT_PLUGIN_DIR. 'admin/partials/class-metabox-swe-team-management.php';
		$swe_team_meta_box = new SWE_Team_Meta_Box();
		
		/* Metabox Class */
		require_once SWE_TEAM_MANAGEMENT_PLUGIN_DIR. 'admin/partials/class-repeater-metabox-swe-tm.php';
		$Swe_Team_Repeater_Meta_Box = new Swe_Team_Repeater_Meta_Box();
		
		/* Call & Initialise Setting page */
		require_once SWE_TEAM_MANAGEMENT_PLUGIN_DIR. '/admin/partials/class-setting-page-swe-team.php';
		$team_layout_setting = new Teamlayout();
	}
	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Swe_Team_Management_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Swe_Team_Management_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		
		wp_enqueue_style( 'swe-font-awesome-icons', plugin_dir_url( __FILE__ ) . 'css/swe-font-awesome.min.css', array(), $this->version, 'all' );
		
		wp_enqueue_style( 'swe-team-layout-main-css', plugin_dir_url( __FILE__ ) . 'css/swe-team-layout-main.css', array(), $this->version, 'all' );
		
		wp_enqueue_style( 'swe-team-owl-carousel-admin', plugin_dir_url( __FILE__ ) . 'css/swe.owl.carousel.min.css', array(), $this->version, 'all' );
		
		wp_enqueue_style( 'jQuery_UI_css', plugin_dir_url( __FILE__ ) . 'css/jquery-ui.css', array(), $this->version, 'all' );
		
		wp_enqueue_style( 'wp-color-picker' );
		
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/swe-team-management-admin.css', array(), $this->version, 'all' );
		
		
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Swe_Team_Management_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Swe_Team_Management_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		
		wp_enqueue_script('jquery');
		
		wp_enqueue_script('jquery-ui-tabs');
		wp_enqueue_script( 'wp-color-picker' );
		wp_enqueue_script( 'jquery-ui-sortable' );
		wp_enqueue_script( 'jquery-ui-accordion' );
		
		wp_enqueue_script( 'wp-alpha-color-picker', plugin_dir_url( __FILE__ ) . 'js/wp-color-picker-alpha.min.js', array( 'jquery' ), $this->version, true );
		
		wp_enqueue_script( 'swe-team-owl-carousel-admin-script', plugin_dir_url( __FILE__ ) . 'js/swe.owl.carousel.min.js', array( 'jquery' ), $this->version, true );
		
		
		
		wp_enqueue_script( 'swe-team-admin-script', plugin_dir_url( __FILE__ ) . 'js/swe-team-management-admin.js', array( 'jquery' ), $this->version, true );
		
		/* Ajax Decleration */
		wp_localize_script( 'swe-team-admin-script', 'sweteamAjax',
			array( 
				'ajaxurl' => admin_url( 'admin-ajax.php' ),
				'author_name' => 'sanjay 1',
			)
		);
		wp_enqueue_script('swe-team-admin-js');
	}
	
	/* Register Post Type */
	
	public function swe_team_management_register_post_type(){
            $labels = array(
                'name'               => _x( 'Swe Teams', 'plural form of Swe Team post type', SWETM_TEXTDOMAIN ),
                'singular_name'      => _x( 'Swe Team', 'singular form of Swe Team post type', SWETM_TEXTDOMAIN ),
                'menu_name'          => __( 'Swe Team', SWETM_TEXTDOMAIN ),
                'name_admin_bar'     => __( 'Swe Team', SWETM_TEXTDOMAIN ),
                'all_items'          => __( 'All Teams', SWETM_TEXTDOMAIN ),
                'add_new'            => __( 'Add New Team', SWETM_TEXTDOMAIN ),
                'add_new_item'       => __( 'Add New Team', SWETM_TEXTDOMAIN ),
                'new_item'           => __( 'New Team', SWETM_TEXTDOMAIN ),
                'edit_item'          => __( 'Edit Team', SWETM_TEXTDOMAIN ),
                'view_item'          => __( 'View Team', SWETM_TEXTDOMAIN ),
                'search_items'       => __( 'Search Team', SWETM_TEXTDOMAIN ),
                'parent_item_colon'  => __( 'Parent Logos:', SWETM_TEXTDOMAIN ),
                'not_found'          => __( 'No Team found.', SWETM_TEXTDOMAIN ),
                'not_found_in_trash' => __( 'No Team found in Trash.', SWETM_TEXTDOMAIN ),
				'featured_image'        => __( 'Team Image', SWETM_TEXTDOMAIN ),
				'set_featured_image'    => __( 'Set Team', SWETM_TEXTDOMAIN ),
				'remove_featured_image' => __( 'Remove Team image', SWETM_TEXTDOMAIN ),
				'use_featured_image'    => __( 'Use as Team image', SWETM_TEXTDOMAIN ),
            );

            $args = array(
                'labels'             => $labels,
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'query_var'          => true,
                'rewrite'            => array( 'slug' => 'swe-team' ),
                'capability_type'    => 'post',
                'hierarchical'       => false,
                'menu_position'      => null,
                'supports'           => array( 'title', 'thumbnail' ),
                'menu_icon' => 'dashicons-buddicons-groups'
            );

            register_post_type( 'sweteammngent', $args );

	}
	
	function gs_team_img_size_note( $content ){
		global  $post_type, $post ;
		if ( $post_type == 'sweteammngent' ) {
			if ( !has_post_thumbnail( $post->ID ) ) {
				$content .= '<mark>' . __( 'Recommended image size 400px X 400px for perfect view on various devices.', SWETM_TEXTDOMAIN ) . '</mark>';
			}
		}
		return $content;
	}

	public function wp_admin_bar_shortlink_menu($admin_bar){
		// add a parent item
            $args = array(
                'id'    => 'swe-teams',
                'title' => 'Swe Team',
                'href'   => 'edit.php?post_type=sweteammngent',
            );
            $admin_bar->add_node( $args );   
    }
	
	/**
	 * Add Meta Coloumn in Team listing 
	 *
	 */
	 
    public function swe_team_managment_add_columns( $columns ) {
		$columns = array(
			'cb'    => 'cb',
			'title' => __( 'Title', SWETM_TEXTDOMAIN ),
			'thumb' => __( 'Image', SWETM_TEXTDOMAIN ),
			'position'  => __( 'Position', SWETM_TEXTDOMAIN ),
			'date'  => __( 'Date', SWETM_TEXTDOMAIN ),
		);
		return $columns;
	}
	
	/**
	 * Manage Coloumn in Team listing 
	 *
	 */
	function swe_team_mng_all_colmns( $column ) {
		if ( $column == 'thumb' ) {
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'thumbnail', ['class' => 'swe-team-thumb-listing'] );
			}
		}
		if ( $column == 'position' ) {
			global $post;
			$position = get_post_meta( $post->ID, 'team_detail_position-job-title-designation', true );
			echo '<strong>'.$position.'</strong>';
		}
		
	}
	
	function team_preview_load_action(){
		$layout_id = $_POST['layout_id'];
		ob_start();
		include_once(SWE_TEAM_MANAGEMENT_PLUGIN_DIR.'/admin/partials/layouts/preview/preview_'.$layout_id.'.php');
		$content = ob_get_contents();
		ob_end_clean();
		echo $content;
			wp_die();
	}
	
	/**
	 * Ajax func to reset Team Setting listing 
	 *
	 **/
	public function swe_team_reset_setting_func(){
		$team_layout_options = array(
			'carousel_loop_0' => '0',
			'pagination_1' => '0',
			'autoplay_4' =>'0',
			'autoplay_pause_on_hover_6' =>'0',
			'autoplay_timeout_7' =>'0',
			'show_team_name_12' =>'0',
			'show_team_designation_13' =>'0',
			'team_short_description_limit_14' =>'0',
			'show_hide_social_connection_15' =>'0',
			'social_link_target_16' =>'0',
		);
		
		update_option('team_layout_option_name', $team_layout_options);
		echo "Setting Reset successful";
		die();
	}

}