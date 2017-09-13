(function($){"use strict";

  /**
   * Copyright 2012, Digital Fusion
   * Licensed under the MIT license.
   * http://teamdf.com/jquery-plugins/license/
   *
   * @author Sam Sehnert
   * @desc A small plugin that checks whether elements are within
   *     the user visible viewport of a web browser.
   *     only accounts for vertical position, not horizontal.
   */

  $.fn.visible = function(partial) { 
    
      var $t            = $(this),
          $w            = $(window),
          viewTop       = $w.scrollTop(),
          viewBottom    = viewTop + $w.height(),
          _top          = $t.offset().top,
          _bottom       = _top + $t.height(),
          compareTop    = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;
    
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };
    
})(jQuery);

jQuery.noConflict();
jQuery(document).ready(function($) {
    
    var birkitaWindow = $(window),
    birkitaRatingBars = $('.birkita_overlay').find('.birkita_zero-trigger');
    $('.page-wrap').imagesLoaded(function(){
        setTimeout(function() {
            var birkita_thumbnail = $('.page-wrap').find('.thumb');
            $.each(birkita_thumbnail, function(i, value) {
                var birkita_Value = $(value);
                if (( birkita_Value.visible(true) )&& ( birkita_Value.hasClass('hide-thumb'))) {
                    birkita_Value.removeClass('hide-thumb');
                } 
            });
        },800);
    });
    setTimeout(function() {
        birkitaWindow.scroll(function(event) {
            var birkita_thumbnail = $('.page-wrap').find('.thumb');
            $.each(birkita_thumbnail, function(i, value) {
                var birkita_Value = $(value);
                if (( birkita_Value.visible(true) )&& ( birkita_Value.hasClass('hide-thumb'))) {
                    birkita_Value.removeClass('hide-thumb');
                } 
            });
        });
    },2000);  
});