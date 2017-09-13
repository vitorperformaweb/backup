(function($) {
  "use strict";
    $=jQuery;
    $(document).ready(function(){
        var widget_id, offset;
        
        $('.post-grid-ajax').on('click','.ajax-load-btn.active',function(){
            var $this = $(this);
            if($this.hasClass('nomore')){
                $this.text(ajax_btn_str['nomore']);
                return;
            }
            var module_id = $this.parents('.module-grid-content-wrap').attr('id');
            var entries = birkita_ajax[module_id]['entries']; 
            var args =  birkita_ajax[module_id]['args'];
                    
            $('.ajax-load-btn').removeClass('active');
            $this.css("display", "none");
            $this.siblings('.loading-animation').css("display", "block");
             
            var $container = $this.parent('.post-grid-ajax').siblings('.post-grid-content-container');     
            var offset = parseInt($container.find('.post-wrapper').length)+ parseInt(birkita_ajax[module_id]['offset']);

            var data = {
    				action			: 'post_grid_load',
                    post_offset     : offset,
                    entries         : entries,
                    args            : args,
    			};
    		$.post( ajaxurl, data, function( respond ){
                var el = $(respond);
                var respond_length = el.find('.post-details').length;
                $container.append(el);
                $container.imagesLoaded(function(){
                    setTimeout(function() {
                        $($container).find('.thumb').removeClass('hide-thumb');
                        $('.ajax-load-btn').addClass('active');
                        $this.find('.ajax-load-btn').text(ajax_btn_str['loadmore']);
                        if(respond_length < entries){
                            $this.text(ajax_btn_str['nomore']);
                            $this.addClass('no-more');
                            $this.removeClass('active');
                            $this.append("<span></span>");
                        }
                        $this.css("display", "block");
                        $this.siblings('.loading-animation').css("display", "none");
                    }, 500);
                });
    
            });
        });
    });
})(jQuery);