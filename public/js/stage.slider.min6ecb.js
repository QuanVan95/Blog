(function($){var acodaStageAjaxLoadData=function(container,opts,offset){var type=$(container).attr("data-type"),source=$(container).attr("data-source"),query=$(container).attr("data-query"),ajax_url=$(container).attr("data-ajaxurl"),attributes=$(container).attr("data-attributes"),data_offset=offset,load_value=$(container+" .dynamic-frame").attr("data-load-value"),total=$(container+" .dynamic-frame").attr("data-total"),data="";$(container).attr("data-query","loading");$.ajax({url:ajax_url,type:"POST",data:{action:"acoda_ajaxdata",query:query,type:type,source:source,data_offset:data_offset,load_value:load_value,attributes:attributes,},success:function(data){if(data!=""&&data_offset<total){opts.addSlide(data);$(container).attr("data-query",query);}}});};var stageGallery=function(){$(".gallery-wrap.stage").each(function(index,value){var gallery="#"+$(this).attr("id"),nav=$(gallery).attr("data-stage-nav"),width=$(gallery).width(),ratio=$(gallery).attr("data-ratio"),effect=$(gallery).attr("data-stage-effect"),easing=$(gallery).attr("data-stage-easing"),height,ratio_w,ratio_h,aux,timeout_array="",zoom="";if(effect=="fadeZoom"){effect="fade";zoom="enable";}function calcHeight(gallery){var width=$(gallery).width(),ratio=$(gallery).attr("data-ratio"),height,ratio_w,ratio_h,aux;if(ratio!="custom"){aux=ratio.split(":");ratio_w=aux[0];ratio_h=aux[1];height=width/(ratio_w/ratio_h);$(gallery).find(".stage-slider").css("height",height);}}calcHeight(gallery);if($(gallery+" .timeout_array").val()){timeout_array=$(gallery+" .timeout_array").val();}$(window).resize(function(){calcHeight(gallery);if($(window).width()<1024){$(gallery).find(".slidernav-left,.slidernav-right").fadeTo(500,1);}});$(gallery+" iframe").each(function(index,value){var src=$(this).attr("src");$(this).attr("data-src",src);});$(gallery+" .control-panel").append('<ul class="nav"></ul>');$(gallery+" .stage-slider").cycle({fx:effect,easing:easing,timeoutFn:calculateTimeout,speed:750,before:onBefore,slideExpr:".panel",slideResize:0,pause:false,after:onAfter,pager:gallery+" .control-panel .nav",cleartype:true,cleartypeNoBg:true,next:gallery+" .nav-next",prev:gallery+" .nav-prev",pagerAnchorBuilder:function(idx,slide){return'<li><a href="#"></a></li>';}});$(gallery+" .slidernav a").click(function(){$(gallery+" .info-holder").removeClass("active",700,"easeOutBounce");});$(gallery).touchwipe({preventDefaultEvents:false,wipeLeft:function(){$(gallery+" .stage-slider").cycle("next");return false;},wipeRight:function(){$(gallery+" .stage-slider").cycle("prev");return false;}});function onBefore(currElement,nextElement,opts){$(this).find("img,.image-wrapper,.caption").css({"-webkit-animation":"none ",animation:"none"});$(gallery+" .panel").removeClass("current");$(gallery+" .info-holder").removeClass("active");$(this).addClass("current");}function onAfter(currElement,nextElement,opts,isForward){var timeouts=timeout_array.slice(0,-1).split(","),index=opts.currSlide,timeout=parseInt(timeouts[index])+"s",caption_timeout=parseInt(timeouts[index]*1000-2000),effect=$(gallery).attr("data-stage-effect");if($(this).find(".container").hasClass("static")){if($.support.transition===false){$(this).find(".info-holder").addClass("active",700,"easeOutSine").delay(caption_timeout).queue(function(next){$(this).find(".info-holder").removeClass("active",700,"easeOutBounce");next();});}else{$(this).find(".info-holder").addClass("active").delay(caption_timeout).queue(function(next){$(this).find(".info-holder").removeClass("active");next();});}}if(effect=="fadeZoom"){$(this).find("img,.image-wrapper").css({"-webkit-animation":"imagezoom ease-in "+timeout,"-webkit-animation-delay":"0.6s","-webkit-animation-fill-mode":"forwards",animation:"imagezoom ease-in "+timeout,"animation-delay":"0.6s","animation-fill-mode":"forwards"});}$(gallery+" iframe").attr("src","");var videoid=$(this).find(".jwplayer").attr("id"),data_src=$(this).find("iframe").attr("data-src");if(data_src){$(this).find("iframe").attr("src",data_src);}var slides_total=$(gallery+" .dynamic-frame").attr("data-total"),items=$(gallery).find(".stage-slider").children();if($(gallery).attr("data-load-method")=="auto_load"&&items.length<slides_total&&$(gallery).attr("data-query")!="loading"){acodaStageAjaxLoadData(gallery,opts,items.length);}}function calculateTimeout(currElement,nextElement,opts,isForward){var timeouts=timeout_array.slice(0,-1).split(","),index=opts.currSlide;return timeouts[index]*1000;}$(this).addClass("loaded");});};$(window).load(function(){stageGallery();});})(jQuery);