<?php
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

?>

<style>
	/* TEAM LAYOUT 1  */
	.swe-team-layout-1 .profile h1{
		   font-size: <?=$team_name_font_size_17?>px;
		   color: <?=$theme_color?>;
    }
    .swe-team-layout-1 .profile .img-box:after {
		background-color: <?=$hovercolor?>;
	}
	.swe_team_carousel_layout .owl-nav div{
		background:  <?=$theme_color?>;
	}
	.swe_team_carousel_layout .owl-nav{
		<?=$nav_pos?>
	}
	
	.swe-team-layout-1 .img-box ul li{
		border-color: <?=$theme_color?>;
	}
	.swe-team-layout-1 .img-box a:hover li,
	.swe-team-layout-1 a,
	.swe-team-layout-1 a:hover{
		color:  <?=$theme_color?>;
	}
	
	
	/* TEAM LAYOUT 2  */
	.swe-team-layout-2 .profile h1{
		   font-size: <?=$team_name_font_size_17?>px;
    }

	.swe-team-layout-2 .social-icons a:hover,
	.swe-team-layout-2 .swe-team-layout-2 .swe-team-layout-2 .member-info span {
		color: <?=$theme_color?>;
	}
	.swe-team-layout-2 .team-member:hover .member-info {
		background-color:  <?=$theme_color?>;
	}
	.swe-team-layout-2 .member-info span{
		color: <?=$theme_color?>;
	}
	
	/* TEAM LAYOUT 3  */
	.swe-team-layout-3 .profile h1{
		   font-size: <?=$team_name_font_size_17?>px;
    }
	.swe-team-layout-3 .single_team .icon li a,
	.swe-team-layout-3 .single_team .team_content {
		background: <?=$theme_color?>;
	}
	
	/* TEAM LAYOUT 4  */
	.swe-team-layout-4 .single-team-member:hover {
		background: <?=$theme_color?>;;
	}
	.swe-team-layout-4 .single-team-member .thumbnail-image {
		border: 2px solid <?=$theme_color?>;
	}
	
	/* TEAM LAYOUT 5  */
	.swe-team-layout-5 .team_item:hover .hover_content .icon a:hover {
		color: <?=$theme_color?>;
	}
	.swe-team-layout-5 .team_item .hover_content:before {
		background: <?=$theme_color?>;
	}
	
	/* TEAM LAYOUT 6  */
	.swe-team-layout-6 .expert_team_item:hover h4,
	.swe-team-layout-6 .expert_team_item .e_team_image ul li:hover a  {
		color: <?=$theme_color?>;
		opacity: 1;
	}
	.swe-team-layout-6 .expert_team_item .e_team_image:before{
		 background: <?=$theme_color?>;
		 opacity: .6;
	}
	
	/* TEAM LAYOUT 7  */
	.swe-team-layout-7 .box-outline>*:nth-child(1):before{
		border-color: <?=$theme_color?>;
	}
	
	/* TEAM LAYOUT 8  */
	.swe-team-layout-8 .team-pro .fa{
		background: <?=$theme_color?>;
	}
	.swe-team-layout-8 .team-info {
		color: <?=$theme_color?>;
		border-bottom: 3px solid <?=$theme_color?>;
	}
	
	/* TEAM LAYOUT 9  */
	.swe-team-layout-9 .single-team-item .image .overley .content .social-media ul li a:hover,
	.swe-team-layout-9 .single-team-item .image .overley .designation {
		background: <?=$theme_color?>;
	}
	.swe-team-layout-9 .single-team-item .image .overley .content .social-media ul li a{
		border-color: <?=$theme_color?>;
		display: inline-block;
	}
	
	/* TEAM LAYOUT 10  */
	.swe-team-layout-10 .single-team3 .image .inner-image .overley .content .social-media ul li a:hover {
		background: <?=$theme_color?>;
	}
	.swe-team-layout-10 .single-team3 .image .inner-image .overley .content .social-media ul li a{
		border-color: <?=$theme_color?>;
	}
	.swe-team-layout-1 .owl-dots div.active, .swe-team-layout-2 .owl-dots div.active, .swe-team-layout-3 .owl-dots div.active, .swe-team-layout-4 .owl-dots div.active, .swe-team-layout-5 .owl-dots div.active, .swe-team-layout-6 .owl-dots div.active, .swe-team-layout-7 .owl-dots div.active, .swe-team-layout-8 .owl-dots div.active, .swe-team-layout-9 .owl-dots div.active, .swe-team-layout-10 .owl-dots div.active{
		background: <?=$theme_color?>;
	}
</style>

