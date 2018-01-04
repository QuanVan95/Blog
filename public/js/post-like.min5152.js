(function($) {
	
	"use strict";
jQuery(document).ready(function(){jQuery('body').on('click','.acoda-post-like',function(event){event.preventDefault();var heart=jQuery(this);var post_id=heart.data("post_id");heart.html("<i id='icon-like' class='icon-like fa fa-heart'></i>&nbsp;<i id='icon-gear' class='icon-gear fa fa-cog'></i>");jQuery.ajax({type:"post",url:ajax_var.url,data:"action=acoda-post-like&nonce="+ajax_var.nonce+"&acoda_post_like=&post_id="+post_id,success:function(count){if(count.indexOf("already")!==-1){var lecount=count.replace("already","");if(lecount==="0"){lecount="Like"}heart.prop('title','Like');heart.removeClass("liked");heart.html("<i id='icon-unlike' class='icon-unlike fa fa-heart-o'></i>&nbsp;"+lecount)}else{heart.prop('title','Unlike');heart.addClass("liked");heart.html("<i id='icon-like' class='icon-like fa fa-heart'></i>&nbsp;"+count)}}})})});

})(jQuery);