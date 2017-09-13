( function( $ ) {
	$('.topoMobile .menu-hamburger').click(function(){
		abrirMenu();
	})
	$('.menuMobile .fecharMenu').click(function(){
		fecharMenu();
	})
	function abrirMenu(){
		$('html').addClass('no-scroll');
		$('.menuMobile').fadeIn();
		$('.menuMobile .menu-menu-1-container').animate({
			'margin-left': '0',
		})
	}

	function fecharMenu(){
		$('html').removeClass('no-scroll');
		$('.menuMobile .menu-menu-1-container').animate({
			'margin-left': '-100%',
		});
		$('.menuMobile').fadeOut();
	}
	$('li.abrirOrcamento').click(function(){
		$('#modalContato').modal();
	});
	$('.page-template-page-venda .card .acao .abrirContato').click(function(){
		var assunto = $(this).parents('.card').find('h2').text();
		$('#modalContato .your-subject input').val('Orçamento: '+assunto);
		$('#modalContato').modal();
	});

	$('.page-template-page-locacao .abrirContato').click(function(){
		var assunto = $(this).parents('.imagemBackground').find('h2').text();
		$('#modalContato .your-subject input').val('Orçamento: '+assunto);
		$('#modalContato').modal();
	});

	$('#modalContato').on('hidden.bs.modal', function () {
	  $('#modalContato .wpcf7-form-control-wrap .wpcf7-text').val('');
	  $('#modalContato .wpcf7-form-control-wrap .wpcf7-textarea').val('');
	})
	$(window).scroll(function() {
	    if ($(this).scrollTop() > 23) { // this refers to window
	        $('header').addClass('fixo');
	    }else{
	    	$('header').removeClass('fixo');
	    }
	});


} )( jQuery );