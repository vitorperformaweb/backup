jQuery(document).ready(function($){
	$('.gs_lp_like .gs_lp_like_icon').live('click', function(){
		$this = $(this);
		$.ajax({
	    	type : "post",
	        dataType : "json",
	        url : gs_like_post.ajaxurl,
	        data : { 
	        	action: "gs_lp_like_post", 
	        	dislike_num : $this.closest('.gs_lp_like_container').find('.gs_lp_dislike').attr('data-dislike_num'),
	        	like_num : $this.parent().attr('data-like_num'), 
	        	user_id : gs_like_post.user_id, 
	        	post_id : gs_like_post.post_id, 
	        	ip : gs_like_post.ip
	        },
	        success: function(response) {
	        	console.log(response);
	        	$this.parent().attr('data-like_num', response['like_num']);
	        	$this.parent().find('p').text(response['like_num']);
	        	if(response['dislike_num'] != $this.closest('.gs_lp_like_container').find('.gs_lp_dislike').attr('data-dislike_num')) {
	        		if($this.closest('.gs_lp_like_container').find('.gs_lp_dislike').find('.gs_lp_like_icon').hasClass('activeUser')) {
		        		$this.closest('.gs_lp_like_container').find('.gs_lp_dislike').find('.gs_lp_like_icon').removeClass('activeUser');
		        	}else{
		        		$this.closest('.gs_lp_like_container').find('.gs_lp_dislike').find('.gs_lp_like_icon').addClass('activeUser');
		        	}
	        	}
	        	$this.closest('.gs_lp_like_container').find('.gs_lp_dislike').attr('data-dislike_num', response['dislike_num']);
	        	$this.closest('.gs_lp_like_container').find('.gs_lp_dislike').find('p').text(response['dislike_num']);
	        	if($this.hasClass('activeUser')) {
	        		$this.removeClass('activeUser');
	        	}else{
	        		$this.addClass('activeUser');
	        	}
	        }
	    });
	});
	
	$('.gs_lp_dislike .gs_lp_like_icon').live('click', function(){
		$this = $(this);
		$.ajax({
	    	type : "post",
	        dataType : "json",
	        url : gs_like_post.ajaxurl,
	        data : { 
	        	action: "gs_lp_dislike_post", 
	        	like_num : $this.closest('.gs_lp_like_container').find('.gs_lp_like').attr('data-like_num'),
	        	dislike_num : $this.parent().attr('data-dislike_num'), 
	        	user_id : gs_like_post.user_id, 
	        	post_id : gs_like_post.post_id, 
	        	ip : gs_like_post.ip
	        },
	        success: function(response) {
	        	$this.parent().attr('data-dislike_num', response['dislike_num']);
	        	$this.parent().find('p').text(response['dislike_num']);
	        	if(response['like_num'] != $this.closest('.gs_lp_like_container').find('.gs_lp_like').attr('data-like_num')) {
	        		if($this.closest('.gs_lp_like_container').find('.gs_lp_like').find('.gs_lp_like_icon').hasClass('activeUser')) {
		        		$this.closest('.gs_lp_like_container').find('.gs_lp_like').find('.gs_lp_like_icon').removeClass('activeUser');
		        	}else{
		        		$this.closest('.gs_lp_like_container').find('.gs_lp_like').find('.gs_lp_like_icon').addClass('activeUser');
		        	}
	        	}
	        	$this.closest('.gs_lp_like_container').find('.gs_lp_like').attr('data-like_num', response['like_num']);
	        	$this.closest('.gs_lp_like_container').find('.gs_lp_like').find('p').text(response['like_num']);
	        	if($this.hasClass('activeUser')) {
	        		$this.removeClass('activeUser');
	        	}else{
	        		$this.addClass('activeUser');
	        	}
	        }
	    });
	});
});