<!----- Layout 1------>
<div class="preview_layout_1">
	<div class="text-shortcode-wrap">
		<span class="shortcode_name">Shortcode for Team Grid View layout 1</span>		
		<input type="text" value="[swe-team-grid-view layout=1]" readonly onclick="copythis()" class="copy_shortcode">
		<span class="shortcode_info">Use this Shortcode in any post/page/widget </span>
	</div>
	<div class="swe-team-layout-1 swe_team_carousel_layout team_grid" id="swe-preview-layout1" >
			<div class="single-team-member profile">
			<div class="img-box">
			<?php echo '<img src="' . esc_url( plugins_url( 'img/team1.jpg', __FILE__ ) ) . '" > '; ?>
				<?php if($show_hide_social_connection_15 == "true") { ?>	
					<ul class="text-center">
						<a href="https://facebook.com"><li><i class="fa fa-facebook"></i></li></a>
						<a href="https://twitter.com"><li><i class="fa fa-twitter"></i></li></a>
						<a href="https://linkedin.com"><li><i class="fa fa-linkedin"></i></li></a>
						<a href="https://google.com"><li><i class="fa fa-google-plus"></i></li></a>
					</ul>
				<?php } ?>
				</div>
			
			<?php if($show_team_name_12 == "true") { ?>	
			<a href="#"><h1>Alzanzo Allen</h1></a>
			<?php } ?>
			<?php if($show_team_designation_13 == "true") { ?>	
			<h2>Co-Founder</h2>
			<?php } ?>
		</div>
		<div class="single-team-member profile">
			<div class="img-box">
			<?php echo '<img src="' . esc_url( plugins_url( 'img/team2.jpg', __FILE__ ) ) . '" > '; ?>
				<?php if($show_hide_social_connection_15 == "true") { ?>	
					<ul class="text-center">
						<a href="https://facebook.com"><li><i class="fa fa-facebook"></i></li></a>
						<a href="https://twitter.com"><li><i class="fa fa-twitter"></i></li></a>
						<a href="https://linkedin.com"><li><i class="fa fa-linkedin"></i></li></a>
						<a href="https://google.com"><li><i class="fa fa-google-plus"></i></li></a>
					</ul>
				<?php } ?>
			</div>
				<?php if($show_team_name_12 == "true") {?>	
					<a href="#"><h1>Antonio McJons</h1></a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>	
				<h2>Software Engineer</h2>
				<?php } ?>
			
		</div>		<div class="single-team-member profile">			<div class="img-box">			<?php echo '<img src="' . esc_url( plugins_url( 'img/team5.jpg', __FILE__ ) ) . '" > '; ?>				<?php if($show_hide_social_connection_15 == "true") { ?>						<ul class="text-center">						<a href="https://facebook.com"><li><i class="fa fa-facebook"></i></li></a>						<a href="https://twitter.com"><li><i class="fa fa-twitter"></i></li></a>						<a href="https://linkedin.com"><li><i class="fa fa-linkedin"></i></li></a>						<a href="https://google.com"><li><i class="fa fa-google-plus"></i></li></a>					</ul>				<?php } ?>			</div>				<?php if($show_team_name_12 == "true") {?>					<a href="#"><h1>Harlan Darry</h1></a>				<?php } ?>				<?php if($show_team_designation_13 == "true") { ?>						<h2>Sterio Artist</h2>				<?php } ?>					</div>		
		<div class="single-team-member profile">
			<div class="img-box">
			<?php echo '<img src="' . esc_url( plugins_url( 'img/team3.jpg', __FILE__ ) ) . '" > '; ?>
				<?php if($show_hide_social_connection_15 == "true") { ?>	
					<ul class="text-center">
						<a href="https://facebook.com"><li><i class="fa fa-facebook"></i></li></a>
						<a href="https://twitter.com"><li><i class="fa fa-twitter"></i></li></a>
						<a href="https://linkedin.com"><li><i class="fa fa-linkedin"></i></li></a>
						<a href="https://google.com"><li><i class="fa fa-google-plus"></i></li></a>
					</ul>
				<?php } ?>
			</div>
			<?php if($show_team_name_12 == "true") {?>	
				<a href="#"><h1>Holland Edward</h1></a>
			<?php } ?>	
			<?php if($show_team_designation_13 == "true") { ?>	
				<h2>Director</h2>
				<?php } ?>
			
		</div>
		<div class="single-team-member profile">
			<div class="img-box">
			<?php echo '<img src="' . esc_url( plugins_url( 'img/team4.jpg', __FILE__ ) ) . '" > '; ?>
				<?php if($show_hide_social_connection_15 == "true") { ?>	
					<ul class="text-center">
						<a href="https://facebook.com"><li><i class="fa fa-facebook"></i></li></a>
						<a href="https://twitter.com"><li><i class="fa fa-twitter"></i></li></a>
						<a href="https://linkedin.com"><li><i class="fa fa-linkedin"></i></li></a>
						<a href="https://google.com"><li><i class="fa fa-google-plus"></i></li></a>
					</ul>
				<?php } ?>
			</div>
				<?php if($show_team_name_12 == "true") {?>
					<a href="#"><h1>Evan Fabian</h1></a>
				<?php } ?>		
				<?php if($show_team_designation_13 == "true") { ?>	
				<h2>Business Owner</h2>
				<?php } ?>
		</div>
		<div class="single-team-member profile">
			<div class="img-box">
			<?php echo '<img src="' . esc_url( plugins_url( 'img/team5.jpg', __FILE__ ) ) . '" > '; ?>
				<?php if($show_hide_social_connection_15 == "true") { ?>	
					<ul class="text-center">
						<a href="https://facebook.com"><li><i class="fa fa-facebook"></i></li></a>
						<a href="https://twitter.com"><li><i class="fa fa-twitter"></i></li></a>
						<a href="https://linkedin.com"><li><i class="fa fa-linkedin"></i></li></a>
						<a href="https://google.com"><li><i class="fa fa-google-plus"></i></li></a>
					</ul>
				<?php } ?>
			</div>
				<?php if($show_team_name_12 == "true") {?>
					<a href="#"><h1>Harlan Darry</h1></a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>	
					<h2>Sterio Artist</h2>
				<?php } ?>
			
		</div>
	</div>
</div>

