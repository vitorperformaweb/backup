$(function(){
    $('.pw-header .icones ul li').hover(function(){
        $('.pw-header .icones ul li').css('margin-right','15px');
        $('.icone',this).first().hide();
        $('.texto',this).show();
    }, function(){
        $('.pw-header .icones ul li').css('margin-right','');
        $('.icone',this).first().show();
        $('.texto',this).hide();
    })
})
$('#lnkPubliqueResenha').click(function(){
	$("html, body").animate({
        scrollTop: $('#formUserReview').offset().top 
    }, 1000);
});

$('body.home .container .banner-grande-home .marcas .itens').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:false,
            loop:false
        }
    }
})


$(function(){

	setTimeout(function(){
		if($('body.home.mobile').size() > 0){
			$('.slideshow-home').remove();
            $('.slideshow-home-mobile').owlCarousel({
                loop:true,
                margin:0,
                responsiveClass:true,
            })
		}	
	},2000)
	
})