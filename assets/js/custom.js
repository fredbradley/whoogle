var $ = jQuery.noConflict();


function goToByScroll(id){
	$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}


function image_preload(selector, parameters) {
	var params = {
		delay: 250,
		transition: 400,
		easing: 'linear'
	};
	$.extend(params, parameters);
		
	$(selector).each(function() {
		var image = $(this);
		image.css({visibility:'hidden', opacity: 0, display:'block'});
		image.wrap('<span class="preloader" />');
		image.one("load", function(evt) {
			$(this).delay(params.delay).css({visibility:'visible'}).animate({opacity: 1}, params.transition, params.easing, function() {
				$(this).unwrap('<span class="preloader" />');
			});
		}).each(function() {
			if(this.complete) $(this).trigger("load");
		});
	});
}


$(document).ready(function() {
    
        
        $('.testimonials').cycle({ 
            fx: 'fade',
            delay: -1000,
	        cleartypeNoBg: true
        });
        
        
        $('#offerslider-items').cycle({ 
        	fx: 'scrollUp,scrollDown',
			timeout: 3000,
			easing: 'easeInOutBack',
	        prev: '#slider-prev',
	        next: '#slider-next',
	        pause: 1,
	        cleartypeNoBg: true
    	});
        
        
        image_preload('#offerslider-items img,.gallery img');
        
        
        $('#offerslider-items').hover(function() { 
    		$(this).cycle('pause');
		}, function() { 
    		$(this).cycle('resume'); 
		});
        
        
        $('#gallery ul').jcarousel({
			scroll: 3,
            wrap: 'circular'
		});
        
        
        $('#subscription').validate({
    		submitHandler: function(form) {
    			$(form).ajaxSubmit({
    				target: '#subscription-result',
                    success: function() {
                        $('#subscription').fadeOut('500');
                        $('#subscription-result').fadeIn('slow');
                    },
                    error: function() {
                        $('#subscription-result').fadeIn('slow');
                    }
    			});
    		}
    	});
        
	
		$('.fade').hover(function(){
			$(this).animate({opacity: 0.7}, 300);
		}, function () {
			$(this).animate({opacity: 1}, 300);
		});
        
		
		$('#gallery ul li a').hover(function(){
			$(this).children('span.hoverlay').filter(':not(:animated)').animate({opacity: 'show'}, 400);
            $(this).children('span.hoverzoom').filter(':not(:animated)').animate({opacity: 'show'});
		}, function () {
		    $(this).children('span.hoverzoom').animate({opacity: 'hide'});
			$(this).children('span.hoverlay').animate({opacity: 'hide'}, 400);
		});
		
		
		$('.ntip').tipsy({gravity: 's', fade:true});
		$('.stip').tipsy({gravity: 'n', fade:true});
		$('.etip').tipsy({gravity: 'w', fade:true});
		$('.wtip').tipsy({gravity: 'e', fade:true});
		
			
		$("a[rel^='prettyPhoto']").prettyPhoto({
			animation_speed: 'normal',
			theme: 'dark_rounded'
		});
        
        
        $(".togglec").hide();
        
    	$(".togglet").click(function(){
    	   $(this).toggleClass("toggleta").next(".togglec").slideToggle("normal");
    	   return true;
    	});        
        
			
});
// EXAMPLE 2
var countdownTimer, countdownCurrent = 30000;
$(document).ready(function() {
	countdownTimer = $.timer(function() {
		var min = parseInt(countdownCurrent/6000);
		var sec = parseInt(countdownCurrent/100)-(min*60);
		var micro = pad(countdownCurrent-(sec*100)-(min*6000),2);
		var output = "00"; if(min > 0) {output = pad(min,2);}
		$('.countdowntime').html(output+":"+pad(sec,2)+":"+micro);
		if(countdownCurrent == 0) {
			countdownTimer.stop();
			alert('Example 2: Countdown timer complete!');
			countdownReset();
		} else {
			countdownCurrent-=7;
			if(countdownCurrent < 0) {countdownCurrent=0;}
		}
	}, 70, true);
	$('#countdown').bind('keyup', function(e) {if(e.keyCode == 13) {countdownReset();}});
});
function countdownReset() {
	var newCount = parseInt($('input[name=startTime]').val())*100;
	if(newCount > 0) {countdownCurrent = newCount;}
	countdownTimer.stop().once();
}
