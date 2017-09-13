/* -----------------------------------------------------------------------------
 * Page Template Meta-box
 * -------------------------------------------------------------------------- */
;(function( $, window, document, undefined ){
	"use strict";
	
	$( document ).ready( function () {
        $(function() {
            if ($('input[name=post_format]:checked', '#post-formats-select').val() == 0) {
                $("#birkita_format_options").hide();
            }else {
                var value = $('input[name=post_format]:checked', '#post-formats-select').val(); 
                $("#birkita_format_options").show();
                if (value == "gallery"){
                    $("#birkita_media_embed_code_post_description").parents(".rwmb-field").css("display", "none");
                    $("#birkita_image_upload_description").parents(".rwmb-field").css("display", "none");
                    $("#birkita_gallery_content_description").parents(".rwmb-field").css("display", "block");
                    $("#birkita_popup_frame_description").parents(".rwmb-field").css("display", "none");
                }else if ((value == "video")||(value == "audio")){
                    $("#birkita_media_embed_code_post_description").parents(".rwmb-field").css("display", "block");
                    $("#birkita_image_upload_description").parents(".rwmb-field").css("display", "none");
                    $("#birkita_gallery_content_description").parents(".rwmb-field").css("display", "none");
                    $("#birkita_popup_frame_description").parents(".rwmb-field").css("display", "block");
                }else if (value == "image"){
                    $("#birkita_media_embed_code_post_description").parents(".rwmb-field").css("display", "none");
                    $("#birkita_image_upload_description").parents(".rwmb-field").css("display", "block");
                    $("#birkita_gallery_content_description").parents(".rwmb-field").css("display", "none");
                    $("#birkita_popup_frame_description").parents(".rwmb-field").css("display", "none");
                }
            }
            $('#post-formats-select input').on('change', function() { 
                var value = $('input[name=post_format]:checked', '#post-formats-select').val(); 
                if (value == 0){
                    $("#birkita_format_options").hide();
                }else {
                    $("#birkita_format_options").show();
                } 
                if (value == "gallery"){
                    $("#birkita_media_embed_code_post_description").parents(".rwmb-field").css("display", "none");
                    $("#birkita_image_upload_description").parents(".rwmb-field").css("display", "none");
                    $("#birkita_gallery_content_description").parents(".rwmb-field").css("display", "block");
                    $("#birkita_popup_frame_description").parents(".rwmb-field").css("display", "none");
                }else if ((value == "video")||(value == "audio")){
                    $("#birkita_media_embed_code_post_description").parents(".rwmb-field").css("display", "block");
                    $("#birkita_image_upload_description").parents(".rwmb-field").css("display", "none");
                    $("#birkita_gallery_content_description").parents(".rwmb-field").css("display", "none");
                    $("#birkita_popup_frame_description").parents(".rwmb-field").css("display", "block");
                }else if (value == "image"){
                    $("#birkita_media_embed_code_post_description").parents(".rwmb-field").css("display", "none");
                    $("#birkita_image_upload_description").parents(".rwmb-field").css("display", "block");
                    $("#birkita_gallery_content_description").parents(".rwmb-field").css("display", "none");
                    $("#birkita_popup_frame_description").parents(".rwmb-field").css("display", "none");
                }
            });
        });
	} );
})( jQuery, window , document );