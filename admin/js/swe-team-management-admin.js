(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
	
	
	jQuery(document).ready(function(){
		
		var max_fields      = 5; //maximum input boxes allowed
		var wrapper         = $(".swe-repeater-item-wraper"); //Fields wrapper
		var add_button      = $("#swe-repeater-add"); //Add button ID
			
		var x = 1; //initlal text box count
		var num = jQuery('.swe-repeater-item').length;
		jQuery(add_button).click(function(e){ //on add input button click
			e.preventDefault();
			if(num < 6){
				num++;
				jQuery(wrapper).append('<div class="swe-repeater-item"><div class="swe_team_social_repeater_field"><select id="team-social-icon" name="team-social-icon[]"><option value="Facebook">Facebook</option><option value="Twitter">Twitter</option><option value="Youtube">Youtube</option><option value="Instagram">Instagram</option><option value="LinkedIn">LinkedIn</option><option value="Pinterest">Pinterest</option></select></div><div class="swe_team_social_repeater_field"> <input class="regular-text" id="team-social-link" name="team-social-link[]" type="url" value=""></div><div class="swe_repeater_helper"><span class="dashicons dashicons-move swe_rearange_social"></span><span class="dashicons dashicons-no-alt swe_remove_social"></span></div></div>');
			}else{
				alert("Max 5 item allowed");
			}
		});
			
		jQuery(wrapper).on("click",".swe_remove_social", function(e){ 
			e.preventDefault(); 
			if(num == 1){
				jQuery(this).removeClass('swe_remove_social');
				jQuery(this).addClass('disable');
			}else{
				jQuery(this).parent('div').parent('.swe-repeater-item').remove();
			}
			num--;
		});
		
		
		/* Shorting by shortable js ui */
		jQuery(wrapper).sortable({
			axis: "y",
			handle: ".swe_rearange_social",
			helper: "original",
			cursor: "move",
			placeholder: "widget-placeholder",
			opacity: 0.5,
		});
		jQuery(wrapper).disableSelection();
		

	

	/* Tabs & Color Picker */
	jQuery("#swe_team_setting_tabs").tabs();
	jQuery('.swe_select_color').wpColorPicker();
	var icons = {
      header: "ui-icon-circle-arrow-e",
      activeHeader: "ui-icon-circle-arrow-s"
    };
	jQuery( "#swe_faq_page_accordion" ).accordion({ heightStyle: "content", icons: icons});

	});
	

})( jQuery );

	function copythis() {
	  jQuery(".copy_shortcode").select();
	  /* Copy the text inside the text field */
	  document.execCommand("copy");
	}
	
	
	function load_preview_func(layout_id){
		jQuery.ajax({
         type : "post",
         url : ajaxurl,
         data : {action: "team_preview_load_action", layout_id : layout_id},
         success: function(response) {
			 console.log("#preview_"+layout_id);
			 //alert(response);
			 jQuery("#preview_"+layout_id).html(response);
         },
		 error: function(){
               jQuery("#preview_"+layout_id).html("<p>Something went rong to load preview</p>");
        }
      })
	};
	
	jQuery("#swe_team_reset_setting").click(function(){
		jQuery.ajax({
			type : "post",
			url : sweteamAjax.ajaxurl,
			data : {action: "swe_team_reset_action"},
			beforeSend: function(){
				jQuery("#show_loader").show();
			},
			success: function(response) {
				jQuery("#show_loader").hide();
				location.reload();
			},
			error: function(){
			    jQuery("#show_loader").html("<p>Something went rong to load preview</p>");
			}
		})
	});