<!----- Layout 2------>
<div class="preview_layout_1">
	<div class="text-shortcode-wrap">
		<span class="shortcode_name">Shortcode for Team Grid View layout 2</span>		
		<input type="text" value="[swe-team-grid-view layout=2]" readonly onclick="copythis()" class="copy_shortcode">
		<span class="shortcode_info">Use this Shortcode in any post/page/widget </span>
	</div>
	
	<div class="swe-team-layout-2  swe_team_carousel_layout team_grid">
	
		<div class="team-member ">
			<a href="#"><?php echo '<img src="' . esc_url( plugins_url( 'img/team1.jpg', __FILE__ ) ) . '" > '; ?> </a>
			<div class="member-info">
				<?php if($show_team_name_12 == "true") { ?>	
				<h5 class="name">Alzanzo Allen</h5>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>	
				<span class="position">Co-Founder</span>
				<?php } ?>
			</div>
			<?php if($show_hide_social_connection_15 == "true") { ?>	
			<ul class="social-icons">
				<a href="https://facebook.com"><li><i class="fa fa-facebook"></i></li></a>
				<a href="https://twitter.com"><li><i class="fa fa-twitter"></i></li></a>
				<a href="https://linkedin.com"><li><i class="fa fa-linkedin"></i></li></a>
				<a href="https://google.com"><li><i class="fa fa-google-plus"></i></li></a>
			</ul>
			<?php } ?>
		</div>
		<div class="team-member ">
			<a href="#"><?php echo '<img src="' . esc_url( plugins_url( 'img/team2.jpg', __FILE__ ) ) . '" > '; ?> </a>
			<div class="member-info">
				<?php if($show_team_name_12 == "true") { ?>	
				<h5 class="name">Antonio McJons</h5>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>	
				<span class="position">Software Engineer</span>
				<?php } ?>
			</div>
			<?php if($show_hide_social_connection_15 == "true") { ?>	
			<ul class="social-icons">
				<a href="https://facebook.com"><li><i class="fa fa-facebook"></i></li></a>
				<a href="https://twitter.com"><li><i class="fa fa-twitter"></i></li></a>
				<a href="https://linkedin.com"><li><i class="fa fa-linkedin"></i></li></a>
				<a href="https://google.com"><li><i class="fa fa-google-plus"></i></li></a>
			</ul>
			<?php } ?>
		</div>
		<div class="team-member ">
			<a href="#"><?php echo '<img src="' . esc_url( plugins_url( 'img/team3.jpg', __FILE__ ) ) . '" > '; ?> </a>
			<div class="member-info">
				<?php if($show_team_name_12 == "true") { ?>	
				<h5 class="name">Holland Edward</h5>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>	
				<span class="position">Director</span>
				<?php } ?>
			</div>
			<?php if($show_hide_social_connection_15 == "true") { ?>	
			<ul class="social-icons">
				<a href="https://facebook.com"><li><i class="fa fa-facebook"></i></li></a>
				<a href="https://twitter.com"><li><i class="fa fa-twitter"></i></li></a>
				<a href="https://linkedin.com"><li><i class="fa fa-linkedin"></i></li></a>
				<a href="https://google.com"><li><i class="fa fa-google-plus"></i></li></a>
			</ul>
			<?php } ?>
		</div>
		<div class="team-member ">
			<a href="#"><?php echo '<img src="' . esc_url( plugins_url( 'img/team4.jpg', __FILE__ ) ) . '" > '; ?> </a>
			<div class="member-info">
				<?php if($show_team_name_12 == "true") { ?>	
				<h5 class="name">Evan Fabian</h5>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>	
				<span class="position">Business Owner</span>
				<?php } ?>
			</div>
			<?php if($show_hide_social_connection_15 == "true") { ?>	
			<ul class="social-icons">
				<a href="https://facebook.com"><li><i class="fa fa-facebook"></i></li></a>
				<a href="https://twitter.com"><li><i class="fa fa-twitter"></i></li></a>
				<a href="https://linkedin.com"><li><i class="fa fa-linkedin"></i></li></a>
				<a href="https://google.com"><li><i class="fa fa-google-plus"></i></li></a>
			</ul>
			<?php } ?>
		</div>
		<div class="team-member ">
			<a href="#"><?php echo '<img src="' . esc_url( plugins_url( 'img/team5.jpg', __FILE__ ) ) . '" > '; ?> </a>
			<div class="member-info">
				<?php if($show_team_name_12 == "true") { ?>	
				<h5 class="name">Harlan Darry</h5>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>	
				<span class="position">Sterio Artist</span>
				<?php } ?>
			</div>
			<?php if($show_hide_social_connection_15 == "true") { ?>	
			<ul class="social-icons">
				<a href="https://facebook.com"><li><i class="fa fa-facebook"></i></li></a>
				<a href="https://twitter.com"><li><i class="fa fa-twitter"></i></li></a>
				<a href="https://linkedin.com"><li><i class="fa fa-linkedin"></i></li></a>
				<a href="https://google.com"><li><i class="fa fa-google-plus"></i></li></a>
			</ul>
			<?php } ?>
		</div>		<div class="team-member ">			<a href="#"><?php echo '<img src="' . esc_url( plugins_url( 'img/team3.jpg', __FILE__ ) ) . '" > '; ?> </a>			<div class="member-info">				<?php if($show_team_name_12 == "true") { ?>					<h5 class="name">Holland Edward</h5>				<?php } ?>				<?php if($show_team_designation_13 == "true") { ?>					<span class="position">Director</span>				<?php } ?>			</div>			<?php if($show_hide_social_connection_15 == "true") { ?>				<ul class="social-icons">				<a href="https://facebook.com"><li><i class="fa fa-facebook"></i></li></a>				<a href="https://twitter.com"><li><i class="fa fa-twitter"></i></li></a>				<a href="https://linkedin.com"><li><i class="fa fa-linkedin"></i></li></a>				<a href="https://google.com"><li><i class="fa fa-google-plus"></i></li></a>			</ul>			<?php } ?>		</div>
	</div>
</div>


<!----- Layout 3------>
<div class="preview_layout_1">
	<div class="text-shortcode-wrap">
		<span class="shortcode_name">Shortcode for Team Grid View layout 3</span>		
		<input type="text" value="[swe-team-grid-view layout=3]" readonly onclick="copythis()" class="copy_shortcode">
		<span class="shortcode_info">Use this Shortcode in any post/page/widget </span>
	</div>
	
	<div class="swe-team-layout-3 swe_team_carousel_layout team_grid">
	
		<div class="single_team">
			  <?php echo '<img src="' . esc_url( plugins_url( 'img/team1.jpg', __FILE__ ) ) . '" > '; ?>
			<div class="team_content text-center">
				<?php if($show_team_name_12 == "true") { ?>	
				<h3 class="title">Alzanzo Allen</h3>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>	
				<p>Co-Founder </p>
				<?php } ?>
			</div>
			<div class="box-content">
			<?php if($show_hide_social_connection_15 == "true") { ?>	
				<ul class="icon">
				<li><a href="#" ><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" ><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			<?php } ?>
			</div>
		</div>
		<div class="single_team">
			  <?php echo '<img src="' . esc_url( plugins_url( 'img/team2.jpg', __FILE__ ) ) . '" > '; ?>
			<div class="team_content text-center">
				<?php if($show_team_name_12 == "true") { ?>	
				<h3 class="title">Antonio McJons</h3>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>	
				<p>Software Engineer </p>
				<?php } ?>
			</div>
			<div class="box-content">
			<?php if($show_hide_social_connection_15 == "true") { ?>	
				<ul class="icon">
				<li><a href="#" ><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" ><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<a href="https://google.com"><li><i class="fa fa-google-plus"></i></li></a>
				</ul>
			<?php } ?>
			</div>
		</div>
		<div class="single_team">
			  <?php echo '<img src="' . esc_url( plugins_url( 'img/team3.jpg', __FILE__ ) ) . '" > '; ?>
			<div class="team_content text-center">
				<?php if($show_team_name_12 == "true") { ?>	
				<h3 class="title">Holland Edward</h3>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>	
				<p>Director </p>
				<?php } ?>
			</div>
			<div class="box-content">
			<?php if($show_hide_social_connection_15 == "true") { ?>	
				<ul class="icon">
				<li><a href="#" ><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" ><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			<?php } ?>
			</div>
		</div>
		<div class="single_team">
			  <?php echo '<img src="' . esc_url( plugins_url( 'img/team4.jpg', __FILE__ ) ) . '" > '; ?>
			<div class="team_content text-center">
				<?php if($show_team_name_12 == "true") { ?>	
				<h3 class="title">Evan Fabian</h3>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>	
				<p>Business Owner </p>
				<?php } ?>
			</div>
			<div class="box-content">
			<?php if($show_hide_social_connection_15 == "true") { ?>	
				<ul class="icon">
				<li><a href="#" ><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" ><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			<?php } ?>
			</div>
		</div>
		<div class="single_team">
			  <?php echo '<img src="' . esc_url( plugins_url( 'img/team5.jpg', __FILE__ ) ) . '" > '; ?>
			<div class="team_content text-center">
				<?php if($show_team_name_12 == "true") { ?>	
				<h3 class="title">Harlan Darry</h3>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>	
				<p>Sterio Artist </p>
				<?php } ?>
			</div>
			<div class="box-content">
			<?php if($show_hide_social_connection_15 == "true") { ?>	
				<ul class="icon">
				<li><a href="#" ><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" ><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			<?php } ?>
			</div>
		</div>
		
		
	</div>
</div>


<!----- Layout 4------>
<div class="preview_layout_1">
	<div class="text-shortcode-wrap">
		<span class="shortcode_name">Shortcode for Team Grid View layout 4</span>		
		<input type="text" value="[swe-team-grid-view layout=4]" readonly onclick="copythis()" class="copy_shortcode">
		<span class="shortcode_info">Use this Shortcode in any post/page/widget </span>
	</div>
	
	<div class="swe-team-layout-4 swe_team_carousel_layout team_grid">
	
		<div class="single-team-member">
			 <?php echo '<img src="' . esc_url( plugins_url( 'img/team1.jpg', __FILE__ ) ) . '" class="thumbnail-image" > '; ?>
			<div class="thumbnail-body">
				<?php if($show_team_name_12 == "true") { ?>	
				<a class="thumbnail-title" href="#">Alzanzo Allen</a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<p class="thumbnail-subtitle">Co-Founder </p>
				<?php } ?>
				<hr class="thumbnail-divider">
				<?php if($show_hide_social_connection_15 == "true") { ?>	
				<ul class="inline-list-xs thumbnail-list">
				<li><a href="#" ><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" ><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			<?php } ?>
			</div>
		</div>
		
		<div class="single-team-member">
			 <?php echo '<img src="' . esc_url( plugins_url( 'img/team2.jpg', __FILE__ ) ) . '" class="thumbnail-image"> '; ?>
			<div class="thumbnail-body">
				<?php if($show_team_name_12 == "true") { ?>	
				<a class="thumbnail-title" href="#">Antonio McJons</a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<p class="thumbnail-subtitle">Software Engineer</p>
				<?php } ?>
				<hr class="thumbnail-divider">
				<?php if($show_hide_social_connection_15 == "true") { ?>	
				<ul class="inline-list-xs thumbnail-list">
				<li><a href="#" ><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" ><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			<?php } ?>
			</div>
		</div>
		
		<div class="single-team-member">
			 <?php echo '<img src="' . esc_url( plugins_url( 'img/team3.jpg', __FILE__ ) ) . '" class="thumbnail-image"> '; ?>
			<div class="thumbnail-body">
				<?php if($show_team_name_12 == "true") { ?>	
				<a class="thumbnail-title" href="#">Holland Edward</a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<p class="thumbnail-subtitle">Director </p>
				<?php } ?>
				<hr class="thumbnail-divider">
				<?php if($show_hide_social_connection_15 == "true") { ?>	
				<ul class="inline-list-xs thumbnail-list">
				<li><a href="#" ><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" ><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			<?php } ?>
			</div>
		</div>
		
				<div class="single-team-member">
			 <?php echo '<img src="' . esc_url( plugins_url( 'img/team4.jpg', __FILE__ ) ) . '" class="thumbnail-image"> '; ?>
			<div class="thumbnail-body">
				<?php if($show_team_name_12 == "true") { ?>	
				<a class="thumbnail-title" href="#">Evan Fabian</a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<p class="thumbnail-subtitle">Business Owner </p>
				<?php } ?>
				<hr class="thumbnail-divider">
				<?php if($show_hide_social_connection_15 == "true") { ?>	
				<ul class="inline-list-xs thumbnail-list">
				<li><a href="#" ><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" ><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			<?php } ?>
			</div>
		</div>
		
		<div class="single-team-member">
			 <?php echo '<img src="' . esc_url( plugins_url( 'img/team5.jpg', __FILE__ ) ) . '" class="thumbnail-image"> '; ?>
			<div class="thumbnail-body">
				<?php if($show_team_name_12 == "true") { ?>	
				<a class="thumbnail-title" href="#">Harlan Darry</a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<p class="thumbnail-subtitle">Sterio Artist </p>
				<?php } ?>
				<hr class="thumbnail-divider">
				<?php if($show_hide_social_connection_15 == "true") { ?>	
				<ul class="inline-list-xs thumbnail-list">
				<li><a href="#" ><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" ><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			<?php } ?>
			</div>
		</div>
		
		
		
	</div>
</div>


<!----- Layout 5------>
<div class="preview_layout_1">
	<div class="text-shortcode-wrap">
		<span class="shortcode_name">Shortcode for Team Grid View layout 5</span>		
		<input type="text" value="[swe-team-grid-view layout=5]" readonly onclick="copythis()" class="copy_shortcode">
		<span class="shortcode_info">Use this Shortcode in any post/page/widget </span>
	</div>
	
	<div class="swe-team-layout-5 swe_team_carousel_layout team_grid">
		<div class="team_item">
			<?php echo '<img src="' . esc_url( plugins_url( 'img/team1.jpg', __FILE__ ) ) . '" > '; ?>
			<div class="hover_content">
				<div class="text">
				<?php if($show_team_name_12 == "true") { ?>	
				<a href="#"><h3>Alzanzo Allen</h3></a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<h6>Co-Founder</h6>
				<?php } ?>
				</div>
				<?php if($show_hide_social_connection_15 == "true") { ?>	
				<div class="icon">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<?php } ?>
			</div>
		</div>
			<div class="team_item">
			<?php echo '<img src="' . esc_url( plugins_url( 'img/team2.jpg', __FILE__ ) ) . '" > '; ?>
			<div class="hover_content">
				<div class="text">
				<?php if($show_team_name_12 == "true") { ?>	
				<a href="#"><h3>Antonio McJons</h3></a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<h6>Software Engineer</h6>
				<?php } ?>
				</div>
				<?php if($show_hide_social_connection_15 == "true") { ?>	
				<div class="icon">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<?php } ?>
			</div>
		</div>
				<div class="team_item">
			<?php echo '<img src="' . esc_url( plugins_url( 'img/team3.jpg', __FILE__ ) ) . '" > '; ?>
			<div class="hover_content">
				<div class="text">
				<?php if($show_team_name_12 == "true") { ?>	
				<a href="#"><h3>Holland Edward</h3></a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<h6>Director</h6>
				<?php } ?>
				</div>
				<?php if($show_hide_social_connection_15 == "true") { ?>	
				<div class="icon">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<?php } ?>
			</div>
		</div>
				<div class="team_item">
			<?php echo '<img src="' . esc_url( plugins_url( 'img/team4.jpg', __FILE__ ) ) . '" > '; ?>
			<div class="hover_content">
				<div class="text">
				<?php if($show_team_name_12 == "true") { ?>	
				<a href="#"><h3>Evan Fabian</h3></a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<h6>Business Owner</h6>
				<?php } ?>
				</div>
				<?php if($show_hide_social_connection_15 == "true") { ?>	
				<div class="icon">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<?php } ?>
			</div>
		</div>
				<div class="team_item">
			<?php echo '<img src="' . esc_url( plugins_url( 'img/team5.jpg', __FILE__ ) ) . '" > '; ?>
			<div class="hover_content">
				<div class="text">
				<?php if($show_team_name_12 == "true") { ?>	
				<a href="#"><h3>Harlan Darry</h3></a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<h6>Sterio Artist</h6>
				<?php } ?>
				</div>
				<?php if($show_hide_social_connection_15 == "true") { ?>	
				<div class="icon">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<?php } ?>
			</div>
		</div>
		
	</div>
</div>


<!----- Layout 6------>
<div class="preview_layout_1">
	<div class="text-shortcode-wrap">
		<span class="shortcode_name">Shortcode for Team Grid View layout 6</span>		
		<input type="text" value="[swe-team-grid-view layout=6]" readonly onclick="copythis()" class="copy_shortcode">
		<span class="shortcode_info">Use this Shortcode in any post/page/widget </span>
	</div>
	<div class="swe-team-layout-6 swe_team_carousel_layout team_grid">
	
		<div class="expert_team_item" >
            <div class="e_team_image">
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team1.jpg', __FILE__ ) ) . '" > '; ?>
			<?php if($show_hide_social_connection_15 == "true") { ?>	
			<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
			<?php } ?>
			</div>
		<?php if($show_team_name_12 == "true") { ?>	
        <a href="#"><h4>Alzanzo Allen</h4></a>
		<?php } ?>
		<?php if($show_team_designation_13 == "true") { ?>
        <p>Co-Founder</p>
		<?php } ?>
		</div>
		
		<div class="expert_team_item" >
            <div class="e_team_image">
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team2.jpg', __FILE__ ) ) . '" > '; ?>
			<?php if($show_hide_social_connection_15 == "true") { ?>	
			<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
			<?php } ?>
			</div>
		<?php if($show_team_name_12 == "true") { ?>	
        <a href="#"><h4>Antonio McJons</h4></a>
		<?php } ?>
		<?php if($show_team_designation_13 == "true") { ?>
        <p>Software Engineer</p>
		<?php } ?>
		</div>
		
		<div class="expert_team_item" >
            <div class="e_team_image">
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team3.jpg', __FILE__ ) ) . '" > '; ?>
			<?php if($show_hide_social_connection_15 == "true") { ?>	
			<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
			<?php } ?>
			</div>
		<?php if($show_team_name_12 == "true") { ?>	
        <a href="#"><h4>Holland Edward</h4></a>
		<?php } ?>
		<?php if($show_team_designation_13 == "true") { ?>
        <p>Director</p>
		<?php } ?>
		</div>
		
		<div class="expert_team_item" >
            <div class="e_team_image">
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team4.jpg', __FILE__ ) ) . '" > '; ?>
			<?php if($show_hide_social_connection_15 == "true") { ?>	
			<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
			<?php } ?>
			</div>
		<?php if($show_team_name_12 == "true") { ?>	
        <a href="#"><h4>Evan Fabian</h4></a>
		<?php } ?>
		<?php if($show_team_designation_13 == "true") { ?>
        <p>Business Owner</p>
		<?php } ?>
		</div>
		
		<div class="expert_team_item" >
            <div class="e_team_image">
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team5.jpg', __FILE__ ) ) . '" > '; ?>
			<?php if($show_hide_social_connection_15 == "true") { ?>	
			<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
			<?php } ?>
			</div>
		<?php if($show_team_name_12 == "true") { ?>	
        <a href="#"><h4>Harlan Darry</h4></a>
		<?php } ?>
		<?php if($show_team_designation_13 == "true") { ?>
        <p>Sterio Artist</p>
		<?php } ?>
		</div>
		
	</div>
</div>


<!----- Layout 7----->
<div class="preview_layout_1">
	<div class="text-shortcode-wrap">
		<span class="shortcode_name">Shortcode for Team Grid View layout 7</span>		
		<input type="text" value="[swe-team-grid-view layout=7]" readonly onclick="copythis()" class="copy_shortcode">
		<span class="shortcode_info">Use this Shortcode in any post/page/widget </span>
	</div>
	<div class="swe-team-layout-7 swe_team_carousel_layout team_grid">
	
		<div class="team-box box-outline">
			<div class="team-image-box">
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team1.jpg', __FILE__ ) ) . '" > '; ?>
			<div class="team-image-caption">
			<?php if($show_hide_social_connection_15 == "true") { ?>
			<ul class="list-inline">
				<li><a class="fa fa-facebook icon " href="#"></a></li>
				<li><a class="fa fa-twitter icon" href="#"></a></li>
				<li><a class="fa fa-linkedin icon " href="#"></a></li>
				<li><a class="fa fa-google-plus icon" href="#"></a></li>
			</ul>
			<?php } ?>
			</div></div>
			<div class="team-caption">
				<?php if($show_team_name_12 == "true") { ?>	
				<a class="link team-title" href="#" style="#333333">Alzanzo Allen</a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<span style="#777777">Co-Founder</span>
				<?php } ?>
			</div>
		</div>
		
		<div class="team-box box-outline">
			<div class="team-image-box">
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team2.jpg', __FILE__ ) ) . '" > '; ?>
			<div class="team-image-caption">
			<?php if($show_hide_social_connection_15 == "true") { ?>
			<ul class="list-inline">
				<li><a class="fa fa-facebook icon " href="#"></a></li>
				<li><a class="fa fa-twitter icon" href="#"></a></li>
				<li><a class="fa fa-linkedin icon " href="#"></a></li>
				<li><a class="fa fa-google-plus icon" href="#"></a></li>
			</ul>
			<?php } ?>
			</div></div>
			<div class="team-caption">
				<?php if($show_team_name_12 == "true") { ?>	
				<a class="link team-title" href="#" style="#333333">Antonio McJons</a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<span style="#777777">Software Engineer</span>
				<?php } ?>
			</div>
		</div>
		
		<div class="team-box box-outline">
			<div class="team-image-box">
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team3.jpg', __FILE__ ) ) . '" > '; ?>
			<div class="team-image-caption">
			<?php if($show_hide_social_connection_15 == "true") { ?>
			<ul class="list-inline">
				<li><a class="fa fa-facebook icon " href="#"></a></li>
				<li><a class="fa fa-twitter icon" href="#"></a></li>
				<li><a class="fa fa-linkedin icon " href="#"></a></li>
				<li><a class="fa fa-google-plus icon" href="#"></a></li>
			</ul>
			<?php } ?>
			</div></div>
			<div class="team-caption">
				<?php if($show_team_name_12 == "true") { ?>	
				<a class="link team-title" href="#" style="#333333">Holland Edward</a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<span style="#777777">Director</span>
				<?php } ?>
			</div>
		</div>
		
		<div class="team-box box-outline">
			<div class="team-image-box">
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team4.jpg', __FILE__ ) ) . '" > '; ?>
			<div class="team-image-caption">
			<?php if($show_hide_social_connection_15 == "true") { ?>
			<ul class="list-inline">
				<li><a class="fa fa-facebook icon " href="#"></a></li>
				<li><a class="fa fa-twitter icon" href="#"></a></li>
				<li><a class="fa fa-linkedin icon " href="#"></a></li>
				<li><a class="fa fa-google-plus icon" href="#"></a></li>
			</ul>
			<?php } ?>
			</div></div>
			<div class="team-caption">
				<?php if($show_team_name_12 == "true") { ?>	
				<a class="link team-title" href="#" style="#333333">Evan Fabian</a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<span style="#777777">Business Owner</span>
				<?php } ?>
			</div>
		</div>
		
		<div class="team-box box-outline">
			<div class="team-image-box">
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team5.jpg', __FILE__ ) ) . '" > '; ?>
			<div class="team-image-caption">
			<?php if($show_hide_social_connection_15 == "true") { ?>
			<ul class="list-inline">
				<li><a class="fa fa-facebook icon " href="#"></a></li>
				<li><a class="fa fa-twitter icon" href="#"></a></li>
				<li><a class="fa fa-linkedin icon " href="#"></a></li>
				<li><a class="fa fa-google-plus icon" href="#"></a></li>
			</ul>
			<?php } ?>
			</div></div>
			<div class="team-caption">
				<?php if($show_team_name_12 == "true") { ?>	
				<a class="link team-title" href="#" style="#333333">Harlan Darry</a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<span style="#777777">Sterio Artist</span>
				<?php } ?>
			</div>
		</div>
		
	</div>	
</div>

<!----- Layout 8----->
<div class="preview_layout_1">
	<div class="text-shortcode-wrap">
		<span class="shortcode_name">Shortcode for Team Grid View layout 8</span>		
		<input type="text" value="[swe-team-grid-view layout=8]" readonly onclick="copythis()" class="copy_shortcode">
		<span class="shortcode_info">Use this Shortcode in any post/page/widget </span>
	</div>
	<div class="swe-team-layout-8 swe_team_carousel_layout team_grid">
	
		<div class="team-pro hover-effect">
			<figure>
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team1.jpg', __FILE__ ) ) . '" > '; ?>
			</figure>
			<div class="team-info">
				<?php if($show_team_name_12 == "true") { ?>	
				<a href="#"><h3 style="color: #333333">Alzanzo Allen</h3></a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<p style="color: #777777">Co-Founder</p>
				<?php } ?>
				<?php if($show_hide_social_connection_15 == "true") { ?>
				<ul>
					<li><a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="#" title="google plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="#" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</li>
				</ul>
				<?php } ?>
			</div>
		</div>
		
		<div class="team-pro hover-effect">
			<figure>
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team2.jpg', __FILE__ ) ) . '" > '; ?>
			</figure>
			<div class="team-info">
				<?php if($show_team_name_12 == "true") { ?>	
				<a href="#"><h3 style="color: #333333">Antonio McJons</h3></a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<p style="color: #777777">Software Engineer</p>
				<?php } ?>
				<?php if($show_hide_social_connection_15 == "true") { ?>
				<ul>
					<li><a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="#" title="google plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="#" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</li>
				</ul>
				<?php } ?>
			</div>
		</div>
		
		<div class="team-pro hover-effect">
			<figure>
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team3.jpg', __FILE__ ) ) . '" > '; ?>
			</figure>
			<div class="team-info">
				<?php if($show_team_name_12 == "true") { ?>	
				<a href="#"><h3 style="color: #333333">Holland Edward</h3></a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<p style="color: #777777">Director</p>
				<?php } ?>
				<?php if($show_hide_social_connection_15 == "true") { ?>
				<ul>
					<li><a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="#" title="google plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="#" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</li>
				</ul>
				<?php } ?>
			</div>
		</div>
		
		<div class="team-pro hover-effect">
			<figure>
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team4.jpg', __FILE__ ) ) . '" > '; ?>
			</figure>
			<div class="team-info">
				<?php if($show_team_name_12 == "true") { ?>	
				<a href="#"><h3 style="color: #333333">Evan Fabian</h3></a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<p style="color: #777777">Business Owner</p>
				<?php } ?>
				<?php if($show_hide_social_connection_15 == "true") { ?>
				<ul>
					<li><a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="#" title="google plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="#" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</li>
				</ul>
				<?php } ?>
			</div>
		</div>
		
		<div class="team-pro hover-effect">
			<figure>
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team5.jpg', __FILE__ ) ) . '" > '; ?>
			</figure>
			<div class="team-info">
				<?php if($show_team_name_12 == "true") { ?>	
				<a href="#"><h3 style="color: #333333">Harlan Darry</h3></a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<p style="color: #777777">Sterio Artist</p>
				<?php } ?>
				<?php if($show_hide_social_connection_15 == "true") { ?>
				<ul>
					<li><a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="#" title="google plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="#" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</li>
				</ul>
				<?php } ?>
			</div>
		</div>
	
	</div>
</div>

<!----- Layout 9----->
<div class="preview_layout_1">
	<div class="text-shortcode-wrap">
		<span class="shortcode_name">Shortcode for Team Grid View layout 9</span>		
		<input type="text" value="[swe-team-grid-view layout=9]" readonly onclick="copythis()" class="copy_shortcode">
		<span class="shortcode_info">Use this Shortcode in any post/page/widget </span>
	</div>
	<div class="swe-team-layout-9 swe_team_carousel_layout team_grid">
	
		<div class="single-team-item" >
			<div class="image">
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team1.jpg', __FILE__ ) ) . '" > '; ?>
				<div class="overley">
					<div class="content">
						<div class="social-media">
						<?php if($show_hide_social_connection_15 == "true") { ?>
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#" ><i class="fa fa-google-plus" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</li>
						</ul>
						<?php } ?>
						</div>
					</div>
					<div class="designation">
						<?php if($show_team_name_12 == "true") { ?>	
						<a href="#"><h4 style="color: #eaeaea">Alzanzo Allen</h4></a>
						<?php } ?>
						<?php if($show_team_designation_13 == "true") { ?>
						<span style="color: #d2d2d2">Co-Founder</span>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="single-team-item" >
			<div class="image">
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team2.jpg', __FILE__ ) ) . '" > '; ?>
				<div class="overley">
					<div class="content">
						<div class="social-media">
						<?php if($show_hide_social_connection_15 == "true") { ?>
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#" ><i class="fa fa-google-plus" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</li>
						</ul>
						<?php } ?>
						</div>
					</div>
					<div class="designation">
						<?php if($show_team_name_12 == "true") { ?>	
						<a href="#"><h4 style="color: #eaeaea">Antonio McJons</h4></a>
						<?php } ?>
						<?php if($show_team_designation_13 == "true") { ?>
						<span style="color: #d2d2d2">Software Engineer</span>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="single-team-item" >
			<div class="image">
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team3.jpg', __FILE__ ) ) . '" > '; ?>
				<div class="overley">
					<div class="content">
						<div class="social-media">
						<?php if($show_hide_social_connection_15 == "true") { ?>
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#" ><i class="fa fa-google-plus" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</li>
						</ul>
						<?php } ?>
						</div>
					</div>
					<div class="designation">
						<?php if($show_team_name_12 == "true") { ?>	
						<a href="#"><h4 style="color: #eaeaea">Holland Edward</h4></a>
						<?php } ?>
						<?php if($show_team_designation_13 == "true") { ?>
						<span style="color: #d2d2d2">Director</span>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="single-team-item" >
			<div class="image">
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team4.jpg', __FILE__ ) ) . '" > '; ?>
				<div class="overley">
					<div class="content">
						<div class="social-media">
						<?php if($show_hide_social_connection_15 == "true") { ?>
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#" ><i class="fa fa-google-plus" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</li>
						</ul>
						<?php } ?>
						</div>
					</div>
					<div class="designation">
						<?php if($show_team_name_12 == "true") { ?>	
						<a href="#"><h4 style="color: #eaeaea">Evan Fabian</h4></a>
						<?php } ?>
						<?php if($show_team_designation_13 == "true") { ?>
						<span style="color: #d2d2d2">Business Owner</span>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="single-team-item" >
			<div class="image">
				<?php echo '<img src="' . esc_url( plugins_url( 'img/team5.jpg', __FILE__ ) ) . '" > '; ?>
				<div class="overley">
					<div class="content">
						<div class="social-media">
						<?php if($show_hide_social_connection_15 == "true") { ?>
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#" ><i class="fa fa-google-plus" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</li>
						</ul>
						<?php } ?>
						</div>
					</div>
					<div class="designation">
						<?php if($show_team_name_12 == "true") { ?>	
						<a href="#"><h4 style="color: #eaeaea">Harlan Darry</h4></a>
						<?php } ?>
						<?php if($show_team_designation_13 == "true") { ?>
						<span style="color: #d2d2d2">Sterio Artist</span>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>

<!----- Layout 10----->
<div class="preview_layout_1">
	<div class="text-shortcode-wrap">
		<span class="shortcode_name">Shortcode for Team Grid View layout 10</span>		
		<input type="text" value="[swe-team-grid-view layout=10]" readonly onclick="copythis()" class="copy_shortcode">
		<span class="shortcode_info">Use this Shortcode in any post/page/widget </span>
	</div>
	<div class="swe-team-layout-10 swe_team_carousel_layout team_grid">
	
		<div class="single-team3">
			<div class="image">
				<div class="inner-image">
					<?php echo '<img src="' . esc_url( plugins_url( 'img/team1.jpg', __FILE__ ) ) . '" > '; ?>
					<div class="overley">
						<div class="content">
							<div class="social-media">
								<?php if($show_hide_social_connection_15 == "true") { ?>
								<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="team-details">
				<?php if($show_team_name_12 == "true") { ?>	
				<a href="#"><h3 style="color: #333333">Alzanzo Allen</h3></a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<span style="color: #777777">Co-Founder</span>
				<?php } ?>
			</div>
		</div>
		
				<div class="single-team3">
			<div class="image">
				<div class="inner-image">
					<?php echo '<img src="' . esc_url( plugins_url( 'img/team2.jpg', __FILE__ ) ) . '" > '; ?>
					<div class="overley">
						<div class="content">
							<div class="social-media">
								<?php if($show_hide_social_connection_15 == "true") { ?>
								<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="team-details">
				<?php if($show_team_name_12 == "true") { ?>	
				<a href="#"><h3 style="color: #333333">Antonio McJons</h3></a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<span style="color: #777777">Software Engineer</span>
				<?php } ?>
			</div>
		</div>
		
				<div class="single-team3">
			<div class="image">
				<div class="inner-image">
					<?php echo '<img src="' . esc_url( plugins_url( 'img/team3.jpg', __FILE__ ) ) . '" > '; ?>
					<div class="overley">
						<div class="content">
							<div class="social-media">
								<?php if($show_hide_social_connection_15 == "true") { ?>
								<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="team-details">
				<?php if($show_team_name_12 == "true") { ?>	
				<a href="#"><h3 style="color: #333333">Holland Edward</h3></a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<span style="color: #777777">Director</span>
				<?php } ?>
			</div>
		</div>
		
				<div class="single-team3">
			<div class="image">
				<div class="inner-image">
					<?php echo '<img src="' . esc_url( plugins_url( 'img/team4.jpg', __FILE__ ) ) . '" > '; ?>
					<div class="overley">
						<div class="content">
							<div class="social-media">
								<?php if($show_hide_social_connection_15 == "true") { ?>
								<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="team-details">
				<?php if($show_team_name_12 == "true") { ?>	
				<a href="#"><h3 style="color: #333333">Evan Fabian</h3></a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<span style="color: #777777">Business Owner</span>
				<?php } ?>
			</div>
		</div>
		
				<div class="single-team3">
			<div class="image">
				<div class="inner-image">
					<?php echo '<img src="' . esc_url( plugins_url( 'img/team5.jpg', __FILE__ ) ) . '" > '; ?>
					<div class="overley">
						<div class="content">
							<div class="social-media">
								<?php if($show_hide_social_connection_15 == "true") { ?>
								<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="team-details">
				<?php if($show_team_name_12 == "true") { ?>	
				<a href="#"><h3 style="color: #333333">Harlan Darry</h3></a>
				<?php } ?>
				<?php if($show_team_designation_13 == "true") { ?>
				<span style="color: #777777">Sterio Artist</span>
				<?php } ?>
			</div>
		</div>
	
	</div>
</div>