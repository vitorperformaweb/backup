( function( $ ) {
	console.log('teste');
	var SPMaskBehavior = function (val) {
  return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
},
spOptions = {
  onKeyPress: function(val, e, field, options) {
      field.mask(SPMaskBehavior.apply({}, arguments), options);
    }
};

$('.wpcf7-validates-as-tel').mask(SPMaskBehavior, spOptions);
	$('input.data').mask('00/00/0000');
  $('input.horario').mask('00:00');
	$('.abrir-menu').click(function(){
		$('.menu-adicional').fadeIn();
		$('.menu-adicional .menu-segundario').animate({
			'margin-right': '0'
		},500)
		$('body').addClass('no-scroll');
	})

	$('.menu-adicional .menu-segundario .fechar').click(function(){
		$('.menu-adicional .menu-segundario').animate({
			'margin-right': '-100%'
		},500)
		$('body').removeClass('no-scroll');
		$('.menu-adicional').fadeOut();
	})

	$('.slideshow').owlCarousel({
	    loop:true,
	    margin:00,
	    responsiveClass:true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:1,
	            nav:true
	        },
	        1000:{
	            items:1,
	            nav:true,
	            loop:true
	        }
	    }
	})
	$('.lista-fotos').owlCarousel({
	    loop:false,
	    margin:00,
	    responsiveClass:true,
	    nav:true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:3,
	            nav:true
	        },
	        1000:{
	            items:5,
	            nav:true,
	        }
	    }
	})
	$('.lista-videos').owlCarousel({
		margin: 15,
        responsiveClass:true,
        nav:true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:1,
	            nav:true
	        },
	        1000:{
	            items:2,
	            nav:true,
	            loop:true
	        }
	    }
    })
    $('.lista-radio').owlCarousel({
		margin: 15,
        responsiveClass:true,
        nav:true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:1,
	            nav:true
	        },
	        1000:{
	            items:2,
	            nav:true,
	            loop:true
	        }
	    }
    })
    $('.lista-videos-interno').owlCarousel({
		margin: 15,
        responsiveClass:true,
        nav:true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:2,
	            nav:true
	        },
	        1000:{
	            items:4,
	            nav:true
	        }
	    }
    })
    $('.lista-de-ambiente').owlCarousel({
		margin: 15,
        responsiveClass:true,
        nav:true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:2,
	            nav:true
	        },
	        1000:{
	            items:4,
	            nav:true,
	            loop:true
	        }
	    }
    })
    $('.lista-radio-interno').owlCarousel({
		margin: 15,
        responsiveClass:true,
        nav:true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:2,
	            nav:true
	        },
	        1000:{
	            items:4,
	            nav:true,
	            loop:true
	        }
	    }
    })
    $('.lista-de-ambiente .item-ambiente').click(function(){
    	url = $(this).attr('data-ambiente');
    	$('#ambiente').html('<iframe src="'+url+'"frameborder="0" allowfullscreen></iframe>');
    	$("html, body").animate({
	        scrollTop: $('#post-176').offset().top 
	    }, 500);
    })
    $('.sml_nameinput, .sml_emailinput ').attr('required',true);
} )( jQuery );