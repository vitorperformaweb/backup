jQuery(document).ready(function($){
    $('#birkita_final_score').attr('readonly', true);
    $('#birkita_review .inside .rwmb-meta-box > div:gt(0)').wrapAll('<div class="birkita_enabled-review">');
    $('.birkita_enabled-review > div:gt(0):even:lt(6)').each(function() {
        $(this).prev().addBack().wrapAll($('<div/>',{'class': 'birkita_criteria'}));
    });
    var birkitaReviewCheckbox = $('#birkita_review_checkbox'),
    birkitaReviewBox = $('.birkita_enabled-review');

    if ( birkitaReviewCheckbox.is(":checked") ) {
            birkitaReviewBox.show();
        }
        
    birkitaReviewCheckbox.click(function(){
        birkitaReviewBox.slideToggle('slow');
    });
    function birkita_AvrScore() { 
        var i = 0;
        var birkita_cs1=0, birkita_cs2=0, birkita_cs3=0, birkita_cs4=0, birkita_cs5=0, birkita_cs6=0;
        
        var birkita_ct1 = $('input[name=birkita_ct1]').val();
        var birkita_ct2 = $('input[name=birkita_ct2]').val();
        var birkita_ct3 = $('input[name=birkita_ct3]').val();
        var birkita_ct4 = $('input[name=birkita_ct4]').val();
        var birkita_ct5 = $('input[name=birkita_ct5]').val();
        var birkita_ct6 = $('input[name=birkita_ct6]').val();          
        if (birkita_ct1) { i+=1; birkita_cs1 = parseFloat($('input[name=birkita_cs1]').val()); } else { birkita_ct1 = null; }
        if (birkita_ct2) { i+=1; birkita_cs2 = parseFloat($('input[name=birkita_cs2]').val()); } else { birkita_ct2 = null; }
        if (birkita_ct3) { i+=1; birkita_cs3 = parseFloat($('input[name=birkita_cs3]').val()); } else { birkita_ct3 = null; }
        if (birkita_ct4) { i+=1; birkita_cs4 = parseFloat($('input[name=birkita_cs4]').val()); } else { birkita_ct4 = null; }
        if (birkita_ct5) { i+=1; birkita_cs5 = parseFloat($('input[name=birkita_cs5]').val()); } else { birkita_ct5 = null; }
        if (birkita_ct6) { i+=1; birkita_cs6 = parseFloat($('input[name=birkita_cs6]').val()); } else { birkita_ct6 = null; }
        var birkita_Total = (birkita_cs1 + birkita_cs2 + birkita_cs3 + birkita_cs4 + birkita_cs5 + birkita_cs6);
        var birkita_FinalScore = Math.round((birkita_Total / i)*10)/10;
        
        $("#birkita_final_score").val(birkita_FinalScore);
        
        if ( isNaN(birkita_FinalScore) ) { $("#birkita_final_score").val(''); }
    }
    $('.rwmb-input').on('change', birkita_AvrScore);
    $('#birkita_cs1, #birkita_cs2, #birkita_cs3, #birkita_cs4, #birkita_cs5, #birkita_cs6, #birkita_author_score').on('slidechange', birkita_AvrScore);
});