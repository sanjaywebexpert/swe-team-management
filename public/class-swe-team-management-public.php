<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://sanjaywebexpert.com
 * @since      1.0.0
 *
 * @package    Swe_Team_Management
 * @subpackage Swe_Team_Management/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Swe_Team_Management
 * @subpackage Swe_Team_Management/public
 * @author     Sanjay Sharma <sanjayraghusharma@gmail.com>
 */
class Swe_Team_Management_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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
		 
		wp_enqueue_style( 'swe-font-awesome-icons', plugin_dir_url( __DIR__ ) . 'admin/css/swe-font-awesome.min.css', array(), $this->version, 'all' );
		
		wp_enqueue_style( 'swe-team-layout-main-css-public', plugin_dir_url( __FILE__ ) . 'css/swe-team-layout-main-public.css', array(), $this->version, 'all' );
		
		wp_enqueue_style( 'swe-team-owl-carousel-admin', plugin_dir_url( __DIR__ ) . 'admin/css/swe.owl.carousel.min.css', array(), $this->version, 'all' );

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/swe-team-management-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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
		 
		wp_enqueue_script( 'swe-team-owl-carousel-admin-script', plugin_dir_url( __DIR__ ) . 'admin/js/swe.owl.carousel.min.js', array( 'jquery' ), $this->version, true );

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/swe-team-management-public.js', array( 'jquery' ), $this->version, false );

	}
	
	public function swe_team_shortcode_func($atts, $content = null){
		extract(shortcode_atts( array(  
			'layout' => '1',
		), $atts));
		global $post;
		$randslid = rand(1,1000);
		$result='';
		$team_layout_options = get_option( 'team_layout_option_name' ); // Array of All Options
		 $carousel_loop_0 = $team_layout_options['carousel_loop_0']; // Carousel Loop
		 $pagination_1 = $team_layout_options['pagination_1']; // Pagination
		 $navigation_2 = $team_layout_options['navigation_2']; // Navigation
		 $navigation_position_3 = $team_layout_options['navigation_position_3']; // Navigation Position
		 $autoplay_4 = $team_layout_options['autoplay_4']; // Autoplay
		 $autoplay_pause_on_hover_6 = $team_layout_options['autoplay_pause_on_hover_6']; // Autoplay Pause On Hover
		 $autoplay_timeout_7 = $team_layout_options['autoplay_timeout_7']; // Autoplay Timeout
		 $margin_8 = $team_layout_options['margin_8']; // Margin
		 $columns_in_desktop_9 = $team_layout_options['columns_in_desktop_9']; // Columns in Desktop
		 $columns_in_table_10 = $team_layout_options['columns_in_table_10']; // Columns in Table
		 $columns_in_mobile_11 = $team_layout_options['columns_in_mobile_11']; // Columns in Mobile
		 
		 $show_team_name_12 = $team_layout_options['show_team_name_12']; // Show Team Name
		 $show_team_designation_13 = $team_layout_options['show_team_designation_13']; // Show Team Designation
		 
		 $show_team_short_description = $team_layout_options['show_team_short_description']; // Show Team Short Description Limit
		 $team_short_description_limit_14 = $team_layout_options['team_short_description_limit_14']; // Team Short Description Limit
		 $show_hide_social_connection_15 = $team_layout_options['show_hide_social_connection_15']; // Show / Hide Social Connection
		 $social_link_target_16 = $team_layout_options['social_link_target_16']; // Social Link Target
		 $team_name_font_size_17 = $team_layout_options['team_name_font_size_17']; // Team Name Font Size
		 $team_name_font_weight_19 = $team_layout_options['team_name_font_weight_19']; // Team Name Font Weight
		 $hover_overlay_color_20 = $team_layout_options['hover_overlay_color_20']; // Hover Overlay color
		 $theme_color_21 = $team_layout_options['theme_color_21']; // Theme Color
 

		/* slider js  */
		$carousel_loop_0 = isset($carousel_loop_0) ? $carousel_loop_0 : 'true';
		$pagination_1 = isset($pagination_1) ? $pagination_1 : 'true';
		$navigation_2 = isset($navigation_2) ? $navigation_2 : 'true';
		$autoplay_4 = isset($autoplay_4) ? $autoplay_4 : 'true';
		$autoplay_pause_on_hover_6 = isset($autoplay_pause_on_hover_6) ? $autoplay_pause_on_hover_6 : 'true';
		$autoplay_timeout_7 = $autoplay_timeout_7!="" ? $autoplay_timeout_7 : '5000';
		$margin_8 = $margin_8!="" ? $margin_8 : '15';
		$columns_in_desktop_9 = isset($columns_in_desktop_9) ? $columns_in_desktop_9 : '4';
		$columns_in_table_10 = isset($columns_in_table_10) ? $columns_in_table_10 : '2';
		$columns_in_mobile_11 = isset($columns_in_mobile_11) ? $columns_in_mobile_11 : '1';
		$navigation_position_3 = isset($navigation_position_3) ? $navigation_position_3 : 'Bottom Right';


		/* layout elements */
		$show_hide_social_connection_15 = isset($show_hide_social_connection_15) ? $show_hide_social_connection_15 : 'true';
		$show_team_name_12 = isset($show_team_name_12) ? $show_team_name_12 : 'true';
		$show_team_designation_13 = isset($show_team_designation_13) ? $show_team_designation_13 : 'true';


		$team_name_font_size_17 = isset($team_name_font_size_17) ? $team_name_font_size_17 : '20';
		$hovercolor = isset($hover_overlay_color_20) ? $hover_overlay_color_20 : 'rgba(0,0,0,0.75)';
		$theme_color = isset($theme_color_21) ? $theme_color_21 : '#fb8800';

		$nav_pos = '';
		if($navigation_position_3=="Top Right"){
			$nav_pos.='
				position: absolute;
				right: 0;
				top: -25px;
				text-align: center;
			';
		}elseif($navigation_position_3=="Top Center"){
			$nav_pos.='
				position: absolute;
				right: 0;
				top: -25px;
				left:0;
				text-align: center;
				';
		}
		elseif($navigation_position_3=="Top Left"){
			$nav_pos.='
				position: absolute;
				left: 0;
				top: -25px;
				';
		}
		elseif($navigation_position_3=="Bottom Right"){
			$nav_pos.='
				position: absolute;
				right: 0;
				bottom: -45px;
			';
		}
		elseif($navigation_position_3=="Center"){
			$nav_pos.='
				position: relative;
				right: 0;
				left: 0;
				bottom: auto;
				text-align: center;
			';
		}
		elseif($navigation_position_3=="Bottom Left"){
			
			$nav_pos.='
				position: absolute;
				left:0;
				bottom: -30px;
			';
		}else{
			$nav_pos.='
				position: absolute;
				right: 0;
				bottom: -45px;
			';
		}
		
	$result.='<style>
	/* TEAM LAYOUT 1  */
	.swe-team-layout-1 .profile h1{
		   font-size: '.$team_name_font_size_17.'px;
		   color: '.$theme_color.';
    }
    .swe-team-layout-1 .profile .img-box:after {
		background-color: '.$hovercolor.';
	}
	.swe_team_carousel_layout .owl-nav div{
		background:  '.$theme_color.';
	}
	.swe_team_carousel_layout .owl-nav{
		'.$nav_pos.'
	}
	
	.swe-team-layout-1 .img-box ul li{
		border-color: '.$theme_color.';
	}
	.swe-team-layout-1 .img-box a:hover li,
	.swe-team-layout-1 a,
	.swe-team-layout-1 a:hover{
		color:  '.$theme_color.';
	}
	
	
	/* TEAM LAYOUT 2  */
	.swe-team-layout-2 .profile h1{
		   font-size: '.$team_name_font_size_17.'px;
    }

	.swe-team-layout-2 .swe_social-icons a:hover,
	.swe-team-layout-2 .swe-team-layout-2 .swe-team-layout-2 .member-info span {
		color: '.$theme_color.';
	}
	.swe-team-layout-2 .team-member:hover .member-info {
		background-color:  '.$theme_color.';
	}
	.swe-team-layout-2 .member-info span{
		color: '.$theme_color.';
	}
	
	/* TEAM LAYOUT 3  */
	.swe-team-layout-3 .profile h1{
		   font-size: '.$team_name_font_size_17.'px;
    }
	.swe-team-layout-3 .single_team .icon li a,
	.swe-team-layout-3 .single_team .team_content {
		background: '.$theme_color.';
	}
	
	/* TEAM LAYOUT 4  */
	.swe-team-layout-4 .single-team-member:hover {
		background: '.$theme_color.';
	}
	.swe-team-layout-4 .single-team-member .thumbnail-image {
		border: 2px solid '.$theme_color.';
	}
	
	/* TEAM LAYOUT 5  */
	.swe-team-layout-5 .team_item:hover .hover_content .icon a:hover {
		color: '.$theme_color.';
	}
	.swe-team-layout-5 .team_item .hover_content:before {
		background: '.$theme_color.';
	}
	
	/* TEAM LAYOUT 6  */
	.swe-team-layout-6 .expert_team_item:hover h4,
	.swe-team-layout-6 .expert_team_item .e_team_image ul li:hover a  {
		color: '.$theme_color.';
		opacity: 1;
	}
	.swe-team-layout-6 .expert_team_item .e_team_image:before{
		 background: '.$theme_color.';
		 opacity: .6;
	}
	
	/* TEAM LAYOUT 7  */
	.swe-team-layout-7 .box-outline>*:nth-child(1):before{
		border-color: '.$theme_color.';
	}
	
	/* TEAM LAYOUT 8  */
	.swe-team-layout-8 .team-pro .fa{
		background: '.$theme_color.';
	}
	.swe-team-layout-8 .team-info {
		color: '.$theme_color.';
		border-bottom: 3px solid '.$theme_color.';
	}
	
	/* TEAM LAYOUT 9  */
	.swe-team-layout-9 .single-team-item .image .overley .content .social-media ul li a:hover,
	.swe-team-layout-9 .single-team-item .image .overley .designation {
		background: '.$theme_color.';
	}
	.swe-team-layout-9 .single-team-item .image .overley .content .social-media ul li a{
		border-color: '.$theme_color.';
		display: inline-block;
	}
	
	/* TEAM LAYOUT 10  */
	.swe-team-layout-10 .single-team3 .image .inner-image .overley .content .social-media ul li a:hover {
		background: '.$theme_color.';
	}
	.swe-team-layout-10 .single-team3 .image .inner-image .overley .content .social-media ul li a{
		border-color: '.$theme_color.';
	}
	.swe-team-layout-1 .owl-dots div.active, .swe-team-layout-2 .owl-dots div.active, .swe-team-layout-3 .owl-dots div.active, .swe-team-layout-4 .owl-dots div.active, .swe-team-layout-5 .owl-dots div.active, .swe-team-layout-6 .owl-dots div.active, .swe-team-layout-7 .owl-dots div.active, .swe-team-layout-8 .owl-dots div.active, .swe-team-layout-9 .owl-dots div.active, .swe-team-layout-10 .owl-dots div.active{
		    background: '.$theme_color.';
	}
	</style>
	<script>
	jQuery(window).load(function(){
		jQuery(".owl-carousel").owlCarousel({
				loop: '.$carousel_loop_0.',
				dots: '.$pagination_1.',
				nav: '.$navigation_2.',
				navText:["‹","›"],
				autoplay: '.$autoplay_4.',
				autoplayHoverPause: '.$autoplay_pause_on_hover_6.',
				autoplayTimeout:'.$autoplay_timeout_7.',
				margin:'.$margin_8.',
				responsiveClass:true,
				responsive : {0 : {items: '.$columns_in_mobile_11.'},768 : {items: '.$columns_in_table_10.'},960 : {items: '.$columns_in_table_10.'},
				1200 : {items: '.$columns_in_desktop_9.'},1920 : {items: '.$columns_in_desktop_9.'}
			}
		});
	});
	</script>';
	$swe_team_arg =	array( 
		'post_type' => 'sweteammngent',
			'posts_per_page' => -1,
			'orderby' => 'date',
			'order' => 'DESC' 
		);

	$swe_team_loop = new WP_Query($swe_team_arg);
	$result .='<div class="swe_team_wrapper">';
	$result .='<div class="swe-team-layout-'.$layout.' owl-carousel swe_team_carousel_layout">';
		if($swe_team_loop->have_posts()){	
			while($swe_team_loop->have_posts()){	
				$swe_team_loop->the_post(); 
				$post_id = get_the_ID();
			$swe_team_designation = get_post_meta( $post_id, 'team_detail_position-job-title-designation', true );
			$swe_team_description = strip_tags(get_post_meta( $post_id, 'team_detail_short-description', true ));
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			$swe_team_social_links = get_post_meta( $post_id, 'team_social_team-social-link', true );
			$swe_team_social_icon = get_post_meta( $post_id, 'team_social_team-social-icon', true );
			
			if($social_link_target_16 == "NewTab"){
				$target = "_blank";
			}else{
				$target = "";
			}
				if($layout==1){
					$result .='<div class="single-team-member profile">';
					$result .='<div class="img-box">';
						$result .='<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'"> ';
						 if($show_hide_social_connection_15 == "true") { 	
							$result .='<ul class="text-center">';
							if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
								$count = 0;
								foreach($swe_team_social_links as $swe_team_social_link){
									if(isset($swe_team_social_link) && $swe_team_social_link!=""){
										$result .='<a href="'.$swe_team_social_link.'" target="'.$target.'"><li><i class="fa fa-'.strtolower($swe_team_social_icon[$count]).'"></i></li></a>';
									}
									$count++;
								}
								
							}
							$result .='</ul>';
							} 
							$result .='</div>';
						if($show_team_name_12 == "true") {	
							$result .='<h1>'.get_the_title().'</h1>';
						}
						if($show_team_designation_13 == "true") {	
							$result .='<h2>'.$swe_team_designation.'</h2>';
						} 
					
						if($show_team_short_description == "true") {
							if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
								$description = substr($swe_team_description,0,$team_short_description_limit_14);
							}else{
								$description = $swe_team_description;
							}
							$result .='<p class="swe_team_short_desc">'.$description.'</p>';
						} 
					$result .='</div>';
				}
				elseif($layout==2){
					$result .='<div class="team-member_wrap ">';
					$result .='<div class="team-member ">';
					$result .='<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'"> ';
					$result .='<div class="member-info">';
					if($show_team_name_12 == "true") {	
						$result .='<h5 class="name">'.get_the_title().'</h5>';
					}
					if($show_team_designation_13 == "true") {	
						$result .='<span class="position">'.$swe_team_designation.'</span>';
					}
					$result .='</div>';
					if($show_hide_social_connection_15 == "true") { 	
						$result .='<ul class="swe_social-icons">';
						if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
							$count = 0;
							foreach($swe_team_social_links as $swe_team_social_link){
								if(isset($swe_team_social_link) && $swe_team_social_link!=""){
									$result .='<a href="'.$swe_team_social_link.'" target="'.$target.'"><li><i class="fa fa-'.strtolower($swe_team_social_icon[$count]).'"></i></li></a>';
								}
								$count++;
							}
						}
						$result .='</ul>';
					} 
					$result .='</div>';
					if($show_team_short_description == "true") {
						if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
							$description = substr($swe_team_description,0,$team_short_description_limit_14);
						}else{
							$description = $swe_team_description;
						}
						$result .='<p class="swe_team_short_desc">'.$description.'</p>';
					}
					$result .='</div>';
				}
				elseif($layout==3){
					$result .='<div class="single_team_wrap">';
					$result .='<div class="single_team">';
					$result .='<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'"> ';
					$result .='<div class="team_content text-center">';
					if($show_team_name_12 == "true") {	
						$result .='<h3 class="title">'.get_the_title().'</h3>';
					}
					if($show_team_designation_13 == "true") {	
						$result .='<p>'.$swe_team_designation.'</p>';
					}
					$result .='</div>';
					if($show_hide_social_connection_15 == "true") { 	
						$result .='<div class="box-content"><ul class="icon">';
						if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
							$count = 0;
							foreach($swe_team_social_links as $swe_team_social_link){
								if(isset($swe_team_social_link) && $swe_team_social_link!=""){
									$result .='<li><a href="'.$swe_team_social_link.'" target="'.$target.'"><i class="fa fa-'.strtolower($swe_team_social_icon[$count]).'"></i></a></li>';
								}
								$count++;
							}
						}
						$result .='</ul></div>';
					} 
					$result .='</div>';
					if($show_team_short_description == "true") {
						if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
							$description = substr($swe_team_description,0,$team_short_description_limit_14);
						}else{
							$description = $swe_team_description;
						}
						$result .='<p class="swe_team_short_desc">'.$description.'</p>';
					}
					$result .='</div>';
				}
				elseif($layout==4){
					$result .='<div class="single-team-member_wrap">';
					$result .='<div class="single-team-member">';
					$result .='<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'" class="thumbnail-image"> ';
					$result .='<div class="thumbnail-body">';
					if($show_team_name_12 == "true") {	
						$result .='<a class="thumbnail-title">'.get_the_title().'</a>';
					}
					if($show_team_designation_13 == "true") {	
						$result .='<p class="thumbnail-subtitle">'.$swe_team_designation.'</p><hr class="thumbnail-divider">';
					}
					
					if($show_hide_social_connection_15 == "true") { 	
						$result .='<ul class="inline-list-xs thumbnail-list">';
						if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
							$count = 0;
							foreach($swe_team_social_links as $swe_team_social_link){
								if(isset($swe_team_social_link) && $swe_team_social_link!=""){
									$result .='<li><a href="'.$swe_team_social_link.'" target="'.$target.'"><i class="fa fa-'.strtolower($swe_team_social_icon[$count]).'"></i></a></li>';
								}
								$count++;
							}
						}
						$result .='</ul>';
					} 
					$result .='</div></div>';
					if($show_team_short_description == "true") {
						if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
							$description = substr($swe_team_description,0,$team_short_description_limit_14);
						}else{
							$description = $swe_team_description;
						}
						$result .='<p class="swe_team_short_desc">'.$description.'</p>';
					}
					$result .='</div>';
				}
				elseif($layout==5){
					$result .='<div class="team_item_wrap">';
					$result .='<div class="team_item">';
					$result .='<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'"> ';
					$result .='<div class="hover_content">';
					$result .='<div class="text">';
					if($show_team_name_12 == "true") {	
						$result .='<h3>'.get_the_title().'</h3>';
					}
					if($show_team_designation_13 == "true") {	
						$result .='<h6>'.$swe_team_designation.'</h6>';
					}
					$result .='</div>';
					if($show_hide_social_connection_15 == "true") { 	
						$result .='<div class="icon">';
						if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
							$count = 0;
							foreach($swe_team_social_links as $swe_team_social_link){
								if(isset($swe_team_social_link) && $swe_team_social_link!=""){
									$result .='<a href="'.$swe_team_social_link.'" target="'.$target.'"><i class="fa fa-'.strtolower($swe_team_social_icon[$count]).'"></i></a>';
								}
								$count++;
							}
						}
						$result .='</div>';
					} 
					$result .='</div></div>';
					if($show_team_short_description == "true") {
						if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
							$description = substr($swe_team_description,0,$team_short_description_limit_14);
						}else{
							$description = $swe_team_description;
						}
						$result .='<p class="swe_team_short_desc">'.$description.'</p>';
					}
					$result .='</div>';
				}
				elseif($layout==6){
					$result .='<div class="expert_team_item" >';
					$result .=' <div class="e_team_image">
						<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'"> ';
					if($show_hide_social_connection_15 == "true") { 	
						if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
							$count = 0;
						$result .='<ul>';	
							foreach($swe_team_social_links as $swe_team_social_link){
								if(isset($swe_team_social_link) && $swe_team_social_link!=""){
									$result .='<li><a href="'.$swe_team_social_link.'" target="'.$target.'"><i class="fa fa-'.strtolower($swe_team_social_icon[$count]).'"></i></a></li>';
								}
								$count++;
							}
						}
					}
					$result .='</ul></div>';
					if($show_team_name_12 == "true") {	
						$result .='<h4>'.get_the_title().'</h4>';
					}
					if($show_team_designation_13 == "true") {	
						$result .='<p>'.$swe_team_designation.'</p>';
					}
					
					if($show_team_short_description == "true") {
						if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
							$description = substr($swe_team_description,0,$team_short_description_limit_14);
						}else{
							$description = $swe_team_description;
						}
						$result .='<p>'.$description.'</p>';
					}	
					$result .='</div>';
				}
				elseif($layout==7){
					$result .='<div class="team-box box-outline">';
					$result .=' <div class="team-image-box">
						<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'"> ';
					$result .='<div class="team-image-caption">';	
					if($show_hide_social_connection_15 == "true") { 	
						if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
							$count = 0;
						$result .='<ul class="list-inline">';	
							foreach($swe_team_social_links as $swe_team_social_link){
								if(isset($swe_team_social_link) && $swe_team_social_link!=""){
									$result .='<li><a href="'.$swe_team_social_link.'" target="'.$target.'" class="fa fa-'.strtolower($swe_team_social_icon[$count]).' icon"></a></li>';
								}
								$count++;
							}
						}
					}
					$result .='</ul></div></div>';
					$result .='<div class="team-caption">';
					if($show_team_name_12 == "true") {	
						$result .='<a class="link team-title" href="#">'.get_the_title().'</a>';
					}
					if($show_team_designation_13 == "true") {	
						$result .='<p style="#777777">'.$swe_team_designation.'</p>';
					}
				 
					$result .='</div>';
					if($show_team_short_description == "true") {
						if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
							$description = substr($swe_team_description,0,$team_short_description_limit_14);
						}else{
							$description = $swe_team_description;
						}
						$result .='<p class="swe_team_short_desc">'.$description.'</p>';
					}
					$result .='</div>';
				}
				elseif($layout==8){
					$result .='<div class="team-pro hover-effect">';
					$result .=' <figure>
						<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'"> </figure>';
					$result .='<div class="team-info">';
					if($show_team_name_12 == "true") {	
						$result .='<h4 class="link team-title">'.get_the_title().'</h4>';
					}
					if($show_team_designation_13 == "true") {	
						$result .='<p>'.$swe_team_designation.'</p>';
					}
					if($show_hide_social_connection_15 == "true") { 	
						if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
							$count = 0;
							$result .='<ul>';	
							foreach($swe_team_social_links as $swe_team_social_link){
								if(isset($swe_team_social_link) && $swe_team_social_link!=""){
									$result .='<li><a href="'.$swe_team_social_link.'" target="'.$target.'"><i class="fa fa-'.strtolower($swe_team_social_icon[$count]).' " aria-hidden="true"></i></a></li>';
								}
								$count++;
							}
						}
					}
					$result .='</ul>';
					if($show_team_short_description == "true") {
						if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
							$description = substr($swe_team_description,0,$team_short_description_limit_14);
						}else{
							$description = $swe_team_description;
						}
						$result .='<p>'.$description.'</p>';
					}
					$result .='</div></div>';
				}
				elseif($layout==9){
					$result .='<div class="single-team-item_wrap" >';
					$result .='<div class="single-team-item" >';
					$result .='<div class="image">
								<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'"> ';
					$result .='<div class="overley">
								<div class="content">
								<div class="social-media">';	
					if($show_hide_social_connection_15 == "true") { 	
						if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
							$count = 0;
						$result .='<ul>';	
							foreach($swe_team_social_links as $swe_team_social_link){
								if(isset($swe_team_social_link) && $swe_team_social_link!=""){
									$result .='<li><a href="'.$swe_team_social_link.'" target="'.$target.'" class="fa fa-'.strtolower($swe_team_social_icon[$count]).'"></a></li>';
								}
								$count++;
							}
						}
					}
					$result .='</ul></div></div>';
					$result .='<div class="designation">';
					if($show_team_name_12 == "true") {	
						$result .='<h4 style="color: #eaeaea">'.get_the_title().'</h4>';
					}
					if($show_team_designation_13 == "true") {	
						$result .='<span style="color: #d2d2d2">'.$swe_team_designation.'</span>';
					}
				 
					$result .='</div>';
					$result .='</div></div></div>';
					if($show_team_short_description == "true") {
						if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
							$description = substr($swe_team_description,0,$team_short_description_limit_14);
						}else{
							$description = $swe_team_description;
						}
						$result .='<p class="swe_team_short_desc">'.$description.'</p>';
					}
					$result .='</div>';
				}
				elseif($layout==10){
					$result .='<div class="single-team3">';
					$result .='<div class="image">
								<div class="inner-image">
								<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'"> ';
					$result .='<div class="overley">
								<div class="content">
									<div class="social-media">';	
					if($show_hide_social_connection_15 == "true") { 	
						if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
							$count = 0;
						$result .='<ul>';	
							foreach($swe_team_social_links as $swe_team_social_link){
								if(isset($swe_team_social_link) && $swe_team_social_link!=""){
									$result .='<li><a href="'.$swe_team_social_link.'" target="'.$target.'" class="fa fa-'.strtolower($swe_team_social_icon[$count]).'"></a></li>';
								}
								$count++;
							}
						}
					}
					$result .='</ul></div></div></div></div></div>';
					$result .='<div class="team-details">';
					if($show_team_name_12 == "true") {	
						$result .='<h3>'.get_the_title().'</h3>';
					}
					if($show_team_designation_13 == "true") {	
						$result .='<span style="color: #656565">'.$swe_team_designation.'</span>';
					}
					if($show_team_short_description == "true") {
						if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
							$description = substr($swe_team_description,0,$team_short_description_limit_14);
						}else{
							$description = $swe_team_description;
						}
						$result .='<p>'.$description.'</p>';
					}
					$result .='</div>';
					$result .='</div>';
				}
				else{
					$result .='<h3>No Team list found in this layout!</h3>';
				}
			}
		}else{
			$result .='<h3>No Team list found!</h3>';
		}
	
	$result .='</div></div>';
	
	return $result;
	}
	
	
	/**********************************
		 Team Grid View shortcode 
	********************************/
	public function swe_team_grid_view_shortcode_func($atts, $content = null){
		extract(shortcode_atts( array(  
			'layout' => '1',
		), $atts));
		global $post;
		$randslid = rand(1,1000);
		$result='';
		$team_layout_options = get_option( 'team_layout_option_name' ); // Array of All Options

		 $show_team_name_12 = $team_layout_options['show_team_name_12']; // Show Team Name
		 $show_team_designation_13 = $team_layout_options['show_team_designation_13']; // Show Team Designation
		 
		 $show_team_short_description = $team_layout_options['show_team_short_description']; // Show Team Short Description Limit
		 $team_short_description_limit_14 = $team_layout_options['team_short_description_limit_14']; // Team Short Description Limit
		 $show_hide_social_connection_15 = $team_layout_options['show_hide_social_connection_15']; // Show / Hide Social Connection
		 $social_link_target_16 = $team_layout_options['social_link_target_16']; // Social Link Target
		 $team_name_font_size_17 = $team_layout_options['team_name_font_size_17']; // Team Name Font Size
		 $team_name_font_weight_19 = $team_layout_options['team_name_font_weight_19']; // Team Name Font Weight
		 $hover_overlay_color_20 = $team_layout_options['hover_overlay_color_20']; // Hover Overlay color
		 $theme_color_21 = $team_layout_options['theme_color_21']; // Theme Color
 
		/* layout elements */
		$show_hide_social_connection_15 = isset($show_hide_social_connection_15) ? $show_hide_social_connection_15 : 'true';
		$show_team_name_12 = isset($show_team_name_12) ? $show_team_name_12 : 'true';
		$show_team_designation_13 = isset($show_team_designation_13) ? $show_team_designation_13 : 'true';


		$team_name_font_size_17 = isset($team_name_font_size_17) ? $team_name_font_size_17 : '20';
		$hovercolor = isset($hover_overlay_color_20) ? $hover_overlay_color_20 : 'rgba(0,0,0,0.75)';
		$theme_color = isset($theme_color_21) ? $theme_color_21 : '#fb8800';

	$result.='<style>
	/* TEAM LAYOUT 1  */
	.swe-team-layout-1 .profile h1{
		   font-size: '.$team_name_font_size_17.'px;
		   color: '.$theme_color.';
    }
    .swe-team-layout-1 .profile .img-box:after {
		background-color: '.$hovercolor.';
	}
	.swe_team_carousel_layout .owl-nav div{
		background:  '.$theme_color.';
	}
	
	.swe-team-layout-1 .img-box ul li{
		border-color: '.$theme_color.';
	}
	.swe-team-layout-1 .img-box a:hover li,
	.swe-team-layout-1 a,
	.swe-team-layout-1 a:hover{
		color:  '.$theme_color.';
	}
	
	/* TEAM LAYOUT 2  */
	.swe-team-layout-2 .profile h1{
		   font-size: '.$team_name_font_size_17.'px;
    }

	.swe-team-layout-2 .swe_social-icons a:hover,
	.swe-team-layout-2 .swe-team-layout-2 .swe-team-layout-2 .member-info span {
		color: '.$theme_color.';
	}
	.swe-team-layout-2 .team-member:hover .member-info {
		background-color:  '.$theme_color.';
	}
	.swe-team-layout-2 .member-info span{
		color: '.$theme_color.';
	}
	
	/* TEAM LAYOUT 3  */
	.swe-team-layout-3 .profile h1{
		   font-size: '.$team_name_font_size_17.'px;
    }
	.swe-team-layout-3 .single_team .icon li a,
	.swe-team-layout-3 .single_team .team_content {
		background: '.$theme_color.';
	}
	
	/* TEAM LAYOUT 4  */
	.swe-team-layout-4 .single-team-member:hover {
		background: '.$theme_color.';
	}
	.swe-team-layout-4 .single-team-member .thumbnail-image {
		border: 2px solid '.$theme_color.';
	}
	
	/* TEAM LAYOUT 5  */
	.swe-team-layout-5 .team_item:hover .hover_content .icon a:hover {
		color: '.$theme_color.';
	}
	.swe-team-layout-5 .team_item .hover_content:before {
		background: '.$theme_color.';
	}
	
	/* TEAM LAYOUT 6  */
	.swe-team-layout-6 .expert_team_item:hover h4,
	.swe-team-layout-6 .expert_team_item .e_team_image ul li:hover a  {
		color: '.$theme_color.';
		opacity: 1;
	}
	.swe-team-layout-6 .expert_team_item .e_team_image:before{
		 background: '.$theme_color.';
		 opacity: .6;
	}
	
	/* TEAM LAYOUT 7  */
	.swe-team-layout-7 .box-outline>*:nth-child(1):before{
		border-color: '.$theme_color.';
	}
	
	/* TEAM LAYOUT 8  */
	.swe-team-layout-8 .team-pro .fa{
		background: '.$theme_color.';
	}
	.swe-team-layout-8 .team-info {
		color: '.$theme_color.';
		border-bottom: 3px solid '.$theme_color.';
	}
	
	/* TEAM LAYOUT 9  */
	.swe-team-layout-9 .single-team-item .image .overley .content .social-media ul li a:hover,
	.swe-team-layout-9 .single-team-item .image .overley .designation {
		background: '.$theme_color.';
	}
	.swe-team-layout-9 .single-team-item .image .overley .content .social-media ul li a{
		border-color: '.$theme_color.';
		display: inline-block;
	}
	
	/* TEAM LAYOUT 10  */
	.swe-team-layout-10 .single-team3 .image .inner-image .overley .content .social-media ul li a:hover {
		background: '.$theme_color.';
	}
	.swe-team-layout-10 .single-team3 .image .inner-image .overley .content .social-media ul li a{
		border-color: '.$theme_color.';
	}
	.swe-team-layout-1 .owl-dots div.active, .swe-team-layout-2 .owl-dots div.active, .swe-team-layout-3 .owl-dots div.active, .swe-team-layout-4 .owl-dots div.active, .swe-team-layout-5 .owl-dots div.active, .swe-team-layout-6 .owl-dots div.active, .swe-team-layout-7 .owl-dots div.active, .swe-team-layout-8 .owl-dots div.active, .swe-team-layout-9 .owl-dots div.active, .swe-team-layout-10 .owl-dots div.active{
		    background: '.$theme_color.';
	}
	</style>';
	$swe_team_arg =	array( 
		'post_type' => 'sweteammngent',
			'posts_per_page' => -1,
			'orderby' => 'date',
			'order' => 'DESC' 
		);

	$swe_team_loop = new WP_Query($swe_team_arg);
	$result .='<div class="swe_team_wrapper">';
	$result .='<div class="swe-team-layout-'.$layout.' swe_team_carousel_layout team_grid">';
		if($swe_team_loop->have_posts()){	
			while($swe_team_loop->have_posts()){	
				$swe_team_loop->the_post(); 
				$post_id = get_the_ID();
			$swe_team_designation = get_post_meta( $post_id, 'team_detail_position-job-title-designation', true );
			$swe_team_description = strip_tags(get_post_meta( $post_id, 'team_detail_short-description', true ));
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			$swe_team_social_links = get_post_meta( $post_id, 'team_social_team-social-link', true );
			$swe_team_social_icon = get_post_meta( $post_id, 'team_social_team-social-icon', true );
			
			if($social_link_target_16 == "NewTab"){
				$target = "_blank";
			}else{
				$target = "";
			}
				if($layout==1){
					$result .='<div class="single-team-member profile">';
					$result .='<div class="img-box">';
						$result .='<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'"> ';
						 if($show_hide_social_connection_15 == "true") { 	
							$result .='<ul class="text-center">';
							if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
								$count = 0;
								foreach($swe_team_social_links as $swe_team_social_link){
									if(isset($swe_team_social_link) && $swe_team_social_link!=""){
										$result .='<a href="'.$swe_team_social_link.'" target="'.$target.'"><li><i class="fa fa-'.strtolower($swe_team_social_icon[$count]).'"></i></li></a>';
									}
									$count++;
								}
								
							}
							$result .='</ul>';
							} 
							$result .='</div>';
						if($show_team_name_12 == "true") {	
							$result .='<h1>'.get_the_title().'</h1>';
						}
						if($show_team_designation_13 == "true") {	
							$result .='<h2>'.$swe_team_designation.'</h2>';
						} 
					
						if($show_team_short_description == "true") {
							if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
								$description = substr($swe_team_description,0,$team_short_description_limit_14);
							}else{
								$description = $swe_team_description;
							}
							$result .='<p class="swe_team_short_desc">'.$description.'</p>';
						} 
					$result .='</div>';
				}
				elseif($layout==2){
					$result .='<div class="team-member_wrap ">';
					$result .='<div class="team-member ">';
					$result .='<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'"> ';
					$result .='<div class="member-info">';
					if($show_team_name_12 == "true") {	
						$result .='<h5 class="name">'.get_the_title().'</h5>';
					}
					if($show_team_designation_13 == "true") {	
						$result .='<span class="position">'.$swe_team_designation.'</span>';
					}
					$result .='</div>';
					if($show_hide_social_connection_15 == "true") { 	
						$result .='<ul class="swe_social-icons">';
						if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
							$count = 0;
							foreach($swe_team_social_links as $swe_team_social_link){
								if(isset($swe_team_social_link) && $swe_team_social_link!=""){
									$result .='<a href="'.$swe_team_social_link.'" target="'.$target.'"><li><i class="fa fa-'.strtolower($swe_team_social_icon[$count]).'"></i></li></a>';
								}
								$count++;
							}
						}
						$result .='</ul>';
					} 
					$result .='</div>';
					if($show_team_short_description == "true") {
						if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
							$description = substr($swe_team_description,0,$team_short_description_limit_14);
						}else{
							$description = $swe_team_description;
						}
						$result .='<p class="swe_team_short_desc">'.$description.'</p>';
					}
					$result .='</div>';
				}
				elseif($layout==3){
					$result .='<div class="single_team_wrap">';
					$result .='<div class="single_team">';
					$result .='<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'"> ';
					$result .='<div class="team_content text-center">';
					if($show_team_name_12 == "true") {	
						$result .='<h3 class="title">'.get_the_title().'</h3>';
					}
					if($show_team_designation_13 == "true") {	
						$result .='<p>'.$swe_team_designation.'</p>';
					}
					$result .='</div>';
					if($show_hide_social_connection_15 == "true") { 	
						$result .='<div class="box-content"><ul class="icon">';
						if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
							$count = 0;
							foreach($swe_team_social_links as $swe_team_social_link){
								if(isset($swe_team_social_link) && $swe_team_social_link!=""){
									$result .='<li><a href="'.$swe_team_social_link.'" target="'.$target.'"><i class="fa fa-'.strtolower($swe_team_social_icon[$count]).'"></i></a></li>';
								}
								$count++;
							}
						}
						$result .='</ul></div>';
					} 
					$result .='</div>';
					if($show_team_short_description == "true") {
						if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
							$description = substr($swe_team_description,0,$team_short_description_limit_14);
						}else{
							$description = $swe_team_description;
						}
						$result .='<p class="swe_team_short_desc">'.$description.'</p>';
					}
					$result .='</div>';
				}
				elseif($layout==4){
					$result .='<div class="single-team-member_wrap">';
					$result .='<div class="single-team-member">';
					$result .='<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'" class="thumbnail-image"> ';
					$result .='<div class="thumbnail-body">';
					if($show_team_name_12 == "true") {	
						$result .='<a class="thumbnail-title">'.get_the_title().'</a>';
					}
					if($show_team_designation_13 == "true") {	
						$result .='<p class="thumbnail-subtitle">'.$swe_team_designation.'</p><hr class="thumbnail-divider">';
					}
					
					if($show_hide_social_connection_15 == "true") { 	
						$result .='<ul class="inline-list-xs thumbnail-list">';
						if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
							$count = 0;
							foreach($swe_team_social_links as $swe_team_social_link){
								if(isset($swe_team_social_link) && $swe_team_social_link!=""){
									$result .='<li><a href="'.$swe_team_social_link.'" target="'.$target.'"><i class="fa fa-'.strtolower($swe_team_social_icon[$count]).'"></i></a></li>';
								}
								$count++;
							}
						}
						$result .='</ul>';
					} 
					$result .='</div></div>';
					if($show_team_short_description == "true") {
						if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
							$description = substr($swe_team_description,0,$team_short_description_limit_14);
						}else{
							$description = $swe_team_description;
						}
						$result .='<p class="swe_team_short_desc">'.$description.'</p>';
					}
					$result .='</div>';
				}
				elseif($layout==5){
					$result .='<div class="team_item_wrap">';
					$result .='<div class="team_item">';
					$result .='<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'"> ';
					$result .='<div class="hover_content">';
					$result .='<div class="text">';
					if($show_team_name_12 == "true") {	
						$result .='<h3>'.get_the_title().'</h3>';
					}
					if($show_team_designation_13 == "true") {	
						$result .='<h6>'.$swe_team_designation.'</h6>';
					}
					$result .='</div>';
					if($show_hide_social_connection_15 == "true") { 	
						$result .='<div class="icon">';
						if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
							$count = 0;
							foreach($swe_team_social_links as $swe_team_social_link){
								if(isset($swe_team_social_link) && $swe_team_social_link!=""){
									$result .='<a href="'.$swe_team_social_link.'" target="'.$target.'"><i class="fa fa-'.strtolower($swe_team_social_icon[$count]).'"></i></a>';
								}
								$count++;
							}
						}
						$result .='</div>';
					} 
					$result .='</div></div>';
					if($show_team_short_description == "true") {
						if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
							$description = substr($swe_team_description,0,$team_short_description_limit_14);
						}else{
							$description = $swe_team_description;
						}
						$result .='<p class="swe_team_short_desc">'.$description.'</p>';
					}
					$result .='</div>';
				}
				elseif($layout==6){
					$result .='<div class="expert_team_item" >';
					$result .=' <div class="e_team_image">
						<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'"> ';
					if($show_hide_social_connection_15 == "true") { 	
						if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
							$count = 0;
						$result .='<ul>';	
							foreach($swe_team_social_links as $swe_team_social_link){
								if(isset($swe_team_social_link) && $swe_team_social_link!=""){
									$result .='<li><a href="'.$swe_team_social_link.'" target="'.$target.'"><i class="fa fa-'.strtolower($swe_team_social_icon[$count]).'"></i></a></li>';
								}
								$count++;
							}
						}
					}
					$result .='</ul></div>';
					if($show_team_name_12 == "true") {	
						$result .='<h4>'.get_the_title().'</h4>';
					}
					if($show_team_designation_13 == "true") {	
						$result .='<p>'.$swe_team_designation.'</p>';
					}
					
					if($show_team_short_description == "true") {
						if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
							$description = substr($swe_team_description,0,$team_short_description_limit_14);
						}else{
							$description = $swe_team_description;
						}
						$result .='<p>'.$description.'</p>';
					}	
					$result .='</div>';
				}
				elseif($layout==7){
					$result .='<div class="team-box box-outline">';
					$result .=' <div class="team-image-box">
						<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'"> ';
					$result .='<div class="team-image-caption">';	
					if($show_hide_social_connection_15 == "true") { 	
						if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
							$count = 0;
						$result .='<ul class="list-inline">';	
							foreach($swe_team_social_links as $swe_team_social_link){
								if(isset($swe_team_social_link) && $swe_team_social_link!=""){
									$result .='<li><a href="'.$swe_team_social_link.'" target="'.$target.'" class="fa fa-'.strtolower($swe_team_social_icon[$count]).' icon"></a></li>';
								}
								$count++;
							}
						}
					}
					$result .='</ul></div></div>';
					$result .='<div class="team-caption">';
					if($show_team_name_12 == "true") {	
						$result .='<a class="link team-title" href="#">'.get_the_title().'</a>';
					}
					if($show_team_designation_13 == "true") {	
						$result .='<p style="#777777">'.$swe_team_designation.'</p>';
					}
				 
					$result .='</div>';
					if($show_team_short_description == "true") {
						if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
							$description = substr($swe_team_description,0,$team_short_description_limit_14);
						}else{
							$description = $swe_team_description;
						}
						$result .='<p class="swe_team_short_desc">'.$description.'</p>';
					}
					$result .='</div>';
				}
				elseif($layout==8){
					$result .='<div class="team-pro hover-effect">';
					$result .=' <figure>
						<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'"> </figure>';
					$result .='<div class="team-info">';
					if($show_team_name_12 == "true") {	
						$result .='<h4 class="link team-title">'.get_the_title().'</h4>';
					}
					if($show_team_designation_13 == "true") {	
						$result .='<p>'.$swe_team_designation.'</p>';
					}
					if($show_hide_social_connection_15 == "true") { 	
						if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
							$count = 0;
							$result .='<ul>';	
							foreach($swe_team_social_links as $swe_team_social_link){
								if(isset($swe_team_social_link) && $swe_team_social_link!=""){
									$result .='<li><a href="'.$swe_team_social_link.'" target="'.$target.'"><i class="fa fa-'.strtolower($swe_team_social_icon[$count]).' " aria-hidden="true"></i></a></li>';
								}
								$count++;
							}
						}
					}
					$result .='</ul>';
					if($show_team_short_description == "true") {
						if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
							$description = substr($swe_team_description,0,$team_short_description_limit_14);
						}else{
							$description = $swe_team_description;
						}
						$result .='<p>'.$description.'</p>';
					}
					$result .='</div></div>';
				}
				elseif($layout==9){
					$result .='<div class="single-team-item_wrap" >';
					$result .='<div class="single-team-item" >';
					$result .='<div class="image">
								<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'"> ';
					$result .='<div class="overley">
								<div class="content">
								<div class="social-media">';	
					if($show_hide_social_connection_15 == "true") { 	
						if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
							$count = 0;
						$result .='<ul>';	
							foreach($swe_team_social_links as $swe_team_social_link){
								if(isset($swe_team_social_link) && $swe_team_social_link!=""){
									$result .='<li><a href="'.$swe_team_social_link.'" target="'.$target.'" class="fa fa-'.strtolower($swe_team_social_icon[$count]).'"></a></li>';
								}
								$count++;
							}
						}
					}
					$result .='</ul></div></div>';
					$result .='<div class="designation">';
					if($show_team_name_12 == "true") {	
						$result .='<h4 style="color: #eaeaea">'.get_the_title().'</h4>';
					}
					if($show_team_designation_13 == "true") {	
						$result .='<span style="color: #d2d2d2">'.$swe_team_designation.'</span>';
					}
				 
					$result .='</div>';
					$result .='</div></div></div>';
					if($show_team_short_description == "true") {
						if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
							$description = substr($swe_team_description,0,$team_short_description_limit_14);
						}else{
							$description = $swe_team_description;
						}
						$result .='<p class="swe_team_short_desc">'.$description.'</p>';
					}
					$result .='</div>';
				}
				elseif($layout==10){
					$result .='<div class="single-team3">';
					$result .='<div class="image">
								<div class="inner-image">
								<img src="' . $large_image_url[0] . '" alt="'.get_the_title().'"> ';
					$result .='<div class="overley">
								<div class="content">
									<div class="social-media">';	
					if($show_hide_social_connection_15 == "true") { 	
						if(isset($swe_team_social_links) && is_array($swe_team_social_links) && !empty($swe_team_social_links) ) {
							$count = 0;
						$result .='<ul>';	
							foreach($swe_team_social_links as $swe_team_social_link){
								if(isset($swe_team_social_link) && $swe_team_social_link!=""){
									$result .='<li><a href="'.$swe_team_social_link.'" target="'.$target.'" class="fa fa-'.strtolower($swe_team_social_icon[$count]).'"></a></li>';
								}
								$count++;
							}
						}
					}
					$result .='</ul></div></div></div></div></div>';
					$result .='<div class="team-details">';
					if($show_team_name_12 == "true") {	
						$result .='<h3>'.get_the_title().'</h3>';
					}
					if($show_team_designation_13 == "true") {	
						$result .='<span style="color: #656565">'.$swe_team_designation.'</span>';
					}
					if($show_team_short_description == "true") {
						if(isset($team_short_description_limit_14) && $team_short_description_limit_14!=""){	
							$description = substr($swe_team_description,0,$team_short_description_limit_14);
						}else{
							$description = $swe_team_description;
						}
						$result .='<p>'.$description.'</p>';
					}
					$result .='</div>';
					$result .='</div>';
				}
				else{
					$result .='<h3>No Team list found in this layout!</h3>';
				}
			}
		}else{
			$result .='<h3>No Team list found!</h3>';
		}
	
	$result .='</div></div>';
	
	return $result;
	}
	

}
