$(function() {

    function headingResize(){
        $('.heading').each(function(u, j) {
        
            total = $('ul', j).innerWidth();
            master = $('li', j).eq(1).innerWidth();

            $(j).height($('li', j).eq(1).height());
            $('li', j).each(function(a, b) {
                if (a !== 1) {
                    $(b).width((total - master) / 2 - 10);
                    $(b).height($('li', j).eq(1).height());
                }
            });
        });
    }

    headingResize();

    $(window).resize(function(event) {
        headingResize();
    });
    

    if (document.URL.indexOf("love-walks") > -1) {
        setTimeout(function() {
            $('.homeContainer.onePlusWater').height($('.loveWalkstable').height() + 40)
        }, 800)
    }

    $(".qtyspinner").TouchSpin({
        min: 1
    });



    $('.menuMob li').click(function() {
        $('.submenu', this).slideToggle();
        if ($('i', this).hasClass('fa-angle-down')) {
            $('i', this).addClass('fa-angle-up').removeClass('fa-angle-down');
        } else {
            $('i', this).addClass('fa-angle-down').removeClass('fa-angle-up');
        }
    })

    $('.product-thumb .image a').hover(function() {
        $('.um', this).hide();
        $('.dois', this).show();
    }, function() {
        $('.um', this).show();
        $('.dois', this).hide();
    })

    $('input.iCheck, .iRadios input[type=radio]').iCheck({ radioClass: 'iradio_square-grey' });
})


$('.radio-input span').on('click', function() {
    $(this).parents('.radio-input').find('input').click();
})

function selectRadio() {
    var $ = jQuery;
    $('.checkout input[type=radio]').each(function(a, b) {
        if ($(b).is(':checked')) {
            $(b).parents('.radio-input').find('label').addClass('checked')
        } else {
            $(b).parents('.radio-input').find('label').removeClass('checked')
        }
    })

    $('.checkout input[type=radio]').on('change', function() {
        $('.checkout .panel label').removeClass('checked')
        $('.checkout input[type=radio]:checked').parents('.radio-input').find('label').addClass('checked')
    })
}
