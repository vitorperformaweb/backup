$(function() {
    $('.heading').each(function(u, j) {
    	$('.heading li').each(function(a, b) {
	        w = $(b).parent().width();
	        c = $(b).parent().find('li:eq(1) h2').width()

	        if (a !== 1) {
	            $(b).width(((w - c) / 2) - 40);
	        }
    	})
    })
		$(".qtyspinner").TouchSpin({
            min: 1
        });
})
