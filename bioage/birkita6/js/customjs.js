(function($) {
  "use strict";
    $=jQuery;
    
    jQuery.noConflict();
    jQuery(document).ready(function($){
        var delay = (function () {
            var timer = 0;
            return function (callback, ms) {
                clearTimeout(timer);
                timer = setTimeout(callback, ms);
            };
        })();
        if (fixed_nav == 2) {
            var nav = $('nav.main-nav');
            var d = nav.offset().top;
            $(window).scroll(function () {
                if($(window).width() <= 1023) {
                    nav.removeClass("fixed");
                    $('.main-nav').css('margin-top','0');
                    return false;
                }
                if ($(this).scrollTop() > d) {
                    nav.addClass("fixed");
                    //menu fixed if have admin bar
                    var ad_bar = $('#wpadminbar');
                    if(ad_bar.length != 0) {
                        $('.main-nav').css('margin-top',ad_bar.height());
                    }
                } else {
                    nav.removeClass("fixed");
                    $('.main-nav').css('margin-top','0');
                }
            });
        }
        // Back top
    	$(window).scroll(function () {
    		if ($(this).scrollTop() > 500) {
    			$('#back-top').css('bottom','0');
    		} else {
    			$('#back-top').css('bottom','-40px');
    		}
    	});
        // Header search 
        $('#header-search-button').click(function(){
            if ($('#header_searchform input').height() == 0){
                $('#header_searchform input').css('height','40px');
                $('#header_searchform').css('padding','0');
                $('#header_searchform input').css('padding','4px 12px');
                $('#header_searchform input').css('font-size','13px'); 
                $('#header_searchform input').val('');
            } else {
                $('#header_searchform input').css('height','0');
                $('#header_searchform').css('padding','0');
                $('#header_searchform input').css('padding','0');
                $('#header_searchform input').css('font-size','0');
            }
            
        });
    	// scroll body to top on click
    	$('#back-top').click(function () {
    		$('body,html').animate({
    			scrollTop: 0,
    		}, 1300);
    		return false;
    	});
        $(window).resize(function(){
            if($(this).width() >= 1050 ){
                $('#main-mobile-menu').hide();
            }
        });
        $('.main-nav .mobile').click(function(){
            $(this).siblings('#main-mobile-menu').toggle(300);
        });
        $('.main-nav #main-mobile-menu > ul > li.menu-item-has-children').prepend('<div class="expand"><i class="fa fa-angle-down"></i></div>');
        $('.main-nav #main-mobile-menu > ul > li > ul > li.menu-item-has-children').prepend('<div class="expand"><i class="fa fa-angle-down"></i></div>');
        $('.expand').click(function(){
            $(this).siblings('.sub-menu').toggle(300); 
        });
        
        $('#main-search .search-icon').click(function(){
            if ($(this).siblings('#s').height() == 0){
                $('#main-search #s').css('height','45px');
                $('#main-search.search-ltr #s').css('padding','5px 50px 5px 15px');
                $('#main-search #s').css('font-size','14px');  
                $('#main-search #s').css('border','1px solid #fff');  
            } else {
                $('#main-search #s').css('height','0');
                $('#main-search #s').css('padding','0');
                $('#main-search #s').css('font-size','0'); 
                $('#main-search #s').css('border','0');  
            }
            
        });

        //fitvid
        $('.birkita_embed-video').fitVids();
        $('.single .article-content').fitVids();
        //Megamenu
        if (megamenu_carousel_el != null) {
            var birkita_megamenu_item;
            $.each( megamenu_carousel_el, function( id, maxitems ) {     
                birkita_megamenu_item = $('#'+id).find('.birkita_sub-post').length;
                if(birkita_megamenu_item > maxitems) {
                    $('#'+id).flexslider({
                        animation: "slide",
                        animationLoop: true,
                        slideshow: false,
                        itemWidth: 10,
                        minItems: maxitems,
                        maxItems: maxitems,
                        controlNav: false,
                        directionNav: true,
                        slideshowSpeed: 3000,
                        move: 1,
                        touch: true,
                        useCSS: true,
                        nextText: '<i class="fa fa-long-arrow-right"></i>',
            			prevText: '<i class="fa fa-long-arrow-left"></i>',
                    });
                }else{
                    $('#'+id).removeClass('flexslider');
                    $('#'+id).addClass('flexslider_destroy');
                }
            });
        }
        $('.module-main-slider .main-slider .post-info').removeClass('overlay'); 
        // Main slider	                
        $('.owl-carousel').owlCarousel({
            center: true,
            loop: true,
            margin: 2,
            autoplay: true,
            autoplaySpeed: 1500,
            navSpeed: 1500,
            nav: true,
            navText: ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
            responsiveClass:true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
            }
        });
        // Widget Slider 
        $('.widget-slider .slider-wrap').flexslider({
            animation: 'slide',
            controlNav: false,
            animationLoop: true,
            slideshow: true,
            pauseOnHover: true,
            slideshowSpeed: 8000,
            animationSpeed: 600,
            smoothHeight: true,
            directionNav: true,
            nextText: '<i class="fa fa-long-arrow-right"></i>',
            prevText: '<i class="fa fa-long-arrow-left"></i>',
        });
        
        // Widget Video 
        $('.widget-video .slider-wrap').flexslider({
            animation: 'slide',
            controlNav: false,
            animationLoop: true,
            slideshow: true,
            pauseOnHover: true,
            slideshowSpeed: 8000,
            animationSpeed: 600,
            smoothHeight: true,
            directionNav: true,
            nextText: '<i class="fa fa-long-arrow-right"></i>',
            prevText: '<i class="fa fa-long-arrow-left"></i>',
        });
        
        // store the slider in a local variable
          var $window = $(window),
              flexslider = { vars:{} };
         
        // tiny helper function to add breakpoints
          function getGridSize() {
            return  (window.innerWidth < 600) ? 1 :
                    (window.innerWidth < 750) ? 2 : 3;
          }
         
          $window.load(function() {
            $('.fullwidth-section .birkita_carousel-wrap').flexslider({
                animation: "slide",
                start: function(slider){
                    $('.fullwidth-section .birkita_carousel-wrap').resize();
                },
                controlNav: false,
                itemWidth: 255,
                pauseOnHover: true,
                move: 1,
                animationLoop: true,
                slideshowSpeed: 8000,
                animationSpeed: 600,
                nextText: '<i class="fa fa-long-arrow-right"></i>',
                prevText: '<i class="fa fa-long-arrow-left"></i>',
                minItems: getGridSize(), // use function to pull in initial value
                maxItems: getGridSize(), // use function to pull in initial value
            });
          });
          $window.load(function() {    
            $('.content-section .birkita_carousel-wrap').flexslider({
                animation: "slide",
                controlNav: false,
                itemWidth: 210,
                pauseOnHover: true,
                move: 1,
                animationLoop: true,
                slideshowSpeed: 8000,
                animationSpeed: 600,
                nextText: '<i class="fa fa-long-arrow-right"></i>',
                prevText: '<i class="fa fa-long-arrow-left"></i>',
                minItems: getGridSize(), // use function to pull in initial value
                maxItems: getGridSize(), // use function to pull in initial value
            });
          });
          // check grid size on resize event
          $window.resize(function() {
            var gridSize = getGridSize();
         
            flexslider.vars.minItems = gridSize;
            flexslider.vars.maxItems = gridSize;
          });
        $('.fullwidth-section .birkita_carousel-large-wrap').flexslider({
            animation: "slide",
            controlNav: false,
            itemWidth: 270,
            columnWidth: 1,
            pauseOnHover: true,
            move: 1,
            animationLoop: true,
            slideshowSpeed: 8000,
            animationSpeed: 600,
            nextText: '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="30px" viewBox="0 0 49 77" xml:space="preserve"><polyline fill="none" stroke="#FFFFFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" points="0.375,0.375 45.63,38.087 0.375,75.8 "></polyline></svg>',
            prevText: '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="30px" viewBox="0 0 49 77" xml:space="preserve"><polyline fill="none" stroke="#FFFFFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" points="45.63,75.8 0.375,38.087 45.63,0.375 "></polyline></svg>',
            minItems: 1, // use function to pull in initial value
            maxItems: 3, // use function to pull in initial value
        });
        $('.content-section .birkita_carousel-large-wrap').flexslider({
            animation: "slide",
            controlNav: false,
            itemWidth: 240,
            columnWidth: 1,
            pauseOnHover: true,
            move: 1,
            animationLoop: true,
            slideshowSpeed: 8000,
            animationSpeed: 600,
            nextText: '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="30px" viewBox="0 0 49 77" xml:space="preserve"><polyline fill="none" stroke="#FFFFFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" points="0.375,0.375 45.63,38.087 0.375,75.8 "></polyline></svg>',
            prevText: '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="30px" viewBox="0 0 49 77" xml:space="preserve"><polyline fill="none" stroke="#FFFFFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" points="45.63,75.8 0.375,38.087 45.63,0.375 "></polyline></svg>',
            minItems: 1, // use function to pull in initial value
            maxItems: 3, // use function to pull in initial value
        });
        $('#birkita_gallery-slider').flexslider({
            animation: 'slide',
            controlNav: true,
            animationLoop: true,
            slideshow: false,
            pauseOnHover: true,
            slideshowSpeed: 5000,
            animationSpeed: 600,
            smoothHeight: true,
            directionNav: true,
            nextText: '<i class="fa fa-long-arrow-right"></i>',
            prevText: '<i class="fa fa-long-arrow-left"></i>',

        }); 
        $('.img-popup-link').magnificPopup({
    		type: 'image',
            removalDelay: 300,
            mainClass: 'mfp-fade',
    		closeOnContentClick: true,
    		closeBtnInside: false,
    		fixedContentPos: true,		
    		image: {
    			verticalFit: true
    		}
    	});
        $('.video-popup-link').magnificPopup({
    		closeBtnInside: false,
    		fixedContentPos: true,
    		disableOn: 700,
    		type: 'iframe',
            removalDelay: 300,
            mainClass: 'mfp-fade',
    		preloader: false,
    	});
        $('#birkita_gallery-slider').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
        		delegate: 'a.zoomer',
        		type: 'image',
        		closeOnContentClick: false,
        		closeBtnInside: false,
                removalDelay: 300,
                mainClass: 'mfp-fade',
        		image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        			verticalFit: true,
        			titleSrc: function(item) {
        				return ' <a class="image-source-link" href="'+item.src+'" target="_blank">'+ item.el.attr('title') + '</a>';
        			}
        		},
        		gallery: {
        			enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1]
        		}
        	});	
    	});  
        if (typeof justified_ids !== 'undefined') {
            $.each( justified_ids, function( index, justified_id ) {
            	$(".justifiedgall_"+justified_id).justifiedGallery({
            		rowHeight: 200,
            		fixedHeight: false,
            		lastRow: 'justify',
            		margins: 4,
            		randomize: false,
                    sizeRangeSuffixes: {lt100:"",lt240:"",lt320:"",lt500:"",lt640:"",lt1024:""},
            	});
            });        
        }
        $('.zoom-gallery').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
        		delegate: 'a.zoomer',
        		type: 'image',
        		closeOnContentClick: false,
        		closeBtnInside: false,
        		mainClass: 'mfp-with-zoom mfp-img-mobile',
        		image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        			verticalFit: true,
        			titleSrc: function(item) {
        				return ' <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">'+ item.el.attr('title') + '</a>';
        			}
        		},
        		gallery: {
        			enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1]
        		},
                zoom: {
        			enabled: true,
        			duration: 600, // duration of the effect, in milliseconds
                    easing: 'ease', // CSS transition easing function
        			opener: function(element) {
        				return element.find('img');
        			}
        		}
        	});	
    	}); 
        // Masonry Module Init
        $('.page-wrap').imagesLoaded(function(){
            setTimeout(function() {
                if($('.masonry-content-container').find('.one-col').length > 2){
                    $('.masonry-content-container').masonry({
                        itemSelector: '.one-col',
                        columnWidth: 1,
                        isAnimated: true,
                        isFitWidth: true,
                     });
                }
                $('.ajax-load-btn').addClass('active');
                $('.masonry-content-container').find('.post-details').removeClass('opacity-zero');
                $('.masonry-content-container').find('.post-meta').removeClass('opacity-zero');
             },500);
        });
        // Main Grid
        $('.grid-widget-posts').imagesLoaded(function(){
            $('.birkita_half').masonry ({
                itemSelector: '.type-in',
            });
        });
        //Rating canvas
        var canvasArray  = $('.rating-canvas');
        $.each(canvasArray, function(i,canvas){
            var percent = $(canvas).data('rating');
            var ctx     = canvas.getContext('2d');
    
            canvas.width  = $(canvas).parent().width();
            canvas.height = canvas.width;

            var x = (canvas.width) / 2;
            var y = (canvas.height)/2;
            if ($(canvas).parents().hasClass('rating-wrap')) {
                var radius = (canvas.width - 4) / 2;
                var lineWidth = 4;
            } else {
                var radius = (canvas.width - 10) / 2;
                var lineWidth = 4;
            }
            if(radius<0) radius=0;
            var endAngle = (Math.PI * percent * 2 / 100);            
            
            ctx.beginPath();
            ctx.arc(x, y, radius, -(Math.PI/180*90), Math.PI * 2 - (Math.PI/180*90), false);   
            ctx.lineWidth = 4;
            ctx.strokeStyle = "#eee";
            ctx.stroke();
            
            
            ctx.beginPath();
            ctx.arc(x, y, radius, -(Math.PI/180*90), endAngle - (Math.PI/180*90), false);   
            ctx.lineWidth = 4;
            ctx.strokeStyle = "#000";
            ctx.stroke(); 
              
        });
        
        // Part Rating canvas
        var canvasArray  = $('.part-rating-canvas');
        $.each(canvasArray, function(i,canvas){
            var percent = $(canvas).data('rating');
            var ctx     = canvas.getContext('2d');
    
          canvas.width  = $(canvas).parent().width();
          canvas.height = canvas.width;
         
          var x = (canvas.width) / 2;
          var y = (canvas.height)/2;
          if ($(canvas).parents().hasClass('rating-wrap')) {
              var radius = (canvas.width - 2) / 2;
              var lineWidth = 2;
          } else {
              var radius = (canvas.width - 10) / 2;
              var lineWidth = 2;
          }
          if(radius<0) radius=0;
          var endAngle = (Math.PI * percent * 2 / 100);            
            
            ctx.beginPath();
            ctx.arc(x, y, radius, -(Math.PI/180*90), Math.PI * 2 - (Math.PI/180*90), false);   
            ctx.lineWidth = 3;
            ctx.strokeStyle = "#fff";
            ctx.stroke();
            
            ctx.beginPath();
            ctx.arc(x, y, radius, -(Math.PI/180*90), endAngle - (Math.PI/180*90), false);   
            ctx.lineWidth = 3;
            ctx.strokeStyle = "#f72900";
            ctx.stroke(); 
              
        });
        
        /* Sidebar stick */    
         var win, tick, curscroll, nextscroll; 
        win = $(window);
        var width = $('.sidebar-wrap').width();
        tick = function() {
            nextscroll = win.scrollTop();
            $(".sidebar-wrap.stick").each(function(){
                var bottom_compare, top_compare, screen_scroll, parent_top, parent_h, parent_bottom, scroll_status = 0, topab; 
                var sbID = "#"+$(this).attr(("id"));
                var nav = $(sbID).parents('.content-sb-section');
                
                bottom_compare = $(sbID).offset().top + $(sbID).outerHeight(true);
                screen_scroll = win.scrollTop() + win.height();
                if (nav.length) {
                parent_top = nav.offset().top;
                parent_h = nav.height();
                }
                parent_bottom = parent_top + parent_h;
                topab =  parent_h - $(sbID).outerHeight(true);                            
                
                if(window.innerWidth > 1023) {
                    if(parent_h > $(sbID).outerHeight(true)) {
                        if(win.scrollTop() < parent_top) {
                            scroll_status = 0;
                        }else if((win.scrollTop() >= parent_top) && (screen_scroll < parent_bottom)) {
                            if(curscroll <= nextscroll) {
                                scroll_status = 1;
                            }else if(curscroll > nextscroll) {
                                scroll_status = 3;
                            }
                        }else if(screen_scroll >= parent_bottom) {
                            scroll_status = 2;
                        } 
                        if(scroll_status == 0) {
                            $(sbID).css({
                                "position"  : "static",
                                "top"       : "auto",
                                "bottom"    : "auto"
                            });
                        }else if (scroll_status == 1) {
                            if(win.height() > $(sbID).outerHeight(true)) {
                                var ad_bar = $('#wpadminbar');
                                if (fixed_nav == 2) {
                                    if(ad_bar.length != 0) {
                                        var sb_height_fixed = 16 + ad_bar.height() + $('.main-nav').height() + 'px';
                                    }
                                    else {
                                        var sb_height_fixed = 16 + $('.main-nav').height() + 'px';
                                    }

                                }else {
                                    if(ad_bar.length != 0) {
                                        var sb_height_fixed = 16 + ad_bar.height() + 'px';
                                    }else {
                                        var sb_height_fixed = 16 + 'px';
                                    }
                                }
                                $(sbID).css({
                                    "position"  : "fixed",
                                    "top"       : sb_height_fixed,
                                    "bottom"    : "auto",
                                    "width"     : width
                                });
                            }else {
                                if (screen_scroll < bottom_compare) {
                                    topab = $(sbID).offset().top - parent_top;                            
                                    
                                    $(sbID).css({
                                        "position"  : "absolute",
                                        "top"       : topab,
                                        "bottom"    : "auto",
                                        "width"     : width
                                    });
                                }else {
                                    $(sbID).css({
                                        "position"  : "fixed",
                                        "top"       : "auto",
                                        "bottom"    : "16px",
                                        "width"     : width
                                    });
                                }
                            }
                        }else if (scroll_status == 3) {
                            if (win.scrollTop() > ($(sbID).offset().top)) {
                                topab = $(sbID).offset().top - parent_top;                            
                                
                                $(sbID).css({
                                    "position"  : "absolute",
                                    "top"       : topab,
                                    "bottom"    : "auto",
                                    "width"     : width
                                });
                            }else {
                                var ad_bar = $('#wpadminbar');
                                if (fixed_nav == 2) {
                                    if(ad_bar.length != 0) {
                                        var sb_height_fixed = 16 + ad_bar.height() + $('.main-nav').height() + 'px';
                                    }
                                    else {
                                        var sb_height_fixed = 16 + $('.main-nav').height() + 'px';
                                    }

                                }else {
                                    if(ad_bar.length != 0) {
                                        var sb_height_fixed = 16 + ad_bar.height() + 'px';
                                    }else {
                                        var sb_height_fixed = 16 + 'px';
                                    }
                                }
                                $(sbID).css({
                                    "position"  : "fixed",
                                    "top"       : sb_height_fixed,
                                    "bottom"    : "auto",
                                    "width"     : width
                                });
                            }
                        }else if(scroll_status == 2) {
                            if(win.height() > $(sbID).outerHeight(true)) {
                                var status2_inner = 0;
                                if(curscroll <= nextscroll) {
                                    status2_inner = 1;
                                }else if(curscroll > nextscroll) {
                                    status2_inner = 2;
                                }
                                if(((status2_inner == 1) && (bottom_compare < parent_bottom)) || ((status2_inner == 2) && (win.scrollTop() < $(sbID).offset().top))){
                                    var ad_bar = $('#wpadminbar');
                                    if (fixed_nav == 2) {
                                        if(ad_bar.length != 0) {
                                            var sb_height_fixed = 16 + ad_bar.height() + $('.main-nav').height() + 'px';
                                        }
                                        else {
                                            var sb_height_fixed = 16 + $('.main-nav').height() + 'px';
                                        }
    
                                    }else {
                                        if(ad_bar.length != 0) {
                                            var sb_height_fixed = 16 + ad_bar.height() + 'px';
                                        }else {
                                            var sb_height_fixed = 16 + 'px';
                                        }
                                    }
                                    $(sbID).css({
                                        "position"  : "fixed",
                                        "top"       : sb_height_fixed,
                                        "bottom"    : "auto",
                                        "width"     : width
                                    });
                                }else {
                                    $(sbID).css({
                                        "position"  : "absolute",
                                        "top"       : topab,
                                        "bottom"    : "auto",
                                        "width"     : width
                                    });
                                }
                            }else {
                                $(sbID).css({
                                    "position"  : "absolute",
                                    "top"       : topab,
                                    "bottom"    : "auto",
                                    "width"     : width
                                });
                            }
                        }      
                    }
                }   
                $(sbID).parent().css("height", $(sbID).height());   
            });
            curscroll = nextscroll;
        }
        $(".sidebar-wrap.stick").each(function(){
            $(this).wrap("<div class='birkita_sticksb-wrapper'></div>");
        });
        delay(function () {
            win.on("scroll", tick);
        }, 2000);
        win.resize(function(){
            $(".sidebar-wrap.stick").each(function(){
                var sbID = "#"+$(this).attr(("id"));
                if(window.innerWidth > 1023) {
                    if($(this).parent().hasClass('birkita_sticksb-wrapper')){
                        width = $('.birkita_sticksb-wrapper').width();
                        $(sbID).css({
                            "width"     : width
                        });
                    }
                }else {
                    $(sbID).css({
                        "position"  : "static",
                        "top"       : "auto",
                        "bottom"    : "auto"
                    });
                }  
            });
        });
    });  
})(jQuery);          