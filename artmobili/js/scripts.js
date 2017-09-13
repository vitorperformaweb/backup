(function ($, root, undefined) {
	
	$(function () {
		$('.dica a').click(function(){
			$('body').addClass('no-scroll');
			$('.backdrop').fadeIn();
			var titulo = $(this).parents('.dica').find('h2').text();
			var conteudo = $(this).parents('.dica').find('.textoCompleto').html();
			$('#dicaCompleta .tituloDica').html(titulo);
			$('#dicaCompleta .textoDica').html(conteudo);
			$('#dicaCompleta').fadeIn();
			$('#dicaCompleta').animate({
				'top':'50px'
			});
			return false;	
		})
		$('.backdrop, .conteudoDica .fechar').click(function(){
			$('body').removeClass('no-scroll');
			$('#dicaCompleta').animate({
				'top':'-100px'
			});
			$('.backdrop').fadeOut();
			$('#dicaCompleta').hide();
			$('#dicaCompleta .tituloDica').html(' ');
			$('#dicaCompleta .textoDica').html(' ');
		})
		$('a[href*="#"]:not([href="#"])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html, body').animate({
		          scrollTop: target.offset().top
		        }, 1000);
		        return false;
		      }
		    }
	  	});
	  	$('#depoimentos .depoimentos').owlCarousel({
		    loop:true,
		    margin:50,
		    nav: false,
		    autoplay: 4000,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1,
		            nav:false
		        },
		        600:{
		            items:1,
		            nav:false
		        },
		        1000:{
		            items:2,
		            nav:false,
		            loop:true
		        },
		        1400:{
		            items:2,
		            nav:false,
		            loop:true
		        }
		    }
		})
		$('#carrossel .listaItem').owlCarousel({
		    loop:true,
		    margin:0,
		    nav: false,
		    autoplay: 4000,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1,
		            nav:false
		        },
		        600:{
		            items:1,
		            nav:false
		        },
		        1000:{
		            items:1,
		            nav:false,
		            loop:true
		        },
		        1400:{
		            items:1,
		            nav:false,
		            loop:true
		        }
		    }
		})
		$('#carrossel .item h2').each(function(a,b){
			var larguraBox = $(b).width();
			var larguraBox = parseFloat(larguraBox) / 2;
			var larguraBox = '-'+larguraBox+'px';

			var alturaBox = $(b).height();
			var alturaBox = parseFloat(alturaBox) / 2;
			var alturaBox = '-'+alturaBox+'px';
			$(b).css('margin-left',larguraBox);
			$(b).css('margin-top',alturaBox);
		})
		$(window).scroll(function() {
			if($(window).scrollTop() > 160){
				$('.menuFixo').slideDown();
			}else{
				$('.menuFixo').slideUp('fast');
			}
		});
		$('.verMapa').click(function(){
			if($('.mapa').is(':visible')){
				$(this).html('<i class="fa fa-map-marker" aria-hidden="true"></i> Ver o mapa');
				$('.mapa').slideUp();
			}else{
				$(this).html('<i class="fa fa-times" aria-hidden="true"></i> Fechar o mapa');
				$('.mapa').slideDown();
				$('html, body').animate({
			        scrollTop: $("#mapa").offset().top
			    }, 1000);
			}
		});
		$('.wpcf7-file').jfilestyle({
			buttonText : 'Envie seu projeto',
			placeholder: 'Nenhum arquivo selecionado',
			buttonBefore: true
		});
		jQuery('.jfilestyle-buttonbefore input').css('width','388px');

		$('#ambientes .galeria .menu a').click(function(){
			$('#ambientes .galeria .menu a').removeClass('ativo');
			$(this).addClass('ativo');
			categoria = $(this).attr('href').replace('#','');
			$('.listaImagens div').each(function(a,b){
				$(b).hide();
				if($(b).attr('data-galeria') == categoria){
					$(b).fadeIn();
				} else if(categoria == 'todos'){
					$(b).fadeIn();
				}
			})
			return false;
		})
		$('#ambientes .galeria .listaImagens .imagem').click(function(){
			var imagens = $('.lista-de-imagens',this).html();
			$('.back').fadeIn();
			$('#galeriaModal').fadeIn();
			$('#galeriaModal').animate({
				'top':'50px'
			});
			$('#galeriaModal .conteudoGaleria .imagens').html(imagens);
			if($('#galeriaModal .conteudoGaleria .imagens img').size() > 1){
				$('#galeriaModal .conteudoGaleria .imagens').show();
				setTimeout(function(){
					var $owl = jQuery('#galeriaModal .conteudoGaleria .imagens');
					$owl.trigger('destroy.owl.carousel');
					$owl.html($owl.find('.owl-stage-outer').html()).removeClass('owl-loaded');
					$owl.owlCarousel({
					   	loop:true,
					    margin:0,
					    nav:true,
					    dots: false,
					    autoHeight: true,
					    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
					    responsive:{
					        0:{
					            items:1
					        },
					        600:{
					            items:1
					        },
					        1000:{
					            items:1
					        }
					    }
					});
					
				},100);
			}else{
				$('#galeriaModal .conteudoGaleria .imagens').show();
			}
			
		});
		$('.back, #galeriaModal .fechar').click(function(){
			$('#galeriaModal').animate({
				'top':'-100px'
			});
			$('.back').fadeOut();
			$('#galeriaModal').hide();
			$('#galeriaModal .conteudoGaleria .imagens').html(' ');
			$('#galeriaModal .conteudoGaleria .imagens').hide();
		});
		$('.listaDeProjetos .item').click(function(){
			var urlItem = $(this).find('a').attr('href');
			$('.backFade').fadeIn();
			$('#projetosModal').fadeIn();
			$('#projetosModal').animate({
				'top':'50px'
			});
			$.ajax({
			   url:urlItem,
			   type:'GET',
			   success: function(data){
			   		var conteudo = $(data).filter('.projeto').html();
			    	$('#projetosModal .conteudoProjetos div').append(conteudo);
			    	if($('#projetosModal .listaImagemProjeto img').size() > 1){
						setTimeout(function(){
							var $owl = jQuery('#projetosModal .listaImagemProjeto');
							$owl.trigger('destroy.owl.carousel');
							$owl.html($owl.find('.owl-stage-outer').html()).removeClass('owl-loaded');
							$owl.owlCarousel({
							   	loop:true,
							    margin:0,
							    nav:true,
							    dots: false,
							    autoHeight: true,
							    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
							    responsive:{
							        0:{
							            items:1
							        },
							        600:{
							            items:1
							        },
							        1000:{
							            items:1
							        }
							    }
							});
							
						},500);
					}
			   }
			});
			
			return false;
		});

		$('.backFade, #projetosModal .fechar').click(function(){
			$('#projetosModal').animate({
				'top':'-100px'
			});
			$('.backFade').fadeOut();
			$('#projetosModal').hide();
			$('#projetosModal .conteudoProjetos div').html(' ');
		});
	});
	
})(jQuery, this);
